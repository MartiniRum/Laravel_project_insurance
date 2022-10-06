@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card bg-warning bg-opacity-10">
                <div class="card-header bg-danger bg-opacity-90 m-3 rounded text-center fs-3">Visi automobiliai</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Markė</th>
                            <th>Modelis</th>
                            <th>Valstybiniai numeriai</th>
                            <th>Savininkas</th>
                            <th><a class="btn btn-warning opacity-75 me-3 w-50 float-end "
                                   href="{{ route('cars.create') }}">Pridėti automobilį</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->reg_number }}</td>
                                <td>
                                    {{ $car->owner->name }}
                                    {{ $car->owner->surname }}
                                </td>
                                <td class="d-flex float-end"><a class="btn btn-success me-3"
                                                                href="{{ route('cars.edit', $car->id) }}">Update</a>

                                    <form class="me-3" action="{{ route('cars.destroy', $car->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
