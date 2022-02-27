@extends('layouts.app')

@section('title')
{{ trans('category.title.sub') }} | Categories
@endsection

@section('content')
<main>
    <section class="section-details header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col-p-0">
                    <div class="card card-details card-right">
                        <h1 class="mb-5 text-center" style="font-size: 30px; font-weight: bold">{{ trans('category.menu.categories') }}</h1>
                        <div class="row justify-content-center mb-3">
                            <div class="col-lg-6">
                                <form action="/categories">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ trans('category.menu.search') }}..." name="search" value="{{ request('search') }}">
                                        <button class="btn btn-search" style="background-color: #ff9e53;
                                        color: #ffffff;" type="submit">{{ trans('category.menu.search') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($categories->count())
                        <div class="container">
                            <div class="row">
                                @foreach ($categories as $category)
                                    
                                <div class="col-lg-4 mb-5">
                                    <a href="/?category={{ $category->slug }}">
                                        <div class="card bg-dark text-white">
                                            <img class="card-img" src="https://source.unsplash.com/random/500x500?{{ $category->nama_kategori }}" alt="{{ $category->nama_kategori }}">
                                            <div class="card-img-overlay d-flex align-items-center p-0">
                                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->nama_kategori }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                @endforeach
                            </div>
                        </div>
                        @else
                        <p class="text-center fs-4 text-black">{{ trans('category.menu.fail') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="d-flex justify-content-center">
        {{ $categories->links() }}
    </div>
</main>

@endsection