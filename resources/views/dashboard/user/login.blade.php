<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <title>user login</title>

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
              <h2 class="fw-bold mb-5">Se connecter</h2>
              <form action="{{route('user.check')}}" method="POST" autocomplete="off">

                @if(Session::get('fail'))
                <div class="alert alert-danger">
                  {{Session::get('fail')}}
                </div>
                @endif

                @csrf

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

             

  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  
                  Connexion
                </button>
  
                <!-- Register buttons -->
                <div class="text-center">
                  <P>Vous n'avez pas un compte ? <a href="{{Route('user.register')}}">S'inscrire</a></P>
 
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