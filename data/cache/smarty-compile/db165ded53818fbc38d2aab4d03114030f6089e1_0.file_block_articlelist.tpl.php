<?php
/* Smarty version 5.4.3, created on 2025-10-19 23:05:05
  from 'file:block_articlelist.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f50c31354a29_65846916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db165ded53818fbc38d2aab4d03114030f6089e1' => 
    array (
      0 => 'block_articlelist.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f50c31354a29_65846916 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\themes\\default\\modules\\news\\smarty';
if (( !true || empty($_smarty_tpl->getValue('CONFIGS')['tooltip_length'])) || $_smarty_tpl->getValue('CONFIGS')['tooltip_length'] < 50) {
$_tmp_array = $_smarty_tpl->getValue('CONFIGS') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['tooltip_length'] = 150;
$_smarty_tpl->assign('CONFIGS', $_tmp_array, false, NULL);
}?>

<ul class="list-none list-items">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ITEMS'), 'item');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach16DoElse = false;
?>
    <li><a class="show clearfix" href="<?php echo $_smarty_tpl->getValue('item')['link'];?>
"<?php if ($_smarty_tpl->getValue('item')['external_link']) {?> target="_blank"<?php }
if ($_smarty_tpl->getValue('CONFIGS')['showtooltip']) {?> data-content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('item')['hometext'],$_smarty_tpl->getValue('CONFIGS')['tooltip_length'],"...");?>
" data-img="<?php echo $_smarty_tpl->getValue('item')['imgurl'];?>
" data-rel="tooltip" data-placement="<?php echo (($tmp = $_smarty_tpl->getValue('CONFIGS')['tooltip_position'] ?? null)===null||$tmp==='' ? "bottom" ?? null : $tmp);?>
"<?php } else { ?> title="<?php echo $_smarty_tpl->getValue('item')['title'];?>
"<?php }?>><?php if (!( !true || empty($_smarty_tpl->getValue('item')['imgurl']))) {?><img src="<?php echo $_smarty_tpl->getValue('item')['imgurl'];?>
" alt="<?php echo $_smarty_tpl->getValue('item')['title'];?>
" width="<?php echo $_smarty_tpl->getValue('item')['width'];?>
" class="img-thumbnail pull-left margin-top-sm mr-1"/><?php }
echo $_smarty_tpl->getValue('item')['title'];
if ($_smarty_tpl->getValue('item')['newday'] > (defined('NV_CURRENTTIME') ? constant('NV_CURRENTTIME') : null)) {?><span class="icon_new margin-left-sm"></span><?php }?></a></li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
