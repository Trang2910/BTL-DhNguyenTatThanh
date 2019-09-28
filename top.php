
<body>
    <div id="wrapper">
        <div id="header">

            <div id="menu1">
                <nav class="navbar navbar-expand-lg navbar-dark" style="padding: 0px;">
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>

                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <a class="nav-link" href="#" style="color: #fdb913; margin-left: 30px;">HOTLINE: 0912.336.069  -  0906.149.686</a>
                                <ul class="navbar-nav mr-auto">
                                  <li class="nav-item">
                                    <a class="nav-link nav1" href="Sinhvien.html" >SINH VIÊN</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link nav1" href="Giangvien.html" >GIẢNG VIÊN</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link nav1" href="#" >ĐÀO TẠO QUỐC TẾ</a>
                                  </li>
                                </ul>
                              </div>
                </nav>
                <div class="nav-search">
                    <form class="navbar-form navbar-left" role="search" style="display: flex;align-items: center;" method="post">
                        <div class="input-group" style="align-items: center;background-color: #012b64">
                            <input type="text" class="form-control" placeholder="Tìm kiếm thông tin" style="background-color: #012b64;border: none;">
                            <span class="input-group-btn">
                                <i class="fas fa-search" style="color: white; padding:14px;"></i>
                            </span>
                        </div>
                        <img src="image/E.jpg" alt="" style="width:20px; height:15px;">
                        <input type="submit" name="login" value="Đăng nhập" style="border: none; border-radius: 10px; height: 30px;background-color: #FFFAF0; margin-left: 5px;">
                        <?php 
                            if(isset($_POST['login'])){
                                header('location:login/login.php');
                            } 
                        ?>
                    </form> 
                </div>
                
                
            </div>
            </div>

            <div id="menu2" class="container-fluid">
                <div id="logo" class="col-3">
                    <a href="index.php"><img src="http://ntt.edu.vn/web/frontend/images/logo_ntt.png" alt="logo"></a>
                </div>
                <div id="nav2" class="col-9">
                    <nav class="nav nav-pills nav-fill">
                      <a class="nav-item nav-link nav2" href="Gioithieu.php"><i class="fa fa-info-circle"></i> Giới thiệu</a>
                      <a class="nav-item nav-link nav2" href="Tuyensinh.php"><i class="fa fa-graduation-cap"></i> Tuyển sinh</a>
                      <a class="nav-item nav-link nav2" href="Daotao.php"><i class="fa fa-book"></i> Đào tạo</a>
                      <a class="nav-item nav-link nav2" href="Nghiencuu.php"><i class="fa fa-bookmark"></i> Nghiên cứu</a>
                      <a class="nav-item nav-link nav2" href="Hoptacdoanhnghiep.php"><i class="fas fa-handshake"></i> Hợp tác doanh nghiêp</a>
                    </nav>
                </div>
            </div>
            
            <div id="menu3" >
                        
                        <div class="dropdown" style="position: relative;">
                            <span class="span" style="z-index: 2;top: -1px; right: 46%;position: absolute; " data-toggle="dropdown"><i id="triangle-button" class="fa fa-bars" style="font-size: 30px;"></i></span>
                            
                            <button type="button" class="btn btn-responsive" data-toggle="dropdown" style=""><i class="fa fa-bars" style="font-size: 30px;"></i></button>

                            <div class="dropdown-menu" style="width: 100%;z-index: 1;">
                                <div class="container" style="padding: 0px; margin: 0px;">
                                    <div class="row menu-main" style="padding-top: 50px;">
                                        <div class="col-3">
                                            <h5 class="dropdown-header" style="color: #fff">Giới thiệu chung</h5>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Giới thiệu chung</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Toàn cảnh ĐH Nguyễn Tất Thành</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Thông tin 3 công khai</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Đảm bảo chất lượng</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Phát triển bền vững</a>

                                            <h5 class="dropdown-header" style="color: #fff">Hợp tác doanh nghiệp</h5>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Giới thiệu việc làm</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Giới thiệu thực tập</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Câu lạc bộ Doanh nghiệp</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Ban liên lạc Cựu sinh viên</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Liên kết hợp tác</a>
                                        </div>
                                        <div class="col-3">
                                            <h5 class="dropdown-header" style="color: #fff">Tuyển sinh</h5>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Các bậc đào tạo</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Thông tin tuyển sinh</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Chính sách học bổng</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Hướng nghiệp</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Xét tuyển trực tuyên</a>

                                            <h5 class="dropdown-header" style="color: #fff">Nghiên cứu</h5>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Hoạt động khoa học công nghệ</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Viện-Trung tâm nghiên cứu</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Công bố khoa học</a>
                                        </div>
                                        <div class="col-3">
                                            <h5 class="dropdown-header" style="color: #fff">Đào tạo</h5>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Khối khoa học sức khỏe</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Khối Kinh tế-Quản trị</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Khối Kỹ thuật-Công nghệ</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Khối Mỹ thuật-Nghệ thuật</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right"></i> Khối đào tạo quốc tế</a>

                                            
                                        </div>
                                        <div class="col-3 menu-icon">
                                            <br>
                                            <a class="dropdown-item" href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
                                            <a class="dropdown-item" href="#"><i class="fab fa-google-plus"></i> Google</a>
                                            <a class="dropdown-item" href="#"><i class="fab fa-youtube"></i> Youtube</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-envelope"></i> Email</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-comments"></i> Zalo</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-graduation-cap"></i> Egov</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-users"></i> Tuyển dụng</a>
                                        </div>
                                    </div>
                                </div>
                              
                              
                            </div>
                        </div>