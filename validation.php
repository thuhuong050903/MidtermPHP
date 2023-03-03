<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Title</title>
<style>
    .container {
        display: flex;
        justify-content: space-around;
        background-color: antiquewhite;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    img {
        width:100%;
    }
    .result {

        width: 30%;
        margin: auto;
        background-color: aquamarine;
    }
</style>
</head>
<body>
<?php 
   require 'xuli.php';
   error_reporting(0);
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $error = array(); // Chưa có lỗi
        // Kiểm tra lỗi username
        if (empty($_POST['name'])) {
            $error['name'] = "Bạn cần nhập tên";
        } else {
            // Kiểm tra định dạng username
            if (!check_name($_POST['name'])) {
                $error['name'] = "Tên không đúng định dạng";
            } else {
                $name = $_POST['name'];
            }
        }
        //Kiểm tra lỗi 
        if (empty($_POST['phoneNumber'])) {
            $error['phoneNumber'] = "Bạn cần nhập vào số điện thoại";
        } else {
            // Kiểm tra định dạng 
            if (!check_phoneNumber($_POST['phoneNumber'])) {
                $error['phoneNumber'] = "Số điện thoại không đúng định dạng";
            } else {
                $phoneNumber = $_POST['phoneNumber'];
            }
        }



        if (empty($_POST['email'])) {
            $error['email'] = "Bạn cần nhập vào email";
        } else {
            // Kiểm tra định dạng 
            if (!check_email($_POST['email'])) {
                $error['email'] = "Emailkhông đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }

        if (empty($_POST['content'])) {
            $error['content'] = "Bạn cần nhập vào số điện thoại";
        } else {
                $content = $_POST['content'];
            }
        
        // Kết luận
        
    }

    if(!empty($error)) {
        echo "<div style='color:red;text-align:center'>Mời bạn nhập lại thông tin </div>";
    }

?>

<div class="container">
<div class="right-content">
        <h3>Liên hệ</h3>
        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSq6jgtHJOvLjAN8_9U1BR99erONAidXKjRzbLyv_-kH4hxga2Q" alt="">
    </div>
<form action="" method="POST" >
    <label for="name">Họ và tên</label> <br/>
    <input type="text" name="name" id="name" value="<?php if (isset($name)) {echo $name;}?>" > <br/>
    <?php if (!empty($error)) { ?>
    <span style="color:red"><?php echo $error['name']; ?></span> <?php } ?>
    <br>
    <label for="phoneNumber">Số điện thoại</label><br/>
    <input type="text" name="phoneNumber" id="phoneNumber" value="<?php if (isset($phoneNumber)) {echo $phoneNumber;} ?>" ><br/>
    <?php if (!empty($error)) { ?>
        <span style="color:red"><?php echo $error['phoneNumber']; ?></span><?php }?>
    <br/>
    <label for="email">Email</label><br/>
    <input type="text" name="email" id="email" value="<?php if (isset($email)) {echo $email;} ?>" ><br/>
    <?php if (!empty($error)) { ?>
        <span style="color:red"><?php echo $error['email']; ?></span>
        <?php } ?>
    <br/>
    <label for="content">Email</label><br/>
    <textarea name="content" rows="5" placeholder="Nội dung" cols="40"><?php echo $content;?></textarea>
    <?php if (!empty($error)) { ?>
        <span style="color:red"><?php echo $error['content']; ?></span>
        <?php } ?>
    <br><br>
    <input type="submit" name="submit_login"  value="Gửi đi">
</form>

</div>

<?php 
    if (empty($error)) {
        echo "<div class='result'>";
        echo "<div> Họ và tên: ". $name.'</div>';
        echo "<div> Số điện thoại: ". $phoneNumber.'</div>';
        echo "<div> Email: ". $email.'</div>';
        echo "<div> Nội dung: ". $content.'</div>';
        echo "</div>";
    } 
     
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>