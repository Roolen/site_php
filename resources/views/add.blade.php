@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Add</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('adding') }}">
                @csrf

                <div class="form-group">
                    <label for="title" class="label-field">{{ __('Title') }}</label>

                    <input id="title" type="text" class="field form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description" class="label-field">{{ __('Description') }}</label>

                    <input id="description" type="text" class="field form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content" class="label-field">{{ __('Content') }}</label>

                    <textarea id="content" type="text" class="field form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="content" autofocus></textarea>

                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group flx-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __("Add") }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection