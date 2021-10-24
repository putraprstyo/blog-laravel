@extends('layouts.main')
@section('title', 'Blog')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8">
            <h1 class="mb-5">{{$blog_post->title}}</h1>
            <p>By. <a href="/author/{{$blog_post->user->username}}" class="text-decoration-none">{{$blog_post->user->name}}</a> in <a href="/blog?category={{$blog_post->category->slug}}">{{$blog_post->category->name}}</a></p>

            @if ($blog_post->image)
            <div style="max-height:350px; overflow:hidden;">
                <img src="{{asset('storage/'. $blog_post->image)}}" class=" img-fluid" alt="...">
            </div>
            @else
            <img src="https://source.unsplash.com/700x400?{{$blog_post->category->name}}" class="mb-5img-fluid" alt="...">
            @endif

            <div class="mt-5">
                {!! $blog_post->body !!}
            </div>

        </div>
    </div>
</div>


@endsection
