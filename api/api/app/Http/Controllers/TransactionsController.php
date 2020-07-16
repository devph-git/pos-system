<?php

namespace App\Http\Controllers;

use App\Transactions;
use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;
use App\Repositories\Transaction\TransactionRepositoryInterface;

class TransactionsController extends Controller
{

    protected $TransactionRepository;

    public function __construct(TransactionRepositoryInterface $TransactionRepository)
    {
      $this->TransactionRepository = $TransactionRepository;    
    }
    
    
   /**
     * @OA\GET(
     ** path="/api/transactions/",
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
        $response = $this->TransactionRepository->all();
        return response()->json($response['data'],$response['statusCode']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * @OA\POST(
     ** path="/api/transactions/create",
     *   tags={"Add Operation"},
     *   summary="transaction",
     *   operationId="transaction",
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
     *      name="number",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *   @OA\Parameter(
     *      name="total_amount",
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

    public function store(TransactionRequest $request)
    {
        $response = $this->TransactionRepository->create($request);
        return response()->json($response['data'],$response['statusCode']);
    }

    /**
     * @OA\GET(
     ** path="/api/transactions/show/{id}",
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
        $response = $this->TransactionRepository->show($id);
        return response()->json($response['data'],$response['statusCode']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function edit(Transactions $transactions)
    {
        //
    }

  
    /**
     * @OA\PUT(
     ** path="/api/transactions/update/{id}",
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
     *      name="number",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *   @OA\Parameter(
     *      name="total_amount",
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

    public function update(TransactionRequest $request,int $id)
    {
        $response = $this->TransactionRepository->update($request,$id);
        return response()->json($response['data'],$response['statusCode']);
    }

     /**
     * @OA\POST(
     ** path="/api/transactions/delete/{id}",
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
        $response = $this->TransactionRepository->delete($id);
        return response()->json($response['data'],$response['statusCode']);
    }
}
