@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.skill.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="from-group mb-4">
                    <label for="">Skill</label>
                    <input value="{{ $edit->name }}" type="text" name="name" placeholder="masukkan pekerjaan anda"
                        class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">value</label>
                    <input value="{{ $edit->value }}" type="text" name="value"
                        placeholder="masukkan value terbaru anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
