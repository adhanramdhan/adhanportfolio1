@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.education.store') }}" method="post">
                @csrf
                <div class="from-group mb-4">
                    <label for="">Nama Kampus</label>
                    <input type="text" name="campus" placeholder="masukkan nama kampus anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Nama Gelar</label>
                    <input type="text" name="bachelor" placeholder="masukkan nama gelar anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Nama Jurusan</label>
                    <input type="text" name="major" placeholder="masukkan nama jurusan anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Alamat</label>
                    <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="from-group mb-4">
                    <label for="">Tanggal Mulai</label>
                    <input type="text" name="date_start" placeholder="masukkan tanggal mulai kuliah anda"
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
