<div class="col-lg-4 col-sm-6 mb-4">
    <div class="product-item">
        <a class="product-link" {{-- data-bs-toggle="modal" --}} data-phone-id="{{ $phone->id }}"
            href="#mobile-phone-modal{{ $phone->id }}">
            <div class="product-hover">
                <div class="product-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <div style="justify-content: center; text-align: center">
                <img class="img-fluid" src="{{ Storage::url($phone->phone_image) }}" alt="..." />
            </div>
        </a>
        <div class="product-caption">
            <div class="product-caption-heading">{{ $phone->phone_brand }}</div>
            <div class="product-caption-subheading text-muted">{{ $phone->phone_model }}</div>
        </div>
    </div>
</div>
