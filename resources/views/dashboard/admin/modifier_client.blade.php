@extends('dashboard.admin.layouts.admin-dash-layout')

@section('title','Admin dashboard')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>
                       Modifier Client 
                        <a href="{{route('admin.Listes_des_clients')}}" class="btn btn-danger float-right">Retour</a>                      
                    </h4>                   
                </div>
                <div class="card-body">
                    
                    <form action="{{route('admin.editer_client')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
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
                        <input type="hidden" name="cid" value="{{$Info_client->id}}">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text" name="prenom" class="form-control" placeholder="Entrer prenom" value="{{$Info_client->prenom}}" >
                                <label class="form-label" for="prenom">Prenom</label>
                                <span class="text-danger">@error('prenom'){{$message}}@enderror</span>
                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text" name="nom" class="form-control" placeholder="Entrer nom" value="{{$Info_client->nom}}"/>
                                <label class="form-label" for="nom">Nom</label>
                                <span class="text-danger">@error('nom'){{$message}}@enderror</span>
                              </div>
                            </div>
          
          
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text" name="cin" class="form-control" placeholder="Entrer cin" value="{{$Info_client->cin}}" >
                                <label class="form-label" for="cin">Cin</label>
                                <span class="text-danger">@error('cin'){{$message}}@enderror</span>
                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text" name="telephone" class="form-control" placeholder="Entrer numero telephone" value="{{$Info_client->telephone}}"/>
                                <label class="form-label" for="telephone">Telephone</label>
                                <span class="text-danger">@error('telephone'){{$message}}@enderror</span>
                              </div>
                            </div>
                          </div>
            
                          <!-- Email input -->
                          <div class="form-outline mb-4">
                            <input type="text" name="email" class="form-control" placeholder="Entrer email address" value="{{$Info_client->email}}" >
                            <label class="form-label" for="email">Adresse Email</label>
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                          </div>
            
                          <!-- Password input -->
                          <div class="form-outline mb-4">
                            <input type="password" name="password" class="form-control" placeholder="Entrer nouveau mot de passe" value="{{$Info_client->password}}" >
                            <label class="form-label" for="password">Mot de passe</label>
                            <span class="text-danger">@error('password'){{$message}}@enderror</span>
                          </div>
          
                          <div class="form-outline mb-4">
                            <input type="password" name="cpassword" class="form-control" placeholder="confirmer nouveau mot de passe password" value="{{$Info_client->password}}" >
                            <label class="form-label" for="cpassword">Confirmer Mot de passe</label>
                            <span class="text-danger">@error('cpassword'){{$message}}@enderror</span>
                          </div>
                          <div class="form-group mb-3">
                            <label for="picture" >image client</label>
                            <input type="file" name="picture"  class="form-control" value="{{$Info_client->picture}}">
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