@extends('layouts.web')
@section('body')
    <section class="w-full h-full min-h-dvh flex flex-col items-center content-center justify-center">
		<img src="/images/logo.png" alt="Logo FIS">
        <div class="w-full h-full flex items-center justify-center p-1">
            <form method="post" class="w-full sm:w-full md:w-3/5 lg:w-2/5 flex flex-col"
                enctype="application/x-www-form-urlencoded">
                
                {!! csrf_field() !!}
                <div class="flex flex-col m-2">
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <p class="text-xl font-bold text-red-500 p-0.5 text-justify">
                                {!! $error !!}
                            </p>
                        @endforeach
                    @endif
                    @if (isset($error_message) and $error_message !== null)
                        <p class="text-xl font-bold text-red-500 p-0.5 text-justify">
                            {!! $error_message !!}
                        </p>
                    @endif
                    @if (isset($message) and $message !== null)
                    <p class="text-xl font-bold text-blue-400 p-0.5 text-justify">
                        {!! $message !!}
                    </p>
                    @endif
                </div>
                <div class="form-inputs">
                    <label class="form-label">
                        <input class="form-input" placeholder=" " type="email" id="email" name="email"
                            required="true" autocomplete="off" value="{{ old('email') }}">
                        <span class="form-text">Correo electrónico:</span>
                    </label>
                    <label class="form-label">
                        <input class="form-input" placeholder=" " type="password" id="password" name="password"
                            required="true" value="{{ old('password') }}">
                        <span class="form-text">
                            Contraseña:
                        </span>
                    </label>
                </div>
                <button class="w-full md:self-center md:w-[200px] p-2.5 py-3 bg-blue-500 text-white text-2xl" type="submit">
                    Ingresar
                </button>
            </form>
        </div>
    </section>
@endsection
