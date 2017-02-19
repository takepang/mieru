<!DOCTYPE html>
<html>
<head>
    {$this->Html->charset()}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {$this->fetch('title')}
    </title>
    {$this->Html->meta('icon')}
    {$this->Html->css('/assets/bootstrap/dist/css/bootstrap.min')}
    {*
    {$this->Html->css('/assets/bootstrap-theme-white-plum/dist/css/bootstrap.min')}
    *}
    {$this->Html->script([
    '/assets/jquery/dist/jquery.min',
    '/assets/bootstrap/dist/js/bootstrap.min'
    ])}
    {*
    {$this->Html->css('base.css')}
    {$this->Html->css('cake.css')}
    *}
    {$this->fetch('meta')}
    {$this->fetch('css')}
    {$this->fetch('script')}
</head>
<body>
{if (!isset($current_user))}
    {include file='./header/nologin_header_menu.tpl'}
{else}
    {include file='./header/default_header_menu.tpl'}
{/if}
{$this->Flash->render()}
<div class="container">
    {$this->fetch('content')}
</div>
<footer>
</footer>
</body>
</html>
