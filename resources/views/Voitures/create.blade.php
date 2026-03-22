<form action="{{ route('voitures.store', $id_employe) }}" method="POST">
    @csrf
    <input type="hidden" name="id_employe" value="{{ $id_employe }}">

    <label>Modèle de la voiture :</label>
    <input type="text" name="modele" required>

    <label>Nombre places :</label>
    <input type="number" name="nb_places" required>

    <button type="submit">Enregistrer la voiture</button>
</form>
