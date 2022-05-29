@extends('dashboard.admin.layouts.admin-dash-layout')

@section('title','Admin dashboard')


@section('content')


<div class="content" style=" background: hsla(0, 0%, 100%, 0.55);margin-left: 25%; margin-right:25%">
  <div class="card-header ">
      <h4 ><strong>Nouveau Client</strong> <a href="{{route('admin.Listes_des_clients')}}" class="btn btn-danger float-right">Retour</a></h4>
      
    </div>
  <div class="card-body p-5 shadow-5 text-center" >
   
  
      
      <form action="{{route('user.create')}}" method="POST" autocomplete="off">
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
                  <input type="text" name="prenom" class="form-control" placeholder="Prenom" value="{{old ('prenom')}}">
                  <label class="form-label" for="prenom">Prénom</label>
                  <span class="text-danger">@error('prenom'){{$message}}@enderror</span>
                </div>
              </div>
  
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{old ('nom')}}"/>
              <label class="form-label" for="nom">Nom</label>
              <span class="text-danger">@error('nom'){{$message}}@enderror</span>
            </div>
          </div>
  
  
        </div>
        
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="cin" name="cin" class="form-control" placeholder="cin" >
              <label class="form-label" for="cin">CIN</label>
              <span class="text-danger">@error('cin'){{$message}}@enderror</span>
            </div>

            </div>
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" name="telephone" class="form-control" placeholder="telephone" value="{{old ('telephone')}}"/>
              <label class="form-label" for="telephone">Telephone</label>
              <span class="text-danger">@error('telephone'){{$message}}@enderror</span>
           </div>
          </div>

        </div>

        <div class="form-outline  mb-4">
          <input type="email" name="email" class="form-control" placeholder="email" value="{{old ('email')}}" >
          <label class="form-label" for="email">email</label>
          <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="password" name="password" class="form-control" placeholder="password" value="{{old ('password')}}"/>
              <label class="form-label" for="password">Password</label>
              <span class="text-danger">@error('password'){{$message}}@enderror</span>
            </div>
          </div>
        

          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="password" name="cpassword" class="form-control" placeholder="confirm password" value="{{old ('cpassword')}}"/>
              <label class="form-label" for="cpassword">confirm password</label>
              <span class="text-danger">@error('cpassword'){{$message}}@enderror</span>
            </div>
          </div>
        </div>
        <div class="form-outline mb-4">
          <input type="file" name="picture" class="form-control" placeholder="picture" value="{{old ('picture')}}">
          <label class="form-label" for="picture">image</label>
          <span class="text-danger">@error('picture'){{$message}}@enderror</span>
        </div>
  
  
  
        <!-- Submit button -->
        <div class="form-group mb-3 ">
         
          <button type="submit" class="btn btn-primary float-left">Ajouter client</button>
  
      </div>
  
  
  
      </form>
    </div>
  
  </div>








@endsection
