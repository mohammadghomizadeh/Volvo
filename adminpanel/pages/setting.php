<?php
$action = $_GET['action'];
if($action == "setting")
{?>
    <div class="box-header with-border">
        <h3 class="box-title">تنظیمات سایت</h3>
    </div>
    <hr>
    <div class="form-group">
        <label>عنوان سایت </label>
        <input type="text" class="form-control"  name="sitetitle" id="sitetitle">
    </div>
    <div class="form-group">
        <label>توضیحات سایت</label>
        <input type="text" class="form-control"  name="sitedescription" id="sitedescription">
    </div>
    <div class="form-group">
        <label>متن کپی رایت</label>
        <input type="text" class="form-control"  name="sitedescription" id="sitedescription">
    </div>
<?php
}elseif($action == "social")
{

}elseif($action == "aboutus")
{

}elseif($action == "contactus")
{

}
?>