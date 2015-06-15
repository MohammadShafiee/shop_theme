<?php
$this->request->data['User'] = $user['User'];
?>
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
                    <h2 class="block-title-2"> <?php echo __d('shop', 'My Profile Information');?> </h2>
                    <?php
                    echo $this->Form->create('User', array(), array(
                        'role' => 'form',
                        'class' => 'regForm',
                        'novalidation' => 'novalidate'
                    ));
                    echo $this->Form->input('username',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Username'),
                            'class' => 'form-control',
                            'disabled' => 'disabled'
                        ));
                    echo $this->Form->input('password',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'password'),
                            'class' => 'form-control',
                            'value' => ''
                        ));
                    echo $this->Form->input('verify_password',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Verify Password'),
                            'class' => 'form-control',
                            'type' => 'password',
                            'value' => ''
                        ));
                    echo $this->Form->input('name',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Name'),
                            'class' => 'form-control',
                        ));
                    echo $this->Form->input('email',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Email'),
                            'class' => 'form-control',
                        ));
                    echo $this->Form->input('website',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Website'),
                            'class' => 'form-control',
                        ));
                    ?>
                    <button type="submit" class="btn   btn-primary">
                        <i class="fa fa-user"></i> <?php echo __d('shop', 'Update my account');?>
                    </button>
                    <?php echo $this->Form->end();?>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-5"> </div>
    </div>
    <div style="clear:both"></div>
</div>
<div class="gap"> </div>