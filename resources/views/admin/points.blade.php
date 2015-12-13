@extends('admin/table-template')

@section('title', 'Puntos')
@section('table-title', 'Puntos Registrados')

@section('row-titles')
<th>Email</th>
<th>Valor</th>
<th>Fecha</th>
<th>ID Transac.</th>
@endsection

@section('table-rows')
@forelse ($points as $point)
    <tr>
      <td>{{ $point->user->email }}</td>
      <td>{{ $point->value }}</td>
      <td>{{ $point->created_at }}</td>
      <td>{{ $point->ecommerce_transaction_id }}</td>
    </tr>
@empty
    <p>No hay puntos registrados</p>
@endforelse
@endsection
