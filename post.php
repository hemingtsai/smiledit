<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<div id="main-content">
    <main class="post-primary-content">
        <article class="posti" itemscope itemtype="http://schema.org/BlogPosting">
            <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
            <div class="post-meta">
                <p>Published by <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> with ♥ on <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time> in <?php $this->category(', ', true, 'none'); ?></p>
            </div>

            <div class="post-content" itemprop="articleBody">
                <?php parseContent($this->content); ?>
            </div>

            <div class="post-fun">
                <section>
                    <span itemprop="keywords" class="tags">Tags: <?php $this->tags(',', true, 'None'); ?></span>
                </section>
                <div style="flex-grow:1;"></div>
                <section>
                    <span> · <a href="javascript:goBack();">Back</a> ·
                        <a href="<?php $this->options->siteUrl(); ?>">Home</a> · </span>
                </section>
            </div>

            <?php $this->need('comments.php'); ?>

            <?php
            $torHTML = post_tor($this->content);
            if ($torHTML != '') {
                print_r('<div id="postTorTree"><div id="torTree" style="display: none;"><div class="torArcT"><div class="torArcTile">' . $torHTML . '</div></div></div></div>');
            }
            ?>
        </article>
    </main>

    <aside class="sidebar">
        <?php $this->need('sidebar.php'); ?>
    </aside>
</div>

<?php $this->need('footer.php'); ?>