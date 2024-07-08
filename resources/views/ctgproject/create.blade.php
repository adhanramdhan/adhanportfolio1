@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.ctgproject.store') }}" method="post">
                @csrf
                <div class="from-group mb-4">
                    <label for="">Kategori</label>
                    <input type="text" name="category" placeholder="masukkan deskripsi anda" class="form-control">
                </div>





                <div class="from-group mb-4">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
