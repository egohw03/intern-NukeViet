<?php
/* Smarty version 5.4.3, created on 2025-10-19 14:27:41
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f492ed6341a4_08908371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c997236c01451fdce20eac9e375ce987c193fbd' => 
    array (
      0 => 'main.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f492ed6341a4_08908371 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\src\\themes\\admin_future\\modules\\settings';
?><form id="site-settings" class="row g-4 ajax-submit" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" novalidate>
    <input type="hidden" name="checkss" value="<?php echo $_smarty_tpl->getValue('DATA')['checkss'];?>
">
    <div class="col-xxl-6">
        <div class="card border-primary border-3 border-bottom-0 border-start-0 border-end-0">
            <div class="card-header py-2" role="button" data-bs-toggle="collapse" data-bs-target="#collapse-general" aria-expanded="true" aria-controls="collapse-general">
                <div class="hstack gap-2 align-items-center justify-content-between">
                    <div class="fw-medium fs-5"><?php echo $_smarty_tpl->getValue('LANG')->getModule('general_settings');?>
</div>
                    <div class="collapse-button"></div>
                </div>
            </div>
            <div class="collapse show" id="collapse-general">
                <div class="card card-body">
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('GCONFIG')['my_domains']) > 1) {?>
                    <div class="row mb-3">
                        <label for="element_site_domain" class="col-sm-3 col-xxl-4 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_domain');?>
</label>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <select class="form-select" name="site_domain" id="element_site_domain">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('GCONFIG')['my_domains'], 'domain');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('domain')->value) {
$foreach0DoElse = false;
?>
                                <option value="<?php echo $_smarty_tpl->getValue('domain');?>
"<?php if ($_smarty_tpl->getValue('GCONFIG')['site_domain'] == $_smarty_tpl->getValue('domain')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('domain');?>
</option>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <?php }?>
                    <div class="row mb-3">
                        <label for="element_site_name" class="col-sm-3 col-xxl-4 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('sitename');?>
 <span class="text-danger">(*)</span></label>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <input type="text" class="form-control" id="element_site_name" name="site_name" value="<?php echo $_smarty_tpl->getValue('DATA')['sitename'];?>
">
                            <div class="invalid-feedback"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('required_invalid');?>
</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="element_site_description" class="col-sm-3 col-xxl-4 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('description');?>
 <span class="text-danger">(*)</span></label>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <input type="text" class="form-control" id="element_site_description" name="site_description" value="<?php echo $_smarty_tpl->getValue('DATA')['description'];?>
">
                            <div class="invalid-feedback"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('required_invalid');?>
</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="element_site_keywords" class="col-sm-3 col-xxl-4 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_keywords');?>
</label>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <input type="text" class="form-control" id="element_site_keywords" name="site_keywords" value="<?php echo $_smarty_tpl->getValue('DATA')['site_keywords'];?>
">
                            <div class="form-text"><?php echo $_smarty_tpl->getValue('LANG')->getModule('params_info');?>
</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="element_site_logo" class="col-sm-3 col-xxl-4 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_logo');?>
</label>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <div class="input-group">
                                <input type="text" class="form-control" id="element_site_logo" name="site_logo" value="<?php echo $_smarty_tpl->getValue('DATA')['site_logo'];?>
" aria-describedby="element_site_logo_btn">
                                <button type="button" class="btn btn-secondary" id="element_site_logo_btn" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_image');?>
" data-toggle="selectfile" data-target="element_site_logo" data-type="image" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_image');?>
"><i class="fa-solid fa-folder-open"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="element_site_banner" class="col-sm-3 col-xxl-4 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_banner');?>
</label>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <div class="input-group">
                                <input type="text" class="form-control" id="element_site_banner" name="site_banner" value="<?php echo $_smarty_tpl->getValue('DATA')['site_banner'];?>
" aria-describedby="element_site_banner_btn">
                                <button type="button" class="btn btn-secondary" id="element_site_banner_btn" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_image');?>
" data-toggle="selectfile" data-target="element_site_banner" data-type="image" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_image');?>
"><i class="fa-solid fa-folder-open"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="element_site_favicon" class="col-sm-3 col-xxl-4 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_favicon');?>
</label>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <div class="input-group">
                                <input type="text" class="form-control" id="element_site_favicon" name="site_favicon" value="<?php echo $_smarty_tpl->getValue('DATA')['site_favicon'];?>
" aria-describedby="element_site_favicon_btn">
                                <button type="button" class="btn btn-secondary" id="element_site_favicon_btn" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_image');?>
" data-toggle="selectfile" data-target="element_site_favicon" data-type="image" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_image');?>
"><i class="fa-solid fa-folder-open"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="element_site_home_module" class="col-sm-3 col-xxl-4 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('default_module');?>
</label>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <select class="form-select" name="site_home_module" id="element_site_home_module">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('MODS'), 'minfo');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('minfo')->value) {
$foreach1DoElse = false;
?>
                                <option value="<?php echo $_smarty_tpl->getValue('minfo')['title'];?>
"<?php if ($_smarty_tpl->getValue('GCONFIG')['site_home_module'] == $_smarty_tpl->getValue('minfo')['title']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('minfo')['custom_title'];?>
</option>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 offset-sm-3 offset-xxl-4">
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getModule('submit');?>
</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6">
        <div class="card border-primary border-3 border-bottom-0 border-start-0 border-end-0">
            <div class="card-header py-2" role="button" data-bs-toggle="collapse" data-bs-target="#collapse-theme" aria-expanded="true" aria-controls="collapse-theme">
                <div class="hstack gap-2 align-items-center justify-content-between">
                    <div class="fw-medium fs-5"><?php echo $_smarty_tpl->getValue('LANG')->getModule('theme_settings');?>
</div>
                    <div class="collapse-button"></div>
                </div>
            </div>
            <div class="collapse show" id="collapse-theme">
                <div class="card card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3 col-xxl-4 col-form-label text-sm-end pt-0"><?php echo $_smarty_tpl->getValue('LANG')->getModule('allow_theme_type');?>
</div>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('THEME_TYPES'), 'theme_type');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('theme_type')->value) {
$foreach2DoElse = false;
?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="theme_type_<?php echo $_smarty_tpl->getValue('theme_type');?>
" name="theme_type[]" value="<?php echo $_smarty_tpl->getValue('theme_type');?>
"<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('theme_type'),$_smarty_tpl->getValue('GCONFIG')['array_theme_type'])) {?> checked<?php }?>>
                                <label class="form-check-label" for="theme_type_<?php echo $_smarty_tpl->getValue('theme_type');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal("theme_type_".((string)$_smarty_tpl->getValue('theme_type')));?>
</label>
                            </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="element_site_theme" class="col-sm-3 col-xxl-4 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('theme');?>
</label>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <select class="form-select" name="site_theme" id="element_site_theme">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('THEME_ARRAY'), 'theme');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('theme')->value) {
$foreach3DoElse = false;
?>
                                <option value="<?php echo $_smarty_tpl->getValue('theme');?>
"<?php if ($_smarty_tpl->getValue('GCONFIG')['site_theme'] == $_smarty_tpl->getValue('theme')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('theme');?>
</option>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 mobile_theme-wrap<?php if (( !$_smarty_tpl->hasVariable('MOBILE_THEME_ARRAY') || empty($_smarty_tpl->getValue('MOBILE_THEME_ARRAY'))) || !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')('m',$_smarty_tpl->getValue('GCONFIG')['array_theme_type'])) {?> d-none<?php }?>">
                        <label for="element_mobile_theme" class="col-sm-3 col-xxl-4 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('mobile_theme');?>
</label>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <select class="form-select" name="mobile_theme" id="element_mobile_theme">
                                <option value=""><?php echo $_smarty_tpl->getValue('LANG')->getModule('theme');?>
</option>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('MOBILE_THEME_ARRAY'), 'theme');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('theme')->value) {
$foreach4DoElse = false;
?>
                                <option value="<?php echo $_smarty_tpl->getValue('theme');?>
"<?php if ($_smarty_tpl->getValue('GCONFIG')['mobile_theme'] == $_smarty_tpl->getValue('theme')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('theme');?>
</option>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 switch_mobi_des-wrap<?php if (( !$_smarty_tpl->hasVariable('MOBILE_THEME_ARRAY') || empty($_smarty_tpl->getValue('MOBILE_THEME_ARRAY'))) || !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')('m',$_smarty_tpl->getValue('GCONFIG')['array_theme_type']) || ( !true || empty($_smarty_tpl->getValue('GCONFIG')['mobile_theme']))) {?> d-none<?php }?>">
                        <div class="col-sm-8 offset-sm-3 offset-xxl-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="switch_mobi_des" value="1"<?php if ($_smarty_tpl->getValue('DATA')['switch_mobi_des']) {?> checked<?php }?> role="switch" id="element_switch_mobi_des">
                                <label class="form-check-label" for="element_switch_mobi_des"><?php echo $_smarty_tpl->getValue('LANG')->getModule('allow_switch_mobi_des');?>
</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 offset-sm-3 offset-xxl-4">
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getModule('submit');?>
</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6">
        <div class="card border-primary border-3 border-bottom-0 border-start-0 border-end-0">
            <div class="card-header py-2" role="button" data-bs-toggle="collapse" data-bs-target="#collapse-disabledct" aria-expanded="true" aria-controls="collapse-disabledct">
                <div class="hstack gap-2 align-items-center justify-content-between">
                    <div class="fw-medium fs-5"><?php echo $_smarty_tpl->getValue('LANG')->getModule('disable_content');?>
</div>
                    <div class="collapse-button"></div>
                </div>
            </div>
            <div class="collapse show" id="collapse-disabledct">
                <div class="card card-body">
                    <div class="mb-3"><?php echo $_smarty_tpl->getValue('DISABLE_SITE_CONTENT');?>
</div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getModule('submit');?>
</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6">
        <div class="card border-primary border-3 border-bottom-0 border-start-0 border-end-0">
            <div class="card-header py-2" role="button" data-bs-toggle="collapse" data-bs-target="#collapse-submittingdt" aria-expanded="true" aria-controls="collapse-submittingdt">
                <div class="hstack gap-2 align-items-center justify-content-between">
                    <div class="fw-medium fs-5"><?php echo $_smarty_tpl->getValue('LANG')->getModule('submitting_data_warning');?>
</div>
                    <div class="collapse-button"></div>
                </div>
            </div>
            <div class="collapse show" id="collapse-submittingdt">
                <div class="card card-body">
                    <div class="alert alert-info" role="alert"><?php echo $_smarty_tpl->getValue('LANG')->getModule('submitting_data_warning_note');?>
</div>
                    <div class="row mb-3">
                        <div class="col-sm-8 offset-sm-3 offset-xxl-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data_warning" value="1"<?php if ($_smarty_tpl->getValue('GCONFIG')['data_warning']) {?> checked<?php }?> role="switch" id="element_data_warning">
                                <label class="form-check-label" for="element_data_warning"><?php echo $_smarty_tpl->getValue('LANG')->getModule('data_usage_permission_warning');?>
</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="element_data_warning_content" class="col-sm-3 col-xxl-4 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('data_usage_permission_content');?>
</label>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <textarea class="form-control nonewline" id="element_data_warning_content" name="data_warning_content" rows="3"><?php echo $_smarty_tpl->getValue('DATA')['data_warning_content'];?>
</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-8 offset-sm-3 offset-xxl-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="antispam_warning" value="1"<?php if ($_smarty_tpl->getValue('GCONFIG')['antispam_warning']) {?> checked<?php }?> role="switch" id="element_antispam_warning">
                                <label class="form-check-label" for="element_antispam_warning"><?php echo $_smarty_tpl->getValue('LANG')->getModule('antispam_law_warning');?>
</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="element_antispam_warning_content" class="col-sm-3 col-xxl-4 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('antispam_law_content');?>
</label>
                        <div class="col-sm-8 col-lg-6 col-xxl-7">
                            <textarea class="form-control nonewline" id="element_antispam_warning_content" name="antispam_warning_content" rows="3"><?php echo $_smarty_tpl->getValue('DATA')['antispam_warning_content'];?>
</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 offset-sm-3 offset-xxl-4">
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getModule('submit');?>
</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php }
}
