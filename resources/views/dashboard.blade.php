@extends('layouts.template')
@section('content')
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
@endsection