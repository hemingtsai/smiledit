<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php $this->options->charset(); ?>" />
    <title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>

    <!-- 引入字体 -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <style>
        @import url("https://fontsapi.zeoseven.com/161/main/result.css");

        * {
            font-family: 'Josefin Sans', 'Sarasa Gothic SC', sans-serif;
        }
    </style>

    <!-- 引入主样式 -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />

    <!-- Prism.js 代码高亮 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-tomorrow.css" rel="stylesheet" />

    <!-- Typecho 其它HTML头部信息 -->
    <?php $this->header(); ?>

    <!-- KaTeX CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />

    <!-- KaTeX JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/contrib/auto-render.min.js"></script>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            renderMathInElement(document.body, {
                delimiters: [{
                        left: "$$",
                        right: "$$",
                        display: true
                    },
                    {
                        left: "\\[",
                        right: "\\]",
                        display: true
                    },
                    {
                        left: "\\(",
                        right: "\\)",
                        display: false
                    },
                    {
                        left: "$",
                        right: "$",
                        display: false
                    }
                ],
                throwOnError: false
            });
        });
    </script>

    <!-- Prism.js 代码高亮脚本 -->
    <script defer src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-python.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-cpp.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-bash.min.js"></script>
    <!-- 需要支持其他语言可以再引入对应组件 -->

</head>

<body>
    <div style="display:flex; align-items:center; gap:1rem; padding:1rem;">
        <!-- 网站标题 -->
        <div>
            <h1><?php $this->options->title() ?></h1>
            <span><?php $this->options->description() ?></span>
        </div>

        <div style="flex-grow:1;"></div>

        <!-- 搜索 -->
        <form method="post" action="" style="display:flex; gap:0.5rem; align-items:center;">
            <input type="text" name="s" class="text" size="32" placeholder="Search..." />
            <input type="submit" class="submit" value="Search" />
        </form>
    </div>

    <!-- 独立页面列表 -->
    <nav class="independent-page-menu" id="nav_menu" style="padding:0 1rem; display:flex; gap:1rem; flex-wrap:wrap;">
        <a href="<?php $this->options->siteUrl(); ?>">Home</a>
        <?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}">{title}</a>'); ?>
    </nav>