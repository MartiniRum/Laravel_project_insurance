@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card bg-warning bg-opacity-10">
                <div class="card-header bg-danger bg-opacity-90 m-3 rounded text-center fs-3">Savininkai</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Vardas</th>
                            <th>Pavardė</th>
                            <th>Priklausantys automobiliai</th>
                            <th colspan="2"><a class="btn btn-warning opacity-75 me-3 ps-4 pe-4 float-end "
                                   href="{{ route('owners.create') }}">Pridėti savininką</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($owners as $owner)
                            <tr>
                                <td class="w-25">{{ $owner->name }}</td>
                                <td class="w-25">{{ $owner->surname }}</td>
                                <td class="w-25">
                                    @foreach($owner->car as $oc)
                                        [{{ $oc->brand }}
                                        {{ $oc->model }}]
                                    @endforeach
                                </td>

                                <td class="w-25"><a class="btn btn-success d-flex m-0 float-end"
                                                     href="{{ route('owners.edit', $owner->id) }}">Redaguoti</a>
                                </td>
                                <td class="d-inline-flex justify-content-end">
                                    <form class="float-end m-0" action="{{ route('owners.destroy', $owner->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger d-flex float-end m-0 me-3">Ištrinti</button>
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
