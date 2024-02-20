<?php

namespace App;
use Bref\Context\Context;
use Illuminate\Support\Facades\DB;

class CustomCron implements \Bref\Event\Handler
{
    public function handle($event, Context $context): void
    {
        echo 'Hello  world';
        DB::table('Persons')->insert([
            'LastName' => now(),
            'FirstName' => 'fofe ',
            'Address' => 'ngaoundere',
            'City' => 'foumbot',
        ]);
        //return response()->json(data: ["message"=>"user ".$name." created"], status: 201);
    }
}
