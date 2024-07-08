@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.experience.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="from-group mb-4">
                    <label for="">Pekerjaan</label>
                    <input value="{{ $edit->job }}" type="text" name="job" placeholder="masukkan pekerjaan anda"
                        class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Nama Perusahaan</label>
                    <input value="{{ $edit->company }}" type="text" name="company"
                        placeholder="masukkan nama perusahaan anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $edit->description }}</textarea>
                </div>

                <div class="from-group mb-4">
                    <label for="">Tanggal Mulai</label>
                    <input value="{{ $edit->date_start }}" type="text" name="date_start"
                        placeholder="masukkan tangagl mulai bekerja anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Tanggal Selesai</label>
                    <input value="{{ $edit->date_finish }}" type="text" name="date_finish"
                        placeholder="masukkan tanggal selesai bekerja anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
