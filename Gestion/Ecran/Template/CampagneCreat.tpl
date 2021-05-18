<!-- Modal -->
<h1>Creation d'une campagne</h1>
Designation :
<input class="SaisieChaine" required value="">
<br>
JDR :
<select name="JDR" id="JDR">
    {foreach from=$ListeJDR item=JDR}
    <option value="{$JDR->id_type}">{$JDR->type}</option> 
    {/foreach}
</select> 
<br>
Maitre : 
<select name="Maitre" id="Maitre">
    {foreach from=$ListeJoueur item=Joueur}
    <option value="{$Joueur->id_joueur}">{$Joueur->prenom} {$Joueur->nom}</option>
    {/foreach}
</select> 
<br><br>
Selection des joueurs :<br>
<section>
    {foreach from=$ListeJoueur item=Joueur}
        <input type="checkbox" name="Select[]" value="{$Joueur->id_joueur}"> {$Joueur->prenom} {$Joueur->nom}<br>
    {/foreach}
</section>
<br>


<div>
    <button type="button" class="btn btn-primary">Sauvegarder</button>
    <button type="button" class="btn btn-secondary">Annuler</button>
</div>
