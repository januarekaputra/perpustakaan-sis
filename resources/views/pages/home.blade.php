@extends('layouts.app')

@section('title')
    Sanur Independent School Library
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
    <h1>
        Welcome To 
        <br>
        Sanur Independent School Library
    </h1>
    <p class="mt-3">
        "Learning For Living"
    </p>
    <a href="#books" class="btn btn-get-started px-4 mt-4">
        SEE BOOKS
    </a>
</header>
<!-- Main -->
<main>
<!-- Statistik -->
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-4 col-md-4 stats-detail">
                <h2>{{ $member }}</h2>
                <p>Members</p>
            </div>
            <div class="col-4 col-md-4 stats-detail">
                <h2>{{ $books }}</h2>
                <p>Books</p>
            </div>
        </section>
    </div>
<!-- Wisata Populer -->
    <section class="section-popular" id="books">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Book Collection</h2>
                    <p>
                        {{ $title }}
                    </p>
                </div>
            </div>
        </div>
    </section>
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
    @if ($items->count())
    <section class="section-popular-content" id="popularcontent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel align-items-center text-center d-flex flex-column" style="background-image: url('{{ $item->image ? Storage::url($item->image) : '' }}');">
                            <div class="travel-location bg-dark text-white" style="background-color: rgba(228, 228, 228, 0.7)">
                                {{ $item->judul }}
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
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

    <div class="d-flex justify-content-center">
        {{ $items->links() }}
    </div>
</main>
@endsection