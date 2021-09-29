@extends('layouts.main')

@section('container')
    <article class="container mt-3 py-4">
        <div class="row mx-auto justify-content-center text-center text-md-start mb-4 ps-lg-2">
            <h2 class="fw-bold col-md-11 mx-auto justify-content-center align-items-center">My Blog </h2>
            <h5 class="fw-bold col-md-11 mx-auto justify-content-center align-items-center">Category : {{ $category }}
            </h5>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 ">
            @foreach ($posts as $post)
                <div class="col ">
                    @if ($posts->count() > 0)
                        <div class="card w-75 border-0 mx-auto justify-content-center align-items-center">
                            <img src="https://source.unsplash.com/1000x600/?{{ $post->category->name }}"
                                class="card-img-top">
                            <div class="card-body">
                                <a href="/posts/{{ $post->slug }}">
                                    <h4 class="card-title">{{ $post->title }}</h4>
                                </a>
                                <ul class="d-flex gap-2 my-3">
                                    <li>
                                        <a class="btn-dark px-3 py-1 rounded-pill"
                                            href="/blog/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                                    </li>
                                    <li class="text-muted">{{ $post->created_at->diffForHumans() }}</li>
                                </ul>
                                <p class="card-text">{{ $post->excerpt }} ...</p>
                            </div>
                        </div>
                    @else
                        <p class="text-center fs-3">No post found.</p>
                    @endif
                </div>
            @endforeach
        </div>




    </article>
@endsection
