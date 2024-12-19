<div class="sidebar bg-dark text-white" style="width: 250px; height: 39rem;">
            <div class="sidebar-header p-3">
                <h4 class="text-center">Tableau de Bord</h4>
            </div>
            <ul class="nav flex-column p-3">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('dashboard')}}">
                        <i class="fas fa-home"></i> Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-users"></i> Utilisateurs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-cogs"></i> Paramètres
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-chart-line"></i> Employers
                    </a>
                    <div class="collapse" id="collapseExample">
                    <ul class="nav flex-column p-3 border">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('employer.index')}}">
                            <i class="fas fa-users"></i> Listes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('employer.create')}}">
                            <i class="fas fa-plus"></i> Ajout
                            </a>
                        </li>
                </ul>
                    </div>
                </li>
                


                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-sign-out-alt"></i> Déconnexion
                    </a>
                </li>
            </ul>
        </div>