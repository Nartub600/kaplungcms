@extends('admin/table-template')

@section('title', 'Beneficios')
@section('table-title', 'Beneficios Registrados')

@section('row-titles')
<th>Usuario</th>
<th>Desc.</th>
<th>Consumido</th>
<th>Fecha</th>
@endsection

@section('table-rows')
  @forelse ($users as $user)
      @foreach ($user->benefits as $benefit)
        <tr>
          <td>{{ $user->email }}</td>
          <td>{{ $benefit->description }}</td>
          <td>{{ $benefit->pivot->consumed ? 'Si' : 'No' }}</td>
          <td>{{ $benefit->created_at }}</td>
        </tr>
      @endforeach
  @empty
      <p>No hay puntos registrados</p>
  @endforelse
@endsection
