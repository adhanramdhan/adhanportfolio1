@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.education.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="from-group mb-4">
                    <label for="">Nama Kampus</label>
                    <input value="{{ $edit->campus }}" type="text" name="campus" placeholder="masukkan nama kampus anda"
                        class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Nama Gelar</label>
                    <input value="{{ $edit->bachelor }}" type="text" name="bachelor"
                        placeholder="masukkan nama gelar anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Nama Jurusan</label>
                    <input value="{{ $edit->major }}" type="text" name="major"
                        placeholder="masukkan nama jurusan anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $edit->description }}</textarea>
                </div>

                <div class="from-group mb-4">
                    <label for="">Tanggal Mulai</label>
                    <input {{ $edit->date_start }} type="date" name="text"
                        placeholder="masukkan tanggal mulai kuliah anda" class="form-control">
                </div>

            
                <div class="from-group mb-4">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
