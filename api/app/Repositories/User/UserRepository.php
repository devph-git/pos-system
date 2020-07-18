<?php

namespace App\Repositories\User;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface{

    const SUCESS_STATUS_CODE = 200;
    const UNAUTHORISED_STATUS_CODE = 401;

    
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $response = $user->createToken('Ekko Token')->accessToken; 
            $data = ['user' =>$user,'access_token'=>$response,'message' => 'Success'];
            $statusCode = self::SUCESS_STATUS_CODE;
        } 
        else{ 
            $data = ['Error'=>'Unathorized'];
           $statusCode = self::UNAUTHORISED_STATUS_CODE; 
        } 
        return $this->response($data,$statusCode);
    }

    

    public function register(Request $request)
    {
        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('Ekko Token')->accessToken; 
        $success['name'] =  $user->name;
        return $this->response($success, self::SUCESS_STATUS_CODE); 
    }

    public function response($data, int $statusCode) {
        $response = ["data"=>$data, "statusCode"=>$statusCode];
        return $response;
    }

   
     
    public function details() 
    { 
        $user = Auth::user(); 
        return $this->response($user, self::SUCESS_STATUS_CODE); 
    } 
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return $this->response(['message' => 'Successfully logged out'], self::SUCESS_STATUS_CODE);
    }
    
}








?>