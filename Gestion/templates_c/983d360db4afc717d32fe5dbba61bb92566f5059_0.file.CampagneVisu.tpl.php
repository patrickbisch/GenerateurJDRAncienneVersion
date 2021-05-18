<?php
/* Smarty version 3.1.39, created on 2021-05-17 16:17:13
  from 'C:\laragon\www\GenerateurJDR\Gestion\Ecran\Template\CampagneVisu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a297097c16d3_62275001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983d360db4afc717d32fe5dbba61bb92566f5059' => 
    array (
      0 => 'C:\\laragon\\www\\GenerateurJDR\\Gestion\\Ecran\\Template\\CampagneVisu.tpl',
      1 => 1621268136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a297097c16d3_62275001 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal fade FenetreModal" id="CampagneVisu<?php echo $_smarty_tpl->tpl_vars['Campagne']->index;?>
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
 <br><br>
        Liste des joueurs : <br>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListeTable']->value, 'Joueur', false, 'key');
$_smarty_tpl->tpl_vars['Joueur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['Joueur']->value) {
$_smarty_tpl->tpl_vars['Joueur']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['Joueur']->value->id_campagne == $_smarty_tpl->tpl_vars['Campagne']->value->id_campagne) {?>
            <li><?php echo $_smarty_tpl->tpl_vars['Joueur']->value->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['Joueur']->value->nom;?>
 <?php echo $_smarty_tpl->tpl_vars['Joueur']->value->adresseEmailErreur;?>
</li>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Retour</button>
      </div>
    </div>
  </div>
</div>
<?php }
}
