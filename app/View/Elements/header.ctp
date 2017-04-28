<header id="header">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_top">
                <div class="header_top_left">
                    <ul class="top_nav">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="pages/contact.html">Liên hệ</a></li>
                    </ul>

                </div>
                <div class="header_top_right">
                    <p><a style="color: white" href="<?php echo $this->Html->url(['controller'=>'home', 'action'=>'login']) ?>">Đăng nhập</a></p>
                    <p><a style="color: white" href="<?php echo $this->Html->url(['controller'=>'home','action'=>'register']); ?>">Đăng ký</a></p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm ..."/>
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
                <div class="logo_area"><a href="index.html" class="logo"><img src="img/logo.jpg" alt=""></a></div>
                <div class="add_banner"><a href="#"><img src="#" alt=""></a></div>
            </div>
        </div>
    </div>
</header>