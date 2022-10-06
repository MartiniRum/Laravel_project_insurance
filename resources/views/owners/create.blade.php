@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card bg-warning bg-opacity-10">
                <div class="card-header bg-danger bg-opacity-90 m-3 rounded text-center fs-3">Pridėti savininką</div>
                <div class="card-body">
    <form action="{{ route('owners.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Vardas</label>
            <input class="form-control" type="text" name="name" >
        </div>
        <div  class="mb-3">
            <label class="form-label">Pavardė</label>
            <input class="form-control" type="text" name="surname" >
        </div>

        <button class="btn btn-danger ps-3 pe-3">Pridėti</button>
        <a class="btn btn-warning ps-4 pe-4 float-end" href="{{ route('owners.index') }}">Atgal</a>
    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
