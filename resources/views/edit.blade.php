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
                                Редактиране
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form" method="POST" action="/properties/{{ $property->slug }}">
                        @csrf
                        @method('PUT')
                        <div class="kt-portlet__body">
                            <div class="form-group">
                                <label for="title">Име на имота:</label>
                                <input type="text" name="title" class="form-control @error('title') border-danger @enderror" id="title" placeholder="Име на поста" value="{{ $property->title }}">

                                @error('title')
                                <p class="text-danger"> {{ $errors->first('title') }}</p>
                                @enderror
                            </div>

                            <div class="form-group" hidden>
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                            </div>

                            <div class="form-group">
                                <label for="category">Тип:</label>
                                @foreach($property->categories as $category)
                                    <input type="text" name="category" class="form-control @error('category') border-danger @enderror" id="category" value="{{ $category->name }}">
                                @endforeach

                                @error('category')
                                <p class="text-danger"> {{ $errors->first('category') }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="rooms">Етаж</label>
                                @foreach($property->floors as $floor)
                                    <input type="text" name="floor" class="form-control @error('floor') border-danger @enderror" id="floor" value="{{ $floor->name }}">
                                @endforeach

                                @error('rooms')
                                <p class="text-danger"> {{ $errors->first('rooms') }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">Цена</label>
                                    <textarea name="price" class="form-control @error('price') border-danger @enderror" id="price" placeholder="Цена">{{ $property->price }}</textarea>

                                @error('price')
                                <p class="text-danger"> {{ $errors->first('price') }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="city">Град:</label>
                                @foreach($property->cities as $city)
                                    <input type="text" name="city" class="form-control @error('city') border-danger @enderror" id="city"  value="{{ $city->name }}">
                                @endforeach

                                @error('city')
                                <p class="text-danger"> {{ $errors->first('city') }}</p>
                                @enderror
                            </div>
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
