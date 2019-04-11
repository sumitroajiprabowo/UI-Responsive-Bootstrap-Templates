<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Syntax Highlighting Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-code"></i>Syntax Highlighting<br><small>Great for showcasing your code!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Components</li>
        <li><a href="">Syntax Highlighting</a></li>
    </ul>
    <!-- END Syntax Highlighting Header -->

    <!-- Usage Example Block -->
    <div class="block full">
        <!-- Usage Example Title -->
        <div class="block-title">
            <h2><strong>Usage</strong> Example</h2>
        </div>
        <!-- END Usage Example Title -->

        <!-- Usage Example Content -->
        <div class="row">
            <div class="col-sm-6">
                <!-- HTML -->
                <h3>HTML</h3>
                <pre class="line-numbers"><code class="language-markup">&lt;pre class=&quot;line-numbers&quot;&gt;&lt;code class=&quot;language-markup&quot;&gt;
HTML code..
&lt;/code&gt;&lt;/pre&gt;</code></pre>
                <!-- END HTML -->

                <!-- CSS -->
                <h3>CSS</h3>
                <pre class="line-numbers"><code class="language-markup">&lt;pre class=&quot;line-numbers&quot;&gt;&lt;code class=&quot;language-css&quot;&gt;
CSS code..
&lt;/code&gt;&lt;/pre&gt;</code></pre>
                <!-- END CSS -->
            </div>
            <div class="col-sm-6">
                <!-- Javascript -->
                <h3>Javascript</h3>
                <pre class="line-numbers"><code class="language-markup">&lt;pre class=&quot;line-numbers&quot;&gt;&lt;code class=&quot;language-javascript&quot;&gt;
Javascript code..
&lt;/code&gt;&lt;/pre&gt;</code></pre>
                <!-- END Javascript -->

                <!-- PHP -->
                <h3>PHP</h3>
                <pre class="line-numbers"><code class="language-markup">&lt;pre class=&quot;line-numbers&quot;&gt;&lt;code class=&quot;language-php&quot;&gt;
PHP code..
&lt;/code&gt;&lt;/pre&gt;</code></pre>
                <!-- END PHP -->
            </div>
        </div>
        <!-- END Usage Example Content -->
    </div>
    <!-- END Usage Example Block -->

    <!-- Real Code Examples Row -->
    <div class="row">
        <div class="col-md-6">
            <!-- HTML Block -->
            <div class="block">
                <!-- HTML Title -->
                <div class="block-title">
                    <h2><strong>HTML</strong> <small>Template's Structure</small></h2>
                </div>
                <!-- END HTML Title -->

                <!-- HTML Content -->
                <pre class="line-numbers"><code class="language-markup">&lt;!-- Body --&gt;
&lt;body&gt;
    &lt;!-- Page Wrapper --&gt;
    &lt;div id=&quot;page-wrapper&quot;&gt;
        &lt;!-- Page Container --&gt;
        &lt;div id=&quot;page-container&quot;&gt;
            &lt;!-- Alternative Sidebar --&gt;
            &lt;div id=&quot;sidebar-alt&quot;&gt;
                Alternative Sidebar Content
            &lt;/div&gt;
            &lt;!-- END Alternative Sidebar --&gt;

            &lt;!-- Main Sidebar --&gt;
            &lt;div id=&quot;sidebar&quot;&gt;
                Main Sidebar Content
            &lt;/div&gt;
            &lt;!-- END Main Sidebar --&gt;

            &lt;!-- Main Container --&gt;
            &lt;div id=&quot;main-container&quot;&gt;
                &lt;!-- Header --&gt;
                &lt;header class=&quot;navbar navbar-default&quot;&gt;
                    Header Content
                &lt;/header&gt;
                &lt;!-- END Header --&gt;

                &lt;!-- Page Content --&gt;
                &lt;div id=&quot;page-content&quot;&gt;
                    Main Content
                &lt;/div&gt;
                &lt;!-- END Page Content --&gt;

                &lt;!-- Footer --&gt;
                &lt;footer&gt;
                    Footer Content
                &lt;/footer&gt;
                &lt;!-- END Footer --&gt;
            &lt;/div&gt;
            &lt;!-- END Main Container --&gt;
        &lt;/div&gt;
        &lt;!-- END Page Container --&gt;
    &lt;/div&gt;
    &lt;!-- END Page Wrapper --&gt;
&lt;/body&gt;
&lt;!-- END Body --&gt;</code></pre>
                <!-- END HTML Content -->
            </div>
            <!-- END HTML Block -->

            <!-- PHP Block -->
            <div class="block">
                <!-- PHP Title -->
                <div class="block-title">
                    <h2><strong>PHP</strong> <small>Dummy Code</small></h2>
                </div>
                <!-- END PHP Title -->

                <!-- PHP Content -->
                <pre class="line-numbers"><code class="language-php">&lt;?php
class App {
    function home() {
        // ...
    }

    function profile() {
        // ...
    }

    function settings() {
        // ...
    }
}</code></pre>
                <!-- END PHP Content -->
            </div>
            <!-- END PHP Block -->
        </div>
        <div class="col-md-6">
            <!-- CSS Block -->
            <div class="block">
                <!-- CSS Title -->
                <div class="block-title">
                    <h2><strong>CSS</strong> <small>Stylesheet Structure</small></h2>
                </div>
                <!-- END CSS Title -->

                <!-- CSS Content -->
                <pre class="line-numbers"><code class="language-css">/*
=================================================================
(#shortcode) SECTION
=================================================================
*/

/* Sub section 1 */
selector {
}

/* Sub section 2 */
selector {
}

/*
=================================================================
(#shortcode) SECTION
=================================================================
*/

/* Sub section 1 */
selector {
}

/* Sub section 2 */
selector {
}</code></pre>
                <!-- END CSS Content -->
            </div>
            <!-- END CSS Block -->

            <!-- Javascript Block -->
            <div class="block">
                <!-- Javascript Title -->
                <div class="block-title">
                    <h2><strong>Javascript</strong> <small>Scroll to top functionality</small></h2>
                </div>
                <!-- END Javascript Title -->

                <!-- Javascript Content -->
                <pre class="line-numbers"><code class="language-javascript">/* Scroll to top functionality */
var scrollToTop = function() {
    // Get link
    var link = $('#to-top');
    var windowW = window.innerWidth
                    || document.documentElement.clientWidth
                    || document.body.clientWidth;

    $(window).scroll(function(){
        // If the user scrolled a bit (150 pixels) show the link in large resolutions
        if (($(this).scrollTop() > 150) && (windowW > 991)) {
            link.fadeIn(100);
        } else {
            link.fadeOut(100);
        }
    });

    // On click get to top
    link.click(function(){
        $('html, body').animate({ scrollTop: 0 }, 400);

        return false;
    });
};</code></pre>
                <!-- END Javascript Content -->
            </div>
            <!-- END Javascript Block -->
        </div>
    </div>
    <!-- END Real Code Examples Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>