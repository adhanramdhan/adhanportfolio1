@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">{{ $title }}</div>
    <div class="card-body">
        <form action="{{ route('admin.whatido.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group bm3">
                <label for="">Foto whatido</label>
                <input type="file" name="icon" id="">
            </div>

            {{-- <div class="from-group mb-4">
                <label for="">categori</label>
                <input type="text" name="category" placeholder="masukkan categori anda" class="form-control">
            </div> --}}

           

            <div class="from-group mb-4">
                <label for="">title</label>
                <input type="text" name="description" placeholder="masukkan judul anda" class="form-control">
            </div>

            <div class="from-group mb-4">
                <label for="">captiomn</label>
                <textarea name="caption" id="" cols="30" rows="10" class="form-control" placeholder="Masukan caption anda">Caption </textarea>
            </div>



            <div class="form-group mb3">
                <input type="submit" value="simpan" class="btn - btn-primary">
                <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>


@endsection
