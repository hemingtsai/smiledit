/**
* 微笑着写出人生
*
* @package Simedit
* @author hemingtsai
* @version 1.0.0
* @link https://hmtsai.cn
*/

<?php include('header.php') ?>

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

<?php $this->pageNav(); ?>

<?php include('footer.php') ?>