<?php
        $conn = mysqli_connect('localhost','root','','web') or die('Kết nối thất bại!'.mysqli_connect_error());
        mysqli_query($conn, 'SET NAMES UTF8');
        session_start();
        $user = $_SESSION['user'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Thêm bài viết</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
            <label>Tiêu đề bài viết</label>
            <br>
            <input name="title" type="text" placeholder="Nhập tiêu đề bài viết" class="form-control">
            <br>
            <label>Nội dung </label>
            <br>
            <textarea name="content" class="form-control" rows="2" placeholder="Nhập nội dung tại đây"></textarea>
            <br>
            <label>Tác giả</label>
            <br>
            <input name="author" type="text" placeholder="Nhập tên tác giả" class="form-control">
            <br>

            <label>Chọn ảnh</label>
            <br>
            <input type="file" name="img">
            <br>
            <br>
            <input type="submit" name="add" value="Lưu" style="border-style: gray; border-radius: 5px;">

            <?php 
                if(isset($_POST['add'])){

                    
                    
                    if(!empty($_POST['title'])&& !empty($_POST['content'])&& !empty($_POST['author']) ){
                        $title=$_POST['title'];
                        $content=$_POST['content'];
                        $author=$_POST['author'];
                        $img=$_FILES['img']['name'];
                        
                        $link_img='upload_image/'.$img;
                        move_uploaded_file($_FILES['img']['tmp_name'], "../upload_image/".$img);

                        mysqli_query($conn,"INSERT into posts(title, content, author, dateEdit, userEdit,image) VALUES ('$title','$content','$author',CURDATE(),'$user','$link_img')") or die(mysqli_error($conn));
                        echo "Đã thêm bài viết thành công, vui lòng reload trang để kiểm tra bài viết!!!";
                    }else{
                        echo "Vui lòng nhập đầy đủ thông tin!!!";
                    }
                }
                
            ?>
    </form>
</body>
</html>
            


        
