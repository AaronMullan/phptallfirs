@extends('layout')
@section('title', 'welcome')


@section('content')

<h1>Tall Firs in PHP</h1>
<h3>Messing around with PHP, figured I'd make a band website. Here's a foreach To Do to flex some skillz: </h3>

<ul>

    @foreach($tasks as $task)

    <li><?= $task; ?></li>

    @endforeach

</ul>

@endsection