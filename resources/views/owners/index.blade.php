@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card bg-warning bg-opacity-10">
                <div class="card-header bg-danger bg-opacity-90 m-3 rounded text-center fs-3">Savininkai</div>
                <div class="card-body">
                    <table class="table">
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
                                <td>{{ $owner->name }}</td>
                                <td>{{ $owner->surname }}</td>
                                <td>
                                    @foreach($owner->car as $oc)
                                        [{{ $oc->brand }}
                                        {{ $oc->model }}]
                                    @endforeach
                                </td>

                                <td class="d-flex float-end m-0 me-3">
                                    <form action="{{ route('owners.destroy', $owner->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td class="d-flex m-0 float-end"><a class="btn btn-success"
                                                                href="{{ route('owners.edit', $owner->id) }}">Update</a>
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
