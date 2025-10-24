<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Affectation des Tables</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Georgia", serif;
      background: #f8f4f0;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
      justify-content: center;
    }

    .card {
      background: white;
      border: 2px solid #d4af37;
      border-radius: 15px;
      padding: 30px;
      text-align: center;
      max-width: 600px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }

    .card h1 {
      font-family: "Great Vibes", cursive;
      font-size: 2.5em;
      margin-bottom: 10px;
      color: #8b5e3c;
    }

    .card h2 {
      font-size: 1.5em;
      margin-bottom: 20px;
      color: #5a4634;
    }

    .plan img {
      max-width: 100%;
      border-radius: 10px;
      border: 1px solid #ccc;
      margin-top: 20px;
    }
    .btn-retour {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background: #d4af37;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    /* Import police romantique */
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
  </style>
</head>
<body>

  <div class="card">
    <h1>Bienvenue,</h1>
    @foreach ($invites as $invite)
      <h2>{{ $invite->place->nom }}</h2>
      <h4>{{ $invite->nom }}</h4>
      
    @endforeach
    
    <div class="plan">
      <p>Voici le plan des tables :</p>
      <img src=" {{ asset('Piste.png') }}" alt="Plan des tables">
    </div>
  </div>

  <a href="/" class="btn-retour">Retour</a>

</body>
</html>

