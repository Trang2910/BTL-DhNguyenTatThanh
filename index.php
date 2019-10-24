<?php
        $conn = mysqli_connect('localhost','root','','web') or die('Kết nối thất bại!'.mysqli_connect_error());
        mysqli_query($conn, 'SET NAMES UTF8');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/Index.css">

  <script src="js/DHNTT.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <title>Trường Đại Học Nguyễn Tất Thành</title>
</head>
<?php
  include "top.php";
?>

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="z-index: 0;">

        <div class="carousel-inner">
          <div class="carousel-item">
            <a href="carousel-1"></a>
            <img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201908_TIN/Web_Slider.jpg" class="d-block w-100" alt="Xet tuyen hoc ba">
            <div class="carousel-caption d-none d-md-block">
              <h3 >ĐH Nguyễn Tất Thành nhận hồ sơ xét tuyển học bạ đợt cuối đến ngày 03/09/2019</h3>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201908_TIN/9_WEB%20SLIDER.png" class="d-block w-100" alt="ky niem quoc khanh">
            <div class="carousel-caption d-none d-md-block">
              <h3>Mừng kỷ niệm 74 năm Quốc khánh nước Cộng hòa xã hội chủ nghĩa Việt Nam (02/09/1945 - 02/09/2019)</h3>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="http://ntt.edu.vn/web/upload/images/slider/BANER-FUTSAL-SINH-VIEN-TP-HCM-2019_NTTU.jpg" class="d-block w-100" alt="giai futsal">
            <div class="carousel-caption d-none d-md-block">
              <h3>Giải đấu Futsal SV Thành phố Hồ Chí Minh 2019</h3>
              <p></p>
            </div>
          </div>
          <div class="carousel-item  active">
            <a href="carousel4.php">
              <img src="http://ntt.edu.vn/web/upload/images/slider/Chinh-sach-hoc-bong-NTTU_Web-Slider.jpg" class="d-block w-100" alt="chinh sach hoc bong">
            </a>
            <div class="carousel-caption d-none d-md-block">
              <h3>Chính sách học bổng Trường Đại học Nguyễn Tất Thành năm 2019</h3>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="http://ntt.edu.vn/web/upload/images/slider/Lien-thong-NTTU_Web-Slider.jpg" class="d-block w-100" alt="tuyen sinh lien thong">
            <div class="carousel-caption d-none d-md-block">
              <h3>Tuyển sinh liên thông 2019</h3>
              <p></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev" > 
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </div>
  <div id="main">
    <div class="container-fluid">
      <div class="row" style="padding: 20px;">

        <div class="col-md-9">
          <h5><a href="">Tin tức</a></h5>
          <br>
          <div class="row">
            <?php
              $sql = mysqli_query($conn,"SELECT * FROM posts order by id ASC limit 3") or die(mysqli_error($conn));
               while($row = mysqli_fetch_assoc($sql)) :
                
            ?>
            <div class="col-md-4">
              <div class="card" >
                <a href="News1.php"><?php echo "<img style='height:auto;width:100%;' src='1backend/admin/".$row['image']."'>"; ?></a>
                <div class="card-body">
                  <a href="News1.php"><?php echo $row['title']; ?></a>
                  <br><br>
                  <p style="text-align: justify;"><?php echo $row['content']; ?></p>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
            <!-- <div class="col-md-4">
              <div class="card" >
                <a href="News2.php"><img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201909_TIN/13(1).JPG" class="card-img-top" alt="..." ></a> 
                <div class="card-body">
                  <a href="News2.php">ĐH Nguyễn Tất Thành phối hợp tổ chức Workshop “Youtube đã làm thay đổi cuộc </a>
                  <br><br>
                  <p style="text-align: justify;">NTTU – Sáng ngày 19/09/2019, tại cơ sở An Phú Đông, Trường ĐH Nguyễn Tất Thành phối hợp cùng Công ty Truyền thông và Giải trí Điền Quân tổ chức chương trình Workshop “Youtube đã làm thay đổi cuộc sống của tôi</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card" >
                <a href="News3.php"><img src="http://ntt.edu.vn/web/upload/images/Khoa-nganh/ketoan-taichinh-thumb.png" class="card-img-top" alt="..."></a> 
                <div class="card-body">
                  <a href="News3.php">ĐH Nguyễn Tất Thành tuyển sinh liên thông các ngành đào tạo</a>
                  <br><br>
                  <p>NTTU - ĐH Nguyễn Tất Thành tuyển sinh liên thông các ngành đào tạo...</p>
                </div>
              </div>
            </div> -->
          </div>
          <ul class="list-unstyled" style="float: right;">
            <li><a class="c-blue-a5 font-weight-bold" href="" style="color: #024282; font-size: 13px;"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
          </ul>
        </div>

        <div class="col-md-3">
          <h5><a href="">Media</a></h5>
          <br>
          <div class="card" style="height: 463px;">
            <iframe style="width: inherit;" src="https://www.youtube.com/embed/JViDyojZzhs" frameborder="0" allowfullscreen=""></iframe>
            <div class="card-body">
              <ul>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="" style="font-size: 14px;">ĐIỂM TIN THÁNG 8</a>
                </li>
                <br>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="" style="font-size: 14px;">ĐH Nguyễn Tất Thành – 20 năm dấu ấn một chặng đường</a>
                </li>
                <br>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="" style="font-size: 14px;">NỎ THẦN - TẬP 8 | BẬT MÍ VỀ NỎ THẦN VÀ NHỮNG CÂU CHUYỆN CÓ THẬT</a>
                </li>
              </ul>
            </div>
          </div>
          <ul class="list-unstyled" style="float: right;">
            <li><a class="c-blue-a5 font-weight-bold" href="" style="color: #024282; font-size: 13px;"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="demo" class="carousel slide" data-ride="carousel"  style=" padding-right: 40px; padding-left: 40px;">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner" style="background-color: rgb(9, 9, 121);">
        <div class="carousel-item active">
          <h2 style="    color: #aa914d;    text-align: center;;   font-weight: bolder; padding-top: 20px">Tại sao chọn đại học Nguyễn Tất Thành?</h2>
          <div class="container-fluid">
            <div class="row" >
              <div class="col-md-4" id="img1" style="background-image: url(http://ntt.edu.vn/web/upload/images/hp_nguoithay-01.svg); ">
                <a href="Chuan-3-sao-qs-stars-anh-quoc.php"><h4>Chuẩn 3 sao QS-Stars <br style="text-align: center;">(Anh Quốc)</br> </h4></a>
                <p id="content">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
              </div>
              <div class="col-md-4" id="img1" style="background-image: url(http://ntt.edu.vn/web/upload/images/hp_xhoi-01.svg);">
                <a href="Dat-chuan-chat-luong-quoc-gia.php"><h4>Đạt chuẩn chất lượng quốc gia</h4></a>
                <p id="content">Là trường đại học ngoài công lập đầu tiên tại TP.HCM được kiểm định đạt chất lượng theo bộ tiêu chí quốc gia do Bộ GD&amp;ĐT ban hành.</p>
              </div>
              <div class="col-md-4" id="img1" style="background-image:  url(http://ntt.edu.vn/web/upload/images/hp_nhatruong-01.svg);">
                <a href="Dai-hoc-hanh-phuc.php"><h4>Đại học hạnh phúc</h4></a>
                <p id="content">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật</p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item ">
          <h2 style="    color: #aa914d;    text-align: center;;   font-weight: bolder; padding-top: 20px">Tại sao chọn đại học Nguyễn Tất Thành?</h2>
          <div class="container-fluid">
            <div class="row" >
              <div class="col-md-4" id="img1"style="    background-image: url(http://ntt.edu.vn/web/upload/images/hp_xhoi-01.svg);">
                <a href="Dat-chuan-chat-luong-quoc-gia.php"><h4>Đạt chuẩn chất lượng quốc gia</h4></a>
                <p id="content">Là trường đại học ngoài công lập đầu tiên tại TP.HCM được kiểm định đạt chất lượng theo bộ tiêu chí quốc gia do Bộ GD&amp;ĐT ban hành.</p>
              </div>
              <div class="col-md-4" id="img1"style="background-image:  url(http://ntt.edu.vn/web/upload/images/hp_nhatruong-01.svg);">
                <a href="Dai-hoc-hanh-phuc.php"><h4>Đại học hạnh phúc</h4></a>
                <p id="content">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật</p>
              </div>
              <div class="col-md-4" id="img1" style="background-image: url(http://ntt.edu.vn/web/upload/images/hp_sinhvien-01.svg);">
                <a href=""><h4>Top 10 thương hiệu nổi tiếng</h4></a>
                <p id="content">Trong những năm qua, Trường ĐH Nguyễn Tất Thành đã không ngừng đổi mới công tác quản trị đại học, nâng cao chất lượng đào tạo, nghiên cứu khoa học, công tác hợp tác quốc tế, công tác sinh viên.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item ">
          <h2 style="    color: #aa914d;    text-align: center;;   font-weight: bolder; padding-top: 20px">Tại sao chọn đại học Nguyễn Tất Thành?</h2>
          <div class="container-fluid">
            <div class="row" >
              <div class="col-md-4" id="img1"style="background-image: url(http://ntt.edu.vn/web/upload/images/hp_sinhvien-01.svg);">
                <a href=""><h4>Top 10 thương hiệu nổi tiếng</h4></a>
                <p id="content"> Trong những năm qua, Trường ĐH Nguyễn Tất Thành đã không ngừng đổi mới công tác quản trị đại học, nâng cao chất lượng đào tạo, nghiên cứu khoa học, công tác hợp tác quốc tế, công tác sinh viên.</p>
              </div>
              <div class="col-md-4" id="img1" style="background-image: url(http://ntt.edu.vn/web/upload/images/hp_nguoithay-01.svg);">
                <a href=""><h4>95% sinh viên tốt nghiệp có việc làm</h4></a>
                <p id="content">Định vị là trường ứng dụng và thực hành hướng tới mục tiêu đáp ứng nhu cầu giáo dục đại học đại chúng, trí thức hóa nguồn nhân lực, tạo môi trường học tập tích cực và trải nghiệm thực tiễn cho sinh viên.</p>
              </div>
              <div class="col-md-4" id="img1" style="background-image:  url(http://ntt.edu.vn/web/upload/images/hp_nhatruong-01.svg);">
                <a href="Dai-hoc-hanh-phuc.php"><h4>Đại học hạnh phúc</h4></a>
                <p id="content">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật</p>
              </div>
            </div>
          </div>
        </div>


        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <br>
      <hr>
      <br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <h5><a href="Hoptacquocte.php">Hợp tác quốc tế</a></h5>
            <br>
            <div class="card" style="    flex-direction: column;">
              <a class="#" href="#">
                <img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201909_TIN/DSC04631.JPG" alt="" class="img">
              </a>
              <div class="card-body">
                <a href="Hoptacquocte.php" style="text-decoration: none;">Khoa Công nghệ Sinh học ĐH Nguyễn Tất Thành làm việc với ĐH Hiroshima</a>
                <br><br>
                <p style="    font-family: 'Open Sans',sans-serif;" style="text-align: justify;">NTTU -  Sáng ngày 17/09/2019, khoa Công nghệ Sinh học Trường ĐH Nguyễn Tất Thành đã có buổi làm việc với ĐH Hiroshima (Nhật Bản)</p>
              </div>
            </div>
            <ul class="list-unstyled" style="float: left;">
              <li><a class="c-blue-a5 font-weight-bold" href="" style="color: #024282; font-size: 13px;"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h5><a href="">Môi trường học tập</a></h5>
            <br>
            <div class="card" style="    flex-direction: column;">
              <a class="" href="Moitruonghoctap.php">
                <img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201909_TIN/37635775082_b83f872e6e_o.jpg" alt="" class="img">
              </a>
              <div class="card-body">
                <a href="Moitruonghoctap.php" class="" style="overflow: hidden; height: 65px;">Nhật ký thực tập nhận thức của sinh viên khoa Du lịch và Việt Nam học Trường ĐH Nguyễn Tất Thành</a>
                <br><br>
                <p style="text-align: justify;">NTTU- Nhằm tạo cầu nối để sinh viên Khoa Du lịch và Việt Nam học Trường Đại học Nguyễn Tất Thành có cơ hội được tiếp cận thực tế, được trải nghiệm kiến thức chuyên môn liên quan đến ngành học qua đó giúp hình thành tình yêu nghề nghiệp đồng thời phát huy và tạo lập cho sinh viên một môi</p>
              </div>
            </div>
            <ul class="list-unstyled" style="float: left;">
              <li><a class="c-blue-a5 font-weight-bold" href="" style="color: #024282; font-size: 13px;"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5><a href="">Môi trường học tập</a></h5>
            <br>
            <ul class="list-unstyled">
              <li class="media event">
                <div class="mtht" >
                  <span class="inner text-center w-100">
                    Sep<br>
                    <b>25</b>
                  </span>
                </div>
                <div class="media-body">
                  <h6 class=""><a href=""><b>Đại hội đại biểu Đoàn TNCS Hồ CHí Minh - Trường ĐH Nguyễn Tất Thành lần VII, nhiệm kỳ 2019 - 2022</b> </a></h6>
                  <ul class="" style="    padding-left: 0;">
                    <li class="">
                      <i class="fa fa-clock-o mr-2" aria-hidden="true" ></i>7:30
                    </li>
                    <li class="">Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM <br> <br> <br></li>
                  </ul>
                </div>
              </li>
              <li class="media event">
                <div class="mtht">
                  <span class="inner text-center w-100">
                    Sep<br>
                    <b>22</b>
                  </span>
                </div>
                <div class="media-body">
                  <h6 class=""><a href=""><b>Chuyên đề tốt nghiệp lớp Việt Nam học - Khoa Du lịch và Việt Nam học</b> </a></h6>
                  <ul class="  "style="    padding-left: 0;">
                    <li class="">
                      <i class="fa fa-clock-o mr-2" aria-hidden="true"> </i>7:00
                    </li>
                    <li class="">Sân bóng - cơ sở quận 7, 458/3F Nguyễn Hữu Thọ, phường Tân Hưng, quận 7 <br><br></li>
                  </ul>
                </div>
              </li>
              <li class="media event">
                <div class="mtht">
                  <span class="inner text-center w-100">
                    Sep<br>
                    <b>19</b>
                  </span>
                </div>
                <div class="media-body">
                  <h6 class=""><a href=""><b>Workshop, Chủ đề: "Youtube đã thay đổi cuộc sống của tôi như thế nào''</b></a></h6>
                  <ul class=""style="    padding-left: 0;">
                    <li class="">
                      <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>07:30
                    </li>
                    <li class="">Hội trường L.HT1, 331 QL1A, phường An Phú Đông, quận 12</li>
                  </ul>
                </div>
              </li>
            </ul>
            <ul class="list-unstyled" style="float: left;">
              <li><a class="c-blue-a5 font-weight-bold" href="" style="color: #024282; font-size: 13px;"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
            </ul>

          </div>
        </div>
      </div>
    </div>
    <br><br>
<?php 
  include 'bottom.php';
?>
