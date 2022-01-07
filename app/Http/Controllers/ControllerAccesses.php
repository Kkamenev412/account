<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accesses;
use App\Http\Requests\AccessesRequest;
use Illuminate\Support\Facades\DB;

class ControllerAccesses extends Controller
{
    public function submit(AccessesRequest $req){
        $Accesses = new Accesses();
        $Accesses ->basket = 0;
        $Accesses ->title = $req->input('title');
        $Accesses ->ftp = $req->input('ftp');
        $Accesses ->host = $req->input('host');
        $Accesses ->information = $req->input('information');
        $Accesses->save();
        return redirect()->route('dashboard')->with('success','Данные были добавлены');
    }
    public function allData(){
        $Accesses= new Accesses;
        return view('dashboard',['data' => $Accesses->orderBy('id','desc')->where('basket','<>',1)->get()]);
    }
    public function register(){
        return view('login');
    }
    public function updateAccesses($id){
        $Accesses = new Accesses;
        return view('accesses-update',['data' => $Accesses->find($id)]);
    }
    public function SubmitupdateAccesses($id, AccessesRequest $req){
        $Accesses = Accesses::find($id);
        $Accesses ->title = $req->input('title');
        $Accesses ->ftp = $req->input('ftp');
        $Accesses ->host = $req->input('host');
        $Accesses ->information = $req->input('information');
        $Accesses->save();
        return redirect()->route('dashboard', $id)->with('success','Данные проекта были обновленны');
    }
    public function deliteAccesses($id){
        $Accesses = Accesses::find($id);
        $Accesses -> basket = '1';
        //$Accesses->delete();
        $Accesses->save();
        return redirect()->route('dashboard')->with('success','Проект '.$Accesses -> title.' был перемещен в корзину');
    }
}
