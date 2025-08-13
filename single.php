<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<style>
  /* 容器左右布局 */
  #container {
    display: flex;
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
    padding: 1rem;
  }

  main#main {
    flex: 1 1 70%;
    min-width: 280px;
  }

  aside.sidebar {
    flex: 1 1 28%;
    min-width: 200px;
  }

  /* 响应式：窄屏时上下堆叠 */
  @media (max-width: 768px) {
    #container {
      flex-direction: column;
      padding: 1rem 0.5rem;
    }
    main#main, aside.sidebar {
      flex: 1 1 100%;
      min-width: auto;
    }
  }

  /* 文章标题和元信息简单样式 */
  .post-title {
    font-size: 2rem;
    margin-bottom: 0.5rem;
  }
  .post-meta p {
    font-size: 0.9rem;
    color: #666;
  }
  .post-content {
    margin-top: 1rem;
    line-height: 1.6;
  }
  #postFun {
    margin-top: 2em;
    overflow: hidden;
  }
  #postFun section {
    display: inline-block;
  }
  #postFun section:first-child {
    float: left;
  }
  #postFun section:last-child {
    float: right;
  }
</style>

<div id="container">
    <main id="main" role="main">
        <article class="posti" itemscope itemtype="http://schema.org/BlogPosting">
            <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
            <div class="post-meta">
                <p>Published by <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> with ♥ on <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time> in <?php $this->category(', ', true, 'none'); ?></p>
            </div>

            <div class="post-content" itemprop="articleBody">
                <?php parseContent($this->content); ?>
            </div>

            <div id="postFun" class="clearfix">
                <section>
                    <span itemprop="keywords" class="tags">Tags: <?php $this->tags(',', true, 'None'); ?></span>
                </section>
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
