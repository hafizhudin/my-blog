@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts : Edit</h1>
    </div>

    <article class="container">
        <div class="row mx-auto justify-content-start">
            <div class="col-lg-8 col-9 my-2">
                <h3>{{ $post->title }}</h3>
                <h6>{{ $post->category->name }}</h6>
                <div class="my-3">
                    <a href="/dashboard/posts" class="btn btn-primary"><span data-feather="arrow-left"></span>Kembali
                    </a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-success"><span
                            data-feather="edit"></span>
                        Ubah
                    </a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><span
                                data-feather="trash"></span>Hapus</button>
                    </form>
                </div>

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
                @else
                    <img src="https://source.unsplash.com/1000x600/?{{ $post->category->name }}" class="img-fluid">
                @endif
                <p class="mt-2">{!! $post->body !!}</p>

            </div>
        </div>
    </article>
@endsection
