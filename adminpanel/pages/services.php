<?php
$action = $_GET['action'];

if($action == "new"){?>
                        <!--New-Service-Script-->
                        <div class="box-header with-border">
                            <h3 class="box-title">افزودن مطلب جدید</h3>
                        </div>
                        <hr>
                        <form method="POST" action="index.php?page=services-new" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>عنوان مطلب</label>
                                            <input type="text" class="form-control" placeholder="متن" name="servicetitle" id="servicetitle">
                                        </div>
                                        <div class="form-group">
                                            <label>متن</label>
                                            <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            این ویرایشگر راست چین و فارسی شده و تنظیمات آن به صورت اختصاصی تنظیم شده است...
                                            </textarea>
                                        </div>
                                        <div class="form-group">

                                            <label for="serviceicon">بارگزاری آیکون</label>

                                            <input type="file"  name="serviceicon" id="serviceicon" required >
                                            <p id="error1" style="display:none; color:#FF0000;">
                                            Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
                                            </p>
                                            <p id="error2" style="display:none; color:#FF0000;">
                                            Maximum File Size Limit is 1MB.
                                            </p>
                                            <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>

                                                <script>

                                                

                                                
                                                        $('input[type="submit"]').prop("disabled", true);
                                                        var a=0;
                                                        //binds to onchange event of your input field
                                                        $('#serviceicon').bind('change', function() {
                                                        if ($('input:submit').attr('disabled',false)){
                                                            $('input:submit').attr('disabled',true);
                                                            }
                                                        var ext = $('#serviceicon').val().split('.').pop().toLowerCase();
                                                        if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
                                                            $('#error1').slideDown("slow");
                                                            $('#error2').slideUp("slow");
                                                            a=0;
                                                            }else{
                                                            var picsize = (this.files[0].size);
                                                            if (picsize > 1000000){
                                                            $('#error2').slideDown("slow");
                                                            a=0;
                                                            }else{
                                                            a=1;
                                                            $('#error2').slideUp("slow");
                                                            }
                                                            $('#error1').slideUp("slow");
                                                            if (a==1){
                                                            $('input:submit').attr('disabled',false);
                                                            }
                                                        }
                                                        });
                                                    
                                                </script>
                                            <p class="help-block">تصاویر با کیفیت خوب و حجم پایین بارگزاری شود.باتشکر</p>
                                        </div>
                                        <div class="form-group">
                                        <input class="btn bg-olive btn-flat margin" type="submit" value="ارسال مطلب"> 
                                        </div>

                        </form>
<?php
//End-Service-New Service
}elseif($action == "list"){

}elseif($action == "other"){


}else{
    echo "مقداری ارسال نشده است";
}