<?php
/* Smarty version 3.1.39, created on 2021-05-17 14:23:24
  from 'C:\laragon\www\GenerateurJDR\Gestion\Ecran\Template\VisuCampagne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a27c5c45a0c4_65105099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '054ed9f2b84905c9f537337538114f0236e0f5b4' => 
    array (
      0 => 'C:\\laragon\\www\\GenerateurJDR\\Gestion\\Ecran\\Template\\VisuCampagne.tpl',
      1 => 1621261402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a27c5c45a0c4_65105099 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal fade" id="VisuCampagne<?php echo $_smarty_tpl->tpl_vars['Campagne']->index;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $_smarty_tpl->tpl_vars['Campagne']->value->campagne;?>
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        JDR : <?php echo $_smarty_tpl->tpl_vars['Campagne']->value->type;?>
 <br>
        Maitre : <?php echo $_smarty_tpl->tpl_vars['Campagne']->value->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['Campagne']->value->nom;?>
 <?php echo $_smarty_tpl->tpl_vars['Campagne']->value->adresseEmailErreur;?>
 <br>
        Liste des joueurs : <br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListeTable']->value, 'Joueur', false, 'key');
$_smarty_tpl->tpl_vars['Joueur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['Joueur']->value) {
$_smarty_tpl->tpl_vars['Joueur']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['Joueur']->value->id_campagne == $_smarty_tpl->tpl_vars['Campagne']->value->id_campagne) {?>
            <?php echo $_smarty_tpl->tpl_vars['Joueur']->value->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['Joueur']->value->nom;?>
 <?php echo $_smarty_tpl->tpl_vars['Joueur']->value->adresseEmailErreur;?>
 <br>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Retour</button>
      </div>
    </div>
  </div>
</div>
<?php }
}
