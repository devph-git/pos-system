<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller 
{
    
    protected $userRepository;
    
    public function __construct(UserRepositoryInterface $userRepository){
        $this->userRepository = $userRepository;
    }
     
     /**
     * @OA\Post(
     ** path="/api/login",
     *   tags={"Login"},
     *   summary="Login",
     *   operationId="Login",
     *
     *  @OA\Parameter(
     *      name="email",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *   @OA\Parameter(
     *      name="password",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/

    public function login(UserLoginRequest $request)
    { 
      $response = $this->userRepository->login($request);
      return response()->json($response["data"] ,$response["statusCode"]);
    }
    
    /**
     * @OA\Post(
     ** path="/api/register",
     *   tags={"Register a user"},
     *   summary="Register",
     *   operationId="register",
     *
     *  @OA\Parameter(
     *      name="name",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *  @OA\Parameter(
     *      name="email",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *   @OA\Parameter(
     *      name="password",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *      @OA\Parameter(
     *      name="confirm_password",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity"
     *      )
     *)
     **/
    
    public function register(UserRegisterRequest $request) 
    { 
       $response = $this->userRepository->register($request);
       return response()->json($response['data'] , $response['statusCode']);
    }
   
      /**
     * @OA\GET(
     *      path="/api/details",
     *      operationId="details",
     *      tags={"User"},
     * security={
     *  {"passport": {}},
     *   },
     *      summary="Get information of user",
     *      description="Return user",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */

    public function details() 
    { 
        $response = $this->userRepository->details();
        return response($response["data"] ,$response["statusCode"]); 
    } 
    
      /**
     * @OA\POST(
     *      path="/api/logout",
     *      operationId="Logout",
     *      tags={"User logout"},
     * security={
     *  {"passport": {}},
     *   },
     *      summary="Logout user ",
     *      description="Logout user from system",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */


    public function logout(Request $request){
        $response = $this->userRepository->logout($request);
        return response()->json($response['data'],$response['statusCode']);
    }
    
}
?>