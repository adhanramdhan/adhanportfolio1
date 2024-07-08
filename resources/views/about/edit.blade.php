@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.about.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
            

                <div class="from-group mb-4">
                    <label for="">Deskripsi </label>
                    <input value="{{ $edit->decription }}" type="text" name="decription" placeholder="masukkan deskripsi anda"
                        class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">deskripsi 2</label>
                    <input value="{{ $edit->decription2  }}" type="text" name="decription2"
                        placeholder="masukkan deskripsi2 terbaru anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
