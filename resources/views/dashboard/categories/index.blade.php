@extends('dashboard.layouts.main')

@section('title', 'Dashboard')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categories</h1>
  </div>

  @if (session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
          {{ session('success') }}
      </div>
  @endif

  <div class="table-responsive col-lg-6">

    <a href="/dashboard/categories/create" class="btn btn-primary ">Buat Kategori</a>
      
      <table class="table table-striped table-sm">
      <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Kategori</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $cat)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $cat->name }}</td>
                <td>
                    <a href="/dashboard/categories/{{$cat->slug}}" class="badge btn-info"> <span data-feather="eye"></span></a>
                    <a href="/dashboard/categories/{{$cat->slug}}/edit" class="badge btn-success"> <span data-feather="edit"></span></a>
                    <form action="/dashboard/categories/{{$cat->slug}}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge btn-danger border-0" onclick="return confirm('yakin hapus artikel ?')"><span data-feather="x"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
</div>
</main>
@endsection

{{-- landing page --}}
{{-- <a href='https://www.freepik.com/vectors/people'>People vector created by pch.vector - www.freepik.com</a> --}}