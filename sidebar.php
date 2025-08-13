<h3>Latest Posts</h3>
<ul>
    <?php $this->widget('Widget_Contents_Post_Recent')
        ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>

<h3>Recent Comments</h3>
<ul>
    <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
    <?php while ($comments->next()): ?>
        <li><?php $comments->author(false); ?>: <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(10, '[...]'); ?></a></li>
    <?php endwhile; ?>
</ul>

<h3>Categories</h3>
<ul>
    <?php $this->widget('Widget_Metas_Category_List')
        ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
</ul>

<h3>Archives</h3>
<ul>
    <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
        ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
</ul>

<h3>Other Links</h3>
<ul>
    <?php if ($this->user->hasLogin()): ?>
        <li class="last"><a href="<?php $this->options->index('Logout.do'); ?>">Logout (<?php $this->user->screenName(); ?>)</a></li>
    <?php else: ?>
        <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>">Login</a></li>
    <?php endif; ?>
</ul>
