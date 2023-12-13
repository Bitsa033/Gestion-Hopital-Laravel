<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print users</title>
</head>
<body onload="window.print()">
    @include('layouts/link')
<table class="table table-stripped table-bordered" *ngIf="produits">
    <thead>
        <tr>
            <th>Nom et prenom </th>
            <th>Teléphone</th>
            <th>Adresse</th>
            <th>Email</th>
            <th>Type d'utilisateur</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
            <tr >
                <td class="text-center"> {{$item->name}} </td>
                <td class="text-center"> {{$item->phone}} </td>
                <td class="text-center"> {{$item->adress}} </td>
                <td class="text-center"> {{$item->email}} </td>
                 <td class="text-center"> {{$item->type}} </td>
            </tr>
        @endforeach
        
    </tbody>
</table>
</body>
</html>