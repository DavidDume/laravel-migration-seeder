@extends('layouts.app')

@section('title', 'home')
    
@section('content')
    <h1>Trains leaving today {{date('d-m-Y')}}</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Departure City</th>
            <th scope="col">Arrival City</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Arrival Time</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                @if(date('Y-m-d') == $train['date'] && !($train['is_cancelled']))
                    <tr>
                        <td>{{$train['departure_city']}}</td>
                        <td>{{$train['arrival_city']}}</td>
                        <td>{{$train['departure_time']}}</td>
                        <td>{{$train['arrival_time']}}</td>
                      </tr>
                @endif
            @endforeach
          
        </tbody>
      </table>
@endsection