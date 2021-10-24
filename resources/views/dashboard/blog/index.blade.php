@extends('dashboard.layouts.main')

@section('title', 'Dashboard')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Artikel</h1>
  </div>

  @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
      </div>
  @endif

  <div class="table-responsive col-lg-8">

    <a href="/dashboard/blog/create" class="btn btn-primary ">Buat Artikel</a>
      
      <table class="table table-striped table-sm">
      <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Kategori</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $bl)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{$bl->title}}</td>
                <td>{{ $bl->category->name }}</td>
                <td>
                    <a href="/dashboard/blog/{{$bl->slug}}" class="badge btn-info mt-1"> <span data-feather="eye"></span></a>
                    <a href="/dashboard/blog/{{$bl->slug}}/edit" class="badge btn-success mt-1"> <span data-feather="edit"></span></a>
                    <form action="/dashboard/blog/{{$bl->slug}}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge btn-danger border-0 mt-1" onclick="return confirm('yakin hapus artikel ?')"><span data-feather="x"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
</div>
</main>
@endsection