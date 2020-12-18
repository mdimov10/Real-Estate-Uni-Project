@extends('front.layout')

@section('content')
<div class="section-wrapper-pt">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 order-1 order-md-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-basic mb-5">
                                <img src="/css/images/{{ $property->image_name }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <div class="card-head d-flex flex-column justify-content-center align-items-center">
                                        <h4 class="card-title text-center mb-0">{{ $property->title }}, </h4>

                                        <h4 class="card-meta">{{ $property->price }} лв./месец</h4><!-- /.card-meta -->
                                    </div>

                                    <div class="border-wrapper p-3">
                                        <div class="border-black"></div><!-- /.border-black -->
                                    </div><!-- /.border-wrapper -->

                                    <div class="card-meta-items d-flex px-md-5">
                                        @foreach($property->categories as $category)
                                            <h5 class="card-meta">{{ $category->name }}, &nbsp;</h5><!-- /.card-meta -->
                                        @endforeach

                                        @foreach($property->cities as $city)
                                            <h5 class="card-meta">{{ $city->name }}</h5><!-- /.card-meta -->
                                        @endforeach
                                    </div>

                                    <p class="card-text px-md-5">
                                       {{ $property->description }}
                                    </p>
                                </div>

                                <div class="card-bottom py-3 mx-auto">
                                    <div class="btn-wrapper dflex justify-content-center">
                                        <a href="tel:0876685862" class="btn btn-dark">Обаждане</a>
                                        <a href="mailto:mdimov10@gmail.com" class="btn btn-info">Изпратете запитване</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-sm-12 -->
                    </div><!-- /.row -->

                    <div class="section-title my-3">Подобни имоти</div><!-- /.section-title -->

                    <div class="row">
                        @foreach($relatedProperties as $relatedProperty)
                        <div class="col-sm-3">
                            <div class="card card-basic mb-5">
                                <a href="#">
                                    <img src="/css/images/{{ $relatedProperty->image_name }}" class="card-img-top" alt="..." style="height: 250px;">

                                    <div class="card-body">
                                        <h5 class="card-title mb-0">{{ $relatedProperty->title }}</h5>

                                        <div class="card-meta-items d-flex">
                                            @foreach($relatedProperty->categories as $category)
                                                <h5 class="card-meta">{{ $category->name }}, &nbsp;</h5><!-- /.card-meta -->
                                            @endforeach

                                            @foreach($relatedProperty->cities as $city)
                                                <h5 class="card-meta">{{ $city->name }}</h5><!-- /.card-meta -->
                                            @endforeach
                                        </div>

                                        <p class="card-text">{{ $relatedProperty->description }}</p>
                                    </div>
                                </a>
                            </div>
                        </div><!-- /.col-sm-6 -->
                        @endforeach
                    </div><!-- /.row -->
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section -->
</div><!-- /.section-wrapper-pt -->
@endsection
