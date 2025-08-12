<?php if ($this->is('post') && $this->fields->isLatex == 1): ?>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            renderMathInElement(document.body, {
                delimiters: [{
                    left: "$$",
                    right: "$$",
                    display: true
                }, {
                    left: "$",
                    right: "$",
                    display: false
                }],
                ignoredTags: ["script", "noscript", "style", "textarea", "pre", "code"],
                ignoredClasses: ["nokatex"]
            });
        });
    </script>
<?php endif; ?>

<footer style="text-align:center; padding:1rem 0; border-top:1px solid var(--border-color); color: var(--muted-color); font-size: 0.9rem;">
    &copy; <?php echo date('Y'); ?> Hemingtsai Labs. All rights reserved.
</footer>
