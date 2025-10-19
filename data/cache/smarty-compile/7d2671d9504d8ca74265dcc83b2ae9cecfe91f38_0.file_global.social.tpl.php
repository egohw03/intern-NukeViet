<?php
/* Smarty version 5.4.3, created on 2025-10-11 20:22:50
  from 'file:global.social.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68ea5a2a0de747_00085424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d2671d9504d8ca74265dcc83b2ae9cecfe91f38' => 
    array (
      0 => 'global.social.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68ea5a2a0de747_00085424 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\src\\themes\\default\\blocks\\smarty';
?><span class="visible-xs-inline-block"><a title="<?php echo $_smarty_tpl->getValue('LANG')->get('joinnow');?>
" class="pointer button" data-toggle="tip" data-target="#socialList" data-click="y"><em class="fa fa-share-alt fa-lg"></em><span class="hidden"><?php echo $_smarty_tpl->getValue('LANG')->get('joinnow');?>
</span></a></span>
<div id="socialList" class="content">
    <strong class="visible-xs-inline-block margin-bottom"><?php echo $_smarty_tpl->getValue('LANG')->get('joinnow');?>
</strong>
    <ul class="socialList">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('SOCIALS'), 'social');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('social')->value) {
$foreach13DoElse = false;
?>
        <li>
            <a href="<?php echo $_smarty_tpl->getValue('social')['href'];?>
"<?php if ($_smarty_tpl->getValue('social')['target_blank']) {?> target="_blank" rel="noopener"<?php }?> title="<?php echo $_smarty_tpl->getValue('social')['title'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->getValue('social')['icon'];?>
"></i></a>
        </li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}
