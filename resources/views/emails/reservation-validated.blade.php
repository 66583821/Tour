
<!DOCTYPE html>
<html>
<head>
    <title>Votre réservation a été validée</title>
</head>
<body>
    <p>Bonjour {{ $reservation->user->nom }},</p>
    <p>Votre réservation a été validée avec succès.</p>
    <p>Détails de la réservation :</p>
    <ul>
        <li>ID de la réservation : {{ $reservation->id }}</li>
        <li>Date de réservation : {{ $reservation->date }}</li>
        <!-- Ajoutez d'autres détails de la réservation ici -->
    </ul>
    <p>Merci de nous avoir choisis !</p>
</body>
</html>
