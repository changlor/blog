@extends('layouts.app')

@section('content')
    <div class="custom-navbar" id="logo" style="text-align: center;">
        <h1 style="margin-top: 0;">Changle's</h1>
        <div style="padding: 5px; font-size: 16px;">here is my site</div>
    </div>
    <div id="content" class="clearfix content-wrapper">
        <div id="left-bar"></div>
        <div id="right-bar">
            <div class="sep20"></div>
            <div class="sep20"></div>
            <div class="box">
                <div class="cell">
                    <strong>V2EX = way to explore</strong>
                    <div class="sep5"></div>
                    <span class="fade">V2EX 是一个关于分享和探索的地方</span>
                </div>
                <div class="inner">
                    <div class="sep5"></div>
                    <div align="center">
                        <a href="/signup" class="super normal button">现在注册</a>
                        <div class="sep5"></div>
                        <div class="sep10"></div>
                        已注册用户请 &nbsp;
                        <a href="/signin">登录</a>
                    </div>
                </div>
            </div>
            <div class="sep20"></div>
        </div>
        <div id="main">
            <ul class="items">
                @foreach ($articles as $article)
                <li class="item" style="margin: 40px 0;">
                    <div class="title">
                        <a href="{{ url('article/'.$article->id) }}">
                            {{ $article->title }}
                        </a>
                    </div>
                    <div class="meta">
                        <span class="author">作者：<a href="{{ url('/') }}">小金</a></span> •
                        <time class="date" datetime="{{ $article->created_at }}" title="{{ $article->created_at }}">{{ $article->created_at }}</time>
                        </div>
                    <div class="feature"></div>
                    <!--
                    <div class="body">
                        <p>{{ $article->body }}</p>
                    </div>
                    -->
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection