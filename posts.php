<?php
/**
 * 单篇文章模板
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
    <article class="post">
        <h1 class="entry_title"><?php $this->title() ?></h1>
        <div class="entry_data">
            作者：<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> |
            发表于 <?php $this->date('F j, Y'); ?> |
            分类：<?php $this->category(','); ?> |
            <?php $this->commentsNum('%d 条评论'); ?>
        </div>
        <div class="entry_text">
            <?php $this->content(); ?>
        </div>
    </article>

    <nav class="page-navi">
        <?php $this->thePrev('< 上一篇'); ?>
        <?php $this->theNext('下一篇 >'); ?>
    </nav>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
