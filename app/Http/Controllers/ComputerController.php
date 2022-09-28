<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private static function getdate()
    {
        return [
            ['id'=>172133,'name'=>'toshiba',"origin"=>'koria'],
            ['id'=>162051,'name'=>'dell',"origin"=>'libya'],
            ['id'=>152183,'name'=>'hp',"origin"=>'china']
        ];
    }
    public function index()
    {
        
        return view('computers/index',[
            'computers'=>self::getdate()
        ]);
    }

    //___________________________________________________
    public function create()
    {
        //
    }
 //___________________________________________________
    public function store(Request $request)
    {
        //
    }

     //___________________________________________________
    public function show($id)
    {
        $computer=self::getdate();
        //$index= array_search($id, array_column($computer,'id'));
    }

     //___________________________________________________
    public function edit($id)
    {
        //
    }

     //___________________________________________________
    public function update(Request $request, $id)
    {
        //
    }
 //___________________________________________________
    public function destroy($id)
    {
        //
    }
}
