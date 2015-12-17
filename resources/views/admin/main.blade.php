@extends('admin/template')

@section('title', 'Principal')

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>{{$usersCount}}</h3>
        <p>Usuarios registrados</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="{{action('Admin\MainController@users')}}" class="small-box-footer">Ver m&aacute;s <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-blue">
      <div class="inner">
        <h3>{{$benefitsCount}}</h3>
        <p>Beneficios</p>
      </div>
      <div class="icon">
        <i class="ion ion-star"></i>
      </div>
      <a href="{{action('Admin\MainController@benefits')}}" class="small-box-footer">Ver m&aacute;s <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>{{$pointsCount}}</h3>
        <p>Smile Points</p>
      </div>
      <div class="icon">
        <i class="ion ion-happy-outline"></i>
      </div>
      <a href="{{action('Admin\MainController@points')}}" class="small-box-footer">Ver m&aacute;s <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-purple">
      <div class="inner">
        <h3>{{$avatarsCount}}</h3>
        <p>Changuitos</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-personadd-outline"></i>
      </div>
      <a href="{{action('Admin\MainController@users')}}" class="small-box-footer">Ver m&aacute;s <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->
@endsection
