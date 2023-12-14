<?php if ($this->data['template'] == 'catalogue' || $this->data['template'] == 'history' || $this->data['template'] == 'dashboard') : ?>
    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li <?php echo ($this->data['template'] == 'catalogue') ? 'class="active"' : ''; ?>>
                        <a href="/">Catalogue</a>
                    </li>
                    <li <?php echo ($this->data['template'] == 'history') ? 'class="active"' : ''; ?>>
                        <a href="/history">History</a>
                    </li>
                    <li <?php echo ($this->data['template'] == 'dashboard') ? 'class="active"' : ''; ?>>
                        <a href="/dashboard">Dashboard</a>
                    </li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->
<?php endif; ?>
