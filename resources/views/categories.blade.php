@extends('master')
@section('title', 'Категории')
@section('content')
    <div class="starter-template">
        @foreach ($categories as $category)
            <div class="panel">
                <a href="/{{ $category->code }}">
                    <img src="{{ $category->image }}">
                    <h2>{{ $category->name }}</h2>
                </a>
                <p>
                    {{ $category->discription }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
