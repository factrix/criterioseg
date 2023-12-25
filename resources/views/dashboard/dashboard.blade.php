@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        {{ auth()->user()->name}}
        {{ auth()->user()->email}}
    </div>
</div>


@endsection