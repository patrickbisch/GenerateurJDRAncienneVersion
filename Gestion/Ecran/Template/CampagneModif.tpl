<!-- Modal -->
<div class="modal fade FenetreModal" id="CampagneModif{$Campagne@index}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modification de la campagne</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Designation :
        <input class="SaisieChaine" required value="{$Campagne->campagne}">
        <br>
        JDR :
        <select name="JDR" id="JDR">
          {foreach from=$ListeJDR item=JDR}
            {if $JDR->id_type == $Campagne->id_jdr}
              <option value="{$JDR->id_type}" selected>{$JDR->type}</option>
            {else}
              <option value="{$JDR->id_type}">{$JDR->type}</option> 
            {/if}
          {/foreach}
        </select> 
        <br>
        Maitre : 
        <select name="Maitre" id="Maitre">
          {foreach from=$ListeJoueur item=Joueur}
            {if $Joueur->id_joueur == $Campagne->id_maitre}
              <option value="{$Joueur->id_joueur}" selected>{$Joueur->prenom} {$Joueur->nom}</option>
            {else}
              <option value="{$Joueur->id_joueur}">{$Joueur->prenom} {$Joueur->nom}</option>
            {/if}
          {/foreach}
        </select> 
        <br><br>
        Liste des joueurs : <br>
        <ul>
        {foreach from=$ListeTable item=Joueur key=key}
          {if $Joueur->id_campagne == $Campagne->id_campagne}
            <li>{$Joueur->prenom} {$Joueur->nom} {$Joueur->adresseEmailErreur}</li>
          {/if}
        {/foreach}
        </ul>
        Ajouter un joueur :<br>
        <select name="Maitre" id="Maitre">
        <option value="0">-- Aucun --</option>
        {foreach from=$ListeJoueur item=Joueur}
            <option value="{$Joueur->id_joueur}">{$Joueur->prenom} {$Joueur->nom}</option>
          {/foreach}
        </select> 
      </div>
      <div class="modal-footer">
        {if $SUPPRESSION == "OUI"}
          <button type="button" class="btn btn-secondary">Supprimer</button>
        {/if}
        <button type="button" class="btn btn-primary">Sauvegarder</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
