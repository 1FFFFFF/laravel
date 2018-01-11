<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome home</title>

        <!-- Fonts -->
        <style>
            /* latin-ext */
            @font-face {
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 100;
                src: local('Raleway Thin'), local('Raleway-Thin'), url(https://fonts.gstatic.com/s/raleway/v12/rr0ijB5_2nAJsAoZ6vECXRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 100;
                src: local('Raleway Thin'), local('Raleway-Thin'), url(https://fonts.gstatic.com/s/raleway/v12/RJMlAoFXXQEzZoMSUteGWFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
            }
            /* latin-ext */
            @font-face {
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 600;
                src: local('Raleway SemiBold'), local('Raleway-SemiBold'), url(https://fonts.gstatic.com/s/raleway/v12/STBOO2waD2LpX45SXYjQBSEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 600;
                src: local('Raleway SemiBold'), local('Raleway-SemiBold'), url(https://fonts.gstatic.com/s/raleway/v12/xkvoNo9fC8O2RDydKj12b_k_vArhqVIZ0nv9q090hN8.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
            }
        </style>
        <!-- Styles -->
        <style>

            *{
              text-decoration: none;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <a href="https://phalconphp.com/zh/">phalcon><=?</a>
                    Welcome home!@#$%^&*()_+首页示例
                    @if(isset($website))
                        <br>
                        {{ $website }}
                    @endif
                </div>
                <div class="links">
                    <a href="{{route('blog')}}">{{route('blog')}}</a>
                </div>
                <div class="links">
                    <a href="{{route('nb')}}">{{route('nb')}}</a>
                    <a href="{{route('hello')}}">{{route('hello')}}</a>
                    <a href="{{route('foo')}}">{{route('foo')}}</a>
                    <a href="{{route('fool')}}">{{route('fool')}}</a>
                    <a href="{{route('foolpost')}}">{{route('foolpost')}}</a>
                    <a href="{{route('bar')}}">{{route('bar')}}</a>
                    <a href="{{route('there')}}">{{route('there')}}</a>
                    <a href="{{route('here')}}">{{route('here')}}</a>

                    <a href="{{route('user2')}}">{{route('user2')}}</a>
                    <a href="{{route('user2')}}">{{route('user2')}}</a>
                    <a href="{{route('user3')}}">{{route('user3')}}</a>
                    <a href="{{route('user4')}}">{{route('user4')}}</a>
                    <a href="{{route('user5')}}">{{route('user5')}}</a>
                    <a href="{{route('user6')}}">{{route('user6')}}</a>

                    <a href="#">路由分组</a>
                    <a href="#">子域名路由</a>

                    <a href="{{route('adminuser')}}">{{route('adminuser')}}</a>
                </div>
            </div>
        </div>
    </body>
</html>
