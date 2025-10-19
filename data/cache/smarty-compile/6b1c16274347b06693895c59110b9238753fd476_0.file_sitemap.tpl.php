<?php
/* Smarty version 5.4.3, created on 2025-10-19 14:01:51
  from 'file:sitemap.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f48cdf9ecb38_33536979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b1c16274347b06693895c59110b9238753fd476' => 
    array (
      0 => 'sitemap.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f48cdf9ecb38_33536979 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\src\\themes\\admin_future\\modules\\seotools';
if (!( !true || empty($_smarty_tpl->getValue('SEARCHENGINES')['searchEngine'])) && !( !$_smarty_tpl->hasVariable('SITEMAPFILES') || empty($_smarty_tpl->getValue('SITEMAPFILES')))) {?>
<form method="post" class="ajax-submit" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" novalidate>
    <div class="card mb-3">
        <div class="card-header fs-5 fw-medium"><a target="_blank" href="<?php echo $_smarty_tpl->getValue('URL_SITEMAP');?>
" aria-label="Sitemap"><i class="fa-solid fa-sitemap"></i></a> <?php echo $_smarty_tpl->getValue('LANG')->getModule('sitemapPing');?>
</div>
        <div class="card-body">
            <div class="row mb-3">
                <label for="element_searchEngine" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('searchEngineSelect');?>
 <span class="text-danger">(*)</span></label>
                <div class="col-sm-4 col-lg-6 col-xxl-5">
                    <select class="form-select" id="element_searchEngine" name="searchEngine">
                        <option value=""><?php echo $_smarty_tpl->getValue('LANG')->getModule('searchEngineSelect');?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('SEARCHENGINES')['searchEngine'], 'value');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('value')['name'];?>
"<?php if (( !true || empty($_smarty_tpl->getValue('value')['active']))) {?> disabled<?php }?>><?php echo $_smarty_tpl->getValue('value')['name'];?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                    <div class="invalid-feedback"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('required_invalid');?>
</div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_in_module" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('sitemapModule');?>
 <span class="text-danger">(*)</span></label>
                <div class="col-sm-4 col-lg-6 col-xxl-5">
                    <select class="form-select" id="element_in_module" name="in_module">
                        <option value=""><?php echo $_smarty_tpl->getValue('LANG')->getModule('sitemapModule');?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('SITEMAPFILES'), 'value', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('key');?>
"><?php echo $_smarty_tpl->getValue('value');?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                    <div class="invalid-feedback"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('required_invalid');?>
</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-lg-6 col-xxl-5 offset-sm-3">
                    <input type="hidden" name="checkss1" value="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
">
                    <input name="ping" type="hidden" value="1">
                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getModule('sitemapSend');?>
</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php }
if (( !true || empty($_smarty_tpl->getValue('GCONFIG')['idsite']))) {?>
<form method="post" class="ajax-submit" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" novalidate>
    <div class="card">
        <div class="card-header fs-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('searchEngineConfig');?>
</div>
        <div class="card-body">
            <div class="table-responsive-lg table-card" id="list-news-items">
                <table class="table table-striped align-middle table-sticky mb-0">
                    <thead class="text-muted">
                        <tr>
                            <th class="text-nowrap" style="width: 40%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('searchEngineName');?>
</th>
                            <th class="text-nowrap" style="width: 40%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('searchEngineValue');?>
</th>
                            <th class="text-nowrap text-center" style="width: 20%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('searchEngineActive');?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->assign('rows', ($_smarty_tpl->getValue('SEARCHENGINES')['searchEngine'] ?: array()), false, NULL);?>
                        <?php $_smarty_tpl->assign('rows', $_smarty_tpl->getSmarty()->getModifierCallback('array_merge')($_smarty_tpl->getValue('rows'),array(array('name'=>'','value'=>'','active'=>0),array('name'=>'','value'=>'','active'=>0))), false, NULL);?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach2DoElse = false;
?>
                        <tr>
                            <td>
                                <input class="form-control" type="text" value="<?php echo $_smarty_tpl->getValue('row')['name'];?>
" name="searchEngineName[]">
                            </td>
                            <td>
                                <input class="form-control" type="text" value="<?php echo $_smarty_tpl->getValue('row')['value'];?>
" name="searchEngineValue[]">
                            </td>
                            <td class="text-center">
                                <div class="d-inline-flex">
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input" type="checkbox" role="switch" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('activate');?>
" name="searchEngineActive[]" <?php if (!( !true || empty($_smarty_tpl->getValue('row')['active']))) {?> checked<?php }?> value="1">
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
        <div class="card-footer border-top">
            <input type="hidden" name="checkss2" value="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
">
            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
        </div>
    </div>
</form>
<?php }
}
}
