<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome home</title>
    <script type="text/javascript" src="{{asset('js/vue/vue.js')}}"></script>
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
<div class="container">
    <div class="content">
        <div class="title">
            <p>@{{ message }}</p>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    new Vue({
        el: '.title',
        data: {
            message: 'Hello Laravel!'
        }
    })
</script>
</html>