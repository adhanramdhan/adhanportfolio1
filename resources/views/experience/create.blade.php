@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.experience.store') }}" method="post">
                @csrf
                <div class="from-group mb-4">
                    <label for="">Pekerjaan</label>
                    <input type="text" name="job" placeholder="masukkan pekerjaan anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Nama Perusahaan</label>
                    <input type="text" name="company" placeholder="masukkan nama perusahaan anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="from-group mb-4">
                    <label for="">Tanggal Mulai</label>
                    <input type="text" name="date_start" placeholder="masukkan tanggal mulai bekerja anda"
                        class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Tanggal Selesai</label>
                    <input type="text" name="date_finish" placeholder="masukkan tanggal selesai bekerja anda"
                        class="form-control">
                </div>

                <div class="from-group mb-4">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
