<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="{{ asset('css4.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<div class="background-container">
        
       
        <img src="../image/Mosque.jpg" alt="Image de fond">
                
    <!-- Formulaire pour créer une réservation -->
<form action='{{route("reservations.store")}}' method="POST">
    <h1>VEUILLEZ FAIRE VOTRE RESERVATION</h1>
    @csrf
    <label for="site_id">Site:</label>
    <select name="site_id" id="site_id">
        @foreach ($sites as $site)
            <option value="{{ $site->id }}">{{ $site->nom }}</option>
        @endforeach
    </select>
    <br>
    <label for="date">Date:</label>
    <input type="date" name="date" required>
    <br>
    <label for="time">Heure:</label>
    <input type="time" name="heure" required>
    <br>
    <label for="num_people">Nombre de Personnes:</label>
    <input type="number" name="nombre_personnes" required>
    <br>
    <button type="submit">Créer</button>
</form>
</div>
</body>
</html>