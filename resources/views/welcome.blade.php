@extends('layout')
@section('title', 'welcome')


@section('content')

<h2>hellloo, loverssss</h2>

<ul>

    @foreach($tasks as $task)

    <li><?= $task; ?></li>

    @endforeach
    
</ul>

@endsection