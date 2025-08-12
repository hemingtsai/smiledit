<?php
/**
 * 首页模板
 *
 * @package smiledit
 * @author Hemingtsai
 * @version 1.0
 * @link https://hmtsai.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div id="main-content" style="display:flex;">
    <main class="primary-content">
        <?php while ($this->next()): ?>
            <article class="post">
                <h2 class="entry_title">
                    <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h2>

                <div class="entry_data">
                    由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                    在 <?php $this->date('F j, Y'); ?>
                    <?php $this->category(','); ?>.
                    <?php $this->commentsNum('%d 条评论'); ?>.
                </div>

                <div class="entry_text">
                    <?php $this->content('继续阅读...'); ?>
                </div>
            </article>
        <?php endwhile; ?>

        <nav class="page-navi" aria-label="分页导航">
            <?php $this->pageNav('&laquo; PREV', 'NEXT &raquo;'); ?>
        </nav>
    </main>

    <aside class="sidebar">
        <?php $this->need('sidebar.php'); ?>
    </aside>
</div>

<?php $this->need('footer.php'); ?>
