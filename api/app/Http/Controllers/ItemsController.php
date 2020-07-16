<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Repositories\Items\ItemsRepositoryInterface;

class ItemsController extends Controller
{
     protected $itemsRepository;
     
    public function __construct(ItemsRepositoryInterface $itemsRepository)
    {
      $this->itemsRepository = $itemsRepository;
    }

   /**
     * @OA\GET(
     ** path="/api/items",
     *   tags={"Show List Operation "},
     *   operationId="list",
     *   security={
     *   {"passport": {}},
     *   },
     * 
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *      description="Unathorized found"
     *   ),
     *      @OA\Response(
     *          response=403,
     *          description="Access forbidden Entity"
     *      )
     *)
     **/

    public function index(){
      $response = $this->itemsRepository->all();
      return response()->json($response['data'],$response['statusCode']);
    }
   
    /**
     * @OA\Post(
     ** path="/api/add",
     *   tags={"Add Operation"},
     *   summary="Add an item",
     *   operationId="register",
     *
     *  @OA\Parameter(
     *      name="user_id",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *  @OA\Parameter(
     *      name="name",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *   @OA\Parameter(
     *      name="amount",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *      @OA\Parameter(
     *      name="stocks_available",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
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

    public function store(ItemRequest $request){
      $response = $this->itemsRepository->store($request);
      return response()->json($response['data'],$response['statusCode']);
   }

   /**
     * @OA\GET(
     ** path="/api/show/{id}",
     *   tags={"Show Item"},
     *   operationId="items",
     *   security={
     *   {"passport": {}},
     *   },
     *    *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
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
     *      description="Unathorized found"
     *   ),
     *      @OA\Response(
     *          response=403,
     *          description="Access forbidden Entity"
     *      )
     *)
     **/

    public function show(int $id){
        $response = $this->itemsRepository->show($id);
        return response()->json($response['data'],$response['statusCode']);
    }
  
     /**
     * @OA\POST(
     ** path="/api/delete/{id}",
     *   tags={"Delete Operation"},
     *   operationId="delete",
     *   security={
     *   {"passport": {}},
     *   },
     *    *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
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
     *      description="Unathorized access"
     *   ),
     *      @OA\Response(
     *          response=404,
     *          description="not found"
     *      )
     *)
     **/


    public function delete(int $id){
      $response = $this->itemsRepository->delete($id);
      return response()->json($response['data'],$response['statusCode']);
    }
   
 /**
     * @OA\PUT(
     ** path="/api/update/{id}",
     *   tags={"Update an item"},
     *   summary="update",
     *   operationId="update",
     *
     *  @OA\Parameter(
     *      name="user_id",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *  @OA\Parameter(
     *      name="name",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *   @OA\Parameter(
     *      name="amount",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *      @OA\Parameter(
     *      name="stocks_available",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
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
    
    public function update(ItemRequest $request,int $id){
      $response = $this->itemsRepository->update($request,$id);
      return response()->json($response['data'],$response['statusCode']);
   }


}
