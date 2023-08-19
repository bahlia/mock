@extends('layouts.app')

@section('content')
    @livewire('matchs',[
        "id" => $id
    ])
@endsection