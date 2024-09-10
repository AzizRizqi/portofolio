@extends('layout')
@section('content')
    <h1>Contact</h1>

    <div class="card">
        <div class="card-header">Contact</div>
        <div class="card-body">

            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>name</th>
                                <th>email</th>
                                <th>message</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contact as $index => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->message }}</td>
                                    <td class="justify-content-center">
                                        <form style="display: inline;" action="{{ route('contact.destroy', $item->id) }}"
                                            onclick="return confirm('yang bener lu?');" method="POST">
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
