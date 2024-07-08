@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.user.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="from-group mb-4">
                    <label for="">Nama</label>
                    <input value="{{ $edit->name }}" type="text" name="name" placeholder="masukkan nama anda"
                        class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Email</label>
                    <input value="{{ $edit->email }}" type="text" name="email" placeholder="masukkan email anda"
                        class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="masukkan password anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>

            </form>
        </div>
    </div>
@endsection
