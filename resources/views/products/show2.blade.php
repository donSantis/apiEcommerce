<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Product Details</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-default float-right"
                   href="{{ route('products.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
            @foreach($products as $product)
                <div class="swiper-slide">
                    <div class="card mt-3" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{     $product->description }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
        <div class="swiper-button-next  "></div>
        <div class="swiper-button-prev "></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

