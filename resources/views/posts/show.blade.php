@extends('layouts.app')

@section('title', $post['title'])

@section('content')
<h1>{{ $post['title'] }}</h1>
<p>{{ $post['content'] }}</p>

@if($post['is_new'])
    <div>A new blog post using if</div>
@elseif(!$post['is_new'])
    <div>blog post is old using elseif</div>
@endif

@unless($post['is_new'])
    <div>blog post is old using unless</div>
@endunless

@isset($post['has_comments'])
    <div>This post has some comments using isset</div>
@endisset

@endsection
