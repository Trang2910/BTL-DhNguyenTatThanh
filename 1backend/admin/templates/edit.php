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
    <title>Sửa bài viết</title>
</head>
<body>

        <?php function location($url) { ?>
            <script type="text/javascript">
                window.location = "<?=$url?>";
            </script>
        <?php } ?>
    
        <?php 
            $id=$_GET['id'];
            echo $id;
            if(isset($_GET['title'])){
                $title=$_GET['title'];
            }
            if(isset($_GET['content'])){
                $title=$_GET['content'];
            }
            if(isset($_GET['author'])){
                $title=$_GET['author'];
            }
            

            $sql = mysqli_query($conn,"SELECT * from posts where id=$id");
            $r=mysqli_fetch_assoc($sql);
                echo '
                <form method="post">
                    <table border="1" style="width: 100%; line-height:3;text-align:center;font-size: 13px;">
                        <tr>
                            <th style="width: 10%">ID</th>
                            <th style="width: 25%">Tiêu đề</th>
                            <th style="width: 45%">Nội dung</th>
                            <th style="width: 20%">Tác giả</th>
                        </tr>
                ';
                echo "
                        <tr>
                            <td>$id</td>
                            <td><input type='text' name='title_new' value='".$r['title']."' style='width: 100%'></td>
                            <td><input type='text' name='content_new' value='".$r['content']."' style='width: 100%'></td>
                            <td><input type='text' name='author_new'  value='".$r['author']."' style='width: 100%'></td>
                        </tr>
                    </table>
                ";
                echo '
                    <br>
                    <input type="submit" value="Lưu" name="edit" style="border-style:  gray; border-radius: 5px; float: right;">
                </form>
                ';

                if(isset($_POST['edit'])){
                    $title_new=$_POST['title_new'];
                    $content_new=$_POST['content_new'];
                    $author_new=$_POST['author_new'];
                    mysqli_query($conn,"UPDATE posts set title='$title_new', content='$content_new', author='$author_new' where id=$id ") or die(mysqli_error($conn));
                    location("../index.php");
                }
         ?>
    

</body>
</html>
        	


        
