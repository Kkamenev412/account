<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\account;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AccountRequest;

class ControllerAccount extends Controller
{
    public function featuresAccesses($id){
        $accessesBD = DB::table('accesses')->find($id);
        $Account= new account;
        return view('accesses-features',['data' => $Account->orderBy('id','desc')->where('idparent',7)->get()],['titles' => $accessesBD]);
    }
    public function featuresAddAccount($id, AccountRequest $req){
        $Account = new account();
        $Account ->idparent = $id;
        $Account ->title = $req->input('title');
        $Account ->login = $req->input('login');
        $Account ->password = $req->input('password');
        $Account ->info = $req->input('info');
        $Account->save();
        return redirect()->route('accesses-features', $id)->with('success','Данные были добавлены');
    }
    public function featuresDelite($id,$project){
        $Account =  account::find($id);
        $Account->delete();
        return redirect()->route('accesses-features', $project)->with('success','Данные были удалены');
    }
}
