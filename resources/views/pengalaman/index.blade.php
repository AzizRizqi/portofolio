@extends('layout')
@section('content')
    <h1>Pengalaman</h1>

    <div class="card">
        <div class="card-header">Pengalaman</div>
        <div class="card-body">

            <a href="{{ route('pengalaman.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>posisi</th>
                                <th>perusahaan</th>
                                <th>deskripsi</th>
                                <th>tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengalaman as $index => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->posisi }}</td>
                                    <td>{{ $item->perusahaan }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ $item->tahun }}</td>

                                    <td class="justify-content-center"><a href="{{ route('pengalaman.edit',$item->id)}}"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <form style="display: inline;" action="{{ route('pengalaman.destroy',$item->id) }}"
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
