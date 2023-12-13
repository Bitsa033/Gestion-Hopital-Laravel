<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print audiences</title>
</head>
<body onload="window.print()">
    @include('layouts/link')
<table class="table table-stripped table-bordered" *ngIf="produits">
    <thead>
        <tr>
            <th>Responsable en charge</th>
            <th>Nom patient</th>
            <th>Qualité</th>
            <th>Type d'audience</th>
            <th>Objet</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($audiences as $item)
            <tr>
                <td class="text-center">{{ $item->nom_personnel }} </td>
                <td class="text-center"> {{ $item->nom_patient }} </td>
                <td class="text-center"> {{ $item->qualite }} </td>
                <td class="text-center"> {{ $item->audience_type }} </td>
                <td class="text-center"> {{ $item->objet }} </td>
                <td class="text-center"> {{ $item->message }} </td>
            </tr>
        @endforeach

    </tbody>
</table>
</body>
</html>