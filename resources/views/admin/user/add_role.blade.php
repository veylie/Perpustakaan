@extends('app')
@section('title', 'Tambah User Role')
@section('content')
<div class="card">
    <div class="card-header"></div>
        <div class="card-title">Tambah User Role</div>
        <div class="card-body">
        <form action="{{ route('user.updateRoles', $user->id) }}" method="post">
            @csrf
            <label for="" class="form-label">Pilih Role</label>
            <select name="roles[]" class="form-control" multiple>
                @foreach ($roles as $role)
                    <option {{ $user->roles->contains($role->id) ? 'selected' : '' }}    value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mt-2">Kirim</button>
                <a href="{{ url()->previous() }}" class="btn btn-success">kembali</a>

        </form>
    </div>
    </div>

</div>
@endsection
