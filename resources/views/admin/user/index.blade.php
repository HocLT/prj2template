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
          <li class="breadcrumb-item active">Users</li>
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
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 10%">Id</th>
                  <th style="width: 20%">Username</th>
                  <th style="width: 20%">Full name</th>
                  <th style="width: 10%">Phone</th>
                  <th style="width: 10%" class="text-center">Role</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
            @foreach($users as $item)
              <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->phone }}</td>
                  <td class="project-state">
                    @if ($item->role != null && $item->role == 1)
                        <span class="badge badge-danger">Admin</span>
                    @else 
                      <span class="badge badge-success">User</span>
                    @endif
                  </td>
                  <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="#">
                          <i class="fas fa-folder">
                          </i>
                          View
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ Route('admin.user.edit', $item->id) }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <form action="{{ Route('admin.user.destroy', $item->id) }}" method="post" style="display:inline-block">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </button>
                      </form>
                  </td>
              </tr>
            @endforeach
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
@endsection