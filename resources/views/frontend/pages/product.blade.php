@extends('frontend.layout.layout')


@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Tank Top T-Shirt</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset($product->image) }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2 class="text-black">{{ $product->name ?? '' }}</h2>
                    {!! $product->content ?? '' !!}

                    <p><strong class="text-primary h4">${{ number_format($product->price, 2) }}</strong></p>

                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <div class="mb-1 d-flex">
                            <label for="option-s" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input
                                        type="radio" id="option-s" value="S" name="size"
                                        {{ $product->size == 'S' ? 'checked' : '' }}></span> <span
                                    class="d-inline-block text-black">Small</span>
                            </label>
                            <label for="option-m" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input
                                        type="radio" id="option-m" value="M" name="size"
                                        {{ $product->size == 'M' ? 'checked' : '' }}></span> <span
                                    class="d-inline-block text-black">Medium</span>
                            </label>
                            <label for="option-l" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input
                                        type="radio" id="option-l" value="L" name="size"
                                        {{ $product->size == 'L' ? 'checked' : '' }}></span> <span
                                    class="d-inline-block text-black">Large</span>
                            </label>
                            <label for="option-xl" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input
                                        type="radio" id="option-xl" value="XL" name="size"
                                        {{ $product->size == 'XL' ? 'checked' : '' }}></span> <span
                                    class="d-inline-block text-black"> Extra
                                    Large</span>
                            </label>
                        </div>
                        <div class="mb-5">
                            <div class="input-group mb-3" style="max-width: 120px;">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                </div>
                                <input type="text" class="form-control text-center" value="1" name="qty"
                                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                </div>
                            </div>

                        </div>
                        <p><button type="submit" class="buy-now btn btn-sm btn-primary">Add To Cart</button></p>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @if (!empty($products) && $products->count() > 0)
        <div class="site-section block-3 site-blocks-2 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Featured Products</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="nonloop-block-3 owl-carousel">
                            @foreach ($products as $product)
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                                class="img-fluid">
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a
                                                    href="{{ route('productdetail', $product->slug) }}">{{ $product->name }}</a>
                                            </h3>
                                            <p class="mb-0">{{ $product->short_text }}</p>
                                            <p class="text-primary font-weight-bold">${{ $product->price }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
