@extends('layouts.default')

@section('contenu')
    <div class="row">
        <div class="col-md-4">

        </div>

        <div class="col-md-8">
        @foreach($hotels as $hotel)
            <li>{{ $hotel->name }}</li>
        @endforeach
        </div>
    </div>
@endsection