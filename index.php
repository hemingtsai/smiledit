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

<div id="main-content">
    <main class="primary-content">
        <?php while ($this->next()): ?>
            <article class="post">
                <h2 class="entry_title">
                    <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h2>

                <div class="entry_data">
                    Published by <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                    on <?php $this->date('F j, Y'); ?>
                    in <?php $this->category(','); ?>
                    with <?php $this->commentsNum('%d Comments'); ?>.
                </div>

                <div class="entry_text">
                    <?php $this->content('Read more...'); ?>
                </div>
            </article>
        <?php endwhile; ?>

        <nav class="page-navi">
            <?php $this->pageNav('&laquo; PREV', 'NEXT &raquo;'); ?>
        </nav>
    </main>

    <aside class="sidebar">
        <?php $this->need('sidebar.php'); ?>
    </aside>
</div>

<?php $this->need('footer.php'); ?>
