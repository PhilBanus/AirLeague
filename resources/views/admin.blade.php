@extends('layouts.admin',['nav' => 'Home'])

@section('content')
<div class="row" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 719px;" id="dash">

	<div class="col-12 col-sm-6 col-xl-4 mb-4">
	<div class="card bg-light border-light shadow-sm ">
		<div class="card-body">
			<div class="row d-block d-xl-flex align-items-center">
				<div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
					<div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0">
						<span class="fas fa-user"></span>
					</div>
					<div class="d-sm-none">
						<h2 class="h5">{{__('dash.Users')}}</h2>
						<h3 class="mb-1">{{\App\Models\User::all()->count()}}</h3>
					</div>
				</div>
				<div class="col-12 col-xl-7 px-xl-0">
					<div class="d-none d-sm-block">
						<h2 class="h5">{{__('dash.Users')}}</h2>
						<h3 class="mb-1">{{\App\Models\User::all()->count()}}</h3>
					</div>
					
					<div class="small mt-2">
						<span class="fas fa-angle-up text-success"></span> 
						<span class="text-success font-weight-bold">{{
							\App\Models\User::where('Created_At','>',Carbon\Carbon::now()->firstOfMonth())->count()
							}} {{__('dash.Users')}}</span> {{__('dash.since_last_month')}}
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="col-12 col-sm-6 col-xl-4 mb-4">
	<div class="card bg-light border-light shadow-sm">
		<div class="card-body">
			<div class="row d-block d-xl-flex align-items-center">
				<div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
					<div class="icon icon-shape icon-md icon-shape-secondary rounded mr-4 mr-sm-0">
						<span class="fas fa-user-crown"></span>
					</div>
					<div class="d-sm-none">
						<h2 class="h5">{{__('dash.AdminUsers')}}</h2>
						<h3 class="mb-1">{{\App\Models\User::where('admin',1)->count()}}</h3>
					</div>
				</div>
				<div class="col-12 col-xl-7 px-xl-0">
					<div class="d-none d-sm-block">
						<h2 class="h5">{{__('dash.AdminUsers')}}</h2>
						<h3 class="mb-1">{{\App\Models\User::where('admin',1)->count()}}</h3>
					</div>
					
					<div class="small mt-2">
						<span class="fas fa-angle-up text-success"></span> 
						<span class="text-success font-weight-bold">{{
							\App\Models\User::where('admin',1)->where('Created_At','>',Carbon\Carbon::now()->firstOfMonth())->count()
							}} {{__('dash.AdminUsers')}}</span> {{__('dash.since_last_month')}}
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="col-12 col-xl-8 mb-4">
	<div class="card border-light shadow-sm">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <h2 class="h5">{{__('dash.Page_Visits')}}</h2>
                                        </div>
                                        <div class="col text-right">
                                            <a href="#" class="btn btn-sm btn-secondary">{{__('dash.See_All')}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">{{__('dash.Page_Link')}}</th>
                                            <th scope="col">{{__('dash.Page_Views')}}</th>
                                            <th scope="col">{{__('dash.Since_Last_Month')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
											<?php
											
											$endOfLastMonth = Carbon\Carbon::now()->subMonth()->endOfMonth();
											$startOfLastMonth = Carbon\Carbon::now()->subMonth()->startOfMonth();
						
											
											
											?>
												
											
											@foreach( DB::table('activity_log')->where('properties','like','%Page_Visit%')->where('description','not like','%admins%')->select('description',db::raw('count(*) as count'))->groupby('description')->orderby(db::raw('count(*)'),'desc')->get() as $row )
                                        <tr>
                                            <th scope="row">
                                               <a href="{{$row->description}}">{{$row->description}}</a> 
                                            </th>
                                            <td>
                                               {{$row->count}}
                                            </td>
                                            <td>
												<?php
												$currentCount = DB::table('activity_log')->where('properties','like','%Page_Visit%')->where('Created_At','>',Carbon\Carbon::now()->firstOfMonth())->where('description',$row->description)->count();
												$lastMonthCount = DB::table('activity_log')->where('properties','like','%Page_Visit%')
													->where('Created_At','<=',$endOfLastMonth)
													->where('Created_At','>=',$startOfLastMonth)
													->where('description',$row->description)->count();
												?>
												@if($lastMonthCount > 0)
												@if($currentCount > $lastMonthCount)
												<span class="fas fa-arrow-up text-success mr-3"></span> {{ (($currentCount - $lastMonthCount) / $lastMonthCount) * 100 }}%
												@else
												<span class="fas fa-arrow-down text-danger mr-3"></span> {{ (($lastMonthCount - $currentCount) / $lastMonthCount) * 100 }}%
												@endif
												@else
												<span class="fas fa-arrow-up text-light mr-3"></span> 0%
												@endif
                                                
                                            </td>
                                        </tr>
											@endforeach
											
                                        </tbody>
                                    </table>
                                </div>
                            </div>
	</div>
	
		<div class="col-6 col-sm-4 col-xl-3 mb-4">
	<div class="card bg-light border-light shadow-sm">
		<div class="card-header">{{__('dash.Most_Viewed_Image')}}</div>
		<div class="card-body">
			<img src="{{DB::table('activity_log')->select('description',db::raw('count(*) as count'))->where('properties','like','%Photo_Visit%')->groupby('description')->orderby(db::raw('count(*)'))->exists() ? DB::table('activity_log')->select('description',db::raw('count(*) as count'))->where('properties','like','%Photo_Visit%')->groupby('description')->orderby(db::raw('count(*)'))->first()->description : ''}}" alt="">
		</div>
	</div>
	</div>

</div>

<script>
	var $grid
	$(document).ready(function(){
		
	$grid = $('#dash').masonry({
  percentPosition: true,
	
});
		
		
});
	
</script>


@endsection
