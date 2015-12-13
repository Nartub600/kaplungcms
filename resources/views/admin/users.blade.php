@extends('admin/table-template')

@section('title', 'Usuarios')
@section('table-title', 'Usuarios Registrados')

@section('row-titles')
<th>Nombre</th>
<th>Apellido</th>
<th>Usuario</th>
<th>Email</th>
<th>Fecha Nac.</th>
@endsection

@section('table-rows')
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
@endsection
