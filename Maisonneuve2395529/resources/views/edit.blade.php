@extends('layout')
@section('title','Edit Etudiant')
@section('content')

<h1>Edit Etudiant</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Edit Etudiant</h2>
            </div>
            <div class="card-body">
                <form method="post">
                    <!-- on doit mettre le token sinon error 419 (comme input hidden) -->
                    @csrf
                    @method('put')    <!--declarer une methode put. ecrase le post du form -->
                    <div class="mb-3">
                       <label for="nom" class="form-label">Nom</label>        <!-- pour conserver les champs si erreurs -->
                        <input type="text" name="nom" id="nom" class="form-control" value="{{old('nom', $etudiant->nom)}}">
                        @if($errors->has('nom'))
                        <div class="text-danger mt2-2">
                            <!-- tableau dans un tableau ex: errors[title[...],...] -->
                            {{$errors->first('nom')}}
                        </div>
                        @endif
                    </div>

                    <div class="mb-3">
                       <label for="adresse" class="form-label">Adresse</label>      
                        <input type="text" name="adresse" id="adresse" class="form-control" value="{{old('adresse', $etudiant->adresse)}}">
                        @if($errors->has('adresse'))
                        <div class="text-danger mt2-2">
                            {{$errors->first('adresse')}}
                        </div>
                        @endif
                    </div>

                    <div class="mb-3">
                       <label for="telephone" class="form-label">telephone</label>     
                        <input type="text" name="telephone" id="telephone" class="form-control" value="{{old('telephone', $etudiant->telephone)}}">
                        @if($errors->has('telephone'))
                        <div class="text-danger mt2-2">
                            {{$errors->first('telephone')}}
                        </div>
                        @endif
                    </div>

                    <div class="mb-3">
                       <label for="email" class="form-label">email</label>     
                        <input type="text" name="email" id="email" class="form-control" value="{{old('email', $etudiant->email)}}">
                        @if($errors->has('email'))
                        <div class="text-danger mt2-2">
                            {{$errors->first('email')}}
                        </div>
                        @endif
                    </div>


                    <div class="mb-3">
                       <label for="date_de_naissance" class="form-label">date_de_naissance</label>        <!-- pour conserver les champs si erreurs -->
                        <input type="date" name="date_de_naissance" id="date_de_naissance" class="form-control" value="{{old('date_de_naissance', $etudiant->date_de_naissance)}}">
                        @if($errors->has('date_de_naissance'))
                        <div class="text-danger mt2-2">
                            {{$errors->first('date_de_naissance')}}
                        </div>
                        @endif
                    </div>

                    <div class="mb-3">
                       <label for="ville_id" class="form-label">ville</label>        <!-- pour conserver les champs si erreurs -->
                        <input type="number" min="1" max="15" name="ville_id" id="ville_id" class="form-control" value="{{old('ville_id', $etudiant->ville_id)}}">
                        @if($errors->has('ville_id'))
                        <div class="text-danger mt2-2">
                            {{$errors->first('ville_id')}}
                        </div>
                        @endif
                    </div>
        
        
                  
                    <button type="submit" class="btn btn-primary" value="Update">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection