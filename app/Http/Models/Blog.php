<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'blog_id';

    public function select()
    {
        $result = DB::select("select * from blog");

        return $result;
    }
    public function firstInsert()
    {
        if(!$result = DB::select("select * from blog")){
            $result = DB::insert("insert into `blog` (`ver`,`estate`,`blog`) values(?,?,?)",[1,0,'first blog sql']);
            return $result;
        } else {
            return true;
        }
    }
}
