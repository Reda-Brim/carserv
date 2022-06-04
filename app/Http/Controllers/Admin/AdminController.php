<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\User;
use App\Models\Vehicule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;

use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    function check(Request $request){
        $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email is not exists in admins table'
         ]);

         $creds = $request->only('email','password');

         if( Auth::guard('admin')->attempt($creds) ){
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('admin.login')->with('fail','Incorrect credentials');
        }
    }
    
    function logout(Request $request){

        Auth::guard('admin')->logout();
        return redirect('/');
    }

    //GESTION  DES CLIENTS
 
    function list_clients(Request $request){

        Auth::guard('admin');
        $users=user::all();
        return view('dashboard.admin.listes_des_clients')->with('users',$users);
    }


    public function modifier_client($id)
    {
                $row=DB::table('users')
               ->where('id',$id)
               ->first();
        $data=[
            'Info_client'=>$row
        ];
        
        return view('dashboard.admin.modifier_client',$data);
    }
    public function editer_client(Request $request){
        $id = $request->input('cid');
        $client = User::find($id);
        $request->validate([
            
  
            'cin'=>'required|max:10,'.$id,
            'prenom'=>'required|max:20',
            'nom'=>'required|max:20',
            'telephone'=>'required|max:10',
            'picture'=>'nullable',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);
        
      
    //    $vehicule = Vehicule::find($id);
       $client->cin = $request->input('cin');
       $client->prenom = $request->input('prenom');
       $client->nom = $request->input('nom') ;
       $client->telephone = $request->input('telephone') ;
       $client->email = $request->input('email') ;
       $client->password = $request->input('password') ;
       
       if($request->hasfile('picture'))
        {
            $picture = $request->input('picture') ;
            $destination = 'uploads/Clients/'.$picture;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/Clients/', $filename);
            $client->picture= $filename;
        }
        $client->update();
        return Redirect('admin/Listes_des_clients');

    //   $email = $request->input('email') ;

    //   $data=array('cin'=>$cin,'prenom'=>$prenom,'nom'=>$nom,'telephone'=>$telephone,'email'=>$email,'password'=>$password,'picture'=>$picture);
    //   DB::table('users')->where('id',$request->input('cid'))->update($data);
    //   DB::table('users')->update($data);
     

    
        // $updating=DB::table('users')
        //             ->where('id',$request->input('cid'))
        //             ->update([
        //                 'cin'=>$request->input('cin'),
        //                 'prenom'=>$request->input('prenom'),
        //                 'nom'=>$request->input('nom'),
        //                 'telephone'=>$request->input('telephone'),
        //                 'email'=>$request->input('email'),
        //                 'password'=>$request->input('password'),
                        
        //                 'picture'=>$request->input('picture'),
        //             ]);
                
        
    }





    public function supprimer_client($id){

        $client=User::find($id);
        $destination='uploads/Clients/'.$client->picture;

        if(file::exists($destination)){
            file::delete($destination);
        }
        $client->delete();
        return Redirect('admin/Listes_des_clients');




        // $delete=DB::table('users')
        //           ->where('id',$id)
        //           ->delete();
                  

    }




      //GESTION  DES VEHICULES
    
    public function liste_vehicules(Request $request){
        $vehicules=Vehicule::all();
        return view('dashboard.admin.liste_vehicules')->with('vehicules' , $vehicules);

    }
    // public function Nouveau_vehicules(){
    //     return view('dashboard.admin.Nouveau_vehicules');

    // }

    public function create_vehicule(Request $request){
        $request->validate([
            'matricule'=>'required',
            'AnneeModele'=>'required',
            'Puissance'=>'required',
            'CoutParJour'=>'required',
            'Modele'=>'required',
            'Carburant'=>'required',
            'voitureImage'=>'required'


        ]);
        $vehicule=new Vehicule();
        $vehicule->matricule=$request->matricule;
        $vehicule->AnneeModele=$request->AnneeModele;
        $vehicule->Puissance=$request->Puissance;
        $vehicule->CoutParJour=$request->CoutParJour;
        $vehicule->Modele=$request->Modele;
        $vehicule->Carburant=$request->Carburant;

        if($request->hasfile('voitureImage'))
        {
            $file = $request->file('voitureImage');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/vehicules/', $filename);
            $vehicule->voitureImage = $filename;
        }
       
       
       

        $save_vehicule=$vehicule->save();
        if($save_vehicule){
            return redirect()->back()->with('succes','enregistré avec succès');

        }else
        {
            return redirect()->back()->with('echec','Quelque chose est mal passé, échec de l\'enregistrement');

        }

    }

    // public function create_vehicule(Request $request){
    //     $request->validate([
    //         'matricule'=>'required',
    //         'AnneeModele'=>'required',
    //         'Puissance'=>'required',
    //         'CoutParJour'=>'required',
    //         'Modele'=>'required',
    //         'Carburant'=>'required',
    //         'voitureImage'=>'nullable'

    //     ]);

    //     $vehicule = new Vehicule();
    //     $vehicule->matricule=$request->matricule;
    //     $vehicule->AnneeModele=$request->AnneeModele;
    //     $vehicule->Puissance=$request->Puissance;
    //     $vehicule->CoutParJour=$request->CoutParJour;
    //     $vehicule->Modele=$request->Modele;
    //     $vehicule->Carburant=$request->Carburant;
    //     $vehicule->voitureImage=$request->voitureImage;
    //     $save = $vehicule->save();

    //     if( $save ){
    //         return redirect()->back()->with('succes','enregistré avec succès');
    //     }else{
    //         return redirect()->back()->with('echec','Quelque chose est mal passé, échec de l\'enregistrement');
    //     }
    // }
    public function modifier_vehicule($id){
        $row=DB::table('vehicules')
               ->where('id',$id)
               ->first();
        $data=[
            'Info'=>$row
        ];     

         return view('dashboard.admin.modifier_vehicule',$data);      
    }
    public function editer_vehicule(Request $request){
        $id=$request->input('cid');
        $vehicule=Vehicule::find($id);
       
        $request->validate([
            'matricule'=>'required',
            'AnneeModele'=>'required',
            'Puissance'=>'required',
            'CoutParJour'=>'required',
            'Modele'=>'required',
            'Carburant'=>'required',
            'voitureImage'=>'nullable',
        ]);

        $vehicule->matricule=$request->input('matricule');
        $vehicule->AnneeModele=$request->input('AnneeModele');
        $vehicule->Puissance=$request->input('Puissance');
        $vehicule->CoutParJour=$request->input('CoutParJour');
        $vehicule->Modele=$request->input('Modele');
        $vehicule->Carburant=$request->input('Carburant');

         if($request->hasfile('voitureImage')){

            $voitureImage=$request->input('voitureImage');
            $destination='uploads/vehicules/'.$voitureImage;
            if(FILE::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file('voitureImage');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/vehicules/',$filename);
            $vehicule->voitureImage=$filename;

            
        }
        $vehicule->update();

        return Redirect('admin/Liste_vehicules');

        // $updating=DB::table('vehicules')
        //             ->where('id',$request->input('cid'))
        //             ->update([
        //                 $vehicule->matricule=>$request->input('matricule'),
        //                 'AnneeModele'=>$request->input('AnneeModele'),
        //                 'Puissance'=>$request->input('Puissance'),
        //                 'CoutParJour'=>$request->input('CoutParJour'),
        //                 'Modele'=>$request->input('Modele'),
        //                 'Carburant'=>$request->input('Carburant'),
        //                 'voitureImage'=>$request->input('voitureImage'),


        //             ]);
                 

    }
    public function supprimer_vehicule($id){

        $vehicule=Vehicule::find($id);
      
        $destination = 'uploads/vehicules/'.$vehicule->voitureImage;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $vehicule->delete();
        // $delete=DB::table('vehicules')
        //           ->where('id',$id)
        //           ->delete();
                  return Redirect('admin/Liste_vehicules');

    }

    function impression_clients(Request $request){

        Auth::guard('admin');
        $users=user::all();
        return view('dashboard.admin.impression_clients')-> with( compact('users'));
    }
    function impression_vehicules(Request $request){

        Auth::guard('admin');
        $vehicules=vehicule::all();
        return view('dashboard.admin.impression_vehicules')-> with( compact('vehicules'));
    }

    





    // function updateInfo(Request $request){

    // }
    
}
