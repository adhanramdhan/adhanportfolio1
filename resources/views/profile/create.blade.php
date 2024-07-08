@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.profile.store') }}" method="post">
                @csrf
                <div class="from-group mb-4">
                    <label for="">Nama</label>
                    <input type="text" name="name" placeholder="masukkan nama anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Profesi</label>
                    <input type="text" name="profesi" placeholder="masukkan nama anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="masukkan email anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Nomor Hp</label>
                    <input type="number" name="phone" placeholder="masukkan nomor hp anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Alamat</label>
                    <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="from-group mb-4">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="from-group mb-4">
                    <label for="">Github</label>
                    <input type="text" name="github_link" placeholder="masukkan github anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">linkedin</label>
                    <input type="text" name="linkedin_link" placeholder="masukkan linkedin anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Twitter</label>
                    <input type="text" name="twitter_link" placeholder="masukkan twitter anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">wa</label>
                    <input type="text" name="wa_link" placeholder="masukkan wa anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">email</label>
                    <input type="text" name="email_link" placeholder="masuemail anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
