<!-- Product details-->
{{-- {{ Storage::url($phone->phone_image) }} --}}
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h2 class="text-uppercase mb-5">{{ $phone->phone_brand }} {{ $phone->phone_model }}</h2>
    </div>
    <div class="col-3"></div>
</div>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        {{-- Carousel --}}
        <div id="carouselExampleFade" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="{{ Storage::url($phone->phone_image) }}" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ Storage::url($phone->phone_image_2) }}" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ Storage::url($phone->phone_image_3) }}" class="img-fluid" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-3"></div>
</div>
{{-- Title --}}
<div class="row">
    <div class="col-1"></div>
    <div class="col-5">
        <h4><b>EKRAN</b></h4>
    </div>
    <div class="col-5">
        <h4><b>KAMERA</b></h4>
    </div>
    <div class="col-1"></div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-5">
        <div class="row">
            <div class="col-6 text-right"><b>Ekran Boyutu:</b></div>
            <div class="col-6 text-left">{{ $phone->screen_size }}</div>
        </div>
    </div>
    <div class="col-5">
        <div class="row">
            <div class="col-6 text-right"><b>Kamera Çözünürlüğü:</b></div>
            <div class="col-6 text-left">{{ $phone->camera_resolution }}</div>
        </div>
    </div>
    <div class="col-1"></div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-5">
        <div class="row">
            <div class="col-6 text-right"><b>Ekran Çözünürlüğü:</b></div>
            <div class="col-6 text-left">{{ $phone->screen_resolution }}</div>
        </div>
    </div>
    <div class="col-5">
        <div class="row">
            <div class="col-6 text-right"><b>İkinci Kamera Çözünürlüğü:</b></div>
            <div class="col-6 text-left">{{ $phone->second_rear_camera_resolution }}</div>
        </div>
    </div>
    <div class="col-1"></div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-5">
        <div class="row">
            <div class="col-6 text-right"><b>Ekran Yenileme Hızı:</b></div>
            <div class="col-6 text-left">{{ $phone->screen_refresh_rate }}</div>
        </div>
    </div>
    <div class="col-5">
        <div class="row">
            <div class="col-6 text-right"><b>Üçüncü Kamera Çözünürlüğü:</b></div>
            <div class="col-6 text-left">{{ $phone->third_rear_camera_resolution }}</div>
        </div>
    </div>
    <div class="col-1"></div>
</div>

{{-- Title --}}
<div class="row mt-5">
    <div class="col-1"></div>
    <div class="col-5">
        <h4><b>TEMEL DONANIM</b></h4>
    </div>
    <div class="col-5">
        <h4><b>BATARYA</b></h4>
    </div>
    <div class="col-1"></div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-5">
        <div class="row">
            <div class="col-6 text-right"><b>Cpu:</b></div>
            <div class="col-6 text-left">{{ $phone->cpu }}</div>
        </div>
    </div>
    <div class="col-5">
        <div class="row">
            <div class="col-6 text-right"><b>Batarya Kapasitesi:</b></div>
            <div class="col-6 text-left">{{ $phone->battery_capacity }}</div>
        </div>
    </div>
    <div class="col-1"></div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-5">
        <div class="row">
            <div class="col-6 text-right"><b>Gpu:</b></div>
            <div class="col-6 text-left">{{ $phone->gpu }}</div>
        </div>
    </div>
    <div class="col-5">
        <div class="row">
            <div class="col-6 text-right"><b>Şarj Türü:</b></div>
            <div class="col-6 text-left">{{ $phone->charging_type }}</div>
        </div>
    </div>
    <div class="col-1"></div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-5">
        <div class="row">
            <div class="col-6 text-right"><b>Ram:</b></div>
            <div class="col-6 text-left">{{ $phone->ram }}</div>
        </div>
    </div>
    <div class="col-5">
        <div class="row">
            <div class="col-6 text-right"><b>Hızlı Şarj:</b></div>
            <div class="col-6 text-left">{{ $phone->fast_charge }}</div>
        </div>
    </div>
    <div class="col-1"></div>
</div>

<button class="btn btn-primary btn-xl text-uppercase mt-5" data-bs-dismiss="modal" type="button">
    <i class="fas fa-times me-1"></i>
    Kapat
</button>
