<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function add(){
        return view('add-contacts');
    }
    public function index(){
        $result = DB::table('contacts')->get();
        return view('home')->with('data', $result);
    }
    public function upload(Request $request){
        
        $file = $request->file('paper');
        $handle = fopen($file, 'r');

        fgetcsv($handle);

        while(($row = fgetcsv($handle, 1000, ",")) !== false){
            
            $result = DB::table('contacts')->insert([
                'name'=>$row[0],
                'contact'=>$row[1],
            ]);


        }
        return back()->with('message', 'Data inserted succesfully');

         
    
    }
    public function edit($id){
        $result = DB::table('contacts')->where('id', $id)->get();
         
        return view('edit-contact')->with('data', $result);
    }
    public function delete($id){
        $result = DB::table('contacts')->where('id', $id)->delete();
        if($result){
              return back()->with('message', 'Data Deleted succesfully');
        }
    }
    public function update(Request $request){
        $id = $request->id;
        $result = DB::table('contacts')->where('id', $id)->insert([
            'name'=>$request->name,
            'contact'=>$request->contact,
        ]);
          return back()->with('message', 'Data Updated succesfully');
    }
}
