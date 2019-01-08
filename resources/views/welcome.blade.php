
{{-- 경로가 views / layouts / app 라면
@extends('layouts.app')
@extends('layouts/app') --}}

@extends('layout')

@section('content')
    
    <h1>My {{ $foo }} Website</h1>

    {{ $script }} <- escaping
    {!! $script !!} <- nonescaping

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li> 
        @endforeach
    </ul>

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li><?= $task; ?></li>
        <?php endforeach; ?>
    </ul>

@endsection