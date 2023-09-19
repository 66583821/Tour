
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
 
  <form method="post" action="{{route('login.test')}}">
  @if($message = Session::get('message'))
  <div class="alert alert-warning">
    <span>{{ $message }}</span>
  </div>
  @endif
    @csrf 
    <a class="navbar-brand" href="/">
    <img src="image/logo1.png" alt="" style="width: 80px;">
						  </a>
    <h1>Veuillez vous connectez</h1> <br>
    <div class="inputs">
      <input type="email" value="{{ old('email') }}" placeholder="email"  name="email" />
      @error('email')
      <span>{{ $message }}</span>
      @enderror
      <input type="password" value="" placeholder="password"  name="password">
      @error('password')
      <span>{{ $message }}</span>
      @enderror
    </div>
    
    <h2><a href="{{ route('user.register') }}">Inscrivez-vous </a></h2>

      <button type="submit">se connecter</button>
    </div>
  </form>
</body>
</html>