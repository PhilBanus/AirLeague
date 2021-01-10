@extends('layouts.guest')
@section('content')
<div class="uk-container uk-container-expand uk-padding">

            <div class="uk-card uk-card-primary uk-card-body uk-align-left uk-border-rounded  uk-width-1-4@m uk-box-shadow-large">
                <h3 class="uk-card-title">{{ __('Register.Register') }}</h3>


                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                   <div class="uk-margin">
					   <label for="name" class="uk-form-label">{{ __('Register.Name') }}</label>
					   <input id="name" type="text" class="uk-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
                       <div class="uk-margin">
                            <label for="email" class="uk-form-label">{{ __('Register.E-Mail') }}</label>

                                <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     
</div>
                       <div class="uk-margin">
                            <label for="password" class="uk-form-label">{{ __('Register.Password') }}</label>

                           
								<div class="uk-inline  uk-width-1-1">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input id="password" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
								</div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                   
                 </div>
                       <div class="uk-margin">
                            <label for="password-confirm" class="uk-form-label">{{ __('Register.Confirm_Password') }}</label>

                            <div class="uk-inline uk-width-1-1">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input id="password-confirm" type="password" class="uk-input" name="password_confirmation" required autocomplete="new-password">
                            </div>
          

                   </div>
                       <div class="uk-margin">
                                <button type="submit" class="uk-button uk-button-primary">
                                    {{ __('Register.Register') }}
                                </button>
						</div>
                    </form>
            
            </div>
  
</div>
	
@endsection