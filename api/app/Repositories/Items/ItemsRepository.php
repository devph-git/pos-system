<?php

namespace App\Repositories\Items;

use App\Discount;
use App\Items;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Repositories\Items\ItemsRepositoryInterface;


class ItemsRepository implements ItemsRepositoryInterface{
 
      const SUCESS_STATUS_CODE = 200;
      const ERROR_STATUS_CODE = 404;
      protected $items;
      protected $user;

      public function __construct(Items $items , User $user){
           $this->items = $items;
           $this->user = $user;
      }
      
      public function all()
      {
         $response =  $this->items->all();
         $data = ['Items' => $response];
          return $this->response($data,self::SUCESS_STATUS_CODE);
      }

      public function show(int $id){
          $response = $this->items->find($id);
          if($response){
            $data = ['Items' => $response];
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
            $image = $request->file('image');
            $input['image'] = $image->getClientOriginalName();
            $image->move(public_path('uploads'),$image->getClientOriginalName());
            $data =  $this->items->create($input);
            $data = ['message'=>'Insert Successfully'];
            $statusCode = self::SUCESS_STATUS_CODE;
          return $this->response($data,$statusCode);
      }
      public function update(Request $request,int $id){
          $input = $request->all();
          $image = $request->file('image');
          $input['image'] = $image->getClientOriginalName();
          $image->move(public_path('uploads'),$image->getClientOriginalName());
          $this->items->whereId($id)->update($input);
          $data = ['message'=>'Updated Successfully'];
          $statusCode = self::SUCESS_STATUS_CODE;
         return $this->response($data,$statusCode);
      }

      public function discount(int $id)
      {
          $discounted = Discount::where('id',3)->get('percent');
          foreach($discounted as $pwd){
              $percent = $pwd->percent;
          }
        $items  = User::findOrFail($id)->items->sum('amount');
        $discount = $items / $percent;
        $data= ['Discount'=>$discount,'total_price'=>$items];
        return $this->response($data,self::SUCESS_STATUS_CODE);
      }

      public function search(Request $request)
      {
        $search = $request->input('q');
        
         if($search != ""){
           $items = $this->items->where(function ($query) use ($search)
           {
             $query->where('name','like','%'.$search.'%');
           })
           ->paginate(3);
           $items->appends(['q'=>$search]);
         }
         else{
           $items = $this->items->paginate(10);
         }
         $data = ['data'=>$items];
         return $this->response($data,self::SUCESS_STATUS_CODE);
      }


      public function response($data, int $statusCode) {
        $response = ["data"=>$data, "statusCode"=>$statusCode];
        return $response;
    }
}