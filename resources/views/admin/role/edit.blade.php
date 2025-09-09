@extends('app')
@section('title', 'Ubah Role')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Ubah Role</div>
        </div>
        <div class="card-body">
            <div>
                <ul style="background-color: red">
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <form action="{{ route('role.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <label for="" class="form-label">Nama Role</label>
                <input type="text" class="form-control" name="name" value="{{ $edit->name }}">

                <button type="submit" class="btn btn-primary mt-2">Kirim</button>
                <a href="{{ url()->previous() }}" class="btn btn-success">kembali</a>
            </form>
        </div>
    </div>
@endsection
