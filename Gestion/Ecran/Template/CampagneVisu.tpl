<!-- Modal -->
<div class="modal fade FenetreModal" id="CampagneVisu{$Campagne@index}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{$Campagne->campagne}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        JDR : {$Campagne->type} <br>
        Maitre : {$Campagne->prenom} {$Campagne->nom} {$Campagne->adresseEmailErreur} <br><br>
        Liste des joueurs : <br>
        <ul>
        {foreach from=$ListeTable item=Joueur key=key}
          {if $Joueur->id_campagne == $Campagne->id_campagne}
            <li>{$Joueur->prenom} {$Joueur->nom} {$Joueur->adresseEmailErreur}</li>
          {/if}
        {/foreach}
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Retour</button>
      </div>
    </div>
  </div>
</div>
