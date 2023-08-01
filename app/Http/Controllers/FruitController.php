<?php

namespace App\Http\Controllers;

use App\Models\Fruits;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    //
    public function index(){
        $fruits = Fruits::get();
        return view('fruits/index', ['fruits' => $fruits]);
    }

    public function create(){
        return view('fruits/create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required'
        ]);

        $fruit=new Fruits;
        $fruit->name=$request->name;
        $fruit->save();
        return back()->withSuccess('Fruit Added');
    }

    public function edit($id){
        $fruit=Fruits::where('id',$id)->first();
        return view('fruits/edit',['fruit'=>$fruit]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required'
        ]);
        $fruit=Fruits::where('id',$id)->first();
        $fruit->name=$request->name;
        $fruit->save();
        return back()->withSuccess('Fruit Updated');
    }

    public function destroy($id){
        $fruit=Fruits::where('id',$id)->first();
        $fruit->delete();
        return back()->withSuccess('Fruit Deleted');
    }
}
