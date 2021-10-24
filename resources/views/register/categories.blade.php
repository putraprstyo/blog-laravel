@extends('layouts.main')
@section('title', 'Blog')
@section('content')

<div class="container">
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

@endsection