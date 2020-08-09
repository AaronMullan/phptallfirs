@extends('layout')
@section('title', 'welcome')


@section('content')
<div class="welcome">
    <h1>Tall Firs</h1>

    <div class="treecontainer">
        <img src="trees.svg" alt="some nice trees">
    </div>
    
    <div class="welcome-container">
        <h3>Underground Electric Folk</h3>

            <ul>

            @foreach($tasks as $task)

                <li><?= $task; ?></li>

            @endforeach

            </ul>
    </div>
</div>
@endsection