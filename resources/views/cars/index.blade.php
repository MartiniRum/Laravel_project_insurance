@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card bg-warning bg-opacity-10">
                <div class="card-header bg-danger bg-opacity-90 m-3 rounded text-center fs-3">Visi automobiliai</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Markė</th>
                            <th>Modelis</th>
                            <th>Valstybiniai numeriai</th>
                            <th>Savininkas</th>
                            <th colspan="2" ><a class="btn btn-warning opacity-75 me-3 ps-3 pe-3 float-end "
                                   href="{{ route('cars.create') }}">Pridėti automobilį</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td class="pe-5">{{ $car->brand }}</td>
                                <td class="pe-5">{{ $car->model }}</td>
                                <td class="w-25">{{ $car->reg_number }}</td>
                                <td class="w-25">
                                    {{ $car->owner->name }}
                                    {{ $car->owner->surname }}
                                </td>
                                <td class="w-50"><a class="btn btn-success d-flex m-0 float-end"
                                                    href="{{ route('cars.edit', $car->id) }}">Redaguoti</a>
                                </td>
                                <td class="d-inline-flex justify-content-end">
                                    <form class="float-end m-0" action="{{ route('cars.destroy', $car->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger text-dark fw-bold d-flex float-end m-0 me-3">X</button>
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
