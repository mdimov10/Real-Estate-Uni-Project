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
                                Добавяне на нов имот
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
                                <label for="type">Тип:</label>
                                <textarea name="type" class="form-control text-warning @error('type') border-danger @enderror" id="type">{{ $property->type }}</textarea>

                                @error('type')
                                <p class="text-danger"> {{ $errors->first('type') }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="rooms">Бр. стаи:</label>
                                    <textarea name="rooms" class="form-control @error('rooms') border-danger @enderror" id="rooms" placeholder="Бр. стаи">{{ $property->rooms }}</textarea>

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
                                <label for="balcony">Балкон</label>
                                    <textarea name="balcony" class="form-control @error('balcony') border-danger @enderror" id="balcony" placeholder="Балкон">{{ $property->balcony }}</textarea>

                                @error('balcony')
                                <p class="text-danger"> {{ $errors->first('balcony') }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="location">Локация:</label>
                                    <textarea name="location" class="form-control @error('location') border-danger @enderror" id="location" placeholder="Адрес">{{ $property->location }}</textarea>

                                @error('location')
                                <p class="text-danger"> {{ $errors->first('location') }}</p>
                                @enderror
                            </div>

{{--                            <div class="col-md-6" id="image_name">--}}
{{--                                <input type="file" name="image_name" class="form-control"> {{ $property->image_name }}--}}
{{--                                <img src="/css/images/{{ $property->image_name }}" style="width: 200px;">,m54--}}
{{--                                @error('image_name')--}}
{{--                                <p class="text-danger"> {{ $errors->first('image_name') }}</p>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
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
