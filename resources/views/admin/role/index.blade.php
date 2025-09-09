@extends('app')
@section('title', 'Data Role')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Role</div>
        </div>
        <div class="card-body">
            <a href="{{ route('role.create') }}" class="btn btn-primary mt-2 mb-2">Create</a>
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($roles as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ route('role.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('role.destroy', $item->id) }}"
                                    class="d-inline" method="post"
                                     onclick="return confirm('Yakin ingin delete ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
