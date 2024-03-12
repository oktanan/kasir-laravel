@extends('layouts.main')

@section('content')
<h1>Edit User</h1>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit User</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('user.update', $users->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama User</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="name" class="form-control" value="{{ $users->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" id="email" class="form-control" value="{{ $users->email }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Level</label>
                        <select name="level" class="form-control col-sm-10">
                            <option value="0" {{ $users->level == '0' ? 'selected' : '' }}>Kasir</option>
                            <option value="1" {{ $users->level == '1' ? 'selected' : '' }}>Admin</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route ('user.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
