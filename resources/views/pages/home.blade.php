@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <x-home.categories />
    <x-home.banner-carousel />
    <x-home.text-banner />
    <x-home.smallbanner-carousel />
    <x-home.top-products />
    <x-home.best-seller/>
    <x-home.offers />
    <x-home.allcategories />
    <x-home.product-glance />

@endsection
