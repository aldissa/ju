<img src="https://images.tokopedia.net/img/cache/1190/wmEwCC/2022/12/8/5610ce42-c900-40e9-9666-19ea4202a54e.jpg.webp?ect=4g"
    alt="" class="w-100">
<div class="container mt-3">
    <div class="row">
        @foreach ($data as $item)
            <div class="col-3">
                <div class="card">
                    <img src="{{asset($item->foto)}}"
                        alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{($item->nama)}}</h5>
                        <p class="card-text">Rp. {{number_format($item->harga,0,',','.')}}</p>
                        <a href="{{ route('detail', $item->id) }}" class="btn btn-primary w-100">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
