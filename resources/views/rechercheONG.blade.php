<div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <h1>All adherents</h1>

    <form action="{{ route('adherents.index') }}" method="GET">
        <div class="mb-3 flex ">
            <div class="space">
                <label for="domaine">domaine</label>
                <select class="form-select" id="domaine" name="domaine">
                    <option value="" selected disabled>Sélectionnez un domaine</option>
                    @foreach ($domaines as $domaine)
                    <option value="{{ $domaine }}">{{ $domaine }}</option>
                    @endforeach
                </select>

                <label for="année">année</label>
                <select class="form-select" id="annee" name="annee">
                    <option value="" selected disabled>Sélectionnez un année</option>
                    @foreach ($annees as $annee)
                    <option value="{{ $annee }}">{{ $annee }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <table class="table mt-3" border="1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Prénom</th>
                    <th>sexe</th>
                </tr>
            </thead>
            <tbody>
                @if ($adherents === null)
                <tr>
                    <td colspan="3">Aucun résultat trouvé</td>
                </tr>
                @else

                @if(Session::has('danger'))
                <div class="alert alert-danger" role="alert">
                   {{danger}}
                </div>
                @endif

                @foreach ($adherents as $adherent)
                <tr>
                    <td>{{ $adherent->nom }}</td>
                    <td>{{ $adherent->prenom }}</td>
                    <td>{{ $adherent->sexe }}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        <input type="submit" class="btn btn-primary" name="rechercher" value="rechercher" />
    </form>
</div>
