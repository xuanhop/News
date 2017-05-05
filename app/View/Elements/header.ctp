

<?php echo $this->Html->script('jquery-2.2.4.min.js');?>
<?php echo $this->Html->script('bootstrap.min.css') ?>

<header id="header">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_top">
                <div class="header_top_left">
                    <ul class="top_nav">

                        <li><a href="<?php echo $this->Html->url(array('controller'=>'home','action'=>'index'))?>">Trang chủ</a></li>

                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="pages/contact.html">Liên hệ</a></li>
                    </ul>

                </div>
                <div class="header_top_right">

                    <p><a style="color: white" data-toggle="modal" data-target="#myModal" >Đăng nhập</a>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title" style="text-align: left;">Đăng nhập</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p><?php echo $this->Flash->render('error',['elements'=>'flash_error']);?>

                                            <?php echo $this->Form->create('login-content',['url'=>['controller'=>'home','action'=>'login','class'=>'form-horizontal']]);?>

                                            <label for="inputUser" class="control-label ">Tên đăng nhập</label>
                                            <?php echo $this->Form->input('Tên đăng nhập',['placeholder'=> 'Tên đăng nhập','class' =>'form-control','id'=>'inputUsername','autofocus'=>true,'label'=>false])?>

                                            <!-- Password -->
                                            <br/>

                                            <label for="inputPassword" class="control-label ">Mật khẩu</label>
                                            <?php echo $this->Form->input('Mật khẩu',['label'=>false,'type'=>'password', 'placeholder'=>'Password','required'=>true, 'class'=>'form-control','id'=>'inputPassword'])?>

                                            <!-- Submit btn -->
                                            <br>
                                            <?php echo $this->Form->submit('Đăng nhập',['class'=> 'btn btn-primary btn-md']);?>

                                            <?php echo $this->Form->end()?>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </p>
                    <p><a style="color: white" href="<?php echo $this->Html->url(['controller'=>'home','action'=>'register']); ?>">Đăng ký</a></p>
                    <div class="row">
                        <div class="col-lg-6">
                                <span style="color: white"></span>
                            <div class="input-group">
                                <span><input type="text" class="form-control" placeholder="Tìm kiếm..."></span>

                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_bottom">

                <div class="logo_area"><a href="<?php echo $this->Html->url(['controller'=>'home','action'=>'index']) ?>" class="logo"><img src="img/logo.jpg" alt=""></a></div>

                <div class="add_banner"><a href="#"><img src="#" alt=""></a></div>
            </div>
        </div>
    </div>
</header>