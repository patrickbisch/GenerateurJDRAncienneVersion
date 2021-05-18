<nav class="navbar navbar-dark bg-dark navbar-expand-sm Menu">
    <!-- Votre code ici -->
    <div class="container-fluid">
        <a class="navbar-brand Info" href="?VISUALISATION=CAMPAGNE">
            <img height="36" src="Ecran/Template/Images/Logo.png" alt="Logo">
            <span class="InfoBulle">
                {$InfoBulle["ListeCampagne"]}
            </span>
        </a>
        <a class="navbar-brand Info" href="?VISUALISATION=JOUEUR">
            <img height="36" src="Ecran/Template/Images/Joueur.png" alt="Joueur">
            <span class="InfoBulle">
                {$InfoBulle["ListeJoueur"]}
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            {if $CREATION == "OUI"}
                <a class="navbar-brand Info" href="?CREATION={$ACTION}">
                    <img height="36" src="Ecran/Template/Images/Creation.png" alt="Joueur">
                    <span class="InfoBulle">
                        {if $ACTION == "CAMPAGNE"}
                            {$InfoBulle["CreerCampagne"]}
                        {else}
                            {$InfoBulle["AjoutJoueur"]}
                        {/if}
                    </span>
                </a>
            {/if}
        </div>
    </div>
</nav>
