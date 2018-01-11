<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome home</title>
    <script type="text/javascript" src="{{asset('js/vue/vue.js')}}"></script>
</head>
<body>
    <div>building</div>
    <div>
        {{$blog->blog_title}}
    </div>
    <div>
        {{$blog->blog_content}}
    </div>
</body>
</html>