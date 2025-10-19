<?php
/* Smarty version 5.4.3, created on 2025-10-19 14:01:48
  from 'file:upload_modal.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f48cdc5b4740_51874091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dd0ed2ab09a8195f2efcbe64dfb9052ea071a1e' => 
    array (
      0 => 'upload_modal.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f48cdc5b4740_51874091 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\src\\themes\\admin_future\\modules\\upload';
?><div class="fmm fade" id="fmm" tabindex="-1" aria-labelledby="fmm-label" aria-hidden="true">
    <div class="fmm-dialog">
        <div class="fmm-content">
            <div class="fmm-header">
                <div class="fmm-title text-truncate fs-5 fw-medium" id="fmm-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_manager');?>
</div>
                <button type="button" class="btn-close" data-dismiss="fmm" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
"></button>
            </div>
            <div class="fmm-body">
                <div class="fms-ctn-fmm" data-toggle="fmm-body">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-spinner fa-spin-pulse fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
