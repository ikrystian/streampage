@extends('layouts.app')

@section('content')

    <p style="color: {{  $desktop->user->user_color }}">User details</p>
    {{ $desktop->user }}

    <p>Desktop details</p>
    {{ $desktop }}

    <p>Desktop images</p>

    <ul>
        @foreach ($desktop->images as $image)
            <li><img style="max-width: 200px; height: auto;" src="{{$image->desktop_image_url}}" alt=""></li>
        @endforeach
    </ul>

@endsection
