<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Passport\Passport;
use App\User;
use Tests\TestCase;

class ItemTest extends TestCase
{

    public function testshowItem()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->create()
        );
        return $this->json('GET', 'api/show/6',['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                'Items'=>[
                    'id',
                    'user_id',
                    'name',
                    'amount',
                    'stocks_available',
                    'deleted_at',
                ],
            ]);
    }

    public function testDeleteItem()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->create()
        );

        return $this->json('POST', 'api/delete/4',['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJson([
                "message"=>'Item Deleted',
            ]);
    }

    public function testAdditem()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->create()
        );
        $item =['user_id'=>9,'name'=>'milk tea','amount'=>180,'stocks_available'=>'15'];
        return $this->json('POST','api/add',$item,['Accept'=>'application/json'])
            ->assertStatus(200)
            ->assertJson([
                'message'=>'Insert Successfully',
            ]);
    }

    public function testUpdate()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->create()
        );
        $itemData = ['user_id'=>9,'name'=>'avacado milk tea','amount'=>150,'stocks_available'=>'30'];
        return $this->json('PUT', 'api/update/5',$itemData ,['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJson([
                "message"=>'Updated Successfully',
            ]);
    }

}
