@extends('admin/table-template')

@section('title', 'Changuitos')
@section('table-title', 'Changuitos Desbloqueados')

@section('row-titles')
<th>Usuario</th>
<th>Changuito</th>
<th>Fecha</th>
@endsection

@section('table-rows')
  @forelse ($users as $user)
      @foreach ($user->avatars as $avatar)
        <tr>
          <td>{{ $user->email }}</td>
          <td>{{ $avatar->name }}</td>
          <td>{{ $avatar->created_at }}</td>
        </tr>
      @endforeach
  @empty
      <p>No hay changuitos registrados</p>
  @endforelse
@endsection
