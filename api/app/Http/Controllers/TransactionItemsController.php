<?php

namespace App\Http\Controllers;

use App\Transaction_items;
use Illuminate\Http\Request;
use App\Http\Requests\TransactionItemRequest;
use App\Repositories\TransactionItem\TransactionItemInterface;

class TransactionItemsController extends Controller
{

    protected $transactionItem;

    public function __construct(TransactionItemInterface $transactionItem)
    {
     $this->transactionItem = $transactionItem;
    }
    
     
    /**
     * @OA\GET(
     ** path="/api/transaction/items",
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

     
    public function index()
    {
        $response = $this->transactionItem->all();
        return response($response['data'],$response['statusCode']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

     /**
     * @OA\Post(
     ** path="/api/transaction/items/create",
     *   tags={"Add Operation"},
     *   operationId="register",
     *   security={
     *   {"passport": {}},
     *   },
     *  @OA\Parameter(
     *      name="transaction_id",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *  @OA\Parameter(
     *      name="user_id",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *   @OA\Parameter(
     *      name="item_id",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *      @OA\Parameter(
     *      name="quantity",
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

    public function store(TransactionItemRequest $request)
    {
        $response = $this->transactionItem->create($request);
        return response()->json($response['data'],$response['statusCode']);
    }

    /**
     * @OA\GET(
     ** path="/api/transaction/items/show/{id}",
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

    public function show(int $id)
    {
        $response = $this->transactionItem->show($id);
        return response()->json($response['data'],$response['statusCode']);
    }

  
    public function edit(Transaction_items $transaction_items)
    {
        //
    }

    /**
     * @OA\PUT(
     ** path="/api/transaction/items/update/{id}",
     *   tags={"Update an item"},
     *   summary="update",
     *   operationId="update",
     *   security={
     *   {"passport": {}},
     *   },
     *  @OA\Parameter(
     *      name="transaction_id",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *  @OA\Parameter(
     *      name="user_id",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *   @OA\Parameter(
     *      name="item_id",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *      @OA\Parameter(
     *      name="quantity",
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

    public function update(TransactionItemRequest $request , int $id)
    {
        $response = $this->transactionItem->update($request,$id);
        return response()->json($response['data'],$response['statusCode']);
    }

  
   
     /**
     * @OA\POST(
     ** path="/api/transaction/items/delete/{id}",
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


    public function destroy(int $id)
    {
        $response = $this->transactionItem->delete($id);
        return response()->json($response['data'],$response['statusCode']);
    }
}
