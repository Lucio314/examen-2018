<div class="bottom">
    <div class="header">
        <h3>Vos Coordonnées</h3>
    </div>
    <form action="{{route('adherents.store')}}" method="post">
        @csrf
        <fieldset>
            <legend>adhésion annuelle</legend>

            <div style="display: flex">
                <div class="form-group">
                    <label for="date">Date inscription</label>
                    <input required type="date" name="date" id="date" class="form-control1">
                </div>
                <div class="form-group">
                    <label for="ville">Année en cours</label>
                    <input required type="text" name="annee" id="annee" placeholder="2017" class="form-control4">
                </div>
            </div>
            <div style="display: flex">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input required type="text" name="nom" id="nom" class="form-control1">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input required type="text" name="prenom" id="prenom" class="form-control2">
                </div>
            </div>
            <div style="display: flex">
                <div class="form-group">
                    <label for="datenais">Date de Naissance</label>
                    <input required type="date" name="datenais" id="datenais" class="form-control3">
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input required type="text" name="ville" id="ville" class="form-control4">
                </div>
            </div>
            <div style="display: flex">
                <div class="form-group">
                    <label for="sexe">Sexe</label>
                    <input required type="text" name="sexe" id="sexe" placeholder="M ou F" class="form-control5">
                </div>
                <div class="form-group">
                    <label for="filiere">Domaine</label>
                    <select class="form-select" id="domaine" name="domaine">
                        <option value="assainissement">Assainissement</option>
                        <option value="formation">Formation</option>
                        <option value="santé">Santé</option>
                    </select>
                </div>
            </div>
            <div class="btn">
                <button class="btn btn-secondary">Effacer</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </fieldset>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  
</div>
