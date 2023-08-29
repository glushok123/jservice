
@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='row'>
        <h3>Каталог товаров <span class="count-products">{{ $countProducts }} товаров</span></h3>
    </div>
    <br>



    @include('shop.catalog.sort_filter')
    <br>

    @include('shop.catalog.product_gird')

    <br>

    @include('shop.catalog.product_pagination')

</div>

@endsection

@section('description', 'Интернет магазин')
@section('keywords', 'Интернет магазин')
@section('title', 'Интернет магазин')