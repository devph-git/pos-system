<?php

namespace App\Repositories\Core;

use App\Items,Transaction_item;

class CoreRepository implements CoreRepositoryInterface
{   
    protected $items , $tranasactionItem;

    public function __construct(Items $items , Transaction_item $tranasactionItem)
    {
      $this->items = $items;
      $this->tranasactionItem = $tranasactionItem;
    }

    public function total_price(){

    }
}

?>