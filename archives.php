<?php
/**
 * 归档页面模板
 *
 * @package smiledit
 * @author Hemingtsai
 * @version 1.0
 * @link https://hmtsai.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div id="main-content">
    <h1 class="archive-title">文章归档</h1>

    <div class="archive-list">
        <?php while($this->next()): ?>
            <article class="post">
                <h2 class="entry_title">
                    <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h2>
                <div class="entry_data">
                    <?php $this->date('Y-m-d'); ?> | 分类：<?php $this->category(','); ?> | <?php $this->commentsNum('%d 条评论'); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>

    <nav class="page-navi">
        <?php $this->pageNav('&laquo; PREV', 'NEXT &raquo;'); ?>
    </nav>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
