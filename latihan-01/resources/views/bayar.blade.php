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
    <div class="container mt-5">
        <h1>Upload Bukti Pembayaran</h1>
        <form action="" class="form-group">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2020/12/19/7a5aab5f-9423-4dfe-ba6d-b8dab72cd300.jpg"
                                alt="" class="card-img-top">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kompor Gas Meledak</h5>
                            <hr>
                            <p class="card-text">Harga : Rp. 600.000</p>
                            <p class="card-text">Total Harga : Rp. 3.000.000</p>
                            <p class="card-text">Qty : 5</p>
                            <hr>
                            <label for="" class="form-control">Bukti Pembayaran</label>
                            <input type="file" name="bukti_pembayaran" required class="form-control">
                            <hr>
                            <h5 class="card-title">Keterangan :</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam corrupti omnis nobis quis? Esse provident omnis vero nulla, beatae aspernatur quidem tempora numquam! Repellat, quis eius. Nisi vel quasi at?</p>
                            <button class="btn btn-success w-50">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
