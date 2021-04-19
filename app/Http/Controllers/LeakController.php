<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leak;
use App\Http\Requests\LeakRequest;

class LeakController extends Controller
{
    // リーク一覧（新着）
    public function showList(){
        $leaks=Leak::all()->sortByDesc('id');
        $sort="新着順";
        return view('list',['leaks'=>$leaks,'sort'=>$sort]); 
     }
    // リーク一覧（古い）
    public function oldList(){
        $leaks=Leak::all();
        $sort="古い順";
        return view('list',['leaks'=>$leaks,'sort'=>$sort]); 
     }
    // リーク一覧（人気）
    public function popList(){
        $leaks=Leak::all()->sortByDesc('views');
        $sort="人気順";

        return view('list',['leaks'=>$leaks,'sort'=>$sort]); 
     }
     //リーク詳細表示
    public function showDetail($id){
        $leak=Leak::find($id);
        $leak->increment('views');
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
     // ワード検索
     public function showSearch(Request $request){
         $leaks=Leak::where('title','like',"%{$request->search}%")
         ->orWhere('content','like',"%{$request->search}%")
         ->paginate(5);
         return view('list',['leaks'=>$leaks]); 
     }

}
