<?php
namespace App\Repositories\Transaction;

use Illuminate\Http\Request;

interface TransactionRepositoryInterface{

    public function all();
    public function show(int $id);
    public function create(Request $request);
    public function update(Request $request, int $id);
    public function delete(int $id);
    public function totalPrice(int $id);
    public function search(Request $request);
}




?>