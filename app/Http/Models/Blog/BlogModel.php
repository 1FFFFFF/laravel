<?php

namespace App\Http\Models\Blog;

use Illuminate\Database\Eloquent\Model;
#use Illuminate\Support\Facades\DB;

class BlogModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'blog';
    protected $primaryKey = 'blog_id';



    /*
     * 往下所有的都是错误使用，，，，，
     * */
    /*public function readCountry()//查
    {
        return $this->all();
    }

    public function showList()
    {
        $result = DB::select("select blog_id,blog_title,blog_content from blog limit 0,50");
        return $result;
    }

    public function showBlogById($blogId = 1)
    {
        $result = DB::select('select blog_id,blog_title,blog_content from blog where blog_id = '.$blogId);
        return $result;
    }

    public function firstInsert()
    {
        if(!$result = DB::select("select * from blog")){
            $result = DB::insert("insert into `blog` (`blog_title`,`blog_content`) values(?,?)",['first_blog','first blog sql']);
            return $result;
        } else {
            return true;
        }
    }*/
}
