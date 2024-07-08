@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">{{ $title }}</div>
    <div class="card-body">
        <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="images">Foto Portfolio</label>
                <input type="file" name="images" id="images" class="form-control">
                @if($portfolio->images)
                    <img src="{{ asset('upload/' . $portfolio->images->images) }}" alt="{{ $portfolio->title }}" width="100" class="mt-2">
                @else
                    <span>No Image</span>
                @endif
            </div>

            <div class="form-group mb-3">
                <label for="id_category">Category</label>
                <select name="id_category" id="id_category" class="form-control">
                    <option value="">Pilih Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $portfolio->id_category == $category->id ? 'selected' : '' }}>
                            {{ $category->category }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $portfolio->title }}" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="caption">Caption</label>
                <textarea name="caption" id="caption" cols="30" rows="10" class="form-control">{{ $portfolio->caption }}</textarea>
            </div>

            <div class="form-group mb-3">
                <input type="submit" value="Update" class="btn btn-primary">
                <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>

@endsection
