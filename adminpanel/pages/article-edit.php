<?php
include('config/db.php');
$id = $_GET['id'];
$result = $db->select("content","`id` = $id");

foreach($result as $row ){
?>
<div class="box-header with-border">
              <h3 class="box-title">ویرایش مطلب</h3>
            </div>
            <hr>
      <form method="POST" action="index.php?page=article-edit&id=insert" enctype="multipart/form-data">
            <div class="form-group">
                  <label>عنوان مطلب</label>
                  <input type="text" class="form-control" placeholder="متن" name="articletitle" id="articletitle" value="<?php echo $row['title'];  ?>">
             </div>
              </div>

              <div class="form-group">
              <label>دسته بندی مقالات</label>
                  <div class="checkbox">
                  <?php
                 
                      $result = $db->select("content","`type` = 'category' AND `parent` = 100 ");
                      foreach($result as $row)
                      {
                        ?>
                      
                  
                    <label>
                      <input type="checkbox" value="<?php echo $row['id'];  ?>" name="category">
                      <?php echo $row['title'];  ?>
                    </label>
                          <?php
                      }
                      ?>
                  </div>


                </div>
                <hr>
                
                <div class="form-group">
                <label>متن</label>
                <textarea id="editor1" name="editor1" rows="10" cols="80">
                <?php echo $row['description'];?>
                </textarea>
                </div>
                <div class="form-group">

                  <label for="articleimage">تصویر مطلب</label>

                  <input type="file"  name="articleimage" id="articleimage" required >
                  <p id="error1" style="display:none; color:#FF0000;">
                  خطا
                  </p>
                  <p id="error2" style="display:none; color:#FF0000;">
                  حجم بالاست
                  </p>
                  <img scr="uploads/<?php echo $row['image'];?>" width="200" height="200" />
                  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>

                        <script>

                        

                       
                                $('input[type="submit"]').prop("disabled", true);
                                var a=0;
                                //binds to onchange event of your input field
                                $('#articleimage').bind('change', function() {
                                if ($('input:submit').attr('disabled',false)){
                                  $('input:submit').attr('disabled',true);
                                  }
                                var ext = $('#articleimage').val().split('.').pop().toLowerCase();
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
}
?>