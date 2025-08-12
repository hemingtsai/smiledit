<?php
/**
 * 微笑着写出人生
 *
 * @package smiledit
 * @author Hemingtsai
 * @version 1.0
 * @link https://hmtsai.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<?php while ($this->next()): ?>
    <div class="post">
        <h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <div class="entry_data">
            由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> 在 <?php $this->date('F j, Y'); ?> <?php $this->category(','); ?>.
            <?php $this->commentsNum('%d 条评论'); ?>.
        </div>
        <div class="entry_text">
            <?php $this->content('继续阅读...'); ?>
        </div>
    </div>
<?php endwhile; ?>

<?php $this->pageNav('&laguo; PREV', 'NEXT &raguo'); ?>

<?php $this->need('sidebar.php') ?>
<?php $this->need('footer.php') ?>