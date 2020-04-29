@extends ('layout')

@section('content')
    <div class="navbar">
        <ul>
            <li><h3><a href="/properties/create">Създаване на нов имот</a></h3></li>
        </ul>
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

                <td><img src="/css/images/{{ $property->image_name }}" style="width: 100px;"></td>
                <td><a href="properties/del/{{ $property->slug }}">Изтриване</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection