@extends ('layout')

@section('content')
    <div class="navbar">
        <div class="d-flex">
            <div class="btn btn-primary mr-3">
                <a class="text-white" href="/properties/create">Добавяне на нов имот</a>
            </div>

            <div class="btn btn-primary mr-3">
                <a class="text-white" href="/cities/create">Добавяне на нов град</a>
            </div>

            <div class="btn btn-primary mr-3">
                <a class="text-white" href="/categories/create">Добавяне на нов тип</a>
            </div>

            <div class="btn btn-primary mr-3">
                <a class="text-white" href="/floors/create">Добавяне на нов етаж</a>
            </div>

            <div class="d-flex">
            <div class="btn btn-danger mr-3">
                <a class="text-white" href="/properties">Виж всички имоти</a>
            </div>

            <div class="btn btn-danger mr-3">
                <a class="text-white" href="/cities">Виж всички градове</a>
            </div>

            <div class="btn btn-danger mr-3">
                <a class="text-white" href="/categories">Виж всички типове</a>
            </div>

            <div class="btn btn-danger mr-3">
                <a class="text-white" href="/floors">виж всички етажи</a>
            </div>
        </div>
        </div>
            <div class="nav-item dropdown ml-auto mr-5 pr-5">
                <a class="btn btn-primary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Сортирай
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="/properties?price=asc" class="dropdown-item">Цена(възх.)</a>
                    <a href="/properties?price=desc" class="dropdown-item">Цена(низх.)</a>
                    <a href="/properties?created=asc" class="dropdown-item">Най-стари</a>
                    <a href="/properties?created=desc" class="dropdown-item">Най-нови</a>
                    <a href="/properties" class="dropdown-item">По подразбиране</a>
                </div>
            </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"><h2></h2></th>
            <th scope="col"><h2>Име</h2></th>
            <th scope="col"><h2>Тип</h2></th>
            <th scope="col"><h2>Град</h2></th>
            <th scope="col"><h2>Етаж</h2></th>
            <th scope="col"><h2>Кратко описание</h2></th>
            <th scope="col"><h2>Цена</h2></th>
            <th scope="col"><h2>Добавен на</h2></th>
            <th scope="col"><h2>Снимка</h2></th>
        </tr>
        </thead>

        <tbody>
        @foreach($properties as $property)
            <tr>
                <th scope="row"></th>
                <td>{{ $property->title }}</td>

                @foreach($property->categories as $category)
                    <td>{{ $category->name }}</td>
                @endforeach

                @foreach($property->cities as $city)
                    <td>{{ $city->name }}</td>
                @endforeach

                @foreach($property->floors as $floor)
                    <td>{{ $floor->name }}</td>
                @endforeach

                <td>{{ $property->description }} </td>

                <td>{{ $property->price }}</td>

                <td>{{ $property->created_at }}</td>

                <td><img src="/css/images/{{ $property->image_name }}" style="width: 100px;"></td>
                <td><a href="properties/{{ $property->slug }}/edit">Редактирай</a></td>
                <td><a href="properties/del/{{ $property->slug }}">Изтриване</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection