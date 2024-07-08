@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.whatido.create') }}" class="btn btn-primary">Tambah Portfolio</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Descipriton</th>
                            <th>icon</th>
                            <th>Caption</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->description ?? 'No title' }}</td>
                                <td>
                                    @if($data->icon)
                                    <img src="{{ asset('upload/' . $data->icon) }}" alt="{{ $data->description }}" width="100">
                                @else
                                    <span>No Image</span>
                                @endif
                                </td>
                                <td>{{ $data->caption }}</td>
                                <td>
                                    <a href="{{ route('admin.whatido.edit', $data->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('admin.whatido.destroy', $data->id) }}" class="d-inline">
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




{{-- @extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">Tambah Portfolio</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Caption</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->category->category ?? 'No Category' }}</td>
                                <td>


                                    @if($data->images->images)
                                        <img src="{{ asset('upload/' . $data->images) }}" alt="{{ $data->title }}" width="100">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->caption }}</td>
                                <td>
                                    <a href="{{ route('admin.portfolio.edit', $data->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('admin.portfolio.destroy', $data->id) }}" class="d-inline">
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
@endsection --}}
