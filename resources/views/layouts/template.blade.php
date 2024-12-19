<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <!-- Liens vers Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>

    <div class="d-flex">
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main content -->
        <div class="content flex-fill">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Mon Tableau de Bord</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notifications</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Content Section -->
            <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Statistiques du Mois</h5>
                            </div>
                            <div class="card-body">
                                <p>Voici un graphique des statistiques pour ce mois-ci...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Utilisateurs récents</h5>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Utilisateur 1</li>
                                    <li>Utilisateur 2</li>
                                    <li>Utilisateur 3</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Other content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Dernières Activités</h5>
                            </div>
                            <div class="card-body">
                                <p>Affichez les dernières activités des utilisateurs ou autres informations pertinentes ici.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
