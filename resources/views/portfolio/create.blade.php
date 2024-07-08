@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">{{ $title }}</div>
    <div class="card-body">
        <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group bm3">
                <label for="">Foto Portfolio</label>
                <input type="file" name="images" id="id_images">
            </div>

            {{-- <div class="from-group mb-4">
                <label for="">categori</label>
                <input type="text" name="category" placeholder="masukkan categori anda" class="form-control">
            </div> --}}

            <div class="form-group">
                <select name="id_category"  class="form-control">

                    <option value="">Pilih Category</option>

                    @foreach ($categories as $categories)


                    <option value="{{$categories->id}}">{{ $categories ->category }}</option>

                    @endforeach


                </select>
            </div>

            <div class="from-group mb-4">
                <label for="">title</label>
                <input type="text" name="title" placeholder="masukkan judul anda" class="form-control">
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
