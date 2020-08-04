<?php

namespace Tests\Feature;

use App\User;
use App\Transactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Passport\Passport;
use Tests\TestCase;

class TransactionTest extends TestCase
{
  use RefreshDatabase;

   /** @test  */
    public function add_transaction()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->make()
        );
        $transaction = ['user_id'=> 1 ,'number' => '3691218','total_amount' => 3000];
         $this->json('POST',route('transaction.create'),$transaction,['Accept'=>'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                'Message',
                'data'=>[
                    'user_id',
                    'number',
                    'total_amount'
                ]
            ]);
    }

    /** @test  */
    public function get_all_transaction()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->make()
        );
        return $this->json('GET',route('transaction.all'),['Accept'=>'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                'transactions'=>[
                ],
            ]);
    }
   /** @test */
    public function get_transaction()
    {
        $this->user = Passport::actingAs(factory(User::class)->make());

        $transaction = factory(Transactions::class)->create();
        $this->json('GET',route('transaction.show',$transaction->id),['Accept'=>'application/json'])
            ->assertStatus(200);
    }

}
