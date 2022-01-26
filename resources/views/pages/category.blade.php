@extends('layouts.app')

@section('title')
Sanur Independent School Library | Categories : {{ $category }}
@endsection

@section('content')
<main>
    <section class="section-details header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Categories
                            </li>
                            <li class="breadcrumb-item active">
                                {{ $category }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-p-0">
                    <div class="card card-details card-right">
                        <h1 class="mb-5 text-center" style="font-size: 30px; font-weight: bold">Book's Category : {{ $category }}</h1>
                        <div class="row justify-content-center mb-3">
                            <div class="col-lg-6">
                                <form action="/">
                                    @if (request('category'))
                                        <input type="hidden" name="category" value="{{ request('category') }}">
                                    @endif
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                                        <button class="btn btn-search" style="background-color: #ff9e53;
                                        color: #ffffff;" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($books->count())
                            <section class="section-popular-content" id="popularcontent">
                                <div class="container">
                                    <div class="section-popular-travel row justify-content-center">
                                        @foreach ($books as $book)
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ $book->image ? Storage::url($book->image) : '' }}');">
                                                    <div class="travel-location bg-dark text-white" style="background-color: rgba(228, 228, 228, 0.7)">
                                                        {{ $book->judul }}
                                                    </div>
                                                    <div class="travel-button mt-auto">
                                                        <a href="{{ route('detail', $book->slug) }}" class="btn btn-travel-details px-4">
                                                            VIEW DETAILS
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        @else
                            <p class="text-center fs-4 text-white">No Book Found!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection