<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'blog_id';

    public function readCountry()//查
    {
        return $this->all();
    }

    public function showList()
    {
        $result = DB::select("select blog_id,title from blog limit 0,50");
        return $result;
    }

    public function showBlogById($blogId = 1)
    {
        $result = DB::select('select blog_id,title,blog from blog where blog_id = '.$blogId);
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
