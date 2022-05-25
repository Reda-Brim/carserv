@extends('dashboard.admin.layouts.admin-dash-layout')

@section('title','Admin dashboard')


@section('content')

<section class="text-center text-lg-start">

    <!-- Jumbotron -->
    <div class="container py-4 ">
      <div class="card cascading-right" style=" Width:70%;
      background: hsla(0, 0%, 100%, 0.55);
      backdrop-filter: blur(30px);
      ">
    
      <div class="card-body p-3 shadow-5 text-center ">
        
        
     
        <h1 class="border-bottom pb-2 mb-4">Nouveau client</h1>
      
    
      <form action="{{route('user.create')}}" method="POST" autocomplete="off" >
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
        <!-- 2 column grid layout with text inputs for the first and last names -->
  
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" name="prenom" class="form-control" placeholder="Entrer prenom" value="{{old ('prenom')}}" >
              <label class="form-label" for="prenom">Prénom</label>
              <span class="text-danger">@error('prenom'){{$message}}@enderror</span>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" name="nom" class="form-control" placeholder="Entrer nom" value="{{old ('nom')}}"/>
              <label class="form-label" for="nom">Nom</label>
              <span class="text-danger">@error('nom'){{$message}}@enderror</span>
            </div>
          </div>
  
  
        </div>
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" name="cin" class="form-control" placeholder="Entrer cin" value="{{old ('cin')}}" >
              <label class="form-label" for="cin">Cin</label>
              <span class="text-danger">@error('cin'){{$message}}@enderror</span>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" name="telephone" class="form-control" placeholder="Entrer numero telephone" value="{{old ('phone')}}"/>
              <label class="form-label" for="telephone">Numéro de téléphone</label>
              <span class="text-danger">@error('telephone'){{$message}}@enderror</span>
            </div>
          </div>
        </div>
  
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="text" name="email" class="form-control" placeholder="Entrer email address" value="{{old ('email')}}" >
          <label class="form-label" for="email">Adresse Email</label>
          <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
  
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" name="password" class="form-control" placeholder="Entrer password" value="{{old ('password')}}">
          <label class="form-label" for="password">Mot de passe</label>
          <span class="text-danger">@error('password'){{$message}}@enderror</span>
        </div>
        <div class="form-outline mb-4">
          <input type="password" name="cpassword" class="form-control" placeholder="Entrer confirm password" value="{{old ('cpassword')}}">
          <label class="form-label" for="cpassword">Confirmer Mot de passe</label>
          <span class="text-danger">@error('cpassword'){{$message}}@enderror</span>
        </div>
  
  
        <!-- Submit button -->
        <div class="d-flex justify-content-end mb-4" >
        <button type="submit" class="  btn btn-primary mb-4 btn-lg ">
          
        Ajouter
        </button>
        <button type="submit" class=" btn btn-danger mb-4 btn-lg ">
          
          Annuler
          </button>
        </div>
    
  
        <!-- Register buttons -->
      </form>
    </div>
  </div>
  </div>
    <!-- Jumbotron -->
  </section>

@endsection