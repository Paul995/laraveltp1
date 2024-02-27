@extends('layout')

@section('title', 'Liste Etudiants') 
@section('content')
<h1 class="my-5">&Eacute;tudiants</h1>

    <a href="{{route('etudiant.create')}}"><button id="create">+ Creer un Nouvel &eacute;tudiant</button></a><br><br><br>
    <div class="row">

        @forelse($etudiants as $etudiant)  <!--  forelse comme foreach mais execute le empty si aucune valeur -->
        <div class="col-md-6">
           
            <div class="card mb-4">
                <div class="card-header">
                    <div class="card-title">{{$etudiant->nom}}</div>
                </div>
                <div class="card-body">
                    
                    <ul class="list-unstyled">
                        <li><strong>Adresse : </strong>{{$etudiant->adresse}}</li>
                        <li><strong>Telephone : </strong>{{$etudiant->telephone}}</li>
                        <li><strong>Email : </strong>{{$etudiant->email}}</li>
                        <li><strong>Date de Naissance : </strong>{{$etudiant->date_de_naissance}}</li>
                        <li><strong>Ville : </strong>{{$etudiant->ville->nom}}</li>
                    </ul>
                    
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                                    <!-- 2e param pour id -->
                    <a href="{{route('etudiants.show', $etudiant->id)}}" class="btn btn-sm btn-outline-primary">View</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-danger">Aucun Etudiant a montrer</div>
        @endforelse

    </div>

    @endsection

