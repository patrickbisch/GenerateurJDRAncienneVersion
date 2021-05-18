<div class="ListeTitre CampagneDef">
    {foreach $ListeCampagneTitre key=Cle item=Texte}
        <div class={$Cle}>{$Texte}</div>
    {/foreach}
</div>
<div class="Detail">
    {foreach $ListeCampagne as $Campagne}
        <div class="Ligne CampagneDef">
            <div class="IconeVisu Info" data-toggle="modal" data-target="#CampagneVisu{$Campagne@index}">
                <img height="22" src="Ecran/Template/Images/Visualisation.jpg" alt="Logo">
                <span class="InfoBulle">
                    {$InfoBulle["VisuCampagne"]}
                </span>
            </div>
            <!-- Integration du formulaire de Visu -->
            {include file="Ecran/Template/CampagneVisu.tpl"}

            <div class="LstCampagneNom"
            {if $MODIFICATION == "OUI"}
                data-toggle="modal" data-target="#CampagneModif{$Campagne@index}"
            {/if}
            >{$Campagne->campagne}</div>
            <div class="LstCampagneJDR"
            {if $MODIFICATION == "OUI"}
                data-toggle="modal" data-target="#CampagneModif{$Campagne@index}"
            {/if}
            >{$Campagne->type}</div>
            {if $Campagne->referenceErreur != 0}
                <div class="LstCampagneTypeErr Info">
                    <img height="26" src="Ecran/Template/Images/Information.svg" alt="Logo">
                    <span class="InfoBulle">
                        {$InfoBulle["InfoJDR"]}
                    </span>
                </div>
            {/if}
            <div class="LstCampagneMaitre"
            {if $MODIFICATION == "OUI"}
                data-toggle="modal" data-target="#CampagneModif{$Campagne@index}"
            {/if}
            >{$Campagne->prenom} {$Campagne->nom}</div>
            {if $Campagne->adresseEmailErreur != 0}
                <div class="LstCampagneEmailErr Info">
                    <img height="26" src="Ecran/Template/Images/Critique.svg" alt="Logo">
                    <span class="InfoBulle">
                        {$InfoBulle["InfoEmail"]}
                    </span>
                </div>
            {/if}
            <div class="LstCampagneJoueur"
            {if $MODIFICATION == "OUI"}
                data-toggle="modal" data-target="#CampagneModif{$Campagne@index}"
            {/if}
            >{$Campagne->nbJoueur}</div>
        </div>
        {if $MODIFICATION == "OUI"}
            <!-- Integration du formulaire de Modif -->
            {include file="Ecran/Template/CampagneModif.tpl"}
        {/if}
    {/foreach}
</div>
