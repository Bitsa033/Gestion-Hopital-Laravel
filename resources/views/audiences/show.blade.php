@extends('layouts/admin')
@section('content')
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-12" ng-app="">
            <h5 class="container">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">{{ $message }}</div>
                @endif
            </h5>
            <div class=" card card-body" style="background: blueviolet;">
                
                <div class="form-inline">
                    <div class="d-flex">
                        <a href="/createAudience" class="btn btn-primary">
                            <i class="fa fa-plus"> Nouvelle audience</i>
                        </a>
                    </div>
                    <div class="d-flex">
                        <a href="/printAudiences" target="_blank" rel="noopener noreferrer" class=" btn btn-info"><i
                            class="fa fa-print"> Imprimer tous les Tickets</i>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    @foreach ($audiences as $audience)
                    <div class="col-6">

                        <div class="card">
                            <table class="table">
                                <tr>
                                    <th>Nom</th>
                                    <td>{{$audience->nom_patient}}</p></td>
                                </tr>
                                <tr>
                                    <th>Qualité</th>
                                    <td>{{$audience->qualite}}</p></td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>{{$audience->audience_type}}</p></td>
                                </tr>
                                <tr>
                                    <th>Objet</th>
                                    <td>{{$audience->objet}}</p></td>
                                </tr>
                                
                                <tr>
                                    <th>Crée le</th>
                                    <td>{{$audience->created_at}}</p></td>
                                </tr>
                                <div class="form-inline">
                                    <a href="/showAudience_{{ $audience->id }}" class=" offset-4 btn btn-light">Editer</a>
                                    <a href="" target="_blank" class="btn btn-light">Imprimer</a>
        
                                </div>
                            </table>
                        
                        </div>
                    </div>
                    {{-- col --}}
                    @endforeach
                </div>
                {{-- row --}}
                
            </div>
            <!--/card-body-->

        </div>

        <!--/col-->

    </div>
    <!--/row-->
@endsection