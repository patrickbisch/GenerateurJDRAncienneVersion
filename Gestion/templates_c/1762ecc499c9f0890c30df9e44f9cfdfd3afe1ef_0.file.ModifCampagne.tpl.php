<?php
/* Smarty version 3.1.39, created on 2021-05-17 13:53:09
  from 'C:\laragon\www\GenerateurJDR\Gestion\Ecran\Template\ModifCampagne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a27545740a56_64804673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1762ecc499c9f0890c30df9e44f9cfdfd3afe1ef' => 
    array (
      0 => 'C:\\laragon\\www\\GenerateurJDR\\Gestion\\Ecran\\Template\\ModifCampagne.tpl',
      1 => 1621259584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a27545740a56_64804673 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal fade" id="ModifCampagne<?php echo $_smarty_tpl->tpl_vars['Campagne']->index;?>
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
        ... MODIFICATION >>>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php }
}
