<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $name = '王宝花';
        // Mail::send()的返回值为空，所以可以其他方法进行判断
        Mail::send('email.email',['name'=>$name],function($message){
            $to = '921248300@qq.com';
            $message ->to($to)->subject('邮件测试');
        });
        // 返回的一个错误数组，利用此可以判断是否发送成功
        if(!Mail::failures()){
            echo 'success';
        } else {
            dd(Mail::failures());
        }
    }

}
