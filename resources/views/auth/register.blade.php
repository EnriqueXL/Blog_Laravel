@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('registro-formulario.Register') }}</div>

                   {{-- Mostrar los errores en listado en rojo--}}
                   @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach
                            </ul>
                        </div>    
                    @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('registro-formulario.Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                {{-- Errores customizados (Se encuentrar en el RegisterController)
                                    Se muestran debajo del label --}}
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                       @foreach ($errors->get('name') as $error)
                                           <li>{{ $error }}</li>
                                       @endforeach
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('registro-formulario.Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                {{--    Errores que estan debajo del label --}}
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alias" class="col-md-4 col-form-label text-md-end">Alias</label>

                            <div class="col-md-6">
                                <input id="alias" type="text"  class="form-control{{ $errors->has('alias') ? ' is-invalid' : '' }}"name="alias" value="{{ old('alias') }}" placeholder="Min 3, Max 20 carácteres" required autofocus">

                                @if ($errors->has('alias'))
                                 <span class="invalid-feedback" role="alert">
                                     @foreach ($errors->get('alias') as $error)
                                        <li>{{ $error }}</li>
                                     @endforeach
                                    </span>
                                 @endif

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="web" class="col-md-4 col-form-label text-md-end">Web</label>

                            <div class="col-md-6">
                                <input id="web" type="web" class="form-control @error('web') is-invalid @enderror" name="web" value="{{ old('web') }}" autofocus>

                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('registro-formulario.Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('registro-formulario.Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
