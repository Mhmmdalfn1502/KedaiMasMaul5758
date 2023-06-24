@extends('template-admin')
@section('content')
<div class="container-fluid">


    <div class="row p-5">
        <div class="col-md-6">
            <h2 class="fw-bold">Sales Overview</h2>
            <p style="font-size: 16px">Track, manage, and forecast your customer and orders.</p>
        </div>
        <div class="col-md-6 text-end">
            <div class="row">
                <div class="col-md-12">
                    <p>Saturday, 23 Februari 2023</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="dropdown d-inline me-2">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #F5D247">
                            Showing: This year
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn" style="background-color: #F5D247;">Export data <img src="/assets/img/file.png"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row p-5">
        <div class="col-md-3">
            <div class="kotak p-3">
                <p class="pt-3">Total Sales</p>
                <p class="fw-bold mt-3">Rp. 180.000.000</p>
                <p>In 1 Years 2022</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="kotak p-3">
                <p class="pt-3">Total Order</p>
                <p class="fw-bold mt-3">3.250 pcs</p>
                <p>In 1 Years 2022</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="kotak p-3">
                <p class="pt-3">Total Customer</p>
                <p class="fw-bold mt-3">12.000</p>
                <p>In 1 Years 2022</p>
            </div>
        </div>
    </div>


    <div class="row px-5">
        <div class="col-md-12">
            <h2 class="fw-bold">Favorit Menu</h2>
        </div>
    </div>
    <div class="row px-5 text-center fw-bold" style="justify-content: center;">
        <div class="col-md-4 mb-5">
            <div class="kotak2">
                <p>NASI AYAM SERUNDENG</p>
                <img src="/assets/img/ayam-surendeng.svg" alt="" >
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="kotak2">
                <p>RICE BOWL</p>
                <img src="/assets/img/rice-bowl.svg" alt="">
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="kotak2">
                <p>HIHANG HOHENG OREO</p>         
                <img src="/assets/img/hihang-hoheng-oreo.svg" alt="">
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="kotak2">
                <p>ICE MANGO</p>         
                <img src="/assets/img/ice-mango.svg" alt="">
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="kotak2">
                <p>ICE CHOCOLATE</p>             
                <img src="/assets/img/ice-chocolate.svg" alt=""> 
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="kotak2">
                <p>ICE TARO</p>               
                <img src="/assets/img/es-taro.svg" alt="">
            </div>
        </div>
    </div>
</div>
@endsection