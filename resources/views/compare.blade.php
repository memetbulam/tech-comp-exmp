<!-- Compare details-->

{{-- Brand and Model --}}
<div class="row">
    <div class="col-3"></div>
    <div class="col-3">
        <h3 class="text-uppercase mb-5">{{ $phone1->phone_brand }}<br>{{ $phone1->phone_model }}</h3>
    </div>
    <div class="col-3">
        <h3 class="text-uppercase mb-5">{{ $phone2->phone_brand }}<br>{{ $phone2->phone_model }}</h3>
    </div>
    <div class="col-3"></div>
</div>
{{-- Phone Image --}}
<div class="row">
    <div class="col-3"></div>
    <div class="col-3">
        <img class="img-fluid" src="{{ Storage::url($phone1->phone_image) }}" alt="..." />
    </div>
    <div class="col-3">
        <img class="img-fluid" src="{{ Storage::url($phone2->phone_image) }}" alt="..." />
    </div>
    <div class="col-3"></div>
</div>
{{-- Screen --}}
<div class="row mt-3">
    <div class="col-3"></div>
    <div class="col-6">
        <h4 class="text-uppercase text-center">EKRAN</h4>
    </div>
    <div class="col-3"></div>
</div>
{{-- Screen Size --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>Ekran Boyutu:</b></div>
    <div class="col-3">{{ $phone1->screen_size }}</div>
    <div class="col-3">{{ $phone2->screen_size }}</div>
    <div class="col-3"></div>
</div>
{{-- Screen resolution --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>Ekran Çözünürlüğü:</b></div>
    <div class="col-3">{{ $phone1->screen_resolution }}</div>
    <div class="col-3">{{ $phone2->screen_resolution }}</div>
    <div class="col-3"></div>
</div>
{{-- Screen Refresh Rate --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>Ekran Yenileme Hızı:</b></div>
    <div class="col-3">{{ $phone1->screen_refresh_rate }}</div>
    <div class="col-3">{{ $phone2->screen_refresh_rate }}</div>
    <div class="col-3"></div>
</div>
{{-- Hardware --}}
<div class="row mt-5">
    <div class="col-3"></div>
    <div class="col-6">
        <h4 class="text-uppercase text-center">TEMEL DONANIM</h4>
    </div>
    <div class="col-3"></div>
</div>
{{-- Cpu --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>Cpu:</b></div>
    <div class="col-3">{{ $phone1->cpu }}</div>
    <div class="col-3">{{ $phone2->cpu }}</div>
    <div class="col-3"></div>
</div>
{{-- Gpu --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>Gpu:</b></div>
    <div class="col-3">{{ $phone1->gpu }}</div>
    <div class="col-3">{{ $phone2->gpu }}</div>
    <div class="col-3"></div>
</div>
{{-- Ram --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>Ram:</b></div>
    <div class="col-3">{{ $phone1->ram }}</div>
    <div class="col-3">{{ $phone2->ram }}</div>
    <div class="col-3"></div>
</div>
{{-- Storage Capacity --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>Depolama Kapasitesi:</b></div>
    <div class="col-3">{{ $phone1->storage_capacity }}</div>
    <div class="col-3">{{ $phone2->storage_capacity }}</div>
    <div class="col-3"></div>
</div>
{{-- Camera --}}
<div class="row mt-5">
    <div class="col-3"></div>
    <div class="col-6">
        <h4 class="text-uppercase text-center">KAMERA</h4>
    </div>
    <div class="col-3"></div>
</div>
{{-- Camera Resolution --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>Kamera Çözünürlüğü:</b></div>
    <div class="col-3">{{ $phone1->camera_resolution }}</div>
    <div class="col-3">{{ $phone2->camera_resolution }}</div>
    <div class="col-3"></div>
</div>
{{-- Second Rear Camera Resolution --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>İkinci Arka Kamera Çözünürlüğü:</b></div>
    <div class="col-3">{{ $phone1->second_rear_camera_resolution }}</div>
    <div class="col-3">{{ $phone2->second_rear_camera_resolution }}</div>
    <div class="col-3"></div>
</div>
{{-- Third Rear Camera Resolution --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>Üçüncü Arka Kamera Çözünürlüğü:</b></div>
    <div class="col-3">{{ $phone1->third_rear_camera_resolution }}</div>
    <div class="col-3">{{ $phone2->third_rear_camera_resolution }}</div>
    <div class="col-3"></div>
</div>
{{-- Battery --}}
<div class="row mt-5">
    <div class="col-3"></div>
    <div class="col-6">
        <h4 class="text-uppercase text-center">BATARYA</h4>
    </div>
    <div class="col-3"></div>
</div>
{{-- Battery Capacity --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>Batarya Kapasitesi:</b></div>
    <div class="col-3">{{ $phone1->battery_capacity }}</div>
    <div class="col-3">{{ $phone2->battery_capacity }}</div>
    <div class="col-3"></div>
</div>

{{-- Battery Charging Type --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>Şarj Türü:</b></div>
    <div class="col-3">{{ $phone1->charging_type }}</div>
    <div class="col-3">{{ $phone2->charging_type }}</div>
    <div class="col-3"></div>
</div>

{{-- Battery Fast Charge --}}
<div class="row mb-2">
    <div class="col-3 text-right"><b>Hızlı Şarj:</b></div>
    <div class="col-3">{{ $phone1->fast_charge }}</div>
    <div class="col-3">{{ $phone2->fast_charge }}</div>
    <div class="col-3"></div>
</div>

<button class="btn btn-primary btn-xl text-uppercase mt-5" data-bs-dismiss="modal" type="button">
    <i class="fas fa-times me-1"></i>Kapat</button>
