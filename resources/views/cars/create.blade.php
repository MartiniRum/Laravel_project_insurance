@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card bg-warning bg-opacity-10">
                <div class="card-header bg-danger bg-opacity-90 m-3 rounded text-center fs-3">Pridėti automobilį</div>
                <div class="card-body">
                    <form action="{{ route('cars.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Valstybiniai numeriai</label>
                            <input class="form-control" type="text" name="reg_number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Markė</label>
                            <input class="form-control" type="text" name="brand">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Modelis</label>
                            <input class="form-control" type="text" name="model">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Savininkas</label>
                            <select class="form-control" name="owner_id">
                                <option selected>Pasrinkti</option>
                                @foreach($owners as $owner)
                                    <option value="{{$owner->id}}">{{$owner->name}} {{$owner->surname}}</option>
                                @endforeach
                            </select>
                        </div>


                        <button class="btn btn-danger ps-3 pe-3">Pridėti</button>
                        <a class="btn btn-warning ps-4 pe-4 float-end" href="{{ route('cars.index') }}">Atgal</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
