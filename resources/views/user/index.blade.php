@extends('layouts.main')

@section('content')
<h1>User</h1>
@if(session('message'))
<div class="row">
<div class="col">
    <div class="alert alert-primary solid alert-right-icon alert-dismissible fade show">
        <span><i class="mdi mdi-check"></i></span>
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>{{session('message')}}
    </div>
</div>
</div>
@endif
<div class="col-lg-12">
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">+ Add User</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table header-border table-hover verticle-middle">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Level</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->level }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">
                                    <i class="fas fa-pen"></i> 
                                </a>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin mengapus ?')">
                                        <i class="fas fa-trash"></i> 
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


{{-- MODAL --}}
<div class="modal fade" id="basicModal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Tambah User Baru</h5>
              <button type="button" class="close" data-dismiss="modal"><span>×</span>
              </button>
          </div>
          <form action="{{ route ('user.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <label for="name">Nama User</label>
                <input type="text" name="name" id="name" class="form-control form-control" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control form-control" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control form-control" required>
                <label for="password">Level</label>
                <select name="level" class="form-control">
                    <option value="0" class="form-control">Kasir</option>
                    <option value="1" class="form-control">Admin</option>
                </select>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
      </div>
  </div>
</div>
@endsection