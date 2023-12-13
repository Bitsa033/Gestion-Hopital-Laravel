@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col-md-12" ng-app="">
            <h5 class="container">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">{{ $message }}</div>
                @endif
            </h5>
            <div class=" card card-body" style="background: blueviolet;">
                <div class="form-inline">
                    
                    <div class="flex offset-1"> 
                        <a href="/createEmploye" class="btn btn-primary"><i class="fa fa-plus"> Nouvel Employé</i></a>
                        <a href="/printEmployes" target="_blank" rel="noopener noreferrer" class="btn btn-info"><i class="fa fa-print"> Imprimer la liste</i></a>
                    </div>
                </div>
                <br>
                
                <div class="row">
                    @foreach ($employes as $employe)
                    <div class="col-6">

                        <div class="card">
                            <table class="table">
                                <tr>
                                    <th>Nom</th>
                                    <td>{{$employe->nom}}</p></td>
                                </tr>
                                <tr>
                                    <th>Téléphone</th>
                                    <td>{{$employe->telephone}}</p></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$employe->email}}</p></td>
                                </tr>
                                <tr>
                                    <th>Adresse</th>
                                    <td>{{$employe->adresse}}</p></td>
                                </tr>
                                <tr>
                                    <th>Fonction</th>
                                    <td>{{$employe->fonction}}</p></td>
                                </tr>
                                <tr>
                                    <th>Crée le</th>
                                    <td>{{$employe->created_at}}</p></td>
                                </tr>
                                <div class="form-inline">
                                    <a href="/showEmploye_{{ $employe->id }}" target="_blank" class=" offset-4 btn btn-light">Editer</a>
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
