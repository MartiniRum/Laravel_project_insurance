@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card bg-warning bg-opacity-10">
                <div class="card-header bg-danger bg-opacity-90 m-3 rounded text-center fs-3">Pridėti sutrumpinimą</div>
                <div class="card-body">
                    <form action="{{ route('shorts.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Trumpinys</label>
                            <input class="form-control @error('shortcode') is-invalid @enderror" type="text" name="shortcode">
                            @error('shortcode')
                            @foreach( $errors->get('shortcode') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tekstas</label>
                            <input class="form-control @error('replace') is-invalid @enderror" type="text" name="replace" value="{{old('replace')}}">
                            @error('brand')
                            @foreach( $errors->get('replace') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>



                        <button class="btn btn-danger">Išsaugoti</button>
                        <a class="btn btn-warning mx-3 float-end" href="{{ route('shorts.index') }}">Atgal</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection


