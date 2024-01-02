<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>YouEvent</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><span style="color: #339898;">You</span><span style="color: #343a40;">Event</span></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="btn btn-primary">Connexion</button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Inscription</h2>
                <form action="" method="post" id="my-form">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                        <div id="fname-error" class="error-message"></div>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                        <div id="lname-error" class="error-message"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div id="email-error" class="error-message"></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <div id="pass-error" class="error-message"></div>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Vérification du mot de passe</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                        <div id="confPass-error" class="error-message"></div>
                    </div>
                    <button type="submit" name="inscri" class="btn btn-primary btn-block">S'inscrire</button>
                    <p class="mt-3">Vous avez déjà un compte? <a href="login.php">Se connecter</a></p>
                </form>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="public/assets/js/script.js"></script>
</body>
</html>