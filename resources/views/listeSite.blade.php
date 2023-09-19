<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/listemanager.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>

<body>

    <nav class="navbar navbar navbar-expand-lg " style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('LOGO RESERVAZONE.jpg')}}" height="40px" width="40px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <span class="navbar-text">
                        @csrf
                        <input class="btn btn-dark" type='submit' value='deconnecte'>
                    </form>
                </span>
            </div>
        </div>
    </nav>

    <!-- <a href="{{route('gerant.store')}}" class="btn btn-info">  </a>  -->

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="contentAjout">
            <h2 class="border-bottom pb-2 mb-0">Liste des produits</h2><br>
            <a href="{{ route('produit') }}" class="ml-4 text-sm text-gray-700 underline"><button class="btn btn-primary"> Ajouter un produit</button></a>

        </div>
        <h3>
            @if (Session:: has('status'))
            {{ Session::get('status') }}
            @endif
        </h3>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Photo</th>
                    <th scope="col">description</th>
                    <th scope="col">Localisation</th>
                    <th scope="col">categorie_id</th>
                    <th scope="col" class="positionActionBouton">
                        <div class="actpo">Action</div>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ( $sites as $site )
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $site->nom }}</td>
                    <td><img src="{{asset( 'images/'.$produit->photo) }}" style="height: 70px;width:70px"></td>
                    <td>{{ $site->description}}</td>
                    <td>{{ $site->Localisation }}</td>
                    <td>{{ $site->categorie->nom }}</td>

                    
                    <td>
                        <div class="positionActionBouton">
                            <a class="btn btn-success" href="">Modifier</a>
                            <a href="" class="btn btn-danger" onclick="if(confirm('Voulez-vous supprimer cet manager?')){document.getElementById.submit()}">Supprimer</a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <script src="{{asset('js/bootstrap.min.js')}}"> </script>

</body>

</html>