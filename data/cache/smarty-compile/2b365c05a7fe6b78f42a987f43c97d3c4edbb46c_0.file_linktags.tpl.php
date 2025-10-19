<?php
/* Smarty version 5.4.3, created on 2025-10-19 14:01:45
  from 'file:linktags.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f48cd9b67692_59278667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b365c05a7fe6b78f42a987f43c97d3c4edbb46c' => 
    array (
      0 => 'linktags.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f48cd9b67692_59278667 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\src\\themes\\admin_future\\modules\\seotools';
?><div class="row g-4">
    <div class="col-xl-6 order-xl-2">
        <form method="post" data-toggle="formLinkTags" data-error="<?php echo $_smarty_tpl->getValue('LANG')->getModule('linkTags_rel_val_required');?>
" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" novalidate>
            <div class="card border-primary border-3 border-bottom-0 border-start-0 border-end-0">
                <div class="card-header fs-5 fw-medium py-2"><?php echo $_smarty_tpl->getValue('LANG')->getModule('linkTags_add');?>
</div>
                <div class="card-body">
                    <div class="table-card">
                        <table class="table table-striped align-middle mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 40%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('linkTags_attribute');?>
</th>
                                    <th style="width: 60%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('linkTags_value');?>
</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" name="linktags_attribute[]" value="rel" readonly="readonly"></td>
                                    <td><input type="text" class="form-control required rel-val" name="linktags_value[]" value="" maxlength="255"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="linktags_attribute[]" value="" maxlength="100"></td>
                                    <td><input type="text" class="form-control" name="linktags_value[]" value="" maxlength="255"></td>
                                </tr>
                                <tr class="sample d-none">
                                    <td><input type="text" class="form-control" name="linktags_attribute[]" value="" maxlength="100"></td>
                                    <td><input type="text" class="form-control" name="linktags_value[]" value="" maxlength="255"></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <input type="hidden" name="key" value="">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="checkss" value="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
">
                                        <button type="button" class="btn btn-secondary" data-toggle="addLinkTagsAttr"><?php echo $_smarty_tpl->getValue('LANG')->getModule('linkTags_add_attribute');?>
</button>
                                        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="card-footer border-top">
                    <div class="fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('linkTags_acceptVars');?>
:</div>
                    <?php echo $_smarty_tpl->getValue('ACCEPTVARS');?>

                </div>
            </div>
        </form>
        <?php if (!( !$_smarty_tpl->hasVariable('LINKTAGS') || empty($_smarty_tpl->getValue('LINKTAGS')))) {?>
        <div class="mt-4">
            <div class="accordion" id="accordionLinkTags">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('LINKTAGS'), 'linkData', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('linkData')->value) {
$foreach0DoElse = false;
?>
                <?php $_smarty_tpl->assign('tagTitle', array(), true, NULL);?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('linkData'), 'value', false, 'attr');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('attr')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                <?php $_smarty_tpl->assign('tagTitle', $_smarty_tpl->getSmarty()->getModifierCallback('array_merge')($_smarty_tpl->getValue('tagTitle'),array(($_smarty_tpl->getValue('attr')).((!( !$_smarty_tpl->hasVariable('value') || empty($_smarty_tpl->getValue('value'))) ? ((('=&quot;').($_smarty_tpl->getValue('value'))).('&quot;')) : '')))), true, NULL);?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLinkTags<?php echo $_smarty_tpl->getValue('key');?>
" aria-expanded="false" aria-controls="collapseLinkTags<?php echo $_smarty_tpl->getValue('key');?>
">
                            &lt;link <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('join')($_smarty_tpl->getValue('tagTitle'),' ');?>
/&gt;
                        </button>
                    </div>
                    <div id="collapseLinkTags<?php echo $_smarty_tpl->getValue('key');?>
" class="accordion-collapse collapse" data-bs-parent="#accordionLinkTags">
                        <div class="accordion-body">
                            <form method="post" data-toggle="formLinkTags" data-error="<?php echo $_smarty_tpl->getValue('LANG')->getModule('linkTags_rel_val_required');?>
" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" novalidate>
                                <div class="table-accordion">
                                    <table class="table table-striped align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th style="width: 40%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('linkTags_attribute');?>
</th>
                                                <th style="width: 60%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('linkTags_value');?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" name="linktags_attribute[]" value="rel" readonly="readonly"></td>
                                                <td><input type="text" class="form-control required rel-val" name="linktags_value[]" value="<?php echo $_smarty_tpl->getValue('linkData')['rel'];?>
" maxlength="255"></td>
                                            </tr>
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('linkData'), 'value', false, 'attr');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('attr')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach2DoElse = false;
?>
                                            <?php if ($_smarty_tpl->getValue('attr') != 'rel') {?>
                                            <tr>
                                                <td><input type="text" class="form-control" name="linktags_attribute[]" value="<?php echo $_smarty_tpl->getValue('attr');?>
" maxlength="100"></td>
                                                <td><input type="text" class="form-control" name="linktags_value[]" value="<?php echo $_smarty_tpl->getValue('value');?>
" maxlength="255"></td>
                                            </tr>
                                            <?php }?>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            <tr class="sample d-none">
                                                <td><input type="text" class="form-control" name="linktags_attribute[]" value="" maxlength="100"></td>
                                                <td><input type="text" class="form-control" name="linktags_value[]" value="" maxlength="255"></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="hidden" name="key" value="l-<?php echo $_smarty_tpl->getValue('key');?>
">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="checkss" value="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
">
                                                    <button type="button" class="btn btn-secondary" data-toggle="addLinkTagsAttr"><?php echo $_smarty_tpl->getValue('LANG')->getModule('linkTags_add_attribute');?>
</button>
                                                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
                                                    <button type="button" class="btn btn-danger" data-toggle="delLinkTagsAttr" data-message="<?php echo $_smarty_tpl->getValue('LANG')->getModule('linkTags_del_confirm');?>
"><i class="fa-solid fa-trash" data-icon="fa-trash"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
</button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <?php }?>
    </div>
    <div class="col-xl-6 order-xl-1">
        <form method="post" class="ajax-submit" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" novalidate>
            <div class="card border-primary border-3 border-bottom-0 border-start-0 border-end-0">
                <div class="card-header fs-5 fw-medium py-2"><?php echo $_smarty_tpl->getValue('LANG')->getModule('add_opensearch_link');?>
</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-primary">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" value="_site" name="opensearch_link[_site]" id="opensearch_link__site"<?php if ((true && (true && null !== ($_smarty_tpl->getValue('OPENSEARCH_LINK')['_site'] ?? null))) && !( !true || empty($_smarty_tpl->getValue('OPENSEARCH_LINK')['_site']['active']))) {?> checked<?php }?>>
                            <label class="form-check-label fw-medium" for="opensearch_link__site"><?php echo $_smarty_tpl->getValue('LANG')->getModule('add_opensearch_link_all');?>
</label>
                        </div>
                        <div class="invalid-feedback"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('required_invalid');?>
</div>
                    </li>
                    <li class="list-group-item" data-sarea="_site">
                        <div class="mb-3">
                            <label for="shortname__site" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('ShortName');?>
:</label>
                            <input type="text" class="form-control" id="shortname__site" name="shortname[_site]" value="<?php if ((true && (true && null !== ($_smarty_tpl->getValue('OPENSEARCH_LINK')['_site'] ?? null)))) {
echo $_smarty_tpl->getValue('OPENSEARCH_LINK')['_site']['shortname'];
}?>" maxlength="16" placeholder="<?php echo $_smarty_tpl->getValue('LANG')->getModule('ShortName_note');?>
">
                            <div class="invalid-feedback"><?php echo $_smarty_tpl->getValue('LANG')->getModule('ShortName_required');?>
</div>
                        </div>
                        <div class="mb-2">
                            <label for="description__site" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('Description');?>
:</label>
                            <input type="text" class="form-control" id="description__site" name="description[_site]" value="<?php if ((true && (true && null !== ($_smarty_tpl->getValue('OPENSEARCH_LINK')['_site'] ?? null)))) {
echo $_smarty_tpl->getValue('OPENSEARCH_LINK')['_site']['description'];
}?>" maxlength="1024" placeholder="<?php echo $_smarty_tpl->getValue('LANG')->getModule('description_note');?>
">
                        </div>
                    </li>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('SITE_MODS'), 'minfo', false, 'mod');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('mod')->value => $_smarty_tpl->getVariable('minfo')->value) {
$foreach3DoElse = false;
?>
                    <?php if (!( !true || empty($_smarty_tpl->getValue('minfo')['is_search']))) {?>
                    <li class="list-group-item list-group-item-primary">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" value="<?php echo $_smarty_tpl->getValue('mod');?>
" name="opensearch_link[<?php echo $_smarty_tpl->getValue('mod');?>
]" id="opensearch_link_<?php echo $_smarty_tpl->getValue('mod');?>
"<?php if ((true && (true && null !== ($_smarty_tpl->getValue('OPENSEARCH_LINK')[$_smarty_tpl->getValue('mod')] ?? null))) && !( !true || empty($_smarty_tpl->getValue('OPENSEARCH_LINK')[$_smarty_tpl->getValue('mod')]['active']))) {?> checked<?php }?>>
                            <label class="form-check-label fw-medium" for="opensearch_link_<?php echo $_smarty_tpl->getValue('mod');?>
"><?php echo $_smarty_tpl->getValue('minfo')['custom_title'];?>
</label>
                        </div>
                        <div class="invalid-feedback"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('required_invalid');?>
</div>
                    </li>
                    <li class="list-group-item" data-sarea="<?php echo $_smarty_tpl->getValue('mod');?>
">
                        <div class="mb-3">
                            <label for="shortname_<?php echo $_smarty_tpl->getValue('mod');?>
" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('ShortName');?>
:</label>
                            <input type="text" class="form-control" id="shortname_<?php echo $_smarty_tpl->getValue('mod');?>
" name="shortname[<?php echo $_smarty_tpl->getValue('mod');?>
]" value="<?php if ((true && (true && null !== ($_smarty_tpl->getValue('OPENSEARCH_LINK')[$_smarty_tpl->getValue('mod')] ?? null)))) {
echo $_smarty_tpl->getValue('OPENSEARCH_LINK')[$_smarty_tpl->getValue('mod')]['shortname'];
}?>" maxlength="16" placeholder="<?php echo $_smarty_tpl->getValue('LANG')->getModule('ShortName_note');?>
">
                            <div class="invalid-feedback"><?php echo $_smarty_tpl->getValue('LANG')->getModule('ShortName_required');?>
</div>
                        </div>
                        <div class="mb-2">
                            <label for="description_<?php echo $_smarty_tpl->getValue('mod');?>
" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('Description');?>
:</label>
                            <input type="text" class="form-control" id="description_<?php echo $_smarty_tpl->getValue('mod');?>
" name="description[<?php echo $_smarty_tpl->getValue('mod');?>
]" value="<?php if ((true && (true && null !== ($_smarty_tpl->getValue('OPENSEARCH_LINK')[$_smarty_tpl->getValue('mod')] ?? null)))) {
echo $_smarty_tpl->getValue('OPENSEARCH_LINK')[$_smarty_tpl->getValue('mod')]['description'];
}?>" maxlength="1024" placeholder="<?php echo $_smarty_tpl->getValue('LANG')->getModule('description_note');?>
">
                        </div>
                    </li>
                    <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
                <div class="card-footer border-top">
                    <input type="hidden" name="opensearch" value="1">
                    <input type="hidden" name="checkss" value="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
">
                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }
}
