<div class="ListeTitre JoueurDef">
    {foreach $ListeJoueurTitre key=Cle item=Texte}
        <div class={$Cle}>{$Texte}</div>
    {/foreach}
</div>
<div class="Detail">
    {foreach $ListeJoueur as $Joueur}
        <div class="Ligne JoueurDef" 
            {if $MODIFICATION == "OUI"}
                ondblclick="ModifierJoueur({$Joueur@index})"
            {/if}
            >
            <div class="IconeVisu Info" onclick="VisualiserJoueur({$Joueur@index})">
                <img height="26" src="Ecran/Template/Images/Visualisation.jpg" alt="Logo">
                <span class="InfoBulle">
                    {$InfoBulle["VisuJoueur"]}
                </span>
            </div>
            <div class="LstJoueurNom">{$Joueur->prenom} {$Joueur->nom}</div>
            {if $Joueur->adresseEmailErreur != 0}
                <div class="LstJoueurEmailErr Info">
                    <img height="26" src="Ecran/Template/Images/Critique.svg" alt="Logo">
                    <span class="InfoBulle">
                        {$InfoBulle["InfoEmail"]}
                    </span>
                </div>
            {/if}
            <div class="LstJoueurMaitre">{$Joueur->campagne}</div>
        </div>
    {/foreach}
</div>

<script>
    function VisualiserJoueur(Ligne){
        alert("Visualiser<br>Ligne : " + Ligne)
    }
    function ModifierJoueur(Ligne){
        alert("Modifier<br>Ligne : " + Ligne)
    }
</script>
