
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire de connexion en HTML & CSS - Frenchcoder</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <link  href="{{ asset('css2/style.css') }}" rel="stylesheet">
</head>
<body>
  <form method="post" action='{{route("register")}}'    >
    @csrf 
    <h1>Inscription</h1>
    <!-- <div class="social-media">
      <p><i class="fab fa-google"></i></p>
      <p><i class="fab fa-youtube"></i></p>
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
    </div> -->
   
    
    <div class="inputs">
      <input class="text" type="text" name="nom" value="" placeholder="Nom" />
      <input class="text" type="text" name="prenom" value="" placeholder="Prenom" />
      <input type="email" value="" placeholder="email"  name="email" />
      <input type="password" value="" placeholder="password"  name="password">
    </div>
    
    
      <button type="submit">Enregistrer</button>
    </div>
  </form>
</body>
</html>