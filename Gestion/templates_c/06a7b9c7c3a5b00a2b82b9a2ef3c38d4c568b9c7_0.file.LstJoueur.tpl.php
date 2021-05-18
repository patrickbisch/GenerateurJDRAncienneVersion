<?php
/* Smarty version 3.1.39, created on 2021-05-17 11:32:59
  from 'C:\laragon\www\GenerateurJDR\Gestion\Ecran\Template\LstJoueur.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a2546ba5a3a2_61451889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06a7b9c7c3a5b00a2b82b9a2ef3c38d4c568b9c7' => 
    array (
      0 => 'C:\\laragon\\www\\GenerateurJDR\\Gestion\\Ecran\\Template\\LstJoueur.tpl',
      1 => 1621251136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a2546ba5a3a2_61451889 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ListeTitre JoueurDef">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListeJoueurTitre']->value, 'Texte', false, 'Cle');
$_smarty_tpl->tpl_vars['Texte']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Cle']->value => $_smarty_tpl->tpl_vars['Texte']->value) {
$_smarty_tpl->tpl_vars['Texte']->do_else = false;
?>
        <div class=<?php echo $_smarty_tpl->tpl_vars['Cle']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Texte']->value;?>
</div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="Detail">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListeJoueur']->value, 'Joueur');
$_smarty_tpl->tpl_vars['Joueur']->index = -1;
$_smarty_tpl->tpl_vars['Joueur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Joueur']->value) {
$_smarty_tpl->tpl_vars['Joueur']->do_else = false;
$_smarty_tpl->tpl_vars['Joueur']->index++;
$__foreach_Joueur_1_saved = $_smarty_tpl->tpl_vars['Joueur'];
?>
        <div class="Ligne JoueurDef" 
            <?php if ($_smarty_tpl->tpl_vars['MODIFICATION']->value == "OUI") {?>
                ondblclick="ModifierJoueur(<?php echo $_smarty_tpl->tpl_vars['Joueur']->index;?>
)"
            <?php }?>
            >
            <div class="IconeVisu Info" onclick="VisualiserJoueur(<?php echo $_smarty_tpl->tpl_vars['Joueur']->index;?>
)">
                <img height="26" src="Ecran/Template/Images/Visualisation.jpg" alt="Logo">
                <span class="InfoBulle">
                    <?php echo $_smarty_tpl->tpl_vars['InfoBulle']->value["VisuJoueur"];?>

                </span>
            </div>
            <div class="LstJoueurNom"><?php echo $_smarty_tpl->tpl_vars['Joueur']->value->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['Joueur']->value->nom;?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['Joueur']->value->adresseEmailErreur != 0) {?>
                <div class="LstJoueurEmailErr Info">
                    <img height="26" src="Ecran/Template/Images/Critique.svg" alt="Logo">
                    <span class="InfoBulle">
                        <?php echo $_smarty_tpl->tpl_vars['InfoBulle']->value["InfoEmail"];?>

                    </span>
                </div>
            <?php }?>
            <div class="LstJoueurMaitre"><?php echo $_smarty_tpl->tpl_vars['Joueur']->value->campagne;?>
</div>
        </div>
    <?php
$_smarty_tpl->tpl_vars['Joueur'] = $__foreach_Joueur_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php echo '<script'; ?>
>
    function VisualiserJoueur(Ligne){
        alert("Visualiser<br>Ligne : " + Ligne)
    }
    function ModifierJoueur(Ligne){
        alert("Modifier<br>Ligne : " + Ligne)
    }
<?php echo '</script'; ?>
>
<?php }
}
