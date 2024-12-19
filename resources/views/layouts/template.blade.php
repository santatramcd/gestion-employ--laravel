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
        @include('layouts.topbar')

            <!-- Content Section -->
            <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Total Départements</h5>
                            </div>
                            <div class="card-body">
                                <h1 class="text-center">{{$totaldepartements}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Total Employers</h5>
                            </div>
                            <div class="card-body">
                                <h1 class="text-center">{{$totalEmployers}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Total Administrateurs</h5>
                            </div>
                            <div class="card-body">
                                <h1 class="text-center">{{$totalAdministrateurs}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Retard de payements</h5>
                            </div>
                            <div class="card-body">
                                <h1 class="text-center">0</h1>
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
