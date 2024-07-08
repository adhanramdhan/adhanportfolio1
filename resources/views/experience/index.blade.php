@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.experience.create') }}" class="btn btn-primary">Tambah Pengalaman</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pekerjaan</th>
                            <th>Perusahaan</th>
                            <th>Deskripsi</th>
                            <th>Tgl_Mulai</th>
                            <th>Tgl_Selesai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->job }}</td>
                                <td>{{ $data->company }}</td>
                                <td>{{ $data->description }}</td>
                                <td>{{ $data->date_start }}</td>
                                <td>{{ $data->date_finish }}</td>
                                <td>
                                    <a href="{{ route('admin.experience.edit', $data->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('admin.experience.destroy', $data->id) }}"
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
