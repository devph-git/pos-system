<?php

namespace Tests\Feature;

use App\Items;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Passport\Passport;
use App\User;
use Tests\TestCase;

class ItemTest extends TestCase
{

  use RefreshDatabase;

  /** @test */
    public function add_item()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->make()
        );
        $items =['user_id'=>1,'name'=>'milk tea','amount'=>180,'stocks_available'=>'15'];
        $this->json('POST',route('item.add',$items),['Accept'=>'application/json'])
            ->assertStatus(200)
            ->assertJson([
                'message'=>'Insert Successfully',
            ]);
    }

    /** @test */
    public function all_item()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->make()
        );
        $this->json('GET', route('item.all'),['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                'Items'=>[
                ],
            ]);
    }
   /** @test */
    public function testgetItem()
    {

        $this->user = Passport::actingAs(
            factory(User::class)->make()
        );
        $this->withExceptionHandling();
        $item = factory(Items::class)->create();
        $this->json('GET',route('item.show',$item->id),['Accept' => 'application/json'])
        ->assertStatus(200);
    }

    /** @test */
    public function update_item()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->make()
        );
        $itemData = ['user_id'=>1,'name'=>'avacado milk tea','amount'=>150,'stocks_available'=>'30'];
        return $this->json('PUT', route('item.update',1),$itemData ,['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJson([
               "message"=>'Updated Successfully',
            ]);
    }

   /** @test  */
    public function delete_item()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->make()
        );

         $this->json('POST', route('item.delete',1),['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJson([
                "message"=>'Item Deleted',
            ]);
    }

}
