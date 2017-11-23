<div class="search">
    <div class="container">
        {!! Form::open() !!}
        <div class="row search-principal">
            <div class="logo">
                <img src="/assets/img/logo/logo-2.png" alt="">
            </div>
            <div class="form-inline">
                <div class="form-group">
                    <label for="" class="form-control-one-label">Cherche :</label>
                    <input type="text" class="form-control form-control-one" placeholder="Hotel, restaurant ou maquis ?">
                </div>
                <div class="form-group">
                    <label for="" class="form-control-two-label">ou :</label>
                    <input type="text" class="form-control form-control-two" placeholder="ex Abidjan">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-form"><i class="fa fa-search"></i></button>
                </div>
                <div class="form-group">
                    <a href="" class="btn-login">Connexion</a>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="search-sub-bar">
    <ul>
        <li><a href="{{ route('annonce.hotel') }}">Hotels</a></li>
        <li><a href="{{ route('annonce.resto') }}">Restaurants</a></li>
        <li><a href="{{ route('annonce.maquis') }}">Maquis</a></li>
        <li><a href="">Mieux notées</a></li>
        <li><a href="">+ vues</a></li>
        <li><a href="">Récommandées</a></li>
        <li><a href="/register">Inscription</a></li>
    </ul>
</div>