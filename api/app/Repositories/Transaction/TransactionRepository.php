<?php
namespace App\Repositories\Transaction;

use App\Transactions;
use Illuminate\Http\Request;
use App\Repositories\Transaction\TransactionRepositoryInterface;

class TransactionRepository implements TransactionRepositoryInterface{

    const SUCESS_STATUS_CODE = 200;
    const ERROR_STATUS_CODE = 404;
    private $transaction;
   
    public function __construct(Transactions $transaction){
      $this->transaction = $transaction;
    }
   
    public function all()
    {
      $response = $this->transaction->all();
      $data =['Message'=>'All Transactions','data'=>$response];$statusCode = self::SUCESS_STATUS_CODE;
      return $this->response($data,$statusCode);
    }

    public function show(int $id){
     $transaction  = $this->transaction->find($id);
     if($transaction){
      $data =['Message'=>'Transaction Information','data'=>$transaction];$statusCode = self::SUCESS_STATUS_CODE;
     }else{
      $data =['Message'=>'Transaction Not found'];$statusCode = self::ERROR_STATUS_CODE;
     }
     
     return $this->response($data,$statusCode);
    }

    public function create(Request $request){
      $input = $request->all();
      $response = $this->transaction->create($input);
      $data=['Message'=>'Transaction Created','data'=>$input];$statusCode = self::SUCESS_STATUS_CODE;
      return $this->response($data,$statusCode);
    }

    public function update(Request $request,int $id){
      $update = $this->transaction->whereId($id)->update($request->all());
      $data =['Message'=>'Updated Successfully','data'=>$update]; $statusCode =self::SUCESS_STATUS_CODE;
      return $this->response($data,$statusCode);
    }

    public function delete(int $id){
     $delete = $this->transaction->destroy($id);
     $data = ['Message'=>'Transaction Deleted'];$statusCode =self::SUCESS_STATUS_CODE;
     return $this->response($data,$statusCode);
    }

    public function response($data, int $statusCode) {
        $response = ["data"=>$data, "statusCode"=>$statusCode];
        return $response;
    }
}















?>