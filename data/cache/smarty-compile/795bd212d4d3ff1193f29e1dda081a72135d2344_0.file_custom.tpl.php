<?php
/* Smarty version 5.4.3, created on 2025-10-19 14:27:48
  from 'file:custom.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f492f48eace5_94003728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '795bd212d4d3ff1193f29e1dda081a72135d2344' => 
    array (
      0 => 'custom.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f492f48eace5_94003728 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\src\\themes\\admin_future\\modules\\settings';
?><form method="post" class="ajax-submit" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" novalidate>
    <div class="card">
        <ul class="list-group list-group-flush pt-1 list">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('CUSTOM_CONFIGS'), 'vals', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('vals')->value) {
$foreach0DoElse = false;
?>
            <li class="list-group-item item">
                <div class="row g-2">
                    <div class="col-lg-6 col-xl-4">
                        <label class="form-label fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('config_key');?>
:</label>
                        <input type="text" class="form-control required anphanumeric" name="config_key[]" value="<?php echo $_smarty_tpl->getValue('key');?>
" maxlength="30">
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <label class="form-label fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('config_value');?>
:</label>
                        <input type="text" class="form-control required" name="config_value[]" value="<?php echo is_array($_smarty_tpl->getValue('vals')) ? $_smarty_tpl->getValue('vals')[0] : '';?>
">
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <label class="form-label fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('config_description');?>
:</label>
                        <div class="hstack gap-1">
                            <input type="text" class="form-control" name="config_description[]" value="<?php echo is_array($_smarty_tpl->getValue('vals')) ? $_smarty_tpl->getValue('vals')[1] : '';?>
">
                            <button type="button" class="btn btn-secondary" data-toggle="addCustomCfgItem" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('add');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('add');?>
"><i class="fa-solid fa-plus text-primary"></i></button>
                            <button type="button" class="btn btn-secondary" data-toggle="delCustomCfgItem" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
"><i class="fa-solid fa-xmark text-danger"></i></button>
                        </div>
                    </div>
                </div>
            </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="card-footer border-top text-center">
            <input type="hidden" name="checkss" value="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
">
            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getModule('submit');?>
</button>
        </div>
    </div>
</form>
<div class="card mt-3">
    <div class="card-body">
        <div><?php echo $_smarty_tpl->getValue('LANG')->getModule('custom_configs_note');?>
</div>
        <strong><?php echo $_smarty_tpl->getValue('LANG')->getModule('config_key');?>
</strong>: <?php echo $_smarty_tpl->getValue('LANG')->getModule('config_key_note');?>

    </div>
</div>
<?php }
}
