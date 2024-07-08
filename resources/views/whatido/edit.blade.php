@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">{{ $title }}</div>
    <div class="card-body">
        <form action="{{ route('admin.whatido.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="images">Foto edit</label>
                <input type="file" name="images" id="images" class="form-control">
                @if($edit->icon)
                    <img src="{{ asset('upload/' . $edit->icon) }}" alt="#" width="100" class="mt-2">
                @else
                    <span>No Image</span>
                @endif
            </div>


            <div class="form-group mb-3">
                <label for="title">description</label>
                <input type="text" name="description" id="description" value="{{ $edit->description }}" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="caption">Caption</label>
                <textarea name="caption" id="caption" cols="30" rows="10" class="form-control">{{ $edit->caption }}</textarea>
            </div>

            <div class="form-group mb-3">
                <input type="submit" value="Update" class="btn btn-primary">
                <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>

@endsection
