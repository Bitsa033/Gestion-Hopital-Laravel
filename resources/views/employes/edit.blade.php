@extends('layouts/admin')
@section('content')
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-12 card" ng-app="">
           
            <div class="card-body">

                <form autocomplete="off" action="{{url('destroyl',$employe->id)}}" method="POST" class="form-horizontal card card-body">
                    @csrf
                    <h4 class="card-title">Mise à jour</h4>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nom
                                Employé</label>
                            <div class="col-sm-9">
                                <input type="text" name="nom" value="{{$employe->nom}}" class="form-control" id="fname" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" value="{{$employe->email}}" class="form-control" id="fname" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Téléphone</label>
                            <div class="col-sm-9">
                                <input type="text" name="telephone" value="{{$employe->telephone}}" class="form-control" id="fname" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Adresse</label>
                            <div class="col-sm-9">
                                <input type="text" name="adresse" value="{{$employe->adresse}}" class="form-control" id="fname" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Fonction</label>
                            <div class="col-sm-9">
                                <input type="text" name="fonction" value="{{$employe->fonction}}" class="form-control" id="fname" />
                            </div>
                        </div>
                        
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Modifier
                            </button>
                            <a href="{{url('delete',$employe->id)}}" class="btn btn-danger">
                                Supprimer
                            </a>
                            <a href="/printUser" target="_blank" class="btn btn-info"><i class="fa fa-print"> Imprimer</i></a>
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
