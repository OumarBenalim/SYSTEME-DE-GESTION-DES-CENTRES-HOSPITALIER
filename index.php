<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Management System</title>
  <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=Sacramento&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

  <style>
    body {
  font-family: 'Poppins', sans-serif;
  background-color: #f5f7fa;
  color: #34495e;
}

#accueil {
  font-family: 'Monstserrat' , sans-self;
  text-align: center;
  padding: 100px 20px;
  background: linear-gradient(135deg, #00c3ff, #ffff1c);
  color: #ffffff;
  animation: fadeIn 2s ease-in;
  position: relative;
  overflow: hidden;
}

#accueil h1 {
  font-family: 'Monstserrat' , sans-self;
  font-size: 3.5rem;
  color: #ffffff;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
  animation: popIn 1.5s ease-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes popIn {
  0% { transform: scale(0.8); opacity: 0; }
  100% { transform: scale(1); opacity: 1; }
}


    html { scroll-behavior: smooth; }
   
    .header-area {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      background: linear-gradient(to right, #2c3e50, #3498db);
      transition: background-color 0.3s ease;
    }
    .header-scrolled {
      background-color: #98a6ad;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

   #accueil {
    background-image: url('assets/images/a.jpg'); /* ton image */
    background-size: contain; /* image visible en entier */
    background-repeat: no-repeat;
    background-position: center;
    padding: 100px 0; /* espace vertical autour du contenu */
    text-align: center;
    position: relative;
    color: white;
}

    #accueil::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(27, 24, 24, 0.5);
      z-index: 1;
    }
    #accueil .container {
      position: relative;
      z-index: 2;
    }
    #accueil h1, #accueil p {
      text-shadow: 0 2px 6px rgba(0,0,0,0.7);
    }

    .section {
      padding: 80px 20px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      transition: transform 0.4s ease, opacity 0.4s ease;
    }

    #apropos {
      background: linear-gradient(to bottom, #bdebf7, #ffffff);
    }
    #demo {
      background: linear-gradient(to bottom, #a4d0db, #ffffff);
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }

    ul.list-unstyled li {
      margin-bottom: 10px;
    }

    footer {
  background: linear-gradient(to right, #2c3e50, #3498db);
  color: #fff;
  padding: 50px 30px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  text-align: left;
}

.footer-block {
  flex: 1;
  margin: 20px;
  min-width: 220px;
}

.footer-block h3 {
  font-family: 'Raleway', sans-serif;
  font-size: 1.6rem;
  margin-bottom: 15px;
  border-bottom: 2px solid #f1c40f;
  display: inline-block;
  padding-bottom: 5px;
}

.footer-block ul {
  list-style: none;
  padding: 0;
}

.footer-block ul li {
  margin-bottom: 10px;
}

.footer-block ul li a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s;
}

.footer-block ul li a:hover {
  color: #f1c40f;
}

.social-icons a {
  margin: 0 10px;
  font-size: 1.4rem;
  color: #fff;
  transition: transform 0.3s, color 0.3s;
}

.social-icons a:hover {
  transform: scale(1.2);
  color: #f1c40f;
} 

footer {
  background: linear-gradient(to right, #062f4f, #185b8b);
  padding: 40px 30px 20px;
  font-family: 'Segoe UI', sans-serif;
  animation: fadeInUp 0.8s ease forwards;
}

.footer-block h5 {
  font-size: 1.1rem;
  margin-bottom: 10px;
  color: #f1c40f;
}

.footer-block a {
  color: #8ce3f7;
  text-decoration: none;
  transition: color 0.3s;
}

.footer-block a:hover {
  color: #f1c40f;
}

footer img {
  filter: drop-shadow(0 0 5px rgba(255,255,255,0.2));
}

footer .fa {
  font-size: 1.5rem;
  margin-right: 10px;
  color: #8ce3f7;
  transition: transform 0.3s, color 0.3s;
}

footer .fa:hover {
  transform: scale(1.2);
  color: #f1c40f;
}

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to   { opacity: 1; transform: translateY(0); }
}

 

footer input[type="email"] {
  padding: 10px;
  border: none;
  border-radius: 5px;
  width: 200px;
  margin-top: 10px;
} */

footer button {
  background-color: #f1c40f;
  border: none;
  border-radius: 5px;
  padding: 10px;
  margin-left: 10px;
  cursor: pointer;
  transition: background 0.3s;
}

footer button:hover {
  background-color: #e67e22;
}  */

 
     @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    } 
  </style>
</head>
<body>

  <!-- Header -->
  <header class="header-area">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="assets/images/logo-light.png" alt="Logo HMS" style="height: 25px;"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#accueil">Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="#apropos">À propos</a></li>
            <li class="nav-item"><a class="nav-link" href="#demo">Démo</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary text-white ml-2" href="http://localhost/HMS/backend/doc/">Connexion</a></li>
            <li class="nav-item">
              <select id="langSwitcher" class="form-control form-control-sm ml-3" style="width:120px;">
                <option value="fr">Français 🇫🇷</option>
                <option value="en">English 🇬🇧</option>
              </select>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <!-- Accueil -->
  <section id="accueil">
    <div class="container text-center">
      <h1 id="title">Bienvenue sur HMS</h1>
      <p id="subtitle">Excellence et innovation au cœur de la médecine.</p>
    </div>
  </section>

  <!-- À propos -->
  <section id="apropos" class="section" data-aos="fade-right">
    <div class="container">
      <h2 class="text-center">À propos de notre application</h2>
      <p class="text-center" id="about">Notre solution digitale réinvente la gestion hospitalière, accélère la prise de décision et améliore la qualité des soins.</p>
      <div class="row mt-4">
        <div class="col-md-4" data-aos="flip-left">
          <h5><i class="fa fa-check-circle text-primary"></i> Digitalisation complète</h5>
          <p>Plateforme unifiée pour les dossiers médicaux et la coordination des services.</p>
        </div>
        <div class="col-md-4" data-aos="flip-up">
          <h5><i class="fa fa-lock text-primary"></i> Sécurité des données</h5>
          <p>Confidentialité garantie pour chaque patient, conforme aux normes médicales.</p>
        </div>
        <div class="col-md-4" data-aos="flip-right">
          <h5><i class="fa fa-line-chart text-primary"></i> Intelligence décisionnelle</h5>
          <p>Analytique temps réel pour améliorer la performance hospitalière.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Aperçu Visuel -->
  <section class="section" data-aos="zoom-in">
    <div class="container text-center">
      <h2 id="screenshotLabel">Aperçu Visuel</h2>
      <p>Voici une capture d’écran de notre interface :</p>
      <img src="assets/images/3.png" alt="Capture d'écran" class="rounded shadow" style="max-width: 800px;">
    </div>
  </section>

  <!-- Démo -->
  <section id="demo" class="section" data-aos="fade-up">
    <div class="container text-center">
      <h2 id="demoTitle">Démo interactive</h2>
      <p id="demoDesc">Explorez une application intuitive conçue pour les professionnels de santé.</p>
      <ul class="list-unstyled">
        <li><i class="fa fa-users text-success"></i> Gestion du personnel</li>
        <li><i class="fa fa-calendar text-info"></i> Planification et pharmacie</li>
        <li><i class="fa fa-file-text text-warning"></i> Dossiers médicaux</li>
        <li><i class="fa fa-comments text-danger"></i> Interface intuitive</li>
      </ul>
    </div>
  </section>

  <!-- Vidéo -->
  <section class="section bg-light" data-aos="fade-up-left">
    <div class="container text-center">
      <h2 id="videoLabel">Vidéo démonstrative</h2>
      <p>Regardez en action les fonctionnalités principales :</p>
      <div class="embed-responsive embed-responsive-16by9" style="max-width: 800px; margin: auto;">
        <iframe class="embed-responsive
                <iframe class="embed-responsive-item" src="assets/images/demo.mp4" allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <!-- Footer -->

<footer>
  <div class="container text-white d-flex flex-wrap justify-content-between">

    <!-- Bloc 1 : Logo Application -->
    <div class="footer-block mb-4" style="flex: 1 1 150px;">
      <img src="assets/images/logo-light.png" alt="Logo Application" style="height: 25px;">
      <p class="mt-2">Système de gestion hospitalière</p>
    </div>

    <!-- Bloc 2 : Menu Principal -->
    <div class="footer-block mb-4" style="flex: 1 1 150px;">
      <h5>📁 Navigation</h5>
      <ul style="list-style: none; padding-left: 0;">
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#demo">Démo</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#modules">Modules</a></li>
      </ul>
    </div>

    <!-- Bloc 3 : Contact -->
    <div class="footer-block mb-4" style="flex: 1 1 150px;">
      <h5>📞 Contact</h5>
      <p>Centre Médical Numérique</p>
      <p>Email : infohms@gmail.com</p>
      <p>Tél : +237 6 20 79 65 24</p>
    </div>

    <!-- Bloc 4 : Localisation -->
    <div class="footer-block mb-4" style="flex: 1 1 150px;">
      <h5>📍 Localisation</h5>
      <p>BP 124, Douala - Cameroun</p>
      <p>Iut-Dla</p>
    </div>

    <!-- Bloc 5 : Réseaux sociaux -->
    <div class="footer-block mb-4" style="flex: 1 1 150px;">
      <h5>📣 Suivez-nous</h5>
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
    </div>
  </div>

  <div class="text-center text-white mt-4" style="font-size: 0.9rem;">
    © 2025 HMS — Gestion hospitalière numérique | Mentions légales | CGU
  </div>
</footer>



  <!-- JS -->
  <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });

    window.addEventListener('scroll', function () {
      const header = document.querySelector('.header-area');
      if (window.scrollY > 10) {
        header.classList.add('header-scrolled');
      } else {
        header.classList.remove('header-scrolled');
      }
    });

    document.getElementById("langSwitcher").addEventListener("change", function () {
      const lang = this.value;
      fetch(`lang/${lang}.json`)
        .then(response => response.json())
        .then(data => {
          for (const key in data) {
            const el = document.getElementById(key);
            if (el) el.textContent = data[key];
          }
        });
    });
  </script>

</body>
</html>
