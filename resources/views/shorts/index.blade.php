@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card bg-warning bg-opacity-10">
                <div class="card-header bg-danger bg-opacity-90 m-3 rounded text-center fs-3">Trumpiniai</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Trumpinys</th>
                            <th>Tekstas</th>
                            <th colspan="2"><a class="btn btn-warning opacity-75 me-3 ps-1 pe-1 float-end "
                                               href="{{ route('shorts.create') }}">Pridėti sutrumpinimą</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shorts as $shortCode)
                            <tr>
                                <td class="w-25">{{ $shortCode->shortcode }}</td>
                                <td class="w-25">{{ $shortCode->replace }}</td>

                                <td class="w-50"><a class="btn btn-success d-flex m-0 float-end"
                                                                    href="{{ route('shorts.edit', $shortCode->id) }}">Redaguoti</a>
                                </td>
                                <td class="d-inline-flex justify-content-end">
                                    <form class="float-end m-0" action="{{ route('shorts.destroy', $shortCode->id) }}" method="post">
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
