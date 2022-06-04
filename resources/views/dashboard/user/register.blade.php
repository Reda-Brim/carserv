<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <title>user register</title>

</head>
<body>
<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">S'inscrire</h2>
              <form action="{{route('user.create')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
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
                      <label class="form-label" for="prenom">Prenom</label>
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
                      <label class="form-label" for="telephone">Telephone</label>
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
                <div class="form-outline mb-4">
                  <input type="file" name="picture" class="form-control" placeholder="picture" value="{{old ('picture')}}">
                  <label class="form-label" for="picture">image</label>
                  <span class="text-danger">@error('picture'){{$message}}@enderror</span>
                </div>
  

  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  
                S'inscrire
                </button>
  
                <!-- Register buttons -->
                <div class="text-center">
                  <P>Vous avez deja un compte ? <a href="{{Route('user.login')}}">Se connecter</a></P>
 
                </div>
              </form>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="{{asset('welcome/img/location.jpg')}}" class="w-100 rounded-4 shadow-4"
            alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block --> 
</body>
</html>