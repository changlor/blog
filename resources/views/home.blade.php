@extends('layouts.app')

@section('content')
    <div id="title" style="text-align: center;">
        <h1>Changle's</h1>
        <div style="padding: 5px; font-size: 16px;">here is my site</div>
    </div>
    <hr>
    <div id="content">
        <ul class="items">
            @foreach ($articles as $article)
            <li class="item" style="margin: 50px 0;">
                <div class="title">
                    <a style="font-size: 21px;" href="{{ url('article/'.$article->id) }}">
                        {{ $article->title }}
                    </a>
                </div>
                <div class="body">
                    <p>{{ $article->body }}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
@endsection