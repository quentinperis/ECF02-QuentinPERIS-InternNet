<div class="p-6 text-gray-900">

    <form action="{{route('offre.store')}}" method="POST">

        @csrf
        <label for="domaine">Domaine d'activité :</label>
        <select name="domaine" id="domaine">
            <option value=" ">Choisir le domaine de recherche de l'entreprise</option>
            <option value="it">IT</option>
            <option value="restauration">Restauration</option>
            <option value="secretariat">Secretariat</option>
            <option value="immobilier">Immobilier</option>
        </select>
        <label for="titre">Titre :</label>
        <input id="titre" name="titre" type="text"/>
        <label for="description">Description du poste :</label>
        <textarea id="description" name="description"></textarea>
        <label for="localisation">Agglomeration :</label>
        <select name="localisation" id="localisation">
            <option value=" ">Choisir le secteur de recherche de l'entreprise</option>
            <option value="paris">Lille</option>
            <option value="toulouse">Paris</option>
            <option value="lyon">Lyon</option>
            <option value="marseille">Marseille</option>
            <option value="bordeaux">Bordeaux</option>
        </select>

        <button type="submit" class="">Enregistrer</button>

    </form>
</div>
