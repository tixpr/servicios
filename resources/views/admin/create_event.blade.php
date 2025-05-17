@extends('layouts.admin')
@section('body')
<div class="grow">
	<div class="flex items-center justify-center">

		<form method="post" class="w-full max-w-[600px] flex flex-col" enctype="application/x-www-form-urlencoded">
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
					<input class="form-input" placeholder=" " type="text" id="name" name="name" required="true"
						autocomplete="off" value="{{ old('name') }}">
					<span class="form-text">Nombre del evento:</span>
				</label>
				<label class="form-label">
					<input class="form-input" placeholder=" " type="date" id="init_date" name="init_date" required="true"
						autocomplete="off" value="{{ old('init_date') }}">
					<span class="form-text">Inicio del evento:</span>
				</label>
				<label class="form-label">
					<input class="form-input" placeholder=" " type="date" id="end_date" name="end_date" required="true"
						autocomplete="off" value="{{ old('end_date') }}">
					<span class="form-text">Fin del evento:</span>
				</label>
			</div>
			<button class="w-full p-2.5 py-3 bg-blue-500 text-white text-2xl" type="submit">
				Ingresar
			</button>
		</form>
	</div>
</div>
@endsection
