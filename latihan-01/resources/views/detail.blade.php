<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @include('template.nav')
    <form action="" class="form-group">
        @csrf
        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="{{asset($data->foto)}}"
                            alt="" class="card-img-top">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{($data->nama)}}</h5>
                            <p class="card-text">Rp. {{number_format($data->harga,0,',','.')}}</p>
                            <input type="number" name="banyak" required min="1" class="form-control">
                            <h5 class="card-title mt-2">Keterangan</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ab
                                magni voluptates nihil. Pariatur sapiente quod, dolores rem ut, eaque non laudantium
                                aliquid, aspernatur repellat consequatur corporis veniam! Voluptatem, nisi?</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kategori : {{$data->kategori->nama}}</h5>
                            <a href="{{ route('keranjang') }}" class="btn btn-success d-block">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
