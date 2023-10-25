<?php 
    session_start();
    require_once __DIR__. '/libs/Database.php';
    $db = new Database;
    if(!isset($_SESSION['idBs']))
    {
        header("location:/tam/");
    }
    $id = $_SESSION['idBs'];
    $bacsi = $db->fetchOne("bacsi as b JOIN chuyenkhoa as ck on b.MaCK = ck.MaCK JOIN nhanvien as n on b.MaNV = n.MaNV JOIN catruc as c on c.MaBS = b.MaBS JOIN phongkham as p on p.MaPK = c.MaPhongKham","NgayTruc = CURRENT_DATE and CaTruc = 2 and b.MaBS = ".$id." ");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>eHealthCare</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="css/style2.css">

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>

    <body>
        <header>
            <div class="nav-desk">
                <div class="nav-top">
                    <div class="container">
                        <ul class="table_cell_top">
                            <li>
                                <i class="fas fa-phone-volume"></i>
                                <div>Hỗ trợ chuyên môn: 1900-2701</div>
                            </li>
                            <li>
                                <i class="fas fa-phone-volume"></i>
                                <div>Hỗ trợ kỹ thuật: 1900-2202</div>
                            </li>
                            
                            <li id="header-nv">
                                <i class="fas fa-user"></i>
                                <div>
                                    <a href="ttcn.php" title="Thông tin cá nhân" id="info-user">Thông tin cá nhân</a>
                                </div>
                            </li>
                            <li id="header-nv">
                                <i class="fas fa-sign-out-alt"></i>
                                <div>
                                    <a href="logout.php" title="Đăng xuất" id="logout-nv2">Đăng xuất</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </header>

        <div class="header-wrap-bottom" style="background: #f5f5f5;;">
            <div class="Module Module-142">
                <div class="ModuleContent">
                    <div class="container">
                        <div class="navbar-primary-menu">
                            <div class="logo2">
                                <a href="trangchubs.php" title="Giới thiệu">
                                    <img class="logo3" alt="Giới thiệu" src="img/ehealthcare.png">
                                </a>
                            </div>
                            <ul>
                                <li class="drop-down">
                                    <div class="title">
                                        <a href="quanlykham.php" title="Quản lý khám bệnh">Quản lý khám</a>
                                    </div>
                                    
                                </li>
                                <li class="drop-down">
                                    <div class="title">
                                        <a href="catruc.php" title="Ca trực">Ca trực</a>
                                    </div>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--BODY MAIN-->
        <div class="bac-si">
            <div class="ModuleContent">
                <section class="specialized">
                    <div id="nd1"><h3>Thông tin cá nhân</h3></div>
                    <div class="container" style="padding-right: 15px;
                    padding-left: 15px;">
                        <div class="section-title">
                            <i class="fas fa-stethoscope"></i>
                            <hr>
                        </div>

                        <div class="border-bottom">
                            <div class="row">
                                <div class="col w-full" id="row-item-2">
                                    <div class="section-card">
                                        <a class="image-wrap shine">
                                            <img src="hinh3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col w-full" id="row-item-3" relative
                                style="background-color: #f0f9fd;">
                                    <div class="section-card" id="section-card-2">
                                        <div class="wrap-text"
                                        style="padding-top: 1.25rem;
                                        padding-left: 0;">
                                            <div class="name" style="margin-bottom: 1.5625rem;"><<?php echo $bacsi['HocVi']." ".$bacsi["Ten"] ?></div>
                                            <div class="briefcontent">
                                                <p>Học hàm học vị: <?php echo $bacsi['HocVi'] ?>&nbsp;</p>
                                                <p></p>
                                                <p>Kinh nghiệm: <?php echo $bacsi['KinhNghiem'] ?></p>
                                                <p>Chức vụ: C<?php echo $bacsi['ChucVu'] ?></p>
                                                <p>Email: <?php echo $bacsi['Email'] ?></p>
                                                <p>SĐT: <?php echo $bacsi['Sdt'] ?></p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news-detail">
                            <h2><strong>GIỚI THIỆU</strong></h2>
                            <p><?php echo $bacsi['MoTa'] ?></p>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!--FOOTER-->
        <section class="footer_content" style="margin:0px;">
            <div class="container">
            <div class="row">
                
                <div class="col-sm-12" id="footer-1">
                    
                
                    <div class="col-sm-6" id="footer-2">
                        <!-- Đường gạch chân tiêu đề -->
                        <div class="underline_line">
                            <h3><span>LIÊN HỆ BỆNH VIỆN</span></h3>
                        </div>
                            <ol class="list_footer">
                            <span><strong>Bệnh viện Đà Nẵng - Da Nang General Hospital</strong></span>
                                <li><strong>Địa chỉ</strong>:  2000 Tôn Đức Thắng, Liên Chiểu, Thành Phố Đà Nẵng</li>
                                <li><strong>Điện thoại</strong>: 0227.220199 </li>
                                <li><strong>Email</strong>: ehealthcare@danang.gov.vn</li>
                                <li><strong>website</strong>: dananghospital</li>
                                <li><strong>Lịch làm việc</strong>: Từ thứ 2 - thứ 7 (7:30 - 16:30)</li>
                                
                            </ol>
                    </div>
                    <div class="col-sm-6" id="footer-2">
                        <!-- Đường gạch chân tiêu đề -->
                        <div class="underline_line">
                            <h3><span>GIỚI THIỆU TÓM LƯỢC</span></h3>
                        </div>
                            <p class="text-footer">
                            Bệnh viện Đà Nẵng là bệnh viện tuyến cuối cùng của thành phố Đà Nẵng, chịu trách nhiệm thu dung điều trị bệnh nhân của thành phố Đà Nẵng, tỉnh Quảng Nam và một số tỉnh Miền Trung và Tây Nguyên như Quảng Ngãi, Bình Định, Đak Lak…
        <br>
        Ngoài chức năng khám chữa bệnh, bệnh viện còn là cơ sở thực hành của Trường Đại học Y Huế, Học viện Quân Y, Trường Cao đẳng Y tế TW2..
        <br>
        Bệnh viện mở rộng quan hệ hợp tác với các tổ chức nước ngoài, tranh thủ các nguồn viện trợ để nâng cấp cơ sở vật chất, trang thiết bị và giao lưu về chuyên môn, chuyển giao các kỹ thuật mới trong chẩn đoán và điều trị.
                    </p></div>
                    
                </div>
                </div>
                </div>
            </section>

            <footer>
                <div id="goTop">
                            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ3Ni43MzcgNDc2LjczNyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDc2LjczNyA0NzYuNzM3OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGQ9Ik0yMzguMzY5LDBDMTA2LjcyNiwwLDAsMTA2LjcyNiwwLDIzOC4zNjljMCwxMzEuNjc1LDEwNi43MjYsMjM4LjM2OSwyMzguMzY5LDIzOC4zNjkgICAgIGMxMzEuNjc1LDAsMjM4LjM2OS0xMDYuNjk0LDIzOC4zNjktMjM4LjM2OUM0NzYuNzM3LDEwNi43MjYsMzcwLjA0MywwLDIzOC4zNjksMHogTTM1Mi43MjIsMjg5LjIyMSAgICAgYy02LjE5OCw2LjE5OC0xNi4yNzMsNi4xOTgtMjIuNDcsMGwtOTEuODgzLTkxLjg4M2wtOTEuODgzLDkxLjg4M2MtNi4xOTgsNi4xOTgtMTYuMjczLDYuMTk4LTIyLjQ3LDAgICAgIGMtNi4xOTgtNi4xNjYtNi4xOTgtMTYuMjczLDAtMjIuNDdMMjI3LjA4NiwxNjMuNjhjMy4xMTUtMy4xMTUsNy4xODMtNC42NCwxMS4yODMtNC42NHM4LjE2OCwxLjUyNiwxMS4yODMsNC42NEwzNTIuNzIyLDI2Ni43NSAgICAgQzM1OC45MiwyNzIuOTQ4LDM1OC45MiwyODIuOTkxLDM1Mi43MjIsMjg5LjIyMXoiIGZpbGw9IiMwMDAwMDAiLz4KCQk8L2c+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==">
                        </div>		
                <span>Copyright © 2021. All rights reserved</span>
            </footer>
        <!--Bootstrap-->
        <script type="text/javascript" src="css/bootstrap.js"></script>
    </body>
</html>
        

