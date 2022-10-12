@extends('layouts.app')
@section('metaTitle', 'Home Page')

@section('content')
<h1>Trains</h1>
<div class="trains_container">
    @foreach ($trains as $train)
        <div class="single_train">
            <h3>{{$train['company']}} </h3>
            <h3>{{$train['code']}} </h3>
            <p>Departing at {{$train['departure_time']}} from {{$train['departure_station']}} </p>
            <hr>
        </div>
    
    
    
@endforeach
</div>

@endsection