<?php
/* Smarty version 3.1.39, created on 2021-05-18 05:06:38
  from 'C:\laragon\www\GenerateurJDR\Gestion\Ecran\Template\CampagneModif.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a34b5ece7b86_31623069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a00843d4cd5c1bab12e9b3d977f0ed91bd8043' => 
    array (
      0 => 'C:\\laragon\\www\\GenerateurJDR\\Gestion\\Ecran\\Template\\CampagneModif.tpl',
      1 => 1621314397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a34b5ece7b86_31623069 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal fade FenetreModal" id="CampagneModif<?php echo $_smarty_tpl->tpl_vars['Campagne']->index;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        <input class="SaisieChaine" required value="<?php echo $_smarty_tpl->tpl_vars['Campagne']->value->campagne;?>
">
        <br>
        JDR :
        <select name="JDR" id="JDR">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListeJDR']->value, 'JDR');
$_smarty_tpl->tpl_vars['JDR']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['JDR']->value) {
$_smarty_tpl->tpl_vars['JDR']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['JDR']->value->id_type == $_smarty_tpl->tpl_vars['Campagne']->value->id_jdr) {?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['JDR']->value->id_type;?>
" selected><?php echo $_smarty_tpl->tpl_vars['JDR']->value->type;?>
</option>
            <?php } else { ?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['JDR']->value->id_type;?>
"><?php echo $_smarty_tpl->tpl_vars['JDR']->value->type;?>
</option> 
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select> 
        <br>
        Maitre : 
        <select name="Maitre" id="Maitre">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListeJoueur']->value, 'Joueur');
$_smarty_tpl->tpl_vars['Joueur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Joueur']->value) {
$_smarty_tpl->tpl_vars['Joueur']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['Joueur']->value->id_joueur == $_smarty_tpl->tpl_vars['Campagne']->value->id_maitre) {?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['Joueur']->value->id_joueur;?>
" selected><?php echo $_smarty_tpl->tpl_vars['Joueur']->value->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['Joueur']->value->nom;?>
</option>
            <?php } else { ?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['Joueur']->value->id_joueur;?>
"><?php echo $_smarty_tpl->tpl_vars['Joueur']->value->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['Joueur']->value->nom;?>
</option>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select> 
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
        Ajouter un joueur :<br>
        <select name="Maitre" id="Maitre">
        <option value="0">-- Aucun --</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListeJoueur']->value, 'Joueur');
$_smarty_tpl->tpl_vars['Joueur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Joueur']->value) {
$_smarty_tpl->tpl_vars['Joueur']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['Joueur']->value->id_joueur;?>
"><?php echo $_smarty_tpl->tpl_vars['Joueur']->value->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['Joueur']->value->nom;?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select> 
      </div>
      <div class="modal-footer">
        <?php if ($_smarty_tpl->tpl_vars['SUPPRESSION']->value == "OUI") {?>
          <button type="button" class="btn btn-secondary">Supprimer</button>
        <?php }?>
        <button type="button" class="btn btn-primary">Sauvegarder</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<?php }
}
