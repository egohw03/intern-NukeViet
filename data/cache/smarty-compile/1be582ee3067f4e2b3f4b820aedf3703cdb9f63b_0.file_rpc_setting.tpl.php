<?php
/* Smarty version 5.4.3, created on 2025-10-19 14:01:43
  from 'file:rpc_setting.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f48cd71c1ae1_00950742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be582ee3067f4e2b3f4b820aedf3703cdb9f63b' => 
    array (
      0 => 'rpc_setting.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f48cd71c1ae1_00950742 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\src\\themes\\admin_future\\modules\\seotools';
?><form method="post" class="ajax-submit" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" novalidate>
    <div class="card">
        <div class="card-header fs-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('rpc_ping');?>
</div>
        <ul class="list-group list-group-flush">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('SERVICES'), 'service', false, 'service_id');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('service_id')->value => $_smarty_tpl->getVariable('service')->value) {
$foreach0DoElse = false;
?>
            <li class="list-group-item">
                <div class="form-check">
                    <input class="form-check-input"<?php if ($_smarty_tpl->getValue('NO_CONFIG') || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('service')[1],$_smarty_tpl->getValue('PRCSERVICE'))) {?> checked<?php }?> id="prcservice_<?php echo $_smarty_tpl->getValue('service_id');?>
" type="checkbox" data-toggle="checkSingle" name="prcservice[]" value="<?php echo $_smarty_tpl->getValue('service')[1];?>
">
                    <label class="form-check-label" for="prcservice_<?php echo $_smarty_tpl->getValue('service_id');?>
">
                        <?php if (!( !true || empty($_smarty_tpl->getValue('service')[3]))) {?>
                        <img src="<?php echo $_smarty_tpl->getValue('IMGPATH');?>
/<?php echo $_smarty_tpl->getValue('service')[3];?>
" alt="<?php echo $_smarty_tpl->getValue('service')[1];?>
">
                        <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->getValue('IMGPATH');?>
/link.png" alt="<?php echo $_smarty_tpl->getValue('service')[1];?>
">
                        <?php }?>
                        <?php echo $_smarty_tpl->getValue('service')[1];?>

                    </label>
                </div>
            </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="card-footer border-top">
            <div class="hstack gap-2">
                <input type="hidden" name="checkss" value="<?php echo (defined('NV_CHECK_SESSION') ? constant('NV_CHECK_SESSION') : null);?>
">
                <input type="hidden" name="submitprcservice" value="1">
                <input type="checkbox" data-toggle="checkAll" name="checkall" class="form-check-input m-0 align-middle" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('toggle_checkall');?>
">
                <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('save');?>
</button>
            </div>
        </div>
    </div>
</form>
<?php }
}
