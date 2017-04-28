<!DOCTYPE html>
<html>
<head>
    <title>
        Đăng ký
    </title>
    <meta charset="utf-8">
    <?php echo $this->Html->css(array('bootstrap.min.css', 'font-awesome.min.css','animate.css',
        'font.css','li-scroller.css','slick.css','jquery.fancybox.css','theme.css','style.css')) ?>
</head>
<body>
<h2 class="form-signin-heading">Hãy đăng kí tài khoản</h2>
<!-- Username -->
<div class="form-group">
    <label for="inputUsername">Tên tài khoản</label>
    <input type="text" autofocus="" required placeholder="Username" class="form-control" id="inputUsername"
           name="data[TblUser][username]"/>
</div>
<!-- Password -->
<div class="form-group">
    <label for="inputPassword">Mật khẩu</label>
    <input type="password" required placeholder="Password" class="form-control" id="inputPassword"
           name="data[TblUser][password]"/>
</div>

<div class="form-group">
    <label for="inputFName">Họ và tên</label>
    <input type="text" required placeholder="Full name" class="form-control" id="inputFName"
           name="data[TblProfile][FullName]"/>
</div>

<div class="form-group">
    <label for="add">Địa chỉ</label>
    <textarea type="text" required placeholder="Full name" class="form-control" id="add"
              name="data[TblProfile][Address]">
        </textarea>
</div>

<div class="form-group">
    <label for="day">Ngày sinh</label>
    <!-- Day -->
    <input type="text" class="form-control" name="data[TblProfile][DOB]"
           id="datepicker" placeholder="ChooseDOB"
           data-date-format="dd-mm-yyyy"/>
</div>

<div class="form-group">
    <label for="gender">Giới tính</label>
    <label class="radio-inline">
        <input type="radio" name="data[TblProfile][Gender]" value="1" checked> Nam
    </label>
    <label class="radio-inline">
        <input type="radio" name="data[TblProfile][Gender]" value="0"> Nữ
    </label>
</div>

<div class="form-group">
    <label for="phone">Số điện thoại</label>
    <input type="text" required placeholder="PhoneNum" class="form-control" id="phone"
           name="data[TblProfile][Phone]"/>
</div>

<!-- Avatar-->
<div class="form-group">
    <label for="avt">Ảnh đại diện</label>
    <input type="file" class="form-control" id="avt" name="data[TblProfile][Avatar]" ACCEPT="image/*"/>
</div>
<!-- Submit btn -->
<button type="submit" class="btn btn-group-lg  btn-lg btn-primary" name="submit">Đăng kí</button>
<!-- Nút quay lại-->
<button type="button" class="btn btn-group-lg btn-lg btn-default" onclick="history.go(-1)">Quay lại</button>
<?php echo $this->Form->end(); ?>

</body>
</html>
