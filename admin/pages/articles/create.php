<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Creating!")</script>'; 
    // header('Refresh:0; url=index.php');

    if(isset($_POST['submit'])){
        $tag = 'all,'. join(',', $_POST['tags']);
        $status = isset($_POST['status']) ? 'true' : 'false';
        $temp = explode('.',$_FILES['file']['name']);
        $detail = str_replace('../../../', './', $_POST['detail']);
        $new_name = round(microtime(true)*9999). '.' . end($temp);
        $url_upload = '../../../assets/image/blog/'.$new_name;
        if(move_uploaded_file($_FILES['file']['tmp_name'],$url_upload)){
            $sql = "INSERT INTO `articles` (`subject`, `sub_title`, `detail`, `image`, `tag`, `status`, `updated_at`, `created_at`) 
                    VALUES ('".$_POST['subject']."', 
                            '".$_POST['sub_title']."', 
                            '".$detail."', 
                            '".$new_name."', 
                            '".$tag."', 
                            '".$status."', 
                            '".date("Y-m-d H:i:s")."', 
                            '".date("Y-m-d H:i:s")."' )";
            $result = $conn->query($sql);
            if($result){
                echo '<script> alert("Finished Creating!")</script>'; 
                header('Refresh:0; url=index.php');
            }else{

            }
        }else{
            echo 'No';
        }

    }else{
        header('location:index.php');
    }
?>