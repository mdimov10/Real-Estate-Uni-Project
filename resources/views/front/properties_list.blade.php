@extends('front.layout')

@section('content')
    <div class="section-wrapper-pt">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
{{--                        <div class="section-head-top-title section-head-filter-title">--}}
{{--                            <a href="{{ \Request::url() }}" class="btn btn-dark">{{ trans('Изчисти всички') }}</a>--}}
{{--                        </div>--}}

                        <button class="btn btn-dark d-md-none toggle-sidebar w-100 mb-3" data-toggle="collapse" data-target="#sidebar-collapse"
                                role="button" aria-expanded="false" aria-controls="sidebar-collapse" style="background-color: black;">
                            Филтри
                            <i class="far fa-filter ml-2"></i>
                        </button>

                        <div class="sidebar collapse py-3" id="sidebar-collapse">
                            <button type="button" class="close d-md-none" aria-label="Close" data-toggle="collapse" data-target="#sidebar-collapse" role="button" aria-expanded="false" aria-controls="sidebar-collapse">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            <div class="form">
                                <form action="?" method="get" name="filters">
                                    <div class="row">
                                        <div class="col-12 col-md-2">
                                            <div class="dropdown sidebar-filter-dropdown">
                                                <button class="btn sidebar-filter-head dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Град
                                                </button>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    @foreach($cities as $city)
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="{{ $city->name }}" class="custom-control-input" id="customCheck-{{$city->id}}">

                                                            <label class="custom-control-label" for="customCheck-{{$city->id}}">{{ $city->name }}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <div class="dropdown sidebar-filter-dropdown">
                                                <button class="btn sidebar-filter-head dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Тип:
                                                </button>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    @foreach($categories as $category)
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="{{ $category->name }}" class="custom-control-input" id="customCheck-{{$category->id}}">

                                                            <label class="custom-control-label" for="customCheck-{{$category->id}}">{{ $category->name }}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <div class="dropdown sidebar-filter-dropdown">
                                                <button class="btn sidebar-filter-head dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Цена
                                                </button>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <div class="dropdown-menu-item d-flex">
                                                        <input type="text" id="price_min" name="start_price" placeholder="Минимална цена">
                                                    </div>

                                                    <div class="dropdown-menu-item d-flex">
                                                        <input type="text" id="price_max" name="end_price" placeholder="Максимална цена">
                                                    </div>
{{--                                                    <div id="slider-range"></div>--}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <button type="submit" class="btn btn-dark btn-submit">Филтриране</button>
                                        </div>
                                    </div>

                                </form>
                            </div><!-- /.form -->
                        </div><!-- /.sidebar -->
                    </div>

                    <div class="col-md-12 order-1 order-md-2">
                        <div class="row">
                            @foreach($properties as $property)
                                <div class="col-sm-3">
                                    <div class="card card-basic mb-5">
                                        <a href="/properties/{{ $property->slug }}">
                                            <img src="/css/images/{{ $property->image_name }}" class="card-img-top" alt="..." style="width: 480px; height: 260px;">

                                            <div class="card-body">
                                                <h5 class="card-title mb-0">{{ $property->title }}</h5>

                                                <div class="card-meta-items d-flex">
                                                    @foreach($property->categories as $category)
                                                        <div class="card-meta">{{ $category->name }}, &nbsp;</div><!-- /.card-meta -->
                                                    @endforeach

                                                    @foreach($property->cities as $city)
                                                        <div class="card-meta">{{ $city->name }}</div><!-- /.card-meta -->
                                                    @endforeach
                                                </div>

                                                <p><b>{{ $property->price }} лв. </b></p>
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
