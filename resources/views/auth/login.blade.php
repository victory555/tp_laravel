<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tp Salaire</title>
</head>

<body>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700,600" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <form method="post" action="{{ route('handleLogin') }}">

        @csrf
        @method('POST')

        <div class="home-box">



            @if (Session::get('success_message'))
                <b style="font-size:10px; color:rgb(29, 255, 199)">{{ Session::get('error_msg') }}</b>
            @endif

            @if (Session::get('error_msg'))
                <b style="font-size:10px; color:rgb(185, 81, 81)">{{ Session::get('error_msg') }}</b>
            @endif

            <div class="left">

                <img src="{{ asset('assets/images/undraw_task_list_6x9d.svg') }}" alt="">
            </div>
            <div class="right">

                <h4>Espace administrateur</h4>

                @if (Session::get('success_msg'))
                    <div class="success_span">{{ Session::get('success_msg') }}</div>
                @endif
                <input type="email" name="email" class="email" value="{{ old('email') }}" />
                @error('email')
                    <div class="error_span">{{ $message }}</div>
                @enderror

                <input type="password" name="password" class="email" />

                @error('password')
                    <div class="error_span">{{ $message }}</div>
                @enderror



                <div class="btn-container">
                    <button type="submit"> Connexion</button>
                </div>
            </div>
            <!-- End Btn -->
            <!-- End Btn2 -->
        </div>
        <!-- End Box -->
    </form>

</body>

</html>
