<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leak;
use App\Http\Requests\LeakRequest;

class LeakController extends Controller
{
    //リーク一覧表示
    public function showList(){
        $leaks=Leak::all();
        return view('list',['leaks'=>$leaks]); 
     }
     //リーク詳細表示
    public function showDetail($id){
        $leak=Leak::find($id);
        return view('detail',['leak'=>$leak]); 
     }
     // リーク入力画面
    public function showCreate(){
        return view('create');
     }
     // リーク投稿
     public function exeStore(LeakRequest $request){
         $inputs=$request->all();
         Leak::create($inputs);
         return redirect(route('leaks'));
     }


}
