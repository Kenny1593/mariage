<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Invitation — Kevin & Lutricia</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg:#FBF8F4;
      --accent:#B76E79;
      --muted:#6B6B6B;
      --card:#FFFFFF;
      --radius:18px;
      --max-width:900px;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;padding:20px;display:flex;align-items:center;justify-content:center;background:linear-gradient(180deg,var(--bg),#F7F5F3);font-family:Montserrat,system-ui,Segoe UI,Roboto,"Helvetica Neue",Arial;color:var(--muted);
    }
    .container{
      width:100%;max-width:var(--max-width);background:var(--card);border-radius:calc(var(--radius) + 6px);box-shadow:0 8px 30px rgba(23,22,24,0.08);overflow:hidden;display:grid;grid-template-columns:1fr 420px;min-height:520px;
    }
    @media (max-width:880px){
      .container{grid-template-columns:1fr;min-height:auto}
    }

    /* Left panel */
    .hero{padding:48px 56px;display:flex;flex-direction:column;gap:18px;justify-content:center}
    .date{font-size:14px;letter-spacing:2px;text-transform:uppercase;color:var(--muted);font-weight:500;.date {
  white-space: normal;   /* autorise les retours à la ligne */
  word-wrap: break-word; /* force la coupure si besoin */
  text-align: center;    /* optionnel, pour mieux centrer sur mobile */
}}
    .names{font-family:'Playfair Display',serif;font-size:48px;line-height:1;margin:6px 0;color:#2b2b2b}
    .subtitle{font-size:16px;color:var(--muted);max-width:80%}
    .details{margin-top:18px;font-size:15px;color:var(--muted);display:flex;flex-direction:column;gap:8px}
    .detail-row{display:flex;gap:12px;align-items:center;flex-wrap:wrap}
    .icon{width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,#FFF, #F8F6F5);display:grid;place-items:center;box-shadow:0 4px 12px rgba(100,90,90,0.06)}
    .muted-sm{font-size:13px;color:var(--muted)}

    /* Right panel */
    .aside{background:linear-gradient(180deg, rgba(183,110,121,0.06), rgba(183,110,121,0.02));padding:36px;display:flex;flex-direction:column;gap:18px;align-items:center;justify-content:center}
    .card{width:100%;background:transparent;border-radius:12px;padding:18px}
    .rsvp-btn{display:inline-block;padding:12px 20px;border-radius:999px;border:2px solid var(--accent);background:transparent;font-weight:600;color:var(--accent);cursor:pointer;text-decoration:none;transition:all .3s ease}
    .rsvp-btn:hover{background:var(--accent);color:white;box-shadow:0 10px 30px rgba(183,110,121,0.15)}

    .venue{font-weight:600;color:#333}
    .note{font-size:13px;color:var(--muted);text-align:center}

    /* Floral accent SVG */
    .floral{position:absolute;right:20px;top:18px;opacity:0.12;transform:rotate(8deg);width:200px;height:200px}

    /* Modal */
    .modal-backdrop{position:fixed;inset:0;background:rgba(8,7,7,0.35);display:none;align-items:center;justify-content:center;padding:24px;z-index:1000}
    .modal{background:white;padding:20px;border-radius:12px;max-width:520px;width:100%;box-shadow:0 14px 40px rgba(12,12,12,0.18)}
    .modal h3{margin:0 0 8px 0;font-family:'Playfair Display',serif}
    .form-row{display:flex;gap:8px;flex-wrap:wrap}
    .form-row input,.form-row textarea{flex:1 1 100%;padding:10px;border-radius:8px;border:1px solid #E7E5E3;font-size:14px}
    .modal-actions{display:flex;gap:8px;justify-content:flex-end;margin-top:12px;flex-wrap:wrap}

    /* Print */
    @media print{
      body{padding:0}
      .container{box-shadow:none;border-radius:0}
      .aside,.rsvp-btn{display:none}
    }

    /* Responsive adjustments */
    @media (max-width:600px){
      .hero{padding:24px}
      .names{font-size:34px}
      .subtitle{max-width:100%;font-size:15px}
      .aside{padding:20px}
      .floral{display:none}
    }

    /* small animations */
    .fade-in{animation:fadeIn 700ms ease both}
    @keyframes fadeIn{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:none}}
  </style>
</head>
<body>
  <div class="container fade-in" role="main">

    <div class="hero">
      <div class="date">Samedi 25 Octobre 2025 • 09:00</div>
      <h1 class="names">Kevin &amp; Lutricia</h1>
      <p class="subtitle">Nous serions honorés de votre présence pour célébrer notre mariage entourés de nos proches. Une cérémonie intime suivie d'une réception conviviale.</p>

      <div class="details">
        <div class="detail-row">
          <div class="icon">📍</div>
          <div>
            <div class="muted-sm">Lieu</div>
            <div class="venue">Ecar Saint Joseph Mahamasina &ndash; Antananarivo</div>
          </div>
        </div>


    </div>

    <aside class="aside">
      <div style="text-align:center">
        <div class="card">
          <p class="muted-sm" style="text-align:center;margin:0 0 10px 0">Si vous ne pouvez pas assister, merci de contacter directement les mariés.</p>
        </div>
      </div>

      <div style="margin-top:8px;text-align:center">
        <div class="muted-sm">Contact</div>
        <div class="muted-sm">Kevin: +261 34 12 345 67</div>
        <div class="muted-sm">Lutricia: +261 34 76 543 21</div>
      </div>

      <svg class="floral" viewBox="0 0 120 120" aria-hidden="true">
        <defs>
          <linearGradient id="g" x1="0" x2="1">
            <stop offset="0" stop-color="#B76E79" stop-opacity="0.9" />
            <stop offset="1" stop-color="#E9D0D6" stop-opacity="0.6" />
          </linearGradient>
        </defs>
        <g fill="url(#g)">
          <path d="M10 80c10-20 30-30 50-20s30 30 20 40-40 10-60-20z" />
          <circle cx="90" cy="20" r="12" />
        </g>
      </svg>
    </aside>

  </div>
</body>
</html>
