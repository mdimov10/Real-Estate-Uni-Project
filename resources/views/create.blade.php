@extends ('layout')

@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-12">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Добавяне на нов пост
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form" method="POST" action="/properties">
                        @csrf
                        <div class="kt-portlet__body">
                            <div class="form-group">
                                <label for="title">Име</label>
                                <input type="text" name="title" class="form-control @error('title') border-danger @enderror" id="title" placeholder="Име на имота.." value="{{ old('title') }}">

                                @error('title')
                                <p class="text-danger"> {{ $errors->first('title') }}</p>
                                @enderror
                            </div>

                            <div class="form-group" hidden>
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                            </div>

                            <div class="form-group">
                                <label for="name">Тип на апартамента</label>
                                <select name="categories" class="form-control" id="exampleFormControlSelect1">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @error('name')
                                <p class="text-danger"> {{ $errors->first('name') }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="city">Град</label>
                                <select name="cities" class="form-control" id="exampleFormControlSelect1">
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>

                                @error('city')
                                <p class="text-danger"> {{ $errors->first('city') }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="floor">Етаж</label>
                                <select name="floors" class="form-control" id="exampleFormControlSelect1">
                                    @foreach($floors as $floor)
                                        <option value="{{ $floor->id }}">{{ $floor->name }}</option>
                                    @endforeach
                                </select>

                                @error('floor')
                                <p class="text-danger"> {{ $errors->first('floor') }}</p>
                                @enderror
                            </div>

{{--                            <div class="form-group" id="categories" >--}}
{{--                               Моля, изберете тип на апартамента<br>--}}
{{--                                    @foreach($categories as $category)--}}
{{--                                    <input type="checkbox" id="exampleFormControlSelect1" name="categories" value="{{$category->id}}"> {{ $category->name}} <br>--}}
{{--                                    @endforeach--}}
{{--                            </div>--}}

{{--                            <div class="form-group" id="cities" >--}}
{{--                               Моля, изберете град<br>--}}
{{--                                    @foreach($cities as $city)--}}
{{--                                    <input type="checkbox" id="exampleFormControlSelect2" name="cities" value="{{$city->id}}"> {{ $city->name}} <br>--}}
{{--                                    @endforeach--}}
{{--                            </div>--}}

                            <div class="form-group">
                                <label for="description">Описание</label>
                                <textarea type="text" name="description" class="form-control @error('description') border-danger @enderror" id="description" placeholder="Съдържание на поста">{{ old('description') }}</textarea>

                                @error('description')
                                <p class="text-danger"> {{ $errors->first('description') }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">Цена</label>
                                <textarea type="text" name="price" class="form-control @error('price') border-danger @enderror" id="price" placeholder="Съдържание на поста">{{ old('price') }}</textarea>

                                @error('price')
                                <p class="text-danger"> {{ $errors->first('price') }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6" id="image_name">
                            <input type="file" name="image_name" class="form-control">

                            @error('image_name')
                            <p class="text-danger"> {{ $errors->first('image_name') }}</p>
                            @enderror
                        </div>

                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
@endsection
