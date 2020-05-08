@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body dashboard">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            @foreach ($contents as $content)
                <div class="content-pre">
                    <a href="{{ route('show', $content->id) }}">
                        <div class="title">{{ $content->title }}</div>
                    </a>
                    <div class="desc">{{ $content->description }}</div>
                </div>
            @endforeach

            <form method="GET" action="{{ route('add') }}">
                @csrf
                <button type="submit" class="btn btn-primary">
                    {{ __("Add") }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection