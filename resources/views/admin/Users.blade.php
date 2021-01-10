@extends('layouts.admin',['nav' => 'Users'])



@section('content')




    <table class="table table-bordered table-striped" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Register Date</th>
                <th>Admin</th>
               
            </tr>
        </thead>
    </table>


<div class="modal fade" id="adminRoles" tabindex="-1" aria-labelledby="adminRolesLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminRolesLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		  
		  <h6>Global Admin</h6>
        @foreach(config('roles') as $role)
		  
		  @if($role['section'] == 'Global')
		  <input type="checkbox" id="AdminRole_{{$role['ID']}}" data-id="{{$role['ID']}}" data-user="" class="adminCheckbox">
    {{ __('adminRoles.'.$role['name']) }}
		  <br>
		  
		  
		  @endif
		  
@endforeach
		  <h6 class="mt-1">Blog</h6>
        @foreach(config('roles') as $role)
		  
		  @if($role['section'] == 'Posts')
		  <input type="checkbox" id="AdminRole_{{$role['ID']}}" data-id="{{$role['ID']}}" data-user="" class="adminCheckbox">
    {{ __('adminRoles.'.$role['name']) }}
		  
		  <br>
		  @endif
		  
@endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 

<script>

	$('document').ready(function(){
		
	
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/datatablesdata',
		class: 'table',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'admin', name: 'admin', render: function ( data, type, row ) {
				if(data == 1){
					 return '<div  class="d-flex" ><i class="fas fa-user-crown text-warning me-auto"></i>  <i class="fal fa-pencil ms-auto" data-id="'+row.id+'" onClick="editAdmin('+row.id+')"></i></div>';   
				}
                     return '<div  class="d-flex" ><i class="fal fa-user me-auto"></i>  <i class="fal fa-pencil ms-auto" data-id="'+row.id+'" onClick="editAdmin('+row.id+')"></i></div>';                
			
			
			}, }
           
        ]
    });
		
    });
	
	
	$('.adminCheckbox').on('change',function(){
		var checked = $(this).prop('checked');
		var id = $(this).attr('data-user');
		var role = $(this).attr('data-id');
		console.log(checked)
		
		if(checked && role == 1){
			$('.adminCheckbox').prop('checked',true);
			$('.adminCheckbox').not('#AdminRole_1').attr('disabled',true);
			$('.adminCheckbox').not('#AdminRole_1').change()
		}
		
		if(!checked && role == 1){
			$('.adminCheckbox').prop('checked',false);
			$('.adminCheckbox').not('#AdminRole_1').attr('disabled',false);
						$('.adminCheckbox').not('#AdminRole_1').change()
		}
		
		if(checked){
			$.post('CreateAdmin',{id:id,role:role})
		}else{
			$.post('removeAdmin',{id:id,role:role})
		}
		
		
		if($('.adminCheckbox:checked').length > 0){
			console.log('yup')
		}else{
			$.post('killAdmin',{id:id})
		}
		
	})

	
function createAdmin(id, role){
	console.log(id);
	bootbox.confirm({
		closeButton: false,
		message: "Are you sure?",
		callback: function(result){ 
				if(result == true){
		$.post('CreateAdmin',{id:id}).done(function(){
																 location.reload();
																 })}
}}
	
	);
}
	
function removeAdmin(id){
	console.log(id);
	bootbox.confirm({
		closeButton: false,
		message: "Are you sure?",
		callback: function(result){ 
				if(result == true){
		$.post('removeAdmin',{id:id}).done(function(){
																 location.reload();
																 })}
}}
	
	);
}
	
	
function editAdmin(id){
	
	var dialog = bootbox.dialog({
   message: '<p class="text-center mb-0"><i class="fa fa-spin fa-cog"></i> {{ __('messages.pleaseWait')}}</p>',
   closeButton: false
});

	$('.adminCheckbox').prop('checked',false);
	$('.adminCheckbox').attr('disabled',false);
	
	$('[data-user]').attr('data-user',id);
   
	$.post('getRoles',{ID:id}).done(function(result){
		console.log(result)
		
		$.each(result,function(key,value){
			$('#AdminRole_'+value).prop('checked',true)
			
			if(value == 1){
				$('.adminCheckbox').prop('checked',true);
			$('.adminCheckbox').not('#AdminRole_1').attr('disabled',true);
			}
		})
		
	});
	
	
 var myModal =  new bootstrap.Modal(document.getElementById('adminRoles'))

 
 setTimeout(function(){ 
 
 myModal.show()
	
	
// do something in the background
dialog.modal('hide');
	
	  }, 1000);
	 
}
	
	
	
	
</script>
@endsection