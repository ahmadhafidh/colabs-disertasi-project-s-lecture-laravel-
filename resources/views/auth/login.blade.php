<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        body {
            background: url("/images/kampus.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'HelveticaNeue', 'Arial', sans-serif;

        }
    </style>
</head>

<body>
    <div id="formWrapper">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div id="form">
                <div class="logo">
                    <svg width="612px" height="612px" viewBox="0 0 612 612" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                        <!-- Generator: Sketch 3.3.2 (12043) - http://www.bohemiancoding.com/sketch -->
                        <title>user-icon</title>
                        <desc>Created with Sketch.</desc>
                        <defs></defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                            sketch:type="MSPage">
                            <g id="Artboard-1" sketch:type="MSArtboardGroup" fill="#2A2A5F">
                                <path
                                    d="M306,0 C137.018536,0 0,136.991654 0,305.986558 C0,474.981464 137.005096,611.973118 306,611.973118 C474.994904,611.973118 612,474.981464 612,305.986558 C612,136.991654 475.008345,0 306,0 L306,0 L306,0 Z M306,91.4935429 C361.90152,91.4935429 407.211455,136.81692 407.211455,192.704999 C407.211455,248.606519 361.90152,293.916454 306,293.916454 C250.111921,293.916454 204.801985,248.606519 204.801985,192.704999 C204.801985,136.81692 250.111921,91.4935429 306,91.4935429 L306,91.4935429 L306,91.4935429 Z M305.932794,531.971711 C250.165685,531.971711 199.089519,511.662215 159.693666,478.046033 C150.096723,469.860405 144.558991,457.870948 144.558991,445.249758 C144.558991,388.582096 190.433453,343.218396 247.127997,343.218396 L364.912325,343.218396 C421.60687,343.218396 467.320039,388.582096 467.320039,445.249758 C467.320039,457.870948 461.795748,469.846965 452.185364,478.032593 C412.802952,511.662215 361.713345,531.971711 305.932794,531.971711 L305.932794,531.971711 L305.932794,531.971711 Z"
                                    id="user-icon" sketch:type="MSShapeGroup"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="form-item">
                    <p class="formLabel">Email</p>
                    <input id="email" type="text" class="form-style @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-item">
                    <p class="formLabel">Password</p>
                    <input type="password" name="password" id="password"
                        class="form-style @error('password') is-invalid @enderror" />
                    <!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-item">
                    <input type="submit" class="login pull-right" value="Log In">
                    <div class="clear-fix"></div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>