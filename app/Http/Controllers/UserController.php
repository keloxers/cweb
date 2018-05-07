<?php

namespace App\Http\Controllers;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;
use Caffeinated\Shinobi\Facades\Shinobi;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      if (!Shinobi::can('users.index')) {
        session(['status' => 'No tiene acceso para ingresar a este modulo']);
        return view('home');
      }


      // // verifica el rol FUNCIONA
      // if (!Auth::user()->isRole('admin')) {
      //     echo 'No tiene acceso a este modulo';
      // }


      // // verifica si posee el permiso
      // if ( !Auth::user()->can('users.index')){
      //   echo "No tiene acceso a este modulo";
      //   die;
      // }


        $users = User::paginate(30);
        $title = "Usuarios";
        return view('users.index', ['users' => $users, 'title' => $title ]);


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      if (!Shinobi::can('users.index')) {
        session(['status' => 'No tiene acceso para ingresar a este modulo']);
        return view('home');
      }


      $user = User::find($id);
      $title = "Usuario";
      return view('users.show', ['user' => $user,'title' => $title]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      if (!Shinobi::can('users.index')) {
        session(['status' => 'No tiene acceso para ingresar a este modulo']);
        return view('home');
      }


      $user = User::find($id);
      $title = "Usuario";
      return view('users.edit', ['user' => $user,'title' => $title]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      if (!Shinobi::can('users.index')) {
        session(['status' => 'No tiene acceso para ingresar a este modulo']);
        return view('home');
      }

      $recibe_memo=1;
      if($request->recibe_memo=="") {
        $recibe_memo=0;
      };


      $user = User::find($id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->recibe_memo = $recibe_memo;
      $user->save();
      return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      if (!Shinobi::can('users.index')) {
        session(['status' => 'No tiene acceso para ingresar a este modulo']);
        return view('home');
      }


      $user = User::find($id);
      $user->delete();

      return redirect('/users');
    }

    /*
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function finder(Request $request)
   {
       //
       if (!Shinobi::can('users.index')) {
         session(['status' => 'No tiene acceso para ingresar a este modulo']);
         return view('home');
       }


       $users = User::where('name', 'like', '%'. $request->buscar . '%')->paginate(15);
       $title = "Usuario: buscando " . $request->buscar;
       return view('users.index', ['users' => $users, 'title' => $title ]);

   }


   public function search(Request $request){


        $term = $request->term;
          $datos = User::where('name', 'like', '%'. $request->term . '%')
                       ->where('activo', true)
                       ->get();
        $adevol = array();
        if (count($datos) > 0) {
            foreach ($datos as $dato)
                {
                    $adevol[] = array(
                        'id' => $dato->id,
                        'value' => $dato->name,
                    );
            }
        } else {
                    $adevol[] = array(
                        'id' => 0,
                        'value' => 'no hay coincidencias para ' .  $term
                    );
        }
         return json_encode($adevol);
    }


    public function searchmemo(Request $request){


         $term = $request->term;
           $datos = User::where('name', 'like', '%'. $request->term . '%')
                        ->where('activo', true)
                        ->where('recibe_memo', true)
                        ->get();

         $adevol = array();
         if (count($datos) > 0) {
             foreach ($datos as $dato)
                 {
                     $adevol[] = array(
                         'id' => $dato->id,
                         'value' => $dato->name,
                     );
             }
         } else {
                     $adevol[] = array(
                         'id' => 0,
                         'value' => 'no hay coincidencias para ' .  $term
                     );
         }
          return json_encode($adevol);
     }






}
