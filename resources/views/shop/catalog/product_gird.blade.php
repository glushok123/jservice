<div class='row g-0' products-block>
    @foreach ($products as $product)

        @php
            $images = 'product_images/product_no_image.png';
            if ($product->images->first()){
                $images = $product->images->first()->thumbnail;
            }
        @endphp
        <div class='col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 d-flex align-items-stretch'>
            <div class="card text-center h-100" style="width:100%" href='/'>
                <a href=""><img src="{{ $images }}" class="img-fluid rounded" alt="..." 
                    style='
                        max-width:100%;
                        height:250px;
                        object-fit: cover;
                        '></a>
                <div class="card-body">
                <a href=""><h5 class="card-title">{{ $product->name }}</h5></a>
                <h3 class="card-text">{{ $product->price }} Р.</h3>
                <form class="flex justify-end">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->name }}" name="name">
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="1" name="quantity">
                </form>
                <button class="btn btn-primary" add-in-cart>В корзину</button>
                </div>
            </div>
        </div>
    @endforeach
</div>