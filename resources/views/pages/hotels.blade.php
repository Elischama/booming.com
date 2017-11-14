@extends('layouts.default')

@section('contenu')
    <section>
    <div class="row" style="margin-top: 500px">
        <div class="col-md-4">
        dfjdfhndjfndfkjdfdffdfdfdhf
        </div>

        <div class="col-md-8">
               <ul>
                   @foreach($annonces as $annonce)
                   <li>
                       <a href="/annonces/{{ $annonce->id }}">

                           {{ $annonce->name }}
                       </a>
                   </li>
                   @endforeach
               </ul>


        </div>
    </div>
    </section>
@endsection