@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Content</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <div class="content-page">
                <div class="title">{{ $content->title }}</div>
                <div class="content">{{ $content->content }}</div>
            </div>
        </div>
    </div>
</div>
@endsection