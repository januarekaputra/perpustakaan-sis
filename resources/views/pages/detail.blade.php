@extends('layouts.app')

@section('title')
{{ trans('detail.title.sub') }} | DETAIL
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
                                {{ trans('detail.breadcrumb.books') }}
                            </li>
                            <li class="breadcrumb-item active">
                                {{ trans('detail.breadcrumb.details') }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ps-lg-0">
                    <div class="card card-details">
                        <h1>{{ $item->judul }}</h1>
                        <a href="/?category={{ $item->category->slug }}" class="text-decoration-none">
                            <p>
                                {{ $item->category->nama_kategori }}
                            </p>
                        </a>
                        @if ($item->image)
                            <div class="gallery">
                                <img src="{{ Storage::url($item->image) }}" alt="{{ $item->judul }}" width="100%">
                            </div>
                        @endif
                        </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-details card-right">
                        <h2>
                            {{ trans('detail.detail.book_detail') }}
                        </h2>
                        <hr>
                        <table class="trip-informations">
                            <tbody>
                                <tr>
                                    <th width="50%">
                                        ISBN
                                    </th>
                                    <td width="50%" class="text-end">
                                        @if ($item->isbn == '')
                                        -
                                        @else 
                                        {{ $item->isbn }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">
                                        {{ trans('detail.detail.author') }}
                                    </th>
                                    <td width="50%" class="text-end">
                                        {{ $item->pengarang }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">
                                        {{ trans('detail.detail.publisher') }}
                                    </th>
                                    <td width="50%" class="text-end">
                                        {{ $item->penerbit }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">
                                        {{ trans('detail.detail.stock') }}
                                    </th>
                                    <td width="50%" class="text-end">
                                        @if ($item->jumlah <= 0)
                                        {{ trans('detail.detail.out_of_stock') }}
                                        @else 
                                        {{ $item->jumlah }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">
                                        {{ trans('detail.detail.bookshelf') }}
                                    </th>
                                    <td width="50%" class="text-end">
                                        {{ $item->rak }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    @auth
                        @can('user')
                        <div class="join-container">
                            <a href="{{ route('loan-user.create') }}" class="text-decoration-none">
                                @csrf
                                <div class="d-grid gap-2">
                                    <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                        {{ trans('home.menu.transaction') }}
                                    </button>
                                </div>
                            </a>
                        </div>
                        @endcan
                        @can('admin')
                        <div class="join-container">
                            <a href="{{ route('home') }}" class="text-decoration-none">
                                @csrf
                                <div class="d-grid gap-2">
                                    <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                        {{ trans('detail.detail.back') }}
                                    </button>
                                </div>
                            </a>
                        </div>
                        @endcan
                    @else
                        <div class="join-container">
                            <a href="{{ route('home') }}" class="text-decoration-none">
                                @csrf
                                <div class="d-grid gap-2">
                                    <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                        {{ trans('detail.detail.back') }}
                                    </button>
                                </div>
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </section>
</main>
@endsection