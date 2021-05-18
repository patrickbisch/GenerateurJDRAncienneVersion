<?php
/* Smarty version 3.1.39, created on 2021-05-18 05:05:12
  from 'C:\laragon\www\GenerateurJDR\Gestion\Ecran\Template\CampagneCreat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a34b08b32fa5_80505219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f336401c2d472abb18bea3ab57d56639dfad3a27' => 
    array (
      0 => 'C:\\laragon\\www\\GenerateurJDR\\Gestion\\Ecran\\Template\\CampagneCreat.tpl',
      1 => 1621313430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a34b08b32fa5_80505219 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<h1>Creation d'une campagne</h1>
Designation :
<input class="SaisieChaine" required value="">
<br>
JDR :
<select name="JDR" id="JDR">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListeJDR']->value, 'JDR');
$_smarty_tpl->tpl_vars['JDR']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['JDR']->value) {
$_smarty_tpl->tpl_vars['JDR']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['JDR']->value->id_type;?>
"><?php echo $_smarty_tpl->tpl_vars['JDR']->value->type;?>
</option> 
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
    <option value="<?php echo $_smarty_tpl->tpl_vars['Joueur']->value->id_joueur;?>
"><?php echo $_smarty_tpl->tpl_vars['Joueur']->value->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['Joueur']->value->nom;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select> 
<br><br>
Selection des joueurs :<br>
<section>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListeJoueur']->value, 'Joueur');
$_smarty_tpl->tpl_vars['Joueur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Joueur']->value) {
$_smarty_tpl->tpl_vars['Joueur']->do_else = false;
?>
        <input type="checkbox" name="Select[]" value="<?php echo $_smarty_tpl->tpl_vars['Joueur']->value->id_joueur;?>
"> <?php echo $_smarty_tpl->tpl_vars['Joueur']->value->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['Joueur']->value->nom;?>
<br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>
<br>


<div>
    <button type="button" class="btn btn-primary">Sauvegarder</button>
    <button type="button" class="btn btn-secondary">Annuler</button>
</div>
<?php }
}
