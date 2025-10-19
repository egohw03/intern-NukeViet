<?php
/* Smarty version 5.4.3, created on 2025-10-19 14:01:40
  from 'file:others.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f48cd4adaa32_88503343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2ac44d26154f41ac6465e78f67d5106ceb2ac8b' => 
    array (
      0 => 'others.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f48cd4adaa32_88503343 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\src\\themes\\admin_future\\modules\\seotools';
?><div class="card">
    <div class="card-body">
        <div class="card-title fs-5 fw-medium">
            <?php echo $_smarty_tpl->getValue('LANG')->getModule('strdata');?>

            <a href="https://developers.google.com/search/docs/appearance/structured-data/search-gallery" target="_blank" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('more_information');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('more_information');?>
"><i class="fa-solid fa-circle-question"></i></a>
        </div>
        <form class="mt-4" id="strdata" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
">
            <div class="form-check form-switch mb-3">
                <input class="form-check-input autosubmit" id="element_sitelinks_search_box_schema" type="checkbox" role="switch" name="sitelinks_search_box_schema" value="1"<?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['sitelinks_search_box_schema']))) {?> checked<?php }?>>
                <label class="form-check-label" for="element_sitelinks_search_box_schema">
                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('add_sitelinks_search_box_schema');?>

                    <a href="https://developers.google.com/search/docs/appearance/structured-data/sitelinks-searchbox" target="_blank" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('more_information');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('more_information');?>
"><i class="fa-solid fa-circle-question"></i></a>
                </label>
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input autosubmit" id="element_breadcrumblist" type="checkbox" role="switch" name="breadcrumblist" value="1"<?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['breadcrumblist']))) {?> checked<?php }?>>
                <label class="form-check-label" for="element_breadcrumblist">
                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('strdata_breadcrumblist');?>

                    <a href="https://developers.google.com/search/docs/appearance/structured-data/breadcrumb" target="_blank" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('more_information');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('more_information');?>
"><i class="fa-solid fa-circle-question"></i></a>
                </label>
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input autosubmit" id="element_localbusiness" type="checkbox" role="switch" name="localbusiness" value="1"<?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['localbusiness'])) && $_smarty_tpl->getSmarty()->getModifierCallback('file_exists')(((string)(defined('NV_ROOTDIR') ? constant('NV_ROOTDIR') : null))."/".((string)(defined('NV_DATADIR') ? constant('NV_DATADIR') : null))."/localbusiness.json")) {?> checked<?php }?>>
                <label class="form-check-label" for="element_localbusiness">
                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('strdata_localbusiness');?>

                    <a href="https://developers.google.com/search/docs/appearance/structured-data/local-business" target="_blank" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('more_information');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('more_information');?>
"><i class="fa-solid fa-circle-question"></i></a>
                    (<a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
&amp;localbusiness_information=1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('localbusiness_information');?>
</a>)
                </label>
            </div>
            <div>
                <?php echo $_smarty_tpl->getValue('LANG')->getModule('strdata_organization');?>
:
                <a href="https://developers.google.com/search/docs/appearance/structured-data/logo" target="_blank" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('more_information');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('more_information');?>
"><i class="fa-solid fa-circle-question"></i></a>
                <div class="form-text"><?php echo $_smarty_tpl->getValue('LANG')->getModule('strdata_organization_logo_guidelines');?>
</div>
                <div class="mt-3">
                    <img src="<?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['organization_logo']))) {
echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);
echo $_smarty_tpl->getValue('GCONFIG')['organization_logo'];
} else {
echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/images/no-photo.svg<?php }?>" data-default="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/images/no-photo.svg" class="p-1 border rounded-2 bg-body-tertiary" id="organization_logo" alt="<?php echo $_smarty_tpl->getValue('LANG')->getModule('strdata_organization');?>
" role="button" width="112" height="112">
                </div>
                <?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['organization_logo']))) {?>
                <div class="mt-3">
                    <button type="button" id="organization_logo_del" class="btn btn-danger"><i class="fa-solid fa-trash" data-icon="fa-trash"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
</button>
                </div>
                <?php }?>
            </div>
            <input type="hidden" name="checkss" value="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
">
        </form>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/cropper/cropper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo (defined('NV_STATIC_URL') ? constant('NV_STATIC_URL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('TEMPLATE');?>
/js/seotools.logo.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/cropper/cropper.min.css">
<?php echo '<script'; ?>
>
    UAV.config.maxsize = <?php echo (defined('NV_UPLOAD_MAX_FILESIZE') ? constant('NV_UPLOAD_MAX_FILESIZE') : null);?>
;
    UAV.config.img_width = 112;
    UAV.config.img_height = 112;
    UAV.lang.bigsize = '<?php echo $_smarty_tpl->getValue('LANG')->getModule('bigsize');?>
';
    UAV.lang.smallsize = '<?php echo $_smarty_tpl->getValue('LANG')->getModule('smallsize');?>
';
    UAV.lang.filetype = '<?php echo $_smarty_tpl->getValue('LANG')->getModule('allowed_type');?>
';
    UAV.lang.bigfile = '<?php echo $_smarty_tpl->getValue('LANG')->getModule('bigfile');?>
';
    UAV.lang.upload = '<?php echo $_smarty_tpl->getValue('LANG')->getModule('change_logo_upload');?>
';
<?php echo '</script'; ?>
>
<div class="modal fade" id="mdUploadLogo" tabindex="-1" aria-labelledby="mdUploadLogoLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-5 fw-medium" id="mdUploadLogoLabel"><?php echo $_smarty_tpl->getValue('LANG')->getModule('strdata_organization');?>
</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
"></button>
            </div>
            <form class="modal-body" id="upload-form" target="upload-form-listener" method="post" enctype="multipart/form-data" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
&amp;logoupload=1">
                <div class="row g-3">
                    <div class="col-lg-8">
                        <div id="organlogo-picker">
                            <div class="inner-picker position-absolute bg-body-tertiary rounded-1 p-3 d-flex align-items-center justify-content-center">
                                <a id="upload_icon" href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center text-bg-primary">
                                    <i class="fa-solid fa-upload fa-3x"></i>
                                </a>
                            </div>
                        </div>
                        <img id="preview" class="d-none w-100">
                    </div>
                    <div class="col-lg-4">
                        <h5><?php echo $_smarty_tpl->getValue('LANG')->getModule('change_logo');?>
</h5>
                        <div class="p-2 bg-info-subtle rounded-2" id="guide">
                            <div class="mb-2"><strong><?php echo $_smarty_tpl->getValue('LANG')->getModule('change_logo_guide');?>
:</strong></div>
                            <div>- <?php echo $_smarty_tpl->getValue('LANG')->getModule('change_logo_chosen');?>
</div>
                            <div>- <?php echo $_smarty_tpl->getValue('LANG')->getModule('change_logo_upload');?>
</div>
                        </div>
                        <div class="d-none" id="uploadInfo">
                            <div>- <?php echo $_smarty_tpl->getValue('LANG')->getModule('filesize');?>
: <span id="image-size"></span></div>
                            <div>- <?php echo $_smarty_tpl->getValue('LANG')->getModule('filetype');?>
: <span id="image-type"></span></div>
                            <div>- <?php echo $_smarty_tpl->getValue('LANG')->getModule('filedimension');?>
: <span id="original-dimension"></span></div>
                            <div>- <?php echo $_smarty_tpl->getValue('LANG')->getModule('displaydimension');?>
: <span id="display-dimension"></span></div>
                            <div class="mt-3">
                                <button id="btn-submit" type="submit" class="btn btn-primary btn-sm"><?php echo $_smarty_tpl->getValue('LANG')->getModule('crop');?>
</button>
                                <button id="btn-reset" type="button" class="btn btn-secondary btn-sm"><?php echo $_smarty_tpl->getValue('LANG')->getModule('chosen_other');?>
</button>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="crop_x" name="crop_x">
                <input type="hidden" id="crop_y" name="crop_y">
                <input type="hidden" id="crop_width" name="crop_width">
                <input type="hidden" id="crop_height" name="crop_height">
                <input type="file" name="image_file" id="image_file" class="d-none" accept=".jpg,.jpeg,.png,.webp">
            </form>
            <iframe id="upload-form-listener" name="upload-form-listener" class="d-none"></iframe>
        </div>
    </div>
</div>
<?php }
}
