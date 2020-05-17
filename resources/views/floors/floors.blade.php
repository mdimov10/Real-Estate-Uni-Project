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
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"><h2></h2></th>
            <th scope="col"><h2>Име</h2></th>
        </tr>
        </thead>

        <tbody>
        @foreach($floors as $floor)
            <tr>
                <th scope="row"></th>
                <td>{{ $floor->name }}</td>

                <td><a href="cities/del/{{ $floor->slug }}">Изтриване</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection