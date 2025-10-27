<?php
/* Smarty version 5.4.3, created on 2025-10-27 21:51:56
  from 'file:blocks.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68ff870c77bdd5_14349312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6fb1d981119b99937fbd23a901143858ca1c7af' => 
    array (
      0 => 'blocks.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68ff870c77bdd5_14349312 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\themes\\admin_future\\modules\\themes';
?><div id="blocklist" data-selectthemes="<?php echo $_smarty_tpl->getValue('SELECTTHEMES');?>
" data-blockredirect="" data-checkss="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
" data-warning1="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_change_pos_warning');?>
" data-warning2="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_change_pos_warning2');?>
" data-error-noblock="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_error_noblock');?>
" data-del-confirm="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_delete_confirm');?>
" data-funcid="<?php echo $_smarty_tpl->getValue('FUNC_ID');?>
">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-wrap flex-md-nowrap justify-content-between gap-2">
                <div class="hstack gap-2">
                    <div>
                        <select name="module" class="form-select">
                            <option value=""><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_select_module');?>
</option>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('MODLIST'), 'title', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('title')->value) {
$foreach0DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('key');?>
"<?php if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('SELECTEDMODULE')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('title');?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <?php if ($_smarty_tpl->getValue('SET_BY_FUNC')) {?>
                    <div>
                        <select name="function" class="form-select">
                            <option value=""><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_select_function');?>
</option>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('FUNCLIST'), 'title', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('title')->value) {
$foreach1DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('key');?>
"<?php if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('FUNC_ID')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('title');?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <?php }?>
                </div>
                <div class="hstack gap-2">
                    <button type="button" class="btn btn-primary block_content add"><i class="fa-solid fa-circle-plus" data-icon="fa-circle-plus"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('block_add');?>
</button>
                    <a href="<?php echo $_smarty_tpl->getValue('URL_DBLOCK');?>
" title="<?php echo $_smarty_tpl->getValue('LANG_DBLOCK');?>
" class="btn btn-primary"><i class="fa-solid fa-object-group" data-icon="fa-object-group"></i> <?php echo $_smarty_tpl->getValue('LANG_DBLOCK');?>
</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive-lg table-card">
                <table class="table align-middle table-sticky mb-0">
                    <thead class="text-muted">
                        <tr>
                            <th class="text-nowrap" style="width: 5%;">
                                <input type="checkbox" data-toggle="checkAll" name="checkAll" class="form-check-input m-0 align-middle" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('toggle_checkall');?>
">
                            </th>
                            <th class="text-nowrap" style="width: 5%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_sort');?>
</th>
                            <th class="text-nowrap" style="width: 22%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_title');?>
</th>
                            <th class="text-nowrap" style="width: 22%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('of_module');?>
</th>
                            <th class="text-nowrap" style="width: 22%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_func_list');?>
</th>
                            <th class="text-nowrap" style="width: 14%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('dtime_type');?>
</th>
                            <th class="text-nowrap" style="width: 5%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('status');?>
</th>
                            <th class="text-nowrap" style="width: 5%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('functions');?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->assign('md', '', true, NULL);?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('BLOCKLIST'), 'row');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach2DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('md') == '' || $_smarty_tpl->getValue('md') != $_smarty_tpl->getValue('row')['position']) {?>
                        <tr>
                            <td colspan="8" class="bg-body-secondary">
                                <?php $_smarty_tpl->assign('md', $_smarty_tpl->getValue('row')['position'], true, NULL);?>
                                <?php echo $_smarty_tpl->getValue('LANG')->getModule('block_pos');?>
: <strong><?php echo (true && (true && null !== ($_smarty_tpl->getValue('THEME_POS')[$_smarty_tpl->getValue('row')['position']] ?? null))) ? $_smarty_tpl->getValue('THEME_POS')[$_smarty_tpl->getValue('row')['position']]['title'] : $_smarty_tpl->getValue('row')['position'];?>
</strong>
                            </td>
                        </tr>
                        <?php }?>
                        <tr class="item" data-id="<?php echo $_smarty_tpl->getValue('row')['bid'];?>
" data-checkss="<?php echo $_smarty_tpl->getValue('row')['checkss'];?>
">
                            <td>
                                <input type="checkbox" data-toggle="checkSingle" name="idlist" value="<?php echo $_smarty_tpl->getValue('row')['bid'];?>
" class="form-check-input m-0 align-middle" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('toggle_checksingle');?>
">
                            </td>
                            <td>
                                <select class="form-select fw-75 <?php echo $_smarty_tpl->getValue('row')['order_func'];?>
" name="changew" data-current="<?php echo $_smarty_tpl->getValue('SET_BY_FUNC') ? $_smarty_tpl->getValue('row')['bweight'] : $_smarty_tpl->getValue('row')['weight'];?>
">
                                    <?php
$_smarty_tpl->assign('w', null);$_smarty_tpl->tpl_vars['w']->step = 1;$_smarty_tpl->tpl_vars['w']->total = (int) ceil(($_smarty_tpl->tpl_vars['w']->step > 0 ? $_smarty_tpl->getValue('POSITIONLIST')[$_smarty_tpl->getValue('row')['position']]+1 - (1) : 1-($_smarty_tpl->getValue('POSITIONLIST')[$_smarty_tpl->getValue('row')['position']])+1)/abs($_smarty_tpl->tpl_vars['w']->step));
if ($_smarty_tpl->tpl_vars['w']->total > 0) {
for ($_smarty_tpl->tpl_vars['w']->value = 1, $_smarty_tpl->tpl_vars['w']->iteration = 1;$_smarty_tpl->tpl_vars['w']->iteration <= $_smarty_tpl->tpl_vars['w']->total;$_smarty_tpl->tpl_vars['w']->value += $_smarty_tpl->tpl_vars['w']->step, $_smarty_tpl->tpl_vars['w']->iteration++) {
$_smarty_tpl->tpl_vars['w']->first = $_smarty_tpl->tpl_vars['w']->iteration === 1;$_smarty_tpl->tpl_vars['w']->last = $_smarty_tpl->tpl_vars['w']->iteration === $_smarty_tpl->tpl_vars['w']->total;?>
                                    <option value="<?php echo $_smarty_tpl->getValue('w');?>
"<?php if ($_smarty_tpl->getValue('w') == ($_smarty_tpl->getValue('SET_BY_FUNC') ? $_smarty_tpl->getValue('row')['bweight'] : $_smarty_tpl->getValue('row')['weight'])) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('w');?>
</option>
                                    <?php }
}
?>
                                </select>
                            </td>
                            <td><strong><?php echo $_smarty_tpl->getValue('row')['title'];?>
</strong></td>
                            <td><div class="text-break"><?php echo $_smarty_tpl->getValue('row')['module'];?>
 (<?php echo $_smarty_tpl->getValue('row')['file_name'];?>
)</div></td>
                            <td>
                                <?php if ($_smarty_tpl->getValue('row')['all_func']) {?>
                                <?php echo $_smarty_tpl->getValue('LANG')->getModule('add_block_all_module');?>

                                <?php } else { ?>
                                <ul class="list-unstyled mb-0 funclist<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('row')['in_funcs']) > 2) {?> d-none<?php }?>">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('row')['in_funcs'], 'func');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('func')->value) {
$foreach3DoElse = false;
?>
                                    <li>
                                        <a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
&amp;func=<?php echo $_smarty_tpl->getValue('func')['func_id'];?>
&amp;module=<?php echo $_smarty_tpl->getValue('func')['in_module'];?>
">
                                            <span class="fw-medium"><?php echo $_smarty_tpl->getValue('func')['in_module'];?>
</span>: <?php echo $_smarty_tpl->getValue('func')['func_custom_name'];?>

                                        </a>
                                    </li>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </ul>
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('row')['in_funcs']) > 2) {?>
                                <button type="button" class="btn btn-secondary viewlist"><i class="fa-solid fa-eye"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('click_to_view');?>
</button>
                                <?php }?>
                                <?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->getValue('row')['dtime_type_format'];?>
</td>
                            <td>
                                <select name="act" class="form-select fw-75 act" data-current="<?php echo $_smarty_tpl->getValue('row')['act'];?>
" data-success="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_update_success');?>
">
                                    <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 1+1 - (0) : 0-(1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                    <option value="<?php echo $_smarty_tpl->getValue('i');?>
"<?php if ($_smarty_tpl->getValue('i') == $_smarty_tpl->getValue('row')['act']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('LANG')->getModule("act_".((string)$_smarty_tpl->getValue('i')));?>
</option>
                                    <?php }
}
?>
                                </select>
                            </td>
                            <td>
                                <div class="btn-group flex-nowrap">
                                    <button type="button" class="btn btn-secondary text-nowrap block_content edit"><i class="fa-solid fa-pencil"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('edit');?>
</button>
                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <span class="visually-hidden"><?php echo $_smarty_tpl->getValue('LANG')->getModule('functions');?>
</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item change_pos_block" href="#"><i class="fa-solid fa-table-cells-large fa-fw"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('block_change_pos');?>
</a></li>
                                        <li><a class="dropdown-item delete_block" href="#" data-confirm="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_delete_confirm');?>
"><i class="fa-solid fa-trash fa-fw text-danger"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
</a></li>
                                    </ul>
                                </div>
                                <div class="modal fade change_pos" tabindex="-1" aria-labelledby="block_change_pos_title_<?php echo $_smarty_tpl->getValue('row')['bid'];?>
" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="modal-title fs-5 fw-medium" id="block_change_pos_title_<?php echo $_smarty_tpl->getValue('row')['bid'];?>
"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_change_pos');?>
</div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
"></button>
                                            </div>
                                            <div class="modal-body">
                                                <select name="listpos" class="form-select" data-default="<?php echo $_smarty_tpl->getValue('row')['position'];?>
">
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('THEME_POS'), 'value', false, 'key');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach4DoElse = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->getValue('key');?>
"<?php if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('row')['position']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('value')['title'];?>
</option>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer border-top border-3 py-2">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="d-flex flex-wrap flex-sm-nowrap align-items-center">
                    <div class="me-2">
                        <input type="checkbox" data-toggle="checkAll" name="checkAll" class="form-check-input m-0 align-middle" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('toggle_checkall');?>
">
                    </div>
                    <div class="input-group me-1 my-1">
                        <select id="element_action" name="action" class="form-select fw-150" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('select_actions');?>
" aria-describedby="element_action_btn">
                            <option value="bls_act"><?php echo $_smarty_tpl->getValue('LANG')->getModule('act_1');?>
</option>
                            <option value="bls_deact"><?php echo $_smarty_tpl->getValue('LANG')->getModule('act_0');?>
</option>
                            <option value="blocks_show_device"><?php echo $_smarty_tpl->getValue('LANG')->getModule('show_device');?>
</option>
                            <option value="delete_group"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
</option>
                        </select>
                        <button class="btn btn-primary bl_action" type="button" id="element_action_btn"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-primary block_weight" data-confirm="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_weight_confirm');?>
"><i class="fa-solid fa-arrows-rotate" data-icon="fa-arrows-rotate"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('block_weight');?>
</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_show_device" tabindex="-1" aria-labelledby="modal_show_device_lbl" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title fs-5 fw-medium" id="modal_show_device_lbl"><?php echo $_smarty_tpl->getValue('LANG')->getModule('show_device');?>
</div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-2">
                        <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="active_device" value="<?php echo $_smarty_tpl->getValue('i');?>
" id="active_device_<?php echo $_smarty_tpl->getValue('i');?>
"<?php if ($_smarty_tpl->getValue('i') == 1) {?> checked<?php }?>>
                                <label class="form-check-label" for="active_device_<?php echo $_smarty_tpl->getValue('i');?>
">
                                    <?php echo $_smarty_tpl->getValue('LANG')->getModule("show_device_".((string)$_smarty_tpl->getValue('i')));?>

                                </label>
                            </div>
                        </div>
                        <?php }
}
?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary submit"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('cancel');?>
</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
