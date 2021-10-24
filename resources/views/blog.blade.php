@extends('layouts.main')
@section('title', 'Blog')
@section('content')

<div class="container">
{{-- <h1 class="mb-5">{{$title}}</h1> --}}

<div class="row mb-3">
    <div class="col-md-6">
        <form action="/blog" method="GET">
            @if (request('category'))
                <input type="hidden" name="category" value="{{request('category')}}">
            @endif  
            @if (request('author'))
                <input type="hidden" name="author" value="{{request('auhtor')}}">
            @endif       
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" value="{{request('search')}}" name="search">
                <button class="btn btn-warning" type="submit" >Search</button>
            </div>
        </form>
    </div>
</div>

@if ($blog_post->count())
    <div class="card mb-3">
        @if ($blog_post[0]->image)
            <div style="max-height:350px; overflow:hidden;">
                <img src="{{asset('storage/'. $blog_post[0]->image)}}" class=" img-fluid" alt="...">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400?{{$blog_post[0]->category->name}}" class="card-img-top" alt="...">
        @endif
        <div class="card-body text-center">
            <h5 class="card-title"><a href="/blog/{{$blog_post[0]->slug}}" class="text-decoration-none text-dark">{{$blog_post[0]->title}}</a></h5>
            <p><small class="text-muted"><a class="text-decoration-none" href="/blog?author={{$blog_post[0]->user->username}}">{{$blog_post[0]->user->name}}</a> in <a class="text-decoration-none" href="/blog?category={{$blog_post[0]->category->slug}}">{{$blog_post[0]->category->name}}</a> {{ $blog_post[0]->created_at->diffForHumans() }}</small></p>
            <p class="card-text">{{$blog_post[0]->excerpt}}</p>
            <a class="text-decoration-none btn btn-warning" href="/blog/{{$blog_post[0]->slug}}">Read More...</a>
           
        </div>
    </div>

<div class="container">
    <div class="row mb-4">
        @foreach ($blog_post->skip(1) as $blog)
        <div class="col-md-4 mb-2">
            <div class="card">
                @if ($blog->image)
                <div style="max-height:350px; overflow:hidden;">
                    <img src="{{asset('storage/'. $blog->image)}}" class="img-fluid" alt="...">
                </div>
                @else
                <img src="https://source.unsplash.com/500x500?{{$blog->category->name}}" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{$blog->title}}</h5>
                    <p><small class="text-muted"><a class="text-decoration-none text-dark" href="/blog?category={{$blog->category->slug}}">{{$blog->category->name}}</a></small></p>
                    <p><small class="text-muted">By <a class="text-decoration-none" href="/blog?author={{$blog->user->username}}">{{$blog->user->name}}</a> {{ $blog->created_at->diffForHumans() }}</small></p>
                    <p class="card-text">{{$blog->excerpt}}.</p>
                    <a href="/blog/{{$blog->slug}}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4">Not Found</p>
@endif

{{-- {{ $blog_post->links() }} --}}

</div>

@endsection