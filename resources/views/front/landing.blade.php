@extends('front.layout')

@section('content')
    <style>
        .section-landing .btn-black { left: 40%; }

        @media (max-width: 767px) {
            .section-landing .btn-black { left: 35%; }
        }
    </style>
<main class="main">
    <div class="section-landing">
        <div class="container">
            <img src="/css/images/banner2.jpg" class="d-none d-md-block">

            <div class="row my-5">
                <div class="col-sm-6 mb-3 mb-md-0">
                    <a href="/properties" class="btn btn-black hvr-sweep-to-right" style="position: absolute; bottom: 10%; background-color: rgba(255,255,255,0.8)">Наеми >></a>
                    <img src="/css/images/left.jpg" alt="" class="w-100">
                </div>

                <div class="col-sm-6">
                    <a href="/properties" class="btn btn-black hvr-sweep-to-right" style="position: absolute; bottom: 10%; background-color: rgba(255,255,255,0.8)">Продажби >></a>
                    <img src="/css/images/right.jpg" alt="" class="w-100">
                </div>
            </div>

            <form style="max-width: 800px; margin: auto; padding: 2rem 0;">
                <h5 class="section-title">Абонирайте се за да получавате нови оферти</h5>
                <div class="form-inner d-md-flex justify-content-center align-items-center">
                    <label for="exampleInputEmail1" class="mr-3">E-mail</label>
                    <div class="form-group mb-0">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Въведете вашият e-mail" style="background-color: transparent; border: 1px solid black;">
                    </div>
                    <div class="text-center">
                        <a href="/properties" class="btn border border-dark hvr-sweep-to-right my-3 my-md-0">Абонирай се</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
