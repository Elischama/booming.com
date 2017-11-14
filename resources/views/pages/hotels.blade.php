@extends('layouts.default')

@section('contenu')
    <section>
    <div class="row">
        <div class="col-md-4">
        dfjdfhndjfndfkjdfdffdfdfdhf
        </div>

        <div class="col-md-8">
            <ul>
                <li>
                    @foreach($hotels as $hotel)
                        {{ $hotel->name }}
                    @endforeach
                </li>
            </ul>

        </div>
    </div>
    </section>
@endsection