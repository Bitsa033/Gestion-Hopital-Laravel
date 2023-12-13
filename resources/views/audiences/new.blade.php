@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="offset-2 col-md-7" ng-app="">
            <h5 class="container">
            @if (!$erreur)
                Nouvelle Audience!
                
            @else
                <div class="alert alert-danger">
                    {{$erreur}}
                </div>
            @endif
           
            </h5>
            <form autocomplete="off" action="{{url('storeAudience')}}" method="POST" class="form-horizontal card card-body">
                @csrf
                <h4 class="card-title">Informations Personnelles</h4>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nom
                            Client</label>
                        <div class="col-sm-9">
                            <input type="text" name="nom_patient" class="form-control" id="fname" />
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
                            <textarea class="form-control" name="message"></textarea>
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
                            Enregistrer
                        </button>
                        <br><br>

                    </div>
                </div>
            </form>
        </div>
        
        <!--/col-->

    </div>
    <!--/row-->
    
@endsection
