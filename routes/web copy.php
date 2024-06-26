<?php

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return "Hello Word";
});


// Route::get('/etudiant', function (Request $request) {
//     // dump($request);
//     $name = $request->input("name","toyi");
//     $age = $request->input("age",1);
//     return "Etudiant $name et il a $age";
// });


Route::get('/etudiant/{id}/{name}', function (int $id, string $name) {
    return "Etudiant N° $id - $name";
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


Route::get('/etudiants', function () {
    return "Liste des etudiants";
});


Route::get('users',function(){
    // DB::table('users')->insert([
    //     'nom'=>'TOYI',
    //     'prenom'=>'Francois',
    //     'email'=>'francoistoyi4@gmail.com',
    //     'contact'=>'93516499',
    //     'statut'=>'admin',
    //     'password'=>'pwd'
    // ]);

    $users = DB::table('users')->get();
    return "La listes des utilisateurs : $users";

});

Route::get('/entreprises', function(){
    $entreprises =[
        [
            "nom"=>" ifnti",
            "pays"=> "togo",
            "ville"=>"sokode",
            "quartier"=>"Komah",
            "adresse"=>"komah plage",
            "user_id"=>1,
        ],
        [
            "nom"=>"togocel",
            "pays"=> "maroc",
            "ville"=>"marakech",
            "quartier"=>"Komah",
            "adresse"=>"komah plage",
            "user_id"=>2,
        ],
        [
            "nom"=>"societe generale",
            "pays"=> "togo",
            "ville"=>"kara",
            "quartier"=>"Komah",
            "adresse"=>"komah plage",
            "user_id"=>1,
        ],
        [
            "nom"=>"societe generale",
            "pays"=> "togo",
            "ville"=>"sokode",
            "quartier"=>"Komah",
            "adresse"=>"komah plage",
            "user_id"=>2,
        ],
        [
            "nom"=>"societe generale",
            "pays"=> "togo",
            "ville"=>"lome",
            "quartier"=>"Komah",
            "adresse"=>"komah plage",
            "user_id"=>1,
        ]


    ];
    foreach($entreprises as $entre){


    // $entreprise = new Entreprise;
    // $entreprise->nom=$entre["nom"];
    // $entreprise->pays=$entre["pays"];
    // $entreprise->ville=$entre["ville"];
    // $entreprise->quartier=$entre["quartier"];
    // $entreprise->adresse=$entre["adresse"];
    // $entreprise->user_id=$entre["user_id"];
    // $entreprise->save();
    }

    $une_entreprise = Entreprise::find(2);
    // $une_entreprise->delete();
    dump($une_entreprise);

    $user = User::find(1);
    dump($user->entreprises);
    dump(Entreprise::where("user_id",$user->id)->get());

    return "liste des entreprises";
});
