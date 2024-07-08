@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.profile.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="from-group mb-4">
                    <label for="">Nama</label>
                    <input value="{{ $edit->name }}" type="text" name="name" placeholder="masukkan nama anda"
                        class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Profesi</label>
                    <input value="{{ $edit->profesi }}" type="text" name="profesi" placeholder="masukkan nama anda"
                        class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Email</label>
                    <input value="{{ $edit->email }}" type="text" name="email" placeholder="masukkan email anda"
                        class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Nomor Hp</label>
                    <input value="{{ $edit->phone }}" type="number" name="phone" placeholder="masukkan nomor hp anda"
                        class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Alamat *</label>
                    <textarea name="address" id="" cols="30" rows="10" class="form-control">{{ $edit->address }}</textarea>
                </div>

                <div class="from-group mb-4">
                    <label for="">Tanggal lahir *</label>
                    <textarea name="tanggal_lahir" id="" cols="30" rows="10" class="form-control">{{ $edit->tanggal_lahir }}</textarea>
                </div>

                <div class="from-group mb-4">
                    <label for="">Instagram</label>
                    <input value="{{ $edit->instagram_link }}" type="text" name="instagram_link"
                        placeholder="masukkan github anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">linkedin</label>
                    <input value="{{ $edit->linkedin_link }}" type="text" name="linkedin_link"
                        placeholder="masukkan linkedin anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">youtube</label>
                    <input value="{{ $edit->youtube_link }}" type="text" name="youtube_link"
                        placeholder="masukkan youtube anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Facebook</label>
                    <input value="{{ $edit->facebook_link }}" type="text" name="facebook_link"
                        placeholder="masukkan facebook anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">Wa link</label>
                    <input value="{{ $edit->wa_link }}" type="text" name="wa_link"
                        placeholder="masukkan facebook anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <label for="">email link</label>
                    <input value="{{ $edit->email_link }}" type="text" name="email_link"
                        placeholder="masukkan email link anda" class="form-control">
                </div>

                <div class="from-group mb-4">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
