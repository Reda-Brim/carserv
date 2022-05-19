@extends('dashboard.admin.layouts.admin-dash-layout')

@section('title','Admin dashboard')


@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <thead>
      <tr>

        <th>Cin</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>telephone</th>
        <th>email</th>
        
      </tr>
     
    </thead>
    <tbody>
      {{-- @foreach ($users as $user)
          
      
      <tr>
        <td>{{$users->cin}}</td>
        <td>{{$users->prenom}}</td>
        <td>{{$users->nom}}</td>
        <td>{{$users->telephone}}</td>
        <td>{{$users->email}}</td>
      </tr>
      @endforeach --}}
    </tbody>
    
  </div>
  <!-- /.card-body -->
</div>

@endsection