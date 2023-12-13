@extends('layouts.admin')
@section('content')
    <form action="" method="post">
        <div class="form-inline">
            <select name="filtre" class="form-control" id="">
                <option value="">Utilisateur</option>
                <option value="">Employe</option>
                <option value="">Patient</option>
                <option value="">Audience</option>
            </select>
            <input type="text" name="search" id="" class="form-control" placeholder="Mot clé ...">
            <button class="btn btn-info"><i class="fa fa-search"></i></button>
        </div>
    </form>
@endsection