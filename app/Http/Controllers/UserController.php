<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class UserController extends Controller
{
    //
    public function action_index() {

        // $user = DB::select("select * from gooddata where 'id' = '?'");
        // dd($user);
        $select_field = DB::table('gooddata')->get();
        // dd($select_field);
        if($select_field){
            $arr['data']=$select_field;
            $arr['status']=0;
            $arr['msg']="返回数据成功";
            return $arr;
          }else{
            $arr['status']=-1;
            $arr['msg']="返回数据失败";
             return $arr;
          }
          $list=json_encode($select_field);
          return $list;
    }
}
