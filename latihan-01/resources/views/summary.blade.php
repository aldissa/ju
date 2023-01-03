<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @include('template.nav')
    <div class="container mt-5">
        <h1>Summary</h1>
        <div class="card">
            <div class="row">
                <div class="col-4">
                    <div class="card-body">
                        <img src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2020/12/19/7a5aab5f-9423-4dfe-ba6d-b8dab72cd300.jpg"
                            alt="" class="card-img-top">
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <h5 class="card-title">Kompor Gas Meledak</h5>
                        <p class="card-text">Kode : vnaenv</p>
                        <hr>
                        <p class="card-text">Rp. 600.000</p>
                        <input type="text" name="qty" required value="5" disabled class="form-control">
                        <p class="card-text mt-2">Total harga : Rp. 3.000.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
