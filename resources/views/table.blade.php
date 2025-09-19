<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invitation Mariage</title>

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Georgia", serif;
      background: linear-gradient(135deg, #fdfcfb, #e2d1c3);
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    .invitation-form {
      background: #fff;
      border: 2px solid #d4af37; /* Doré */
      border-radius: 15px;
      padding: 40px 30px;
      max-width: 500px;
      width: 100%;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      text-align: center;
    }

    .invitation-form h2 {
      font-family: "Great Vibes", cursive;
      font-size: 2.2em;
      margin-bottom: 20px;
      color: #8b5e3c;
    }

    .invitation-form label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #5a4634;
      text-align: left;
      font-size: 1.05em;
    }

    .invitation-form input {
      width: 100%;
      padding: 12px;
      border: 1px solid #cbb994;
      border-radius: 8px;
      font-size: 1em;
      font-family: "Georgia", serif;
      outline: none;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .invitation-form input:focus {
      border-color: #d4af37;
      box-shadow: 0 0 8px rgba(212,175,55,0.5);
    }

    .invitation-form button {
      background: #d4af37;
      border: none;
      color: white;
      font-size: 1.1em;
      font-weight: bold;
      padding: 12px 30px;
      margin-top: 20px;
      border-radius: 25px;
      cursor: pointer;
      font-family: "Georgia", serif;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .invitation-form button:hover {
      background: #b8962c;
      transform: scale(1.05);
    }

    .invitation-form p {
      font-size: 0.9em;
      color: #6f5c4b;
      margin-top: 15px;
      font-style: italic;
    }

    /* Police romantique */
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
  </style>
</head>
<body>
  
  <form action="/vue" method="POST" class="invitation-form">
    <h2>Kevin &amp; Lutricia</h2>
    @csrf     

    <label for="numero_invitation">Insérer le numéro de l'invitation</label>
    <input type="number" id="numero_invitation" name="numero" placeholder="Ex: 12345" required>

    <button type="submit">Valider</button>

    <p>Merci de confirmer votre présence pour célébrer ce jour spécial 💍</p>
  </form>

</body>
</html>
