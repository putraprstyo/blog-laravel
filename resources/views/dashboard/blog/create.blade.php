@extends('dashboard.layouts.main')

@section('title', 'Buat Artikel')
    
@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Buat Artikel Baru</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input type="text" autofocus required value="{{old('title')}}" name="title" class="form-control @error('title') is-invalid @enderror" id="title">
                @error('title')
                    </div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" value="{{old('slug')}}" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" readonly required>
                @error('slug')
                    </div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $cat)
                        @if (old('category_id') == $cat->id)
                            <option value="{{$cat->id}}" selected>{{$cat->name}}</option>
                        @else
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endif
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label @error('image')is-invalid @enderror">Upload Gambar</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    </div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <input id="body" required type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Buat Artikel</button>
        </form>
    </div>
</main>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/blog/buatSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    // non aktif file upload
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    // menampilkan gambar
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection