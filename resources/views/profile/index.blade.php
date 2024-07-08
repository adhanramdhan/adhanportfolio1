@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.profile.create') }}" class="btn btn-primary">Tambah Profile</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Profesi</th>
                            <th>Email</th>
                            <th>Nomor Hp</th>
                            <th>Alamat</th>
                            <th>Tanggal lahir</th>
                            <th>Instagram</th>
                            <th>Linkedin</th>
                            <th>Youtube</th>
                            <th>Facebook</th>
                            <th>Wa link</th>
                            <th>email link</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{!! $no++ !!}</td>
                                <td>{!! $data->name !!}</td>
                                <td>{!! $data->profesi !!}</td>
                                <td>{!! $data->email !!}</td>
                                <td>{!! $data->phone !!}</td>
                                <td>{!! $data->address !!}</td>
                                <td>{!! $data->tanggal_lahir !!}</td>
                                <td>{!! $data->instagram_link !!}</td>
                                <td>{!! $data->linkedin_link !!}</td>
                                <td>{!! $data->youtube_link !!}</td>
                                <td>{!! $data->facebook_link !!}</td>
                                <td>{!! $data->wa_link !!}</td>
                                <td>{!! $data->email_link !!}</td>
                                <td>
                                    <a href="{{ route('admin.profile.edit', $data->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('admin.profile.destroy', $data->id) }}"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
