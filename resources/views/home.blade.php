@extends('layouts.main')
@section('title', 'B-Tech')
@section('content')

<div class="container">
    <div class="row custom-sec">
        <div class="col-12 col-lg-4">
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ea repudiandae quaerat, consequuntur voluptatem, quibusdam error ad et omnis laboriosam neque, quo delectus excepturi quasi amet asperiores. Quis, quas repellendus!</p>
            @auth
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</li></button>
            </form>
            <a href="/dashboard">Dashboard</a>
            @else
            <a href="/login">Login</a>
            @endauth
        </div>
        <div class="col-lg-8">
            <img src="{{asset('../landing/img/landing-politic.png')}}" alt="">
        </div>
    </div>
    <div class="container blog">
      <div class="row mb-4">
          @foreach ($blog_post as $blog)
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
    <div class="container categories" id="categories">
        <div class="row">
          @foreach ($categories as $cat)
          <div class="col-md-4">
              <a href="/categories/{{$cat->slug}}">
              <div class="card bg-dark text-white">
                  <img src="https://source.unsplash.com/500x500?{{$cat->name}}" class="card-img" alt="...">
                  <div class="card-img-overlay p-0">
                      <h5 class="card-title text-center" style="background-color: rgba(0,0,0,0.7)">{{$cat->name}}</h5>
                  </div>
              </div>
              </a>
          </div>
          @endforeach
        </div>
    </div>
  </div>
@endsection