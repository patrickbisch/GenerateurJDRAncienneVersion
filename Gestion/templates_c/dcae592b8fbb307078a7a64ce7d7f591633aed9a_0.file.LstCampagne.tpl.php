<?php
/* Smarty version 3.1.39, created on 2021-05-17 13:57:01
  from 'C:\laragon\www\GenerateurJDR\Gestion\Ecran\Template\LstCampagne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a2762db16c67_77107476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcae592b8fbb307078a7a64ce7d7f591633aed9a' => 
    array (
      0 => 'C:\\laragon\\www\\GenerateurJDR\\Gestion\\Ecran\\Template\\LstCampagne.tpl',
      1 => 1621259817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Ecran/Template/VisuCampagne.tpl' => 1,
  ),
),false)) {
function content_60a2762db16c67_77107476 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ListeTitre CampagneDef">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListeCampagneTitre']->value, 'Texte', false, 'Cle');
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListeCampagne']->value, 'Campagne');
$_smarty_tpl->tpl_vars['Campagne']->index = -1;
$_smarty_tpl->tpl_vars['Campagne']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Campagne']->value) {
$_smarty_tpl->tpl_vars['Campagne']->do_else = false;
$_smarty_tpl->tpl_vars['Campagne']->index++;
$__foreach_Campagne_1_saved = $_smarty_tpl->tpl_vars['Campagne'];
?>
        <div class="Ligne CampagneDef" 
            <?php if ($_smarty_tpl->tpl_vars['MODIFICATION']->value == "OUI") {?>
                ondblclick="ModifierCampagne(<?php echo $_smarty_tpl->tpl_vars['Campagne']->index;?>
)"
            <?php }?>
            >
            <div class="IconeVisu Info" data-toggle="modal" data-target="#VisuCampagne<?php echo $_smarty_tpl->tpl_vars['Campagne']->index;?>
">
                <img height="26" src="Ecran/Template/Images/Visualisation.jpg" alt="Logo">
                <span class="InfoBulle">
                    <?php echo $_smarty_tpl->tpl_vars['InfoBulle']->value["VisuCampagne"];?>

                </span>
            </div>
            <!-- Integration du formulaire de Visu -->
            <?php $_smarty_tpl->_subTemplateRender("file:Ecran/Template/VisuCampagne.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <div class="LstCampagneNom"><?php echo $_smarty_tpl->tpl_vars['Campagne']->value->campagne;?>
</div>
            <div class="LstCampagneJDR"><?php echo $_smarty_tpl->tpl_vars['Campagne']->value->type;?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['Campagne']->value->referenceErreur != 0) {?>
                <div class="LstCampagneTypeErr Info">
                    <img height="26" src="Ecran/Template/Images/Information.svg" alt="Logo">
                    <span class="InfoBulle">
                        <?php echo $_smarty_tpl->tpl_vars['InfoBulle']->value["InfoJDR"];?>

                    </span>
                </div>
            <?php }?>
            <div class="LstCampagneMaitre"><?php echo $_smarty_tpl->tpl_vars['Campagne']->value->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['Campagne']->value->nom;?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['Campagne']->value->adresseEmailErreur != 0) {?>
                <div class="LstCampagneEmailErr Info">
                    <img height="26" src="Ecran/Template/Images/Critique.svg" alt="Logo">
                    <span class="InfoBulle">
                        <?php echo $_smarty_tpl->tpl_vars['InfoBulle']->value["InfoEmail"];?>

                    </span>
                </div>
            <?php }?>
            <div class="LstCampagneJoueur"><?php echo $_smarty_tpl->tpl_vars['Campagne']->value->nbJoueur;?>
</div>
        </div>
    <?php
$_smarty_tpl->tpl_vars['Campagne'] = $__foreach_Campagne_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php echo '<script'; ?>
>
    function ModifierCampagne(Ligne){
        alert("Modifier<br>Ligne : " + Ligne)
    }
<?php echo '</script'; ?>
>
<?php }
}
