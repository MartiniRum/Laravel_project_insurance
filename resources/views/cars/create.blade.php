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
                            <input class="form-control @error('reg_number') is-invalid @enderror" type="text"
                                   name="reg_number">
                            @error('reg_number')
                            @foreach( $errors->get('reg_number') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Automobilio markė</label>
                            <input class="form-control @error('brand') is-invalid @enderror" type="text" name="brand"
                                   value="{{old('brand')}}">
                            @error('brand')
                            @foreach( $errors->get('brand') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Automobilio modelis</label>
                            <input class="form-control @error('model') is-invalid @enderror" type="text" name="model"
                                   value="{{old('model')}}">
                            @error('model')
                            @foreach( $errors->get('model') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Savininkas</label>
                            <select class="form-control @error('owner_id') is-invalid @enderror" name="owner_id">
                                <option selected>Pasirinkti</option>
                                @foreach($owners as $owner)
                                    <option value="{{$owner->id}}"
                                            @selected(old('owner_id')==$owner->id) )> {{$owner->name}} {{$owner->surname}}</option>
                                @endforeach
                            </select>
                            @error('owner_id')
                            @foreach( $errors->get('owner_id') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Automobilio nuotrauka:</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <button class="btn btn-danger">Pridėti</button>
                        <a class="btn btn-warning mx-3 float-end" href="{{ route('cars.index') }}">Atgal</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
