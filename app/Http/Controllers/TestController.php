<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $test =Test::find(1);
        // return $test->meta_data;

        // $test =Test::get();
        // return $test;

        // $test =Test::orderBy('meta_data->name')->get();
        // return $test;

        // $test =Test::find(1);
        // return $test->meta_data['name'];

        // $test =Test::find(3);
        // return $test->meta_data['address']['city'];

        // $test =Test::where('meta_data->name','katrina kaif')->get();
        // return $test;

        // $test =Test::where('meta_data->name','Like','Ya%')->get();
        // return $test;

        // alternative of where
        // $test =Test::whereJsonContains('meta_data->name','Yahoo Baba')->get();
        // return $test;

        // whereJsonLength
         // where name is empty
        // $test =Test::whereJsonLength('meta_data->name',0)->get();

        // where name is not empty
        $test =Test::whereJsonLength('meta_data->name',1)->get();
        return $test;


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create data method 1
        // $test = new Test;
        // $test->meta_data = [
        //     'name' => 'Yahoo Baba',
        //     'email' => 'yahoo@gmail.com',
        //     'phone_number' => '11223344',
        // ];
        // $test->save();

        // create data method 2
        // $test = Test::create([
        //     'meta_data' => [
        //         'name' => 'Jhon Abraham',
        //         'email' => 'jon@gmail.com',
        //         'phone_number' => '55223344'
        //     ]
        // ]);

        // nested column data create
        // $test = Test::create([
        //     'meta_data' => [
        //         'name' => 'Jhon Abraham',
        //         'email' => 'jon@gmail.com',
        //         'phone_number' => '55223344',
        //         'address'=>[
        //             'street' => '#123 KK Road',
        //             'city' => 'Mumbai',
        //             'country' => 'India'
        //         ]
        //     ]
        // ]);

        // data update 1
        // $test = Test::where('id',2)->update([
        //     'meta_data->name'=>'shahid Kapoor'
        // ]);

        //  $test = Test::where('id',2)->update([
        //     'meta_data->address->city'=>'Delhi'
        // ]);
         $test = Test::where('id',2)->update([
            'meta_data->email'=>'jhon@gmail.com'
        ]);



        // data updata method 2
        // $test = Test::find(3);
        // $test->meta_data['name'] = 'Jhon Abraham2';
        // $test->save();

        // delete method

        // $test = Test::find(2);
        // $test->meta_data=collect($test->meta_data)->forget('email');
        // $test->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
}
