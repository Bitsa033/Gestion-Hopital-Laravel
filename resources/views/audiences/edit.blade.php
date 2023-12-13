@extends('layouts/admin')
@section('content')
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-12 card" ng-app="">
            <h5 class="container">Audience n°{{ $audience->id }}: {{ $audience->nom_patient }} <a href="/printAudience" target="_blank" rel="noopener noreferrer"  class="btn btn-info"><i class="fa fa-print"> Imprimer</i></a></h5>
            <div class="card-body">

                <form autocomplete="off" action="{{url('updateAudience',$audience->id)}}" method="POST" class="form-horizontal card card-body">
                    @csrf
                    <h4 class="card-title">Mise à jour</h4>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nom
                                Client</label>
                            <div class="col-sm-9">
                                <input type="text" name="nom_patient" value="{{$audience->nom_patient}}" class="form-control" id="fname" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Qualité</label>
                            <div class="col-sm-9">
                                <select type="text" name="qualite" class="form-control" id="lname">
                                    <option value="visiteur">Visiteur</option>
                                    <option value="patient">Patient</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Type
                                d'audience</label>
                            <div class="col-sm-9">
                                <select type="text" name="audience_type"
                                    class="form-control" >
                                    <option value="Informations/Conseils">Visite d'information</option>
                                    <option value="Suivi">Suivi médical individuel</option>
                                    <option value="Chirurgie">Chirurgie</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="objet" class="col-sm-3 text-end control-label col-form-label">Objet</label>
                            <div class="col-sm-9">
                                <select type="text" class="form-control" name="objet" >
                                    <option value="Médécine générale">Médécine générale</option>
                                    <option value="Ophtamologie">Ophtamologie</option>
                                    <option value="Dermatologie">Dermatologie</option>
                                    <option value="Immunologie">Immunologie</option>
                                    <option value="Neurologie">Neurologie</option>
                                    <option value="Pneumologie">Pneumologie</option>
                                    <option value="Cardiologie">Cardiologie</option>
                                    <option value="Ondologie">Ondologie</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Message</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="message">{{ $audience->message }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Responsable en
                                charge</label>
                            <div class="col-sm-9">
                                <select type="text" class="form-control" name="nom_personnel" >
                                    <option value="Directeur général">Directeur général</option>
                                    <option value="Généraliste">Généraliste</option>
                                    <option value="Ophtamologue">Ophtamologue</option>
                                    <option value="Immunologue">Immunologue</option>
                                    <option value="Immunologue">Immunologue</option>
                                    <option value="Neurologue">Neurologue</option>
                                    <option value="Pneumologue">Pneumologue</option>
                                    <option value="Cardiologue">Cardiologue</option>
                                    <option value="Ondologue">Ondologue</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Modifier
                            </button>
                            <a href="{{url('deleteAudience',$audience->id)}}" class="btn btn-danger">
                                Supprimer
                            </a>
                            <br><br>
    
                        </div>
                    </div>
                </form>
            </div>
            <!--/card-body-->
        </div>

        <!--/col-->

    </div>
    <!--/row-->
@endsection
