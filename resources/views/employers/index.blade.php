@extends('layouts.template')

@section('content')
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation Bootstrap 5</title>
    <!-- Liens vers Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        .content-section {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .content-section.show {
            display: block;
            opacity: 1;
        }

        .btn-custom {
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.1);
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="d-flex mb-4">
            <button class="btn btn-outline-primary btn-custom" data-target="content1">1</button>
            <button class="btn btn-outline-primary btn-custom" data-target="content2">2</button>
            <button class="btn btn-outline-primary btn-custom" data-target="content3">3</button>
        </div>

        <div>
            <div id="content1" class="content-section show">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">order</th>
      <th scope="col">Product</th>
      <th scope="col">customer</th>
      <th scope="col">date</th>
      <th scope="col">status</th>
      <th scope="col">total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@12oc</td>
      <td>@mdo</td>
      <td>view</td>
    </tr>
  </tbody>
</table>
            </div>
            <div id="content2" class="content-section">
                <h1>Affichage du bouton 2</h1>
            </div>
            <div id="content3" class="content-section">
                <h1>Affichage du bouton 3</h1>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Sélectionner les boutons et sections de contenu
        const buttons = document.querySelectorAll('.btn-custom');
        const contents = document.querySelectorAll('.content-section');

        // Ajouter un écouteur d'événements sur les boutons
        buttons.forEach(button => {
            button.addEventListener('click', function () {
                // Cacher tous les contenus
                contents.forEach(content => {
                    content.classList.remove('show');
                });

                // Afficher le contenu correspondant au bouton
                const target = document.getElementById(button.getAttribute('data-target'));
                target.classList.add('show');
            });
        });
    </script>
</body>

</html>

@endsection