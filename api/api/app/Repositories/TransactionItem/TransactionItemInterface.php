<?php

namespace App\Repositories\TransactionItem;

use Illuminate\Http\Request;

interface TransactionItemInterface {
   
    public function all();
    public function create(Request $request);
    public function show(int $id);
    public function update(Request $request,int $id);
    public function delete(int $id);

}

?>