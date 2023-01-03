<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-transform: uppercase;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @include('template.nav')
    <form action="{{ route('postlogin') }}" class="form-group" method="POST">
        @csrf
        <div class="container mt-5">
            <h1 class="text-center">Login</h1>
            <div class="col-6 mx-auto">
                <div class="mt-3">
                    <h5>Email</h5>
                    <input type="email" name="email" class="from-control w-100">
                </div>
                <div class="mt-3">
                    <h5>Password</h5>
                    <input type="password" name="password" class="from-control w-100">
                </div>
                <div class="mt-3">
                    @if (\Session::has('alert'))
                        <div class="alert alert-danger">
                            <div>{{ Session::get('alert') }}</div>
                        </div>
                    @endif
                    @if (\Session::has('alert-success'))
                        <div class="alert alert-success">
                            <div>{{ Session::get('alert-success') }}</div>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="{{ route('reg') }}" class="btn btn-success">Belum Punya Akun</a>
                </div>
            </div>
        </div>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
