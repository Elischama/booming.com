@extends('admin.layout.layout')

@section('content')

    <div class="panel-content">
        <ul class="breadcrumbs">
            <li><a href="javascript:void(0)" title="">Accueil</a></li>
            <li><a href="javascript:void(0)" title="">Categorie Boutique</a></li>
            <li><a href="javascript:void(0)" title="">Ajouter</a></li>
        </ul>
        <div class="main-content-area">
            <div class="row">
                <br>
                <div class="col-sm-12">

                    @include('partials.flash')

                    {!! Form::open(['route' => 'category.boutique.create']) !!}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                {!! Form::label('icon', 'Icone de la categorie') !!} (<small>Liste des icones <a href="http://fontawesome.io/icons/" target="_blank">ici</a></small>)
                                {!! Form::text('icon', null, ['class' => 'form-control', 'placeholder' => 'ex: fa fa-users']) !!}
                                @if ($errors->has('icon'))
                                    <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('icon') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                {!! Form::label('libelle', 'Nom de la categorie', ['class' => 'obligation']) !!}
                                {!! Form::text('libelle', null, ['class' => 'form-control', 'placeholder' => 'ex: Mode Homme']) !!}
                                @if ($errors->has('libelle'))
                                    <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('libelle') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-offset-4 col-sm-4">
                            <div class="form-group text-center">
                                {!! Form::submit('Publier', ['class' => 'btn btn-primary btn-block']) !!}
                            </div>
                        </div>
                    </div>

                    {!! Form::open() !!}
                    <br><br>
                </div>

                <div class="col-sm-12">
                    @if(count($datas) > 0)
                    <table class="table">
                        <tr>
                            <th>N°</th>
                            <th>ICONE</th>
                            <th>LIBELLE</th>
                            <th>DATE DE PUBLICATION</th>
                            <th>STATUT</th>
                            <th>ACTION</th>
                        </tr>

                        @php($i=1)
                        @foreach($datas as $data)
                            @if($data->statut == 0)
                                <tr style="background-color: #E1666F;">
                                    <td>{{ $i++ }}</td>
                                    <td><i class="{{ $data->icon }}"></i></td>
                                    <td>{{ $data->libelle }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td><span class="label label-default">Desactiver</span></td>
                                    <td>
                                        <a href="{{ route('category.boutique.enable', $data->id) }}" class="btn btn-xs btn-success"><i class="fa fa-check"></i></a>
                                        <a href="{{ route('category.boutique.edit', $data->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                        <a onclick="return confirm('Cette action est irréversible. Supprimer ?');" href="{{ route('category.boutique.delete', $data->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><i class="{{ $data->icon }}"></i></td>
                                    <td>{{ $data->libelle }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td><span class="label label-success">En Ligne</span></td>
                                    <td>
                                        <a href="{{ route('category.boutique.desable', $data->id) }}" class="btn btn-xs btn-default"><i class="fa fa-close"></i></a>
                                        <a href="{{ route('category.boutique.edit', $data->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                        <a onclick="return confirm('Cette action est irréversible. Supprimer ?');" href="{{ route('category.boutique.delete', $data->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                    @else
                        <div style="width:75%;margin-left:auto;margin-right:auto;text-align:center;background:#e3e3e3;padding:20px;border-radius:8px">

                            <div style="width:100px;height:100px;margin-left:auto;margin-right:auto;text-align:center; ">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 470.333 470.333" style="enable-background:new 0 0 470.333 470.333;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M235.167,470.333c129.767,0,235.167-105.4,235.167-235.167S364.933,0,235.167,0S0,105.4,0,235.167
                                            S105.4,470.333,235.167,470.333z M235.167,34c110.783,0,201.167,90.383,201.167,201.167S345.95,436.333,235.167,436.333
                                            S34,345.95,34,235.167S124.383,34,235.167,34z"></path>
                                        <path d="M164.333,196.633c7.083,0,13.883-2.833,18.983-7.933c10.483-10.483,10.483-27.483,0-37.967
                                            c-5.1-5.1-11.9-7.933-18.983-7.933s-13.883,2.833-18.983,7.933c-10.483,10.483-10.483,27.483,0,37.967
                                            C150.45,193.8,157.25,196.633,164.333,196.633z"></path>
                                        <path d="M299.2,196.633c7.083,0,13.883-2.833,18.983-7.933c10.483-10.483,10.483-27.483,0-37.967
                                            c-5.1-5.1-11.9-7.933-18.983-7.933s-13.883,2.833-18.983,7.933c-10.483,10.483-10.483,27.483,0,37.967
                                            C285.317,193.8,291.833,196.633,299.2,196.633z"></path>
                                        <path d="M157.25,328.667c0.567-1.7,11.617-38.25,73.667-38.25c64.033,0,82.167,38.817,82.733,40.233
                                            c2.833,6.517,9.067,10.483,15.583,10.483c2.267,0,4.25-0.283,6.517-1.417c8.783-3.683,12.75-13.6,9.067-22.1
                                            c-1.133-2.55-26.35-61.2-114.183-61.2c-89.533,0-105.967,61.2-106.533,63.75l16.433,4.25L157.25,328.667z"></path>
                                    </g>
                                </g><g></g><g></g><g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                            </div>

                            <p>&nbsp;</p><h4 align="center" style="color: red;">Aucun enregistrement disponible :(</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div><!-- Panel Content -->
    </div>
@endsection