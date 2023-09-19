<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css3/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css3/listemanager.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>

<body>

<div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="contentAjout">
            <h2 class="border-bottom pb-2 mb-0">Liste des reservations</h2>
           

        </div> @if (Session:: has('status'))
        <h3>

            {{ Session::get('status') }}

        </h3> @endif
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nom du client</th>
                    <th scope="col">Nom du site</th>
                    <th scope="col">Date </th>
                    <th scope="col">Heure</th>
                    <th scope="col">nombre</th>
                    <th scope="col">Etat</th>
                    <th scope="col" class="positionActionBouton">
                        <div class="actpo">Action</div>
                    </th>
                </tr>
            </thead>

            <tbody>

                @if (Session:: has('statut'))
                <tr>
                    <h2 style="color: red;">
                        {{ Session::get('statut') }}
                    </h2>
                </tr>
                @endif

                @foreach ( $reservations as $reservation )
                <tr>
                    <th scope="row"></th>
                    <td>{{ $reservation->user->prenom}}</td>
                    <td>{{ $reservation->site->nom}}</td>
                    <td>{{ $reservation->date}}</td>
                    <td>{{ $reservation->heure}}</td>
                    <td>{{ $reservation->nombre_personnes }}</td>
                    <td>{{ $reservation->etat_reservation }}</td>

                    <td>
                        <div class="positionActionBouton">
                            <a class="btn btn-success" href="{{url('valider/'.$reservation->id)}}">Modifier</a>
                            <a href="{{url('delete/'.$reservation->id)}}" class="btn btn-danger" onclick="if(confirm('Voulez-vous supprimer cette reservation?')){document.getElementById.submit()}">Supprimer</a>
                        </div>
                    </td>
                </tr>
                @endforeach

   v
    <script src="{{asset('js/bootstrap.min.js')}}"> </script>

</body>

</html>

