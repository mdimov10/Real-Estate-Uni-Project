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
                                Добавяне на нов град
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form" method="POST" action="/cities">
                        @csrf
                        <div class="kt-portlet__body">
                            <div class="form-group">
                                <label for="name">Име</label>
                                <input type="text" name="name" class="form-control @error('name') border-danger @enderror" id="name" placeholder="Име на града" value="{{ old('name') }}">

                                @error('name')
                                <p class="text-danger"> {{ $errors->first('name') }}</p>
                                @enderror
                            </div>

                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
@endsection
