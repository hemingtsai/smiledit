<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<h4 id="comments_title">
    <?php $this->commentsNum(
        'No comment',
        'One comment to "' . htmlspecialchars($this->title) . '"',
        '%d comments to "' . htmlspecialchars($this->title) . '"'
    ); ?>
</h4>

<?php $this->comments()->to($comments); ?>

<?php if ($comments->have()): ?>
    <ol id="comment_list">
        <?php while ($comments->next()): ?>
            <li id="comment-<?php $comments->theId(); ?>" class="comment">
                <div class="comment_data">
                    <span class="comment_number">#<?php $comments->sequence(); ?></span>
                    <strong class="comment_author"><?php $comments->author(); ?></strong>
                    <span class="comment_meta">
                        on <?php $comments->date('F jS, Y'); ?> at <?php $comments->date('h:i a'); ?>
                    </span>
                </div>

                <div class="comment_body">
                    <?php $comments->content(); ?>
                </div>

                <div class="comment_reply">
                    <?php $comments->reply(); ?>
                </div>

                <?php if ($comments->children): ?>
                    <div class="comment_children">
                        <?php $comments->threadedComments($comments, $this); ?>
                    </div>
                <?php endif; ?>
            </li>
        <?php endwhile; ?>
    </ol>
<?php endif; ?>

<?php if ($this->allow('comment')): ?>
    <h4 id="response"><?php _e('Leave a Reply'); ?></h4>

    <form method="post" action="<?php $this->commentUrl(); ?>" id="comment_form">
        <?php if ($this->user->hasLogin()): ?>
            <p>
                <?php _e('Logged in as '); ?>
                <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>.
                <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('Logout »'); ?></a>
            </p>
        <?php else: ?>
            <p>
                <label>Name</label>
                <input type="text" name="author" class="text" size="35"
                    value="<?php $this->remember('author'); ?>" required>
            </p>
            <p>
                <label>E-mail</label>
                <input type="email" name="mail" class="text" size="35"
                    value="<?php $this->remember('mail'); ?>" required>
            </p>
            <p>
                <label>Website</label>
                <input type="url" name="url" class="text" size="35"
                    value="<?php $this->remember('url'); ?>">
            </p>
        <?php endif; ?>

        <p>
            <textarea rows="10" cols="50" name="text" required><?php $this->remember('text'); ?></textarea>
        </p>
        <p>
            <input type="submit" value="Submit Comment" class="submit">
        </p>
    </form>
<?php endif; ?>