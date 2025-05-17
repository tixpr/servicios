@extends('layouts.admin')
@section('body')
    <div class="w-full p-2 text-center">
        <h2 class="text-3xl text-gray-700 text-center font-bold">
            MODULO DE EVENTOS
        </h2>
    </div>
    <div class="w-full flex flex-column py-1">
        <a href="{{route('create-event')}}" class="grow md:grow-0 p-3 text-center text-2xl text-white bg-blue-400">
            Crear evento
        </a>
    </div>
    <div class="w-full py-3 flex flex-column items-stretch">
        @foreach ($eventos as $evento)
            <div class="flex p-1 py-2 max-w-[600px] self-center">
                <a href="#" class="grow uppercase text-blue-500">
                    {{ $evento->name }}
                </a>
                <a href="#" class="bg-red-500 text-white rounded-2xl">
                    Finalizar
                </a>
            </div>
        @endforeach
    </div>
@endsection
