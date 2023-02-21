{{-- Pagina 1 --}}
@extends('layouts.app')
    @section('content')
        @foreach($trainsData as $traindata)
                <h1>{{$traindata['azienda']}}</h1>
        @endforeach
    @endsection
