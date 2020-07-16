<?php

namespace App\Repositories\Items;

use App\Items;
use Illuminate\Http\Request;
use App\Repositories\Items\ItemsRepositoryInterface;

class ItemsRepository implements ItemsRepositoryInterface{
 
      const SUCESS_STATUS_CODE = 200;
      const ERROR_STATUS_CODE = 404;
      protected $items;

      public function __construct(Items $items){
           $this->items = $items;
      }
      
      public function all()
      {
         $response =  $this->items->all();
         $data = ['message' => 'Success','Items' => $response]; $statusCode = self::SUCESS_STATUS_CODE;
          return $this->response($data,$statusCode);
      }

      public function show(int $id){
          if($response = $this->items->find($id)){
            $data = ['message' => 'Success','Items' => $response];
            $statusCode = self::SUCESS_STATUS_CODE;
          }else{
            $data = ['message' => 'User Not Found']; $statusCode = self::ERROR_STATUS_CODE;
          }
         return $this->response($data,$statusCode);
      }

      public function delete(int $id)
      {
          if($id)
          {
          $data =['message'=>'Item Deleted']; $statusCode =self::SUCESS_STATUS_CODE;
          $response = $this->items->destroy($id);
          }else{
            $data =['message'=>'No User Found']; $statusCode = self::ERROR_STATUS_CODE;
          }
          return $this->response($data,$statusCode);
      }

      public function store(Request $request){
          $input = $request->all();
          $data =  $this->items->create($input);
          $data = ['message'=>'Insert Successfully'];
          $statusCode = self::SUCESS_STATUS_CODE;
          return $this->response($data,$statusCode);
      }
      public function update(Request $request,int $id){
         $data['inputs'] =  $this->items->whereId($id)->update($request->all());
         $data = ['message'=>'Updated Successfully','Data Updated'=>$data['inputs']];
         $statusCode = self::SUCESS_STATUS_CODE;
         return $this->response($data,$statusCode);
      }

      public function response($data, int $statusCode) {
        $response = ["data"=>$data, "statusCode"=>$statusCode];
        return $response;
    }
}