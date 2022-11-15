<?php

namespace App\Http\Controllers;

use App\Models\Toshop;
use Illuminate\Http\Request;

class ToshopController extends Controller
{
    public function index()
    {
         return view('welcome', ['List'=> Toshop::all()]);

    }

    //business logic
    public function saveToshop(Request $req)
    {

        // print_r($req->all());
        $todoObj = new Toshop();
        $todoObj->title = $req->toshop;

        $todoObj->save();
        // save data to the database



    return redirect('/');
    }

    public function delete($id)
    {
        $toshopObj=Toshop::findOrFail($id);
        $toshopObj->delete();

        return redirect('/');
    }

    public function edit($id)
    {
        $data=Toshop::findOrFail($id);


        return view('edit', ['data' =>$data]);
    }


        public function updateToshop(Request $req)
        {
    
            // print_r($req->all());
            $data = Toshop::find($req->id);
            $data->title = $req->toshops;
    
            $data->save();
            // save data to the database
    
    
    
        return redirect('/');
        }
    


}
