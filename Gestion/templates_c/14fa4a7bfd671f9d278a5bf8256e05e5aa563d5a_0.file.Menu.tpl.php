<?php
/* Smarty version 3.1.39, created on 2021-05-18 04:21:22
  from 'C:\laragon\www\GenerateurJDR\Gestion\Ecran\Template\Menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a340c28ecda6_07900662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14fa4a7bfd671f9d278a5bf8256e05e5aa563d5a' => 
    array (
      0 => 'C:\\laragon\\www\\GenerateurJDR\\Gestion\\Ecran\\Template\\Menu.tpl',
      1 => 1621311274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a340c28ecda6_07900662 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark bg-dark navbar-expand-sm Menu">
    <!-- Votre code ici -->
    <div class="container-fluid">
        <a class="navbar-brand Info" href="?VISUALISATION=CAMPAGNE">
            <img height="36" src="Ecran/Template/Images/Logo.png" alt="Logo">
            <span class="InfoBulle">
                <?php echo $_smarty_tpl->tpl_vars['InfoBulle']->value["ListeCampagne"];?>

            </span>
        </a>
        <a class="navbar-brand Info" href="?VISUALISATION=JOUEUR">
            <img height="36" src="Ecran/Template/Images/Joueur.png" alt="Joueur">
            <span class="InfoBulle">
                <?php echo $_smarty_tpl->tpl_vars['InfoBulle']->value["ListeJoueur"];?>

            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <?php if ($_smarty_tpl->tpl_vars['CREATION']->value == "OUI") {?>
                <a class="navbar-brand Info" href="?CREATION=<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">
                    <img height="36" src="Ecran/Template/Images/Creation.png" alt="Joueur">
                    <span class="InfoBulle">
                        <?php if ($_smarty_tpl->tpl_vars['ACTION']->value == "CAMPAGNE") {?>
                            <?php echo $_smarty_tpl->tpl_vars['InfoBulle']->value["CreerCampagne"];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['InfoBulle']->value["AjoutJoueur"];?>

                        <?php }?>
                    </span>
                </a>
            <?php }?>
        </div>
    </div>
</nav>
<?php }
}
