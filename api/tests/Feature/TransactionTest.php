<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Passport\Passport;
use Tests\TestCase;

class TransactionTest extends TestCase
{

    public function testgetAllTransaction()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->create()
        );
        return $this->json('GET','api/transactions',['Accept'=>'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
               'transactions'=>[

               ],
            ]);
    }
    public function testshowTransaction()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->create()
        );
        return $this->json('GET','api/transactions/show/1',['Accept'=>'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                'Message',
                'data'=>[
                    'id:',
                    'user_id:',
                    'number:',
                    'total_amount:',
                    'created_at:',
                ],
            ]);
    }
    public function testaddTransaction()
    {
        $this->user = Passport::actingAs(
            factory(User::class)->create()
        );
       $transaction = ['user_id'=>9,'number'=>'36912','total_amount'=>3000];
        return $this->json('POST','api/transactions/create',$transaction,['Accept'=>'application/json'])
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
}
