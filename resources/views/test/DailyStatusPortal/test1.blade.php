@extends('layouts.admin')

@section('content')
        <div>Температура в Новосибирске: {{ $title }}</div>
    @foreach($title as $value)
        <div>{{ $value }}</div>
    @endforeach
@endsection
