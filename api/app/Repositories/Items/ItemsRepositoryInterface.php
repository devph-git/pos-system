<?php

namespace App\Repositories\Items;

use Illuminate\Http\Request;

interface ItemsRepositoryInterface
{
    public function all();
    public function show(int $id);
    public function delete(int $id);
    public function store(Request $request);
    public function update(Request $request);
    public function discount(int $id);
    public function search(Request $request);
}



?>