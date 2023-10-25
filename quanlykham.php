<?php 
    session_start();
    require_once __DIR__. '/libs/Database.php';
    $db = new Database;
    if(!isset($_SESSION['idBs']))
    {
        header("location:/tam/loginnv.php");
    }
    $dskham = $db->fetchsql("SELECT * FROM dangkikham as d join benhnhan as b on d.MaBenhNhan = b.MaBN join catruc as c on d.MaPhongKham = c.MaPhongKham join phongkham as p on p.MaPK = c.MaPhongKham where NgayTruc = CURRENT_DATE and CaTruc = 2 and c.MaBS = ".$_SESSION['idBs']." order by SttKham");
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
            <div class="modal fade" id="dialog1" role="dialog" aria-hidden="true">
     
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                            <img class="error-img" alt="wellcome" src="img/notice.png">
                             
                            <h2 style="text-align: center; margin-top: 0px">Thông báo!</h2>
                            <p>Mời bệnh nhân số <?php echo $dskham[0]['HoVaTen'] ?> đến phòng khám số <?php echo $dskham[0]['SoPhong'] ?></p> 
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                        </div>
                        
                    </div>
                </div>
            </div>


        <div class="trangchu-bs">
            <div class="Module Module-165">
                <div class="ModuleContent">
                    <section class="about" style="padding: 20px 0 0;">
                        <div class="container">
                            <div class="section-title">
                                <span>Danh sách khám phòng <?php echo $dskham[0]['SoPhong'] ?></span>
                                <div class="section-title-2">
                                    <i class="far fa-hospital" aria-hidden="true"></i>
                                    <hr>
                                </div>
                            </div>
                            <div class="text">
                                Với tâm huyết nâng cao chất lượng khám chữa bệnh và tạo điều kiện thuận lợi cho người dân ngày càng tiếp cận dễ dàng hơn các dịch vụ y tế chất lượng cao và hiện đại.
                            </div>

                            <div class="tt-catruc">
                                <table class="bang" style="text-align: center;border: 1px solid #626262;">
                                    <tr style="border-width: 1px 1px 3px 1px;">
                                        <th colspan="4" style="background: #F4B083;">Bệnh nhân đang khám</th>
                                    </tr>
                                    <tbody class="bang-tbody" style="background: #e5f7ff;">
                                        <tr style="background: #a3ddf6;">
                                            <th style="width:20%">Số thứ tự khám</th>
                                            <th style="width:40%">Họ tên bệnh nhân</th>
                                            <th style="width:20%">Xem chi tiết</th>
                                            <th style="width:20%">Khám</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo $dskham[0]['SttKham'] ?></td>
                                            <td><?php echo $dskham[0]['HoVaTen'] ?></td>
                                            <td><a href="ttbn.php?id=<?php echo $dskham[0]['MaBenhNhan'] ?>&&idk=<?php echo $dskham[0]['id'] ?>">Xem chi tiết</a></td>
                                            <td><a href="kham.php?id=<?php echo $dskham[0]['id'] ?>">Khám</a></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="btn-next">
                                    <button id="next-btnSubmit"> <a href="bntieptheo.php?id=<?php echo $dskham[0]['id'] ?>&&maphong=<?php echo $dskham[0]['MaPK'] ?>" style="text-decoration: none; color: white">Next</a></button>
                            
                                </div>
                                
                                <table class="bang" style="text-align: center;border: 1px solid #626262;">
                                    <tr style="border-width: 1px 1px 3px 1px;">
                                        <th colspan="4" style="background: #F4B083;">Danh sách chờ khám</th>
                                    </tr>
                                    <tbody class="bang-tbody" style="background: #e5f7ff;">
                                        <tr style="background: #a3ddf6;">
                                            <th style="width:20%">Số thứ tự khám</th>
                                            <th style="width:60%">Họ tên bệnh nhân</th>
                                            <th style="width:20%">Xem chi tiết</th>
                                        </tr>
                                        <?php
                                            foreach($dskham as $i => $item): if($i == 0)continue;
                                        ?>

                                        <tr>
                                            <td><?php echo $item['SttKham'] ?></td>
                                            <td><?php echo $item['HoVaTen'] ?></td>
                                            <td><a href="ttbn.php?id=<?php echo $item['MaBenhNhan'] ?>&&idk=<?php echo $item['id'] ?>">Xem chi tiết</a></td>
                                           
                                        </tr>

                                        <?php endforeach ?>
                                    </tbody>
                                </table>

                            <!--     <div class="tt-kham2" style="font-weight: 500;">
                                    <div>Tổng số người đăng ký khám (đến hiện tại): </div>
                                    <div>Số người đã khám: </div>
                                    <div>Số thứ tự khám tiếp theo: <span style="color: #0095ff;"><?php echo $dskham[0]['SoThuTuKham'] ?></span></div>
                                    <div>Số người đang chờ: <span style="color: #ff0000;"><?php echo $dskham[0]['SoNguoiCho'] ?></span></div>
                                </div> -->
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

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <?php if(isset($_SESSION['bntt'])) :?>
         <script>
            $('#dialog1').modal('show'); 
        </script>
         <?php unset($_SESSION['bntt']); endif; ?>
    </body>
</html>
        

