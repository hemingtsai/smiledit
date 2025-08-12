<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<style>
  #main {
    display: flex;
    flex-direction: column;
    justify-content: flex-start; /* 主要内容不上下居中 */
    align-items: center;
    height: 70vh;
    padding-top: 5vh;
    text-align: center;
  }
  #main h1 {
    font-size: 15rem;
    margin: 0;
    color: var(--primary-color);
  }
  #main h3 {
    font-size: 1.5rem;
    margin: 1rem 0 2rem;
    color: var(--muted-color);
  }
  #main a.back-home {
    font-weight: 600;
    color: var(--primary-color);
    text-decoration: none;
    border-bottom: 1px solid transparent;
    transition: border-color 0.3s ease;
  }
  #main a.back-home:hover {
    border-color: var(--primary-color);
  }
</style>

<div id="main" role="main">
    <h1>404</h1>
    <h3>您访问的页面不存在</h3>
    <a href="<?php $this->options->siteUrl(); ?>" class="back-home">返回首页</a>
</div>

<?php $this->need('footer.php'); ?>
