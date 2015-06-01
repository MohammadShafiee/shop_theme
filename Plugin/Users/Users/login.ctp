<div class="container main-container">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li> <a href="index.html">Home</a> </li>
                <li class="active"> Authentication </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i class="fa fa-lock"></i> <?php echo $title_for_layout; ?></span></h1>
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-6">
                    <h2 class="block-title-2"><span>Already registered?</span></h2>
                    <?php
                    echo $this->Form->create('User', array(
                        'url' => array(
                            'plugin' => 'users',
                            'controller' => 'users',
                            'action' => 'login'
                        )),
                        array(
                            'class' => 'logForm',
                            'role' => 'form',
                        )
                    );
                        echo $this->Form->input('username',
                            array(
                                'div' => array(
                                    'class' => 'form-group'
                                ),
                                'label' => __d('croogo', 'Username'),
                                'class' => 'form-control'
                            ));
                        echo $this->Form->input('password',
                            array(
                                'div' => array(
                                    'class' => 'form-group'
                                ),
                                'label' => __d('croogo', 'Password'),
                                'class' => 'form-control'
                            ));
                        ?>
                        <div class="checkbox">
                            <label style="display: none;">
                                <input type="checkbox" name="checkbox" style="display: none;">
                                Remember me </label>
                        </div>
                        <div class="form-group">
                            <p>
                                <?php
                                echo $this->Html->link(__d('croogo', 'Forgot password?'), array(
                                        'controller' => 'users', 'action' => 'forgot',
                                    ),
                                    array(
                                        'title' => 'Recover your forgotten password'
                                    ));
                                ?>
                            </p>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-sign-in"></i> Sign In
                        </button>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-5"> </div>
    </div>
    <div style="clear:both"></div>
</div>
<div class="gap"> </div>