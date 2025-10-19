<?php
/* Smarty version 5.4.3, created on 2025-10-19 14:01:44
  from 'file:robots.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f48cd8347ba5_31427064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '685fd55cf490363feb3b08af16a06c93669792a0' => 
    array (
      0 => 'robots.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f48cd8347ba5_31427064 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\src\\themes\\admin_future\\modules\\seotools';
?><form id="robots-manage" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" method="post">
    <div class="table-responsive-lg">
        <table class="table table-striped table-bordered table-hover table-sticky table-counter">
            <thead>
                <tr class="text-center">
                    <th class="text-nowrap" style="width: 1%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('robots_number');?>
</th>
                    <th class="text-nowrap" style="width: 49%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('robots_filename');?>
</th>
                    <th class="text-nowrap" style="width: 50%;" colspan="2"><?php echo $_smarty_tpl->getValue('LANG')->getModule('robots_type');?>
</th>
                </tr>
            </thead>
            <tbody class="items">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('STATIC_FILES'), 'file');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td class="text-center counter-cell"></td>
                    <td class="text-break"><?php echo $_smarty_tpl->getValue('file');?>
</td>
                    <td colspan="2">
                        <select name="filename[<?php echo $_smarty_tpl->getValue('file');?>
]" class="form-select">
                            <?php
$_smarty_tpl->assign('type', null);$_smarty_tpl->tpl_vars['type']->step = 1;$_smarty_tpl->tpl_vars['type']->total = (int) ceil(($_smarty_tpl->tpl_vars['type']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['type']->step));
if ($_smarty_tpl->tpl_vars['type']->total > 0) {
for ($_smarty_tpl->tpl_vars['type']->value = 0, $_smarty_tpl->tpl_vars['type']->iteration = 1;$_smarty_tpl->tpl_vars['type']->iteration <= $_smarty_tpl->tpl_vars['type']->total;$_smarty_tpl->tpl_vars['type']->value += $_smarty_tpl->tpl_vars['type']->step, $_smarty_tpl->tpl_vars['type']->iteration++) {
$_smarty_tpl->tpl_vars['type']->first = $_smarty_tpl->tpl_vars['type']->iteration === 1;$_smarty_tpl->tpl_vars['type']->last = $_smarty_tpl->tpl_vars['type']->iteration === $_smarty_tpl->tpl_vars['type']->total;?>
                            <option value="<?php echo $_smarty_tpl->getValue('type');?>
"<?php if (($_smarty_tpl->getValue('ROBOTS_DATA')[$_smarty_tpl->getValue('file')] ?? 1) == $_smarty_tpl->getValue('type')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('LANG')->getModule("robots_type_".((string)$_smarty_tpl->getValue('type')));?>
</option>
                            <?php }
}
?>
                        </select>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ROBOTS_OTHER'), 'value', false, 'file');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                <tr class="item">
                    <td class="text-center counter-cell"></td>
                    <td><input class="form-control" type="text" value="<?php echo $_smarty_tpl->getValue('file');?>
" name="fileother[]" /></td>
                    <td>
                        <select name="optionother[]" class="form-select">
                            <?php
$_smarty_tpl->assign('type', null);$_smarty_tpl->tpl_vars['type']->step = 1;$_smarty_tpl->tpl_vars['type']->total = (int) ceil(($_smarty_tpl->tpl_vars['type']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['type']->step));
if ($_smarty_tpl->tpl_vars['type']->total > 0) {
for ($_smarty_tpl->tpl_vars['type']->value = 0, $_smarty_tpl->tpl_vars['type']->iteration = 1;$_smarty_tpl->tpl_vars['type']->iteration <= $_smarty_tpl->tpl_vars['type']->total;$_smarty_tpl->tpl_vars['type']->value += $_smarty_tpl->tpl_vars['type']->step, $_smarty_tpl->tpl_vars['type']->iteration++) {
$_smarty_tpl->tpl_vars['type']->first = $_smarty_tpl->tpl_vars['type']->iteration === 1;$_smarty_tpl->tpl_vars['type']->last = $_smarty_tpl->tpl_vars['type']->iteration === $_smarty_tpl->tpl_vars['type']->total;?>
                            <option value="<?php echo $_smarty_tpl->getValue('type');?>
"<?php if ($_smarty_tpl->getValue('type') == $_smarty_tpl->getValue('value')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('LANG')->getModule("robots_type_".((string)$_smarty_tpl->getValue('type')));?>
</option>
                            <?php }
}
?>
                        </select>
                    </td>
                    <td style="width: 1%;" class="text-nowrap">
                        <button type="button" class="btn btn-secondary" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('add');?>
" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('add');?>
" data-toggle="robot_line_add"><i class="fa-solid fa-plus"></i></button>
                        <button type="button" class="btn btn-secondary" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
" data-toggle="robot_line_delete"><i class="fa-solid fa-trash text-danger"></i></button>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
            <tfoot>
                <tr>
                    <td class="text-center" colspan="4">
                        <input type="hidden" name="checkss" value="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
">
                        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</form>
<?php }
}
