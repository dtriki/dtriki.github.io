@extends('layouts.app')

@section('content')
    <!-- dodat background -->
    <link href="{{ asset('css/maps.css') }}" rel="stylesheet" type="text/css">

    <div class="container">
        <div class="mapa">
            <div style="height: 600px; width: 700px">{!! Mapper::render() !!}</div>
        </div>
    </div>

@endsection
