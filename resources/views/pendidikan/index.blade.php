@extends('layout')
@section('content')
    <h1>Pendidikan</h1>

    <div class="card">
        <div class="card-header">Pendidikan</div>
        <div class="card-body">

            <a href="{{ route('pendidikan.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Sekolah</th>
                                <th>jurusan</th>
                                <th>tahun_lulus</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($education as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_sekolah }}</td>
                                    <td>{{ $item->jurusan }}</td>
                                    <td>{{ $item->tahun_lulus }}</td>

                                    <td class="justify-content-center">
                                        <a class="btn btn-success" href="{{ route('pendidikan.edit', $item->id) }}">Edit</a>
                                        <form style="display: inline;" action="{{ route('pendidikan.destroy', $item->id) }}"
                                            onsubmit="return confirm('akan di delete sementara?');" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
