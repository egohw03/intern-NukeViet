<?php
/* Smarty version 5.4.3, created on 2025-10-19 14:01:35
  from 'file:pagetitle.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f48ccf585c21_29768021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c33da1852cb1f3405e6bcb1610a6657ee6c5464f' => 
    array (
      0 => 'pagetitle.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f48ccf585c21_29768021 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\src\\themes\\admin_future\\modules\\seotools';
?><div class="card border-primary border-3 border-bottom-0 border-start-0 border-end-0 mb-4">
    <div class="card-body pt-4">
        <form method="post" class="ajax-submit" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" novalidate>
            <div class="row mb-3">
                <label for="element_pageTitleMode" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('pagetitle2');?>
</label>
                <div class="col-sm-8 col-lg-6 col-xxl-5">
                    <input type="text" class="form-control" id="element_pageTitleMode" name="pageTitleMode" value="<?php echo $_smarty_tpl->getValue('GCONFIG')['pageTitleMode'];?>
">
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
        </form>
    </div>
</div>
<div class="alert alert-info mb-0" role="alert"><?php echo $_smarty_tpl->getValue('LANG')->getModule('pagetitleNote');?>
</div>
<?php }
}
