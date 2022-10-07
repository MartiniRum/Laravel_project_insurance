@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card bg-warning bg-opacity-10">
                <div class="card-header bg-danger bg-opacity-90 m-3 rounded text-center fs-3">Redagavimas</div>
                <div class="card-body">
                    <form action="{{ route('shorts.update', $shortCode->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">shortcode</label>
                            <input class="form-control" type="text" name="shortcode" value="{{ $shortCode->shortcode }}">
                        </div>
                        <div  class="mb-3">
                            <label class="form-label">replace</label>
                            <input class="form-control" type="text" name="replace" value="{{ $shortCode->replace }}">
                        </div>

                        <button class="btn btn-danger">Išsaugoti</button>
                        <a class="btn btn-warning mx-3 float-end" href="{{ route('shorts.index') }}">Atgal</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

