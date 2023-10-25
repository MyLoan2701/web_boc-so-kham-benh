<?php 
    session_start();
    require_once __DIR__. '/libs/Database.php';
    $db = new Database;
    if(!isset($_SESSION['idBs']))
    {
        header("location:/tam/");
    }
    $id = getInput('id');
    $idk = getInput('idk');
    $benhnhan = $db->fetchOne("benhnhan as b join thongtinyte as t on b.MaTTYT = t.MaTTYT","b.MaBN = ".$id);
    $benh = $db->fetchsql("select * from benhnhan as b join hoso as h on b.MaHS = h.MaHS join phieukham as p on p.MaHS = h.MaHS join bacsi as bs on bs.MaBS = p.MaBS join nhanvien as n on n.MaNV = bs.MaNV where b.MaBN = ".$id)

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
                    <div class="container" style="color: rgb(40, 140, 255);">
                        <i class="fas fa-long-arrow-alt-left">
                            <a href="quanlykham.php" style="text-decoration: none;">Danh sách khám/</a><?php echo $benhnhan['HoVaTen'] ?>
                        </i>
                    </div>
                    <div id="nd1"><h3><?php echo $benhnhan['HoVaTen'] ?></h3></div>
                    <div class="container" style="padding-right: 15px;
                    padding-left: 15px;">
                        <div class="section-title">
                            <i class="fas fa-user-circle"></i>
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
                                            <div class="name" style="margin-bottom: 1.5625rem;"><?php echo $benhnhan['MaBN'] ?></div>
                                            <div class="briefcontent">
                                                <p>Họ tên: <?php echo $benhnhan['HoVaTen'] ?> &nbsp;</p>
                                                <p></p>
                                                <p>Ngày sinh: <?php echo $benhnhan['NgaySinh'] ?> </p>
                                                <p>Giới tính: <?php echo ($benhnhan['GioiTinh'] == 1)? 'Nữ':'Nam' ?></p>
                                                <p>Nhóm máu:<?php echo $benhnhan['NhomMau'] ?></p>
                                                <p>Cân nặng: <?php echo $benhnhan['CanNang'] ?></p>
                                                <p>Chiều cao: <?php echo $benhnhan['ChieuCao'] ?></p>
                                                <p>Nhịp tim: <?php echo $benhnhan['NhipTim'] ?></p>
                                                <p>Ngày cập nhật gần nhất: <?php echo $benhnhan['NgayCapNhat'] ?></p>
                                            </div>
                                            <div class="wrap-btn">
                                                <div class="btn-left medical-check-banner" style="margin-left: 0.9375rem;">
                                                    <a class="btn btn-booking" href="kham.php?id=<?php echo $idk ?>">
                                                        <span>Khám</span>
                                                        <i class="fas fa-user-md"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news-detail">
                            <h2><strong>Lịch sử khám trước đó:</strong></h2>
                            <table class="bang" style="text-align: center;border: 1px solid #626262;">
                                <tr style="border-width: 1px 1px 3px 1px;">
                                    <th colspan="4" style="background: #F4B083;">Lịch sử khám</th>
                                </tr>
                                <tbody class="bang-tbody" style="background: #e5f7ff;">
                                    <tr style="background: #a3ddf6;">
                                        <th style="width:20%">Ngày khám</th>
                                        <th style="width:40%">Bệnh chuẩn đoán</th>
                                        <th style="width:20%">Bác sĩ khám</th>
                                    </tr>
                                    <?php
                                        foreach($benh as $item):
                                    ?>
                                        <tr>
                                            <td><?php echo $item['NgayKham'] ?></td>
                                            <td><?php echo $item['TenBenh'] ?></td>
                                            <td><?php echo $item['Ten'] ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
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
        

