<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Đăng nhập</h4>
            </div>
            <div class="modal-body">
                <p><?php echo $this->Flash->render('error', ['elements' => 'flash_error']); ?>

                    <?php echo $this->Form->create('login-content', ['url' => ['controller' => 'home', 'action' => 'login']]); ?>

                    <label class="sr-only" for="inputUsername">Tên:</label>
                    <?php echo $this->Form->input('username', ['placeholder' => 'Tên người dùng', 'class' => 'form-control', 'id' => 'inputUsername', 'autofocus' => true]) ?>
                    <!-- Password -->
                    <br/>
                    <label class="sr-only" for="inputPassword">Mật khẩu</label>
                    <?php echo $this->Form->input('password', ['type' => 'password', 'placeholder' => 'Password', 'required' => true, 'class' => 'form-control', 'id' => 'inputPassword']) ?>
                    <br/>
                    <!-- Submit btn -->
                <p><a href="<?php echo $this->Html->url(['controller' => 'home', 'action' => 'register']) ?>">Chưa có
                        tài khoản, đăng kí ở đây</a></p>
                <br/>
                <?php echo $this->Form->submit('Đăng nhập', ['class' => 'btn btn-lg btn-primary btn-block']) ?>

                <?php echo $this->Form->end() ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>