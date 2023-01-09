<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Numero</th>
                <th>Nom</th>
                <th>Duree</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nosCours as $cour)
                <tr>
                    <td>{{$cour->idCours}}</td>
                    <td>{{$cour->nomCours}}</td>
                    <td>{{$cour->dureeCours}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>