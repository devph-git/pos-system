<?php
namespace App\Repositories\TransactionItem;

use App\Transaction_items;

use Illuminate\Http\Request;
use App\Repositories\TransactionItem\TransactionItemInterface;

class TransactionItemRepository implements TransactionItemInterface
{

   protected $transactionItem;
   const SUCCESS_CODE_STATUS = 200;
   const ERROR_CODE_STATUS = 404;

   public function __construct(Transaction_items $transactionItem){
       $this->transactionItem = $transactionItem;
   }

   public function all(){
       $items = $this->transactionItem->all();
       $data = ['Message'=>'Success','Transaction Items'=>$items];
       return $this->response($data,self::SUCCESS_CODE_STATUS);
   }

   public function create(Request $request)
   {  
      $transaction = $this->transactionItem->create($request->all());
      $data =['Message'=>'Successfully generated','transaction information'=>$transaction];
      return $this->response($data,self::SUCCESS_CODE_STATUS);       
   }
   public function update(Request $request,int $id)
   {
      $update = $this->transactionItem->find($id);
      if(!$update)
      {
        $data =['Message'=>'id not found'];
        $code = self::ERROR_CODE_STATUS;
      }else{
       $transaction = $this->transactionItem->whereId($id)->update($request->all());
        $data=['Message'=>'SuccessFully Updated'];$code = self::SUCCESS_CODE_STATUS;     
      } 
    return $this->response($data,$code);
   }

   public function show(int $id){
     $item = $this->transactionItem->findOrFail($id);
     if($item){
       $transaction = $this->transactionItem->find($id);
       $data =['transaction information'=>$transaction];$code = self::SUCCESS_CODE_STATUS;
     }else
     {
      $data=['Invalid Transaction'=>'No transaction found'];$code = self::ERROR_CODE_STATUS;
     }
     return $this->response($data,$code);
   }

   public function delete(int $id)
   {
       $trans_id = $this->transactionItem->find($id);
       if($trans_id)
       {
        $transaction = $this->transactionItem->destroy($id);
        $data = ['Message'=>'Successfully deleted'];$code = self::SUCCESS_CODE_STATUS;
       }else{
           $data=['Message'=>'transaction id not found'];$code = self::ERROR_CODE_STATUS;
       }
      return $this->response($data,$code);
   }
   
   public function response($data, int $statusCode) {
    $response = ["data"=>$data, "statusCode"=>$statusCode];
    return $response;
    }

}

?>