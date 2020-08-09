@extends('layout')
@section('title', 'welcome')


@section('content')

<h2>Welcome to my PHP site</h2>
<h3>I am planning to do the following things:</h3>

<ul>

    @foreach($tasks as $task)

    <li><?= $task; ?></li>

    @endforeach

</ul>

@endsection