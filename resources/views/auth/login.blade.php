@extends('layouts.guest')

@section('content')
<div class="uk-container uk-container-expand uk-padding">

            <div class="uk-card uk-card-primary uk-card-body uk-align-left uk-border-rounded  uk-width-1-4@m uk-box-shadow-large">
                <h3 class="uk-card-title">{{ __('Login') }}</h3>


                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                       <div class="uk-margin">
                            <label for="email" class="uk-form-label">{{ __('E-Mail Address') }}</label>

                        
                                <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                        </div>

                      <div class="uk-margin">
                            <label for="password" class="uk-form-label">{{ __('Password') }}</label>

                         
                                <input id="password" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                        </div>

                       <div class="uk-margin">
                            
                              
                                    <input class="uk-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="uk-form-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                              
                       
                        </div>

                        <div class="uk-margin">
                          
                                <button type="submit" class="uk-button uk-button-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="uk-link-muted" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                     
                    </form>
           
            </div>
    
</div>
@endsection
