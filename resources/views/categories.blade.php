@extends('layouts.main')

@section('container')
    <div class="container">
        <h1>Kategori Artikel</h1>
        <div class="row">
            @php
                $activeCategories = $categories->filter(function ($category) {
                    return $category->status;
                });
            @endphp
            
            @foreach ($activeCategories as $category)
                <div class="col-md-4 mt-4">
                    <a href="/?category={{ $category->slug }}">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
