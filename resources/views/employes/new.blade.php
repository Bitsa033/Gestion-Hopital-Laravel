@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="offset-2 col-md-7" ng-app="">
            <h5 class="container">
                @if (!$erreur)
                    Nouvel Employé!
                @else
                    <div class="alert alert-danger">
                        {{ $erreur }}
                    </div>
                @endif

            </h5>
            <form autocomplete="off" action="{{ url('storeEmploye') }}" method="POST" class="form-horizontal card card-body">
                @csrf
                <h4 class="card-title">Informations Personnelles</h4>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nom
                            Employé</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ old('nom') }}" name="nom" class="form-control  @error('nom') is-invalid @enderror"
                                id="fname" />
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"
                                id="fname" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Téléphone
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="telephone" value="{{ old('telephone') }}"
                                class="form-control @error('telephone') is-invalid @enderror" id="fname" />
                            @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adresse" class="col-sm-3 text-end control-label col-form-label">Adresse</label>
                        <div class="col-sm-9">
                            <input type="text" name="adresse" value="{{ old('adresse') }}" class="form-control @error('adresse') is-invalid @enderror"
                                id="fname" />
                            @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Fonction</label>
                        <div class="col-sm-9">
                            <input type="text" name="fonction" value="{{ old('fonction') }}"
                                class="form-control @error('fonction') is-invalid @enderror" id="fname" />
                            @error('fonction')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
