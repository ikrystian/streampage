@extends('layouts.app')

@section('content')


    <p>Desktop details</p>
    {{ $image }}
    {{ $image->user }}

<img src="{{ $image->image_url }}" alt="">

@endsection
