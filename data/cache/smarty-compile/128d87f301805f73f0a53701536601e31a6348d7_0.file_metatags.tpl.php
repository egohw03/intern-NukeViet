<?php
/* Smarty version 5.4.3, created on 2025-10-19 14:01:47
  from 'file:metatags.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f48cdbd9eb89_12024727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '128d87f301805f73f0a53701536601e31a6348d7' => 
    array (
      0 => 'metatags.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f48cdbd9eb89_12024727 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\src\\themes\\admin_future\\modules\\seotools';
?><form method="post" class="ajax-submit" id="metatags-manage" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" novalidate>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive-lg table-card">
                <table class="table table-striped align-middle mb-0">
                    <thead class="text-muted">
                        <tr>
                            <th class="text-nowrap text-center" style="width: 1%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('metaTagsGroupName');?>
</th>
                            <th class="text-nowrap text-center" style="width: 1%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('metaTagsGroupValue');?>
 (*)</th>
                            <th class="text-nowrap"><?php echo $_smarty_tpl->getValue('LANG')->getModule('metaTagsContent');?>
 (**)</th>
                        </tr>
                    </thead>
                    <tbody class="items">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('METAS'), 'meta', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('meta')->value) {
$foreach0DoElse = false;
?>
                        <?php $_smarty_tpl->assign('disabled', (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['idsite'])) && $_smarty_tpl->getValue('meta')['group'] == 'name' && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('meta')['value'],array('author','copyright'))), true, NULL);?>
                        <tr class="item">
                            <td>
                                <select name="metaGroupsName[]" class="form-select fw-125"<?php if ($_smarty_tpl->getValue('disabled')) {?> disabled<?php }?>>
                                    <option value="name"<?php if ($_smarty_tpl->getValue('meta')['group'] == 'name') {?> selected<?php }?>>name</option>
                                    <option value="property"<?php if ($_smarty_tpl->getValue('meta')['group'] == 'property') {?> selected<?php }?>>property</option>
                                    <option value="http-equiv"<?php if ($_smarty_tpl->getValue('meta')['group'] == 'http-equiv') {?> selected<?php }?>>http-equiv</option>
                                </select>
                            </td>
                            <td>
                                <div class="input-group flex-nowrap metaGroupsValue-dropdown">
                                    <input class="form-control fw-200" type="text" value="<?php echo $_smarty_tpl->getValue('meta')['value'];?>
"<?php if ($_smarty_tpl->getValue('disabled')) {?> disabled<?php }?> name="metaGroupsValue[]" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('metaTagsGroupValue');?>
">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                    <ul class="dropdown-menu dropdown-menu-end metaGroupsValue-opt"></ul>
                                </div>
                            </td>
                            <td>
                                <div class="hstack gap-1 align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="input-group flex-nowrap">
                                            <input class="form-control fw-200" type="text" value="<?php echo $_smarty_tpl->getValue('meta')['content'];?>
"<?php if ($_smarty_tpl->getValue('disabled')) {?> disabled<?php }?> name="metaContents[]" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('metaTagsContent');?>
">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                            <ul class="dropdown-menu dropdown-menu-end metaContents-opt">
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('META_CTLISTS'), 'value');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                                                <li><a class="metacontent dropdown-item" href="#"><?php echo $_smarty_tpl->getValue('value');?>
</a></li>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-secondary del-meta-tag" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
">-</button>
                                    <button type="button" class="btn btn-secondary add-meta-tag" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('add');?>
">+</button>
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
        <div class="card-footer border-top">
            <div class="vstack gap-1">
                <div>*: <?php echo $_smarty_tpl->getValue('NOTE');?>
</div>
                <div>**: <?php echo $_smarty_tpl->getValue('VARS');?>
</div>
                <div>***: <?php echo $_smarty_tpl->getValue('LANG')->getModule('metaTagsOgpNote');?>
</div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header py-2 fw-medium fs-5"><?php echo $_smarty_tpl->getValue('LANG')->getModule('metaTagsSettings');?>
</div>
        <div class="card-body pt-4">
            <div class="row mb-3">
                <div class="col-sm-8 col-lg-6 col-xxl-5 offset-sm-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="element_metaTagsOgp" name="metaTagsOgp" value="1"<?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['metaTagsOgp']))) {?> checked<?php }?> role="switch">
                        <label class="form-check-label" for="element_metaTagsOgp"><?php echo $_smarty_tpl->getValue('LANG')->getModule('metaTagsOgp');?>
</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_ogp_image" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('ogp_image');?>
</label>
                <div class="col-sm-8 col-lg-6 col-xxl-5">
                    <div class="input-group">
                        <input type="text" class="form-control" id="element_ogp_image" name="ogp_image" value="<?php echo $_smarty_tpl->getValue('OGP_IMAGE');?>
" maxlength="250" aria-describedby="element_ogp_image_btn">
                        <button type="button" class="btn btn-secondary" id="element_ogp_image_btn" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_image');?>
" data-toggle="selectfile" data-target="element_ogp_image" data-type="image" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_image');?>
"><i class="fa-solid fa-folder-open"></i></button>
                    </div>
                    <div class="form-text"><?php echo $_smarty_tpl->getValue('LANG')->getModule('ogp_image_help');?>
</div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-8 col-lg-6 col-xxl-5 offset-sm-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="element_private_site" name="private_site" value="1"<?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['private_site']))) {?> checked<?php }?> role="switch">
                        <label class="form-check-label" for="element_private_site"><?php echo $_smarty_tpl->getValue('LANG')->getModule('private_site');?>
</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_description_length" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('description_length');?>
</label>
                <div class="col-sm-8 col-lg-6 col-xxl-5">
                    <input type="number" step="1" min="0" max="1024" class="form-control" id="element_description_length" name="description_length" value="<?php echo $_smarty_tpl->getValue('GCONFIG')['description_length'];?>
">
                    <div class="form-text"><?php echo $_smarty_tpl->getValue('LANG')->getModule('description_note');?>
</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-lg-6 col-xxl-5 offset-sm-3">
                    <input type="hidden" name="checkss" value="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
">
                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
                </div>
            </div>
        </div>
    </div>
</form>
<ul id="meta-name-list" class="d-none">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('META_NAME_LIST'), 'value');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach2DoElse = false;
?>
    <li><a class="groupvalue dropdown-item" href="#"><?php echo $_smarty_tpl->getValue('value');?>
</a></li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>
<ul id="meta-property-list" class="d-none">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('META_PROPERTY_LIST'), 'value');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach3DoElse = false;
?>
    <li><a class="groupvalue dropdown-item" href="#"><?php echo $_smarty_tpl->getValue('value');?>
</a></li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>
<ul id="meta-http-equiv-list" class="d-none">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('META_HTTP_EQUIV_LIST'), 'value');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach4DoElse = false;
?>
    <li><a class="groupvalue dropdown-item" href="#"><?php echo $_smarty_tpl->getValue('value');?>
</a></li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
