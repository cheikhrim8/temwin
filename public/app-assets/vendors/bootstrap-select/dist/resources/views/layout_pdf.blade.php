<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield("page-title")</title>

        <!-- Bootstrap -->
        {{-- <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}"> --}}
        <!-- Jquery-ui CSS -->

        <!-- Datatables -->

        <link rel="stylesheet" href="{{ URL::asset('vendor/sb-admin-2/css/sb-admin-2.min.css') }}">
        <!-- Fontawsome -->
        <link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('vendor/fontawesome-free/css/brands.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('vendor/fontawesome-free/css/solid.min.css') }}" rel="stylesheet" type="text/css">


    </head>
    <style>
        b{
            font-weight: bold;
        }
        table {
            font-size: 14px;
            color: #000;

        }
        td.entete
        {
            font-size: 10px;
            font-weight: bold;
            text-align: center;
            width: 25%;
        }
        img.img {
            height: 80px; width: 100%
        }
        h5 {
            color: #000;
            margin-top: 8px;
            font-size: 14px;
        }

        h4 {
            color: #000;
            font-weight:bold;
        }

        span.special {
            font-weight: bold;
            font-size: 14px;
        }
    </style>
    @if(App::isLocale('ar'))
        <style>
            b{
                font-weight: bold;
            }
            table {
                font-size: 16px;
                color: #000;
            }

            span.special {
                font-weight: bold !important;
                font-size: 20px !important;
            }
            h5 {
                font-size: 16px;
            }
        </style>
     @endif
    <body>
    <script type="text/javascript">window.print();</script>

    <div id="wrapper">
          <div class="ct_certificat ">

                  @yield("page-content")
              </div>


    </div>
  </body>
</html>
