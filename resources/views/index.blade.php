@extends('layouts.app-index')

<div class="contentindex">
    <div class="row no-padding">
        <div class="col-sm-6 no-padding cursor" id="index-montack">
            <a href="{{ url('/montack') }}">
                <img src="{{ asset('img/images/index/montack.png') }}" alt="" class="montack-index">
                <img src="{{ asset('img/images/montackinmmediate.png') }}" alt="" class="logo-index-promo" id="image-montack-index">
            </a>
           
        </div>
        <div class="col-sm-6 no-padding cursor" id="index-totatech">
            <a href="{{ url('/totaltech') }}">
                <img src="{{ asset('img/images/index/totaltech.png') }}" alt="" class="totaltech-index">
                <img src="{{ asset('img/images/totaltech/totaltech.png') }}" alt="" class="logo-index-promo" id="image-totaltech-index">
            </a>
        </div>
    </div>
    <img src="{{ asset('img/images/ceys.png') }}" alt="" class="ceys-index">
</div>
