<?php echo $this->Flash->render('error', ['element' => 'flash_error']); ?>
<?php echo $this->Form->create('TblUser', ['type' => 'file']); ?>
<?php echo $this->fetch('content'); ?>
<h2 class="form-signin-heading">Please sign up</h2>
<!-- Username -->
<div class="form-group">
    <label for="inputUsername">Username</label>
    <input type="text" autofocus="" required placeholder="Username" class="form-control" id="inputUsername"
           name="data[TblUser][username]"/>
</div>
<!-- Password -->
<div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" required placeholder="Password" class="form-control" id="inputPassword"
           name="data[TblUser][password]"/>
</div>

<div class="form-group">
    <label for="inputFName">FullName</label>
    <input type="text" required placeholder="Full name" class="form-control" id="inputFName"
           name="data[TblProfile][FullName]"/>
</div>

<div class="form-group">
    <label for="add">Address</label>
    <textarea type="text" required placeholder="Full name" class="form-control" id="add"
              name="data[TblProfile][Address]">
        </textarea>
</div>

<div class="form-group">
    <label for="day">DOB</label>
    <!-- Day -->
    <input type="text" class="form-control" name="data[TblProfile][DOB]"
           id="datepicker" placeholder="ChooseDOB"
           data-date-format="dd-mm-yyyy"/>
</div>

<div class="form-group">
    <label for="gender">Gender</label>
    <label class="radio-inline">
        <input type="radio" name="data[TblProfile][Gender]" value="1" checked> Nam
    </label>
    <label class="radio-inline">
        <input type="radio" name="data[TblProfile][Gender]" value="0"> Nữ
    </label>
</div>

<div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" required placeholder="PhoneNum" class="form-control" id="phone"
           name="data[TblProfile][Phone]"/>
</div>

<!-- Avatar-->
<div class="form-group">
    <label for="avt">Avatar</label>
    <input type="file" class="form-control" id="avt" name="data[TblProfile][Avatar]" ACCEPT="image/*"/>
</div>
<!-- Submit btn -->
<button type="submit" class="btn btn-lg btn-primary" name="submit">Đăng kí</button>
<!-- Nút quay lại-->
<button type="button" class="btn btn-lg btn-default" onclick="history.go(-1)">Quay lại</button>
<?php echo $this->Form->end(); ?>

