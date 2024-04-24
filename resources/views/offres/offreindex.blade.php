<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les offres de stages disponibles</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <style>
        /* Styles de base */
        :root {
            --primary-color: #1c5d99; /* Bleu Indeed */
            --secondary-color: #4CAF50; /* Vert */
            --background-color: #f0f2f5; /* Gris clair */
            --text-color: #333; /* Noir */
            --card-shadow: rgba(0, 0, 0, 0.1); /* Ombre des cartes */
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
        }

        header {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: center;
        }

        h2 {
            font-weight: 500;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1rem;
        }

        .card {
            background-color: white;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            box-shadow: 0 2px 5px var(--card-shadow);
        }

        .card h3 {
            color: var(--primary-color);
            margin-top: 0;
        }

        .card p {
            margin: 0.5rem 0;
        }

        /* Styles pour les titres */
        .card .domaine,
        .card .titre,
        .card .localisation {
            color: var(--primary-color);
        }

        /* Réactivité */
        @media (max-width: 768px) {
            .container {
                padding: 0.5rem;
            }
        }
    </style>
</head>

<body>
<header>
    <h2>Les offres de stages disponibles</h2>
</header>

<div class="container">
    @foreach($offres as $offre)
        <div class="card">
            <p class="domaine"><strong>Domaine:</strong> {{$offre->domaine}}</p>
            <p class="titre"><strong>Titre:</strong> {{$offre->titre}}</p>
            <p class="localisation"><strong>Localisation:</strong> {{$offre->localisation}}</p>
        </div>
    @endforeach
</div>
</body>

</html>
