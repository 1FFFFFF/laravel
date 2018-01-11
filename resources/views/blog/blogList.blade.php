<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome home</title>
    <script type="text/javascript" src="{{asset('js/vue/vue.js')}}"></script>
    <style>
        div.header {
            font-family: "Segoe UI Light", "sans-serif";
            font-size: 20.0pt;
            color: #2A2A2A;
            padding-bottom: 34px;
        }

        a:link {
            font-family: "Segoe UI SemiLight", "sans-serif";
            font-size: 11.0pt;
            color: #00749E;
            text-decoration: none;
        }

        table tr.Header {
            font-family: "Segoe UI Semibold", "sans-serif";
            font-size: 11.0pt;
            color: #000000;
            text-decoration: none;
        }

        table tr td.Regular {
            height: 20px;
            vertical-align: text-top;
            font-family: "Segoe UI SemiLight", "sans-serif";
            font-size: 11.0pt;
            color: #000000;
            text-decoration: none;
        }

        table tr td.Secondary {
            height: 20px;
            vertical-align: text-top;
            font-family: "Segoe UI SemiLight", "sans-serif";
            font-size: 11.0pt;
            color: #707070;
            text-decoration: none;
        }

        div.Copyright {
            padding-top: 60px;
            font-family: "Segoe UI SemiLight", "sans-serif";
            font-size: 11.0pt;
            color: #2A2A2A;
        }

        div.NoList {
            font-family: "Segoe UI Semibold", "sans-serif";
            font-size: 11.0pt;
            color: #000000;
            text-decoration: none;
        }
    </style>
</head>
<title>在重置电脑时偷来的模板</title>

<body leftmargin="60px" topmargin="50px">
<div dir="ltr" lang="zh-CN">
    <div class="header">在重置电脑时删除了应用</div>
    <table width="730px" border="1px" frame="void" rules="groups">
        <tr class="Header">
            <td width="60%" height="30px" valign="top">应用名称</td>
            <td width="30%" height="30px" valign="top">发布者</td>
            <td width="10%" height="30px" valign="top">版本</td>
        </tr>
        <tbody>
        <tr>
            <td height="10px" colspan="3" />
        </tr>
        <tr>
            <td class="Regular"><a href="http://www.qq.com">腾讯QQ</a></td>
            <td class="Secondary">Microsoft Corporation</td>
            <td class="Secondary">1.1.0</td>
        </tr>
        <tr>
            <td class="Regular">腾讯QQ</td>
            <td class="Secondary">腾讯科技(深圳)有限公司</td>
            <td class="Secondary">8.9.6.22427</td>
        </tr>
        <tr>
            <td class="Regular">网易云音乐</td>
            <td class="Secondary">网易公司</td>
            <td class="Secondary">2.2.3.195673</td>
        </tr>
        </tbody>
    </table>
    <div class="Copyright">{{date('Y-m-d H:i:s',time())}}</div>
</div>
</body>
</html>