<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Email;
use App\Consulta;

class HomeController extends Controller
{


    public function index()
    {
        return view('home');
    }



    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
                    'email' => 'required|unique:emails,email|max:125',

        ]);

        if ($validator->fails()) {
          foreach($validator->messages()->getMessages() as $field_name => $messages) {
            foreach($messages AS $message) {
                $errors[] = $message;
            }
          }
          return redirect()->back()->with('errors', $errors)->withInput();
          die;
        }


        $email = new Email;
        $email->email = $request->email;
        $email->save();


        return redirect('/');



    }



        public function consultas(Request $request)
        {

            $validator = Validator::make($request->all(), [
                        'name' => 'required|max:125',
                        'email' => 'required|max:125',
                        'subject' => 'required|max:175',

            ]);

            if ($validator->fails()) {
              foreach($validator->messages()->getMessages() as $field_name => $messages) {
                foreach($messages AS $message) {
                    $errors[] = $message;
                }
              }
              return redirect()->back()->with('errors', $errors)->withInput();
              die;
            }


            $consulta = new Consulta;
            $consulta->nombre = $request->name;
            $consulta->email = $request->email;
            $consulta->asunto = $request->subject;
            $consulta->consulta = $request->message;
            $consulta->save();


            return redirect('/');



        }




}
