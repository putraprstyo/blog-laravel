@extends('dashboard.layouts.main')
@section('title', 'Blog')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="my-3">{{$blog_post->title}}</h1>
            <a href="/dashboard/blog" class="btn btn-info"> <span data-feather="back"></span>Back</a>
            <a href="/dashboard/blog/{{$blog_post->slug}}/edit" class="btn btn-success"> <span data-feather="edit"></span>Edit</a>
            <form action="/dashboard/blog/{{$blog_post->slug}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('yakin hapus artikel ?')"><span data-feather="x"></span>Delete</button>
            </form>

            @if ($blog_post->image)
            <div style="max-height:350px; overflow:hidden;">
                <img src="{{asset('storage/'. $blog_post->image)}}" class="mt-4 mb-5 img-fluid" alt="...">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{$blog_post->category->name}}" class="mt-4 mb-5 img-fluid" alt="...">
            @endif

            {!! $blog_post->body !!}

        </div>
    </div>
</div>


@endsection
