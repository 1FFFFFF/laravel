<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send($name = '无名氏',$view = 'email.emailTest')
    {
        // Mail::send()的返回值为空，所以可以其他方法进行判断
        Mail::send($view,['data'=>$name],function($message){
            $to = '1054919923@qq.com';
            $message->to($to)->subject('邮件测试');
        });
        // 返回的一个错误数组，利用此可以判断是否发送成功
        if(!Mail::failures()){
            echo 'success';
        } else {
            dd(Mail::failures());
        }
    }

}
