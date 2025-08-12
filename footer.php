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