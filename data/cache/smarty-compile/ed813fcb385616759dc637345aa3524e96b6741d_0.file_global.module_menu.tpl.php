<?php
/* Smarty version 5.4.3, created on 2025-10-19 23:46:38
  from 'file:global.module_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f515eee1f599_38380755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed813fcb385616759dc637345aa3524e96b6741d' => 
    array (
      0 => 'global.module_menu.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f515eee1f599_38380755 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\themes\\default\\blocks\\smarty';
?><div class="clearfix panel">
    <aside class="sidebar module-menu">
        <nav class="sidebar-nav">
            <ul>
                <li><a class="home <?php echo $_smarty_tpl->getValue('MOD')['active'];?>
" href="<?php echo $_smarty_tpl->getValue('MOD')['href'];?>
"><?php echo $_smarty_tpl->getValue('MOD')['title'];?>
</a></li>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('MENU'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                <li><a class="<?php echo $_smarty_tpl->getValue('item')['active'];?>
" href="<?php echo $_smarty_tpl->getValue('item')['href'];?>
"><?php echo $_smarty_tpl->getValue('item')['title'];?>
</a></li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </nav>
    </aside>
</div>
<?php }
}
