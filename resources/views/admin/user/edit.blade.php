@extends('admin.layout.layout')

@section('contents')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Users</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ Route('admin.home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ Route('admin.user.index') }}">Users</a></li>
          <li class="breadcrumb-item active">Edit User</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Users</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body p-0">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Create new User</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <form action="{{ Route('admin.user.update', $user->id) }}" method="post" class="card-body">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{ $user->id }}"/>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control" value="{{ $user->password }}">
            </div>
            <div class="form-group">
              <label for="confirm">Confirm Password</label>
              <input type="password" id="confirm" name="confirm" class="form-control" value="{{ $user->password }}">
            </div>
            <div class="form-group">
              <label for="name">Full name</label>
              <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" id="phone" name="phone" class="form-control" value="{{ $user->phone }}">
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <select id="role" name="role" class="form-control custom-select">
                <option value="1" {{ $user->role!=null && $user->role==1 ? 'selected' : ''}}>Admin</option>
                <option value="2" {{ $user->role!=null && $user->role==2 ? 'selected' : ''}}>User</option>
              </select>
            </div>
            <input type="submit" value="Update" class="btn btn-success">
          </form>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
@endsection