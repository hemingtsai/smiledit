<!DOCTYPE html>

<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />

<!-- 设置页面标题 -->
<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>

<!-- 引入字体 -->
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<style>
    @import url("https://fontsapi.zeoseven.com/161/main/result.css");

    * {
        font-family: 'Josefin Sans', 'Sarasa Gothic SC';
    }
</style>

<!-- 引入CSS样式表 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />

<!-- Typecho 其它HTML头部信息 -->
<?php $this->header(); ?>

<!-- Latex 支持 -->
<?php if ($this->is('post') && $this->fields->isLatex == 1): ?>
    <script defer type="text/javascript" src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />
    <script defer type="text/javascript" src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/contrib/auto-render.min.js"></script>
<?php endif; ?>

<div style="display:flex">
    <!-- 网站标题 -->
    <div>
        <h1><?php $this->options->title() ?></h1>
        <span><?php $this->options->description() ?></span>
    </div>

    <div style="flex-grow:1;"> </div>

    <!-- 搜索 -->
    <form method="post" action="">
        <div style="display:flex; gap:0.5rem; align-items:center;">
            <input type="text" name="s" class="text" size="32" placeholder="搜索..." />
            <input type="submit" class="submit" value="Search" />
        </div>
    </form>
</div>

<!-- 独立页面列表 -->
<div class="independent-page-menu" id="nav_menu">
    <a href="<?php $this->options->siteUrl(); ?>">主页</a>
    <?php $this->widget('Widget_Contents_Page_List')
        ->parse('<a href="{permalink}">{title}</a>'); ?>
</div>