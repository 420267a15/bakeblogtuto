<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button><!-- /.navbar-toggle -->
        <?php echo $this->Html->Link('BlogStrap', array('controller' => 'articles', 'action' => 'index'), array('class' => 'navbar-brand')); ?>
    </div><!-- /.navbar-header -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><?php
                echo $this->Html->link(__('home'), array('controller' => 'articles', 'action' => 'index')) . " ";
                ?>
            </li>
            <?php
            if ($this->Session->check('Auth.User')) {
                echo '<li><a href="#">Hello ' . $this->Session->read('Auth.User.username') . "</a></li>";
                echo "<li>" . $this->Html->link(__('logout'), array('controller' => 'users', 'action' => 'logout')) . "</li>";
                if ($this->Session->read('Auth.User.username') == "admin") {
                    echo "<li>" . $this->Html->link(__('add user'), array('controller' => 'users', 'action' => 'add')) . "</li>";
                }
            } else {
                echo  "<li>" . $this->Html->link(__('login'), array('controller' => 'users', 'action' => 'login')) . "</li>";
            }
            ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('Language'); ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <?php
                    echo $this->I18n->flagSwitcher(array(
                        'class' => 'languages',
                        'id' => 'language-switcher'
                    ));
                    ?>
                </ul>
            </li>
        </ul><!-- /.nav navbar-nav -->
    </div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->