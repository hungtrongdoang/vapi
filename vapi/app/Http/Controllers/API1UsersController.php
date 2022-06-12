<?php

namespace App\Http\Controllers;

use App\Models\API1Users;
use Illuminate\Http\Request;
use App\CustomClasses\CustomHeaderAuth;
use Exception;

class API1UsersController extends Controller
{

    public function show(Request $request,$id)        //POST
    {
        if($request->hasHeader('Authorization-Token') && $request->header('Authorization-Token')!="" )
        {
            $user = new CustomHeaderAuth($request->header('Authorization-Token'));
            //$validuser = API5Users::where('username',$user->getUsername())->where('password',$user->getPassword())->where('id',$id)->count();
            $validuser = API1Users::where('username',$user->getUsername())->where('password',$user->getPassword())->count();

            if($validuser>0)
            {
                return API1Users::find($id);
            }
            else
            {
                return response(json_encode(array("success"=>"false","cause"=>"usernameOrPasswordIncorrect")), 403)
                ->header('Content-Type', 'application/json');
            }

        }

        return response(json_encode(array("success"=>"false","cause"=>"authHeaderNotSet")), 403)
            ->header('Content-Type', 'application/json');
    }

    public function store(Request $request)
    {
            return API1Users::create(json_decode($request->getContent(), true));  
    }

    public function update(Request $request, $id)
    {

        if($request->hasHeader('Authorization-Token') && $request->header('Authorization-Token')!="" )
        {
            $user = new CustomHeaderAuth($request->header('Authorization-Token'));
            $validuser = API1Users::where('username',$user->getUsername())->where('password',$user->getPassword())->count();
            //$validuser = API5Users::where('username',$user->getUsername())->where('password',$user->getPassword())->where('id',$id)->count();
            if($validuser>0)
            {
                $user = API1Users::findorFail($id);
                $user->update($request->all());

                return $user;
            }
            else
            {
                return response(json_encode(array("success"=>"false","cause"=>"usernameOrPasswordIncorrect")), 401)
                ->header('Content-Type', 'application/json');
            }

        }

        return response(json_encode(array("success"=>"false","cause"=>"authHeaderNotSet")), 403)
            ->header('Content-Type', 'application/json');
    }


}




    // public function store(Request $request)
    // {
    //     // try
    //     // {
    //         return API1Users::create(json_decode($request->getContent(), true));
    //     // }
    //     // catch(Exception $e)
    //     // {
    //     //     return response(json_encode($e),400)
    //     //         ->header('Content-Type', 'application/json');
    //     // }

    //     // return response(json_encode(array("success"=>"false")),400)
    //     //     ->header('Content-Type', 'application/json');
    // }