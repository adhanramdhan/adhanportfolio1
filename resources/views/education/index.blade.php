@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.education.create') }}" class="btn btn-primary">Tambah Pendidikan</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Sekolah/kampus</th>
                            <th>Nama Gelar -optional</th>
                            <th>Nama Jurusan</th>
                            <th>Alamat Tempat</th>
                            <th>Tahun Belajar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->campus }}</td>
                                <td>{{ $data->bachelor }}</td>
                                <td>{{ $data->major }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->date_start }}</td>
                                <td>
                                    <a href="{{ route('admin.education.edit', $data->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('admin.education.destroy', $data->id) }}"
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
