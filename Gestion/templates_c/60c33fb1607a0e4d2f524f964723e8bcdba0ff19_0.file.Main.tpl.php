<?php
/* Smarty version 3.1.39, created on 2021-05-17 15:32:10
  from 'C:\laragon\www\GenerateurJDR\Gestion\Ecran\Template\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a28c7b0064b8_51770192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60c33fb1607a0e4d2f524f964723e8bcdba0ff19' => 
    array (
      0 => 'C:\\laragon\\www\\GenerateurJDR\\Gestion\\Ecran\\Template\\Main.tpl',
      1 => 1621265505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Ecran/Template/Titre.tpl' => 1,
    'file:Ecran/Template/Menu.tpl' => 1,
    'file:Ecran/Template/JoueurLst.tpl' => 1,
    'file:Ecran/Template/CampagneLst.tpl' => 1,
    'file:Ecran/Template/PiedPage.tpl' => 1,
  ),
),false)) {
function content_60a28c7b0064b8_51770192 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="Ecran/StyleGestion.css">
    <!-- Integration du titre -->
    <title><?php echo $_smarty_tpl->tpl_vars['TitreWindows']->value;?>
</title>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </head>
  <body>
    <main>
        <!-- Integration du HEADER -->
        <?php $_smarty_tpl->_subTemplateRender("file:Ecran/Template/Titre.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- Integration du MENU -->
        <?php $_smarty_tpl->_subTemplateRender("file:Ecran/Template/Menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['ACTION']->value == "JOUEUR") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:Ecran/Template/JoueurLst.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender("file:Ecran/Template/CampagneLst.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
        <?php }?>

        <!-- Integration du FOOTER -->
        <?php $_smarty_tpl->_subTemplateRender("file:Ecran/Template/PiedPage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </main>
  </body>
</html><?php }
}
