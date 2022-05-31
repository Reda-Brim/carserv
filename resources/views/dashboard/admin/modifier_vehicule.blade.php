@extends('dashboard.admin.layouts.admin-dash-layout')

@section('title','Admin dashboard')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>
                       Modifier Vehicule 
                        <a href="{{route('admin.Liste_vehicules')}}" class="btn btn-danger float-right">Retour</a>                      
                    </h4>                   
                </div>
                <div class="card-body">
                    <form action="{{route('admin.editer_vehicule')}}" method="POST" enctype="multipart/form-data">
                        @if(Session::get('succes'))
                        <div class="alert alert-success">
                          {{Session::get('succes')}}
                        </div>
                        @endif
                        @if(Session::get('echec'))
                        <div class="alert alert-danger">
                          {{Session::get('echec')}}
                        </div>
                        @endif
                        @csrf
                        <input type="hidden" name="cid" value="{{$Info->id}}">
                        <div class="form-group mb-3">
                            <label for="matricule">Matricule </label>
                            <input type="text" name="matricule" class="form-control" value="{{$Info->matricule}}">
                            <span style="color:red">@error('matricule'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="anneeModele">Année Modele</label>
                            <input type="text" name="AnneeModele" class="form-control" value="{{$Info->AnneeModele}}">
                            <span style="color:red">@error('AnneeModele'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Puissance">Puissance</label>
                            <input type="text" name="Puissance" class="form-control" value="{{$Info->Puissance}}">
                            <span style="color:red">@error('Puissance'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="CoutParJour">Cout Par Jour</label>
                            <input type="text" name="CoutParJour" class="form-control" value="{{$Info->CoutParJour}}">
                            <span style="color:red">@error('CoutParJour'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="modele">Modele</label>
                            <input type="text" name="Modele" class="form-control" value="{{$Info->Modele}}">
                            <span style="color:red">@error('Modele'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="carburant">Carburant </label>
                            <input type="text" name="Carburant" class="form-control" value="{{ $Info->Carburant }}">
                            <span style="color:red">@error('Carburant'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="voitureImage" >Voiture image</label>
                            <input type="file" name="voitureImage"  class="form-control" value="{{ $Info->voitureImage }}">
                            <span style="color:red">@error('voitureImage'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Appliquer modification </button>

                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection