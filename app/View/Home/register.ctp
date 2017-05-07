<!DOCTYPE html>
<html>
<head>
<title>Đăng ký</title>
<meta charset="utf-8">
<?php echo $this->Html->css(array('bootstrap.min.css','bootstrap-datepicker.min.css')); ?>

</head>
<body>
<form class="form-horizontal" style="background-color: " method="post" action="#">
    <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center; font-weight: bold; text-transform: uppercase;">Đăng ký</legend>

        <!-- Tài khoản-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Tên tài khoản: </label>
            <div class="col-md-4">
                <input id="fn" name="data[UsersProfile][username]" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>
        <!--Nhập mật khẩu-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Mật khẩu:</label>
            <div class="col-md-4">
                <input type="password" placeholder="Password" id="password" class="form-control input-md" name="data[UsersProfile][password]"/>

            </div>
        </div>
        <!--Xác nhận mật khẩu-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Xác nhận mật khẩu:</label>
            <div class="col-md-4">
                <input type="password" placeholder="Password" id="password" class="form-control input-md" name="password"/>

            </div>
        </div>
        <!--Họ và tên-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Họ và tên: </label>
            <div class="col-md-4">
                <input id="fn" name="data[UsersProfile][name]" type="text" placeholder="Họ tên" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Email-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
                <input id="email" name="data[UsersProfile][email]" type="text" placeholder="email" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Địa chỉ-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="add1">Địa chỉ: </label>
            <div class="col-md-4">
                <input id="add1" name="data[UsersProfile][Address]" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Số điện thoại -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="phone">Số điện thoại: </label>
            <div class="col-md-4">
                <input id="phone" name="data[UsersProfile][phone] " type="text" placeholder="Số điện thoại" class="form-control input-md" required="">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="Ngày sinh">Ngày sinh: </label>
            <div class="col-md-4">
                <input id="DOB" name="data[UsersProfile][DOB]" type="text" placeholder="Ngày sinh" class="form-control input-md" required="">

            </div>
        </div>
        <!-- Giới tính -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="#">Giới tính: </label>
            <div class="col-md-4">
                <label class="radio-inline" for="Gender">
                    <input type="radio" name="data[UsersProfile][Gender]" id="Gender-0" value="0" checked="checked">
                    Nam
                </label>
                <label class="radio-inline" for="Gender-1">
                    <input type="radio" name="data[UsersProfile][Gender]" id="Gender-1" value="1">
                    Nữ
                </label>
            </div>
        </div>
        <!-- Button submit -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Đăng ký</button>
            </div>
        </div>

    </fieldset>
</form>
<!-- Hết form-->
<?php echo $this->Html->script('jquery.min.js');?>
<?php echo $this->Html->script(array('bootstrap.min.js','bootstrap-datepicker.min.js'));?>
<script>
    $('#DOB').datepicker({});
</script>
</body>
</html>
