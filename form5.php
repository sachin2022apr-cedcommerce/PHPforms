<?php
    if(isset($_POST['submit'])){
	
	    $img=$_FILES['img']['name'];

	    $tmp_img_name=$_FILES['img']['tmp_name'];

        $folder = 'upload/';

	    move_uploaded_file($tmp_img_name,$folder.$img);

    }

?>


<form action='' method='POST' enctype='multipart/form-data'>


    <input type='file' name='img'><br><br>
    <hr><br>
    <input type='submit' name='submit'>


</form>