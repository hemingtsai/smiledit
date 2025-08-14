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

   <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                <?php if ($this->user->hasLogin()): ?>
                    <p><?php _e('Logined as '); ?><a
                            href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a
                            href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('Logout'); ?> &raquo;</a>
                    </p>
                <?php else: ?>
                    <p>
                        <label for="author" class="required"><?php _e('Name'); ?></label>
                        <input type="text" name="author" id="author" class="text"
                               value="<?php $this->remember('author'); ?>" required/>
                    </p>
                    <p>
                        <label
                            for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
                        <input type="email" name="mail" id="mail" class="text"
                               value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                    </p>
                    <p>
                        <label
                            for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('Website'); ?></label>
                        <input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>"
                               value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                    </p>
                <?php endif; ?>
                <p>
                    <label for="textarea" class="required"><?php _e('Content'); ?></label>
                    <textarea rows="8" cols="50" name="text" id="textarea" class="textarea"
                              required><?php $this->remember('text'); ?></textarea>
                </p>
                <p>
                    <button type="submit" class="submit"><?php _e('Submit Comment'); ?></button>
                </p>
            </form>
<?php endif; ?>