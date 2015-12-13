@extends('admin/template')

@section('title', 'Usuarios')

@section('extra-stylesheet')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset ("vendor/adminlte/plugins/datatables/dataTables.bootstrap.css") }}">
@endsection

@section('extra-scripts')
<!-- DataTables -->
<script src="{{ asset ("vendor/adminlte/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset ("vendor/adminlte/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>
<script>
  $(function () {
    $("#users-table").DataTable();
  });
</script>
@endsection

@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Usuarios Registrados</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="users-table" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Usuario</th>
        <th>Email</th>
        <th>Fecha Nac.</th>
      </tr>
      </thead>
      <tbody>
        @forelse ($users as $user)
            <tr>
              <td>{{ $user->firstname }}</td>
              <td>{{ $user->lastname }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->birthdate }}</td>
            </tr>
        @empty
            <p>No hay usuarios registrados</p>
        @endforelse
      </tbody>
      <tfoot>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Usuario</th>
        <th>Email</th>
        <th>Fecha Nac.</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection
