<?php 
    session_start();
    require_once __DIR__. '/libs/Database.php';
    $db = new Database;
    if(!isset($_SESSION['idBs']))
    {
        header("location:/tam/");
    }
    $id = $_SESSION['idBs'];
    $catruc = $db->fetchsql("select * from catruc as c join phongkham as p on c.MaPhongKham = p.MaPK where c.MaBS = ".$id);

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
                                    <a href="" title="Đăng xuất" id="logout-nv2">Đăng xuất</a>
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
                                    <!--<ul class="sub-nav">
                                        <li>
                                            <a href="https://www.umcclinic.com.vn/gioi-thieu" title="Giới thiệu">Giới thiệu</a>
                                        </li>
                                        <li>
                                            <a href="https://www.umcclinic.com.vn/gioi-thieu/tai-sao-chon-chung-toi" title="Tại sao chọn chúng tôi">Tại sao chọn chúng tôi</a>
                                        </li>
                                        <li>
                                            <a href="https://www.umcclinic.com.vn/gioi-thieu/co-so-vat-chat" title="Cơ sở vật chất">Cơ sở vật chất</a>
                                        </li>
                                    </ul>-->
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
        <div class="trangchu-bs">
            <div class="Module Module-165">
                <div class="ModuleContent">
                    <section class="about" style="padding: 20px 0 0;">
                        <div class="container">
                            <div class="section-title">
                                <span>Thông tin ca trực</span>
                                <div class="section-title-2">
                                    <i class="far fa-hospital" aria-hidden="true"></i>
                                    <hr>
                                </div>
                            </div>
                            <div class="text">
                                Với tâm huyết nâng cao chất lượng khám chữa bệnh và tạo điều kiện thuận lợi cho người dân ngày càng tiếp cận dễ dàng hơn các dịch vụ y tế chất lượng cao và hiện đại.
                            </div>

                            <div class="tt-catruc">
                                <table class="bang" style="text-align: center;">
                                    <tr style="border-width: 1px 1px 3px 1px;">
                                        <th colspan="4" style="background: #F4B083;">THÔNG TIN CA TRỰC CỦA TÔI</th>
                                    </tr>
                                    <tbody class="bang-tbody">
                                        <tr>
                                            <th style="width:20%">Id</th>
                                            <th style="width:30%">Ngày trực</th>
                                            <th style="width:20%">Ca trực</th>
                                            <th style="width:30%">Phòng trực</th>
                                        </tr>
                                        <?php
                                            foreach($catruc as $item):
                                        ?>

                                        <tr>
                                            <tr>
                                                <td><?php echo $item['MaCT'] ?></td>
                                                <td><?php echo $item['NgayTruc'] ?></td>
                                                <td>
                                                    <?php 
                                                    switch($item['CaTruc']) {
                                                        case '1': 
                                                            echo "Sáng";
                                                            break;
                                                        case '2':
                                                             echo "Trưa";
                                                            break;
                                                        case '3':
                                                             echo "Chiều";
                                                            break;
                                                        case '4':
                                                             echo "Tối";
                                                            break;
                                                        case '5':
                                                             echo "Khuya";
                                                            break;
                                                        default: break;
                                                    } 
                                                     ?>
                                                </td>
                                                <td><?php echo $item['SoPhong'] ?></td>
                                            </tr>
                                            
                                        </tr>

                                        <?php endforeach ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
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
        

