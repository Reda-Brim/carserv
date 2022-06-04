<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title> Impression clients</title>
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <style>
  .ff{
    color: #31968e;
    text-shadow: 3px 2px #000;
    text-decoration: underline double #e4087e;
}
  .monBoutton {
    background-color: blue;
    Color:white;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer; 
    box-shadow: 0 8px 16px 0 grey;
    text-decoration: none;
    margin-left: 90%;
  }

  @media print{
    #imprimer{
        display: none;
    }
  }
  </style>
  </head>
  <body>
      <div class="col-12">
            <br>
    <img src="{{ asset('/uploads/logo.jpg')}}" alt="logo" />  <center> <i><h1 class="ff">Liste des clients</h1></i></center><br><br>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
              <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
              <thead>
              <tr>
                <th class= "table-secondary" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" >Image client</th>
                <th class="table-success" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">cin</th>
                <th class="table-warning" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >Prénom</th>
                <th class="table-danger" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" >Nom</th>
                <th class="table-info" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" >Téléphone</th>
                <th class="table-secondary" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" >email</th>
        
              </tr>
              </thead>
              <tbody>
              @foreach ($users as $user)
              <tr>
                <td>
                  <img src="{{ asset('/uploads/Clients/'.$user->picture)}}"  width="70px" height="70px" alt="Image">
                </td>
                <td>{{$user->cin}}</td>
                <td>{{$user->prenom}}</td>
                <td>{{$user->nom}}</td>
                <td>{{$user->telephone}}</td>
                <td>{{$user->email}}</td>    

              </tr>    
              @endforeach

              </tbody>

            </table> </div></div>
           </div>
          </div>
          <!-- /.card-body -->
        </div>

<!--  bouton imprimer-->

        <button id='imprimer' onclick="window.print()" class="monBoutton" class="fa fa-print" ><i  ></i>Imprimer  </button>

          <br><br>
        <!-- /.card -->

      </body>
</html>