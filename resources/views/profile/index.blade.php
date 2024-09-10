@extends('layout')
@section('content')
    <h1>Profile</h1>

    <div class="card">
        <div class="card-header">Profiles</div>
        <div class="card-body">


            {{-- {{ route('profiles.recycle') }} --}}
            <a href="{{ route('profile.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>gambar</th>
                                <th>email</th>
                                <th>deskripsi</th>
                                <th>no_telepon</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profile as $index => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td><img src="{{ asset('storage/' . $item->gambar) }}" alt="" width="200" height="200" >
                                    </td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ $item->no_telepon }}</td>
                                    <td class="justify-content-center"><a href="{{ route('profile.edit', $item->id) }}"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <form style="display: inline;" action="{{ route('profile.destroy', $item->id) }}"
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
