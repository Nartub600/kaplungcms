@extends('admin/template')

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
    $("#data-table").DataTable();
  });
</script>
@endsection

@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">@yield('table-title')</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="data-table" class="table table-bordered table-striped">
      <thead>
      <tr>
        @yield('row-titles')
      </tr>
      </thead>
      <tbody>
        @yield('table-rows')
      </tbody>
      <tfoot>
      <tr>
        @yield('row-titles')
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection
