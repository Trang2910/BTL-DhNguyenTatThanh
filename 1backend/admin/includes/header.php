<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/Index.css">
  
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <title>Trường Đại Học Nguyễn Tất Thành</title>
</head>
<body>
  <div class="header">
    <div class="logo">
      <a href=""><img src="http://elib.ntt.edu.vn/App_Themes/ntt/images/ntt-logo.png" alt="ĐHNTT"></a>
    </div>
    <div class="box_notice">
    <?php 
      if($user){
        if (isset($_SESSION['user'])) {

              $name=$_SESSION['user'];
              $sql="SELECT * from account where userName='$name'";
              $result=mysqli_query($conn,$sql);
              $row=mysqli_fetch_assoc($result);
              if($row['userLevel']==0){
                echo ("<span><i class='fas fa-user-circle'></i> ".$_SESSION['user']);
                echo " | Vai trò: Người dùng</span>";
              }
              else{
                echo ("<span><i class='fas fa-user-circle'></i> ".$_SESSION['user']);
                echo " | Vai trò: Quản trị viên</span>";
              }
            }
      }
     ?>
    </div>
  </div>
  <div class="main_signin">

              
    