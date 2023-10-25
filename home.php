<?php 
    session_start();
    require_once __DIR__. '/libs/Database.php';
    $db = new Database;
    if(!isset($_SESSION['ma_bh']))
    {
        header("location:/tam/");
    }
    $chuyenkhoa = $db->fetchsql("SELECT * FROM chuyenkhoa");
    $benhnhan = $db->fetchID("benhnhan",intval($_SESSION['ma_bh']), "MaBN"); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Đăng ký khám bệnh</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="css/style.css">

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
                        </ul>
                    </div>
                </div>
            </div>

        </header>

     
            <div class="modal fade" id="dialog1" role="dialog" aria-hidden="true">
     
                <div class="modal-dialog">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                            <img class="error-img" alt="error" src="img/bluestart.png">
                             
                            <h2 style="text-align: center; margin-top: 0px">Wellcome to our Clinic!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet tincidunt lacus. Aenean sodales, felis in fringilla rutrum, tortor massa facilisis nulla, quis malesuada lorem odio ut ligula. Aenean ultricies elit eu neque facilisis malesuada. Praesent blandit imperdiet pharetra. Aliquam erat volutpat.</p> 
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                        </div>
                        
                    </div>
                </div>
            </div>


        <div class="chuyen-khoa">

            <div class="ModuleContent">
                <section class="specialized">
                    <div id="nd1"><h3>Chuyên Khoa</h3></div>
                    <div class="container" style="padding-right: 15px;
                    padding-left: 15px;">
                        <div class="section-title">
                            <i class="far fa-hospital"></i>
                            <hr>
                        </div>

                        <div class="row">
                            <?php
                                foreach($chuyenkhoa as $item):
                            ?>
                            <div class="col w-full md:w-6/12" id="row-item">
                                <div class="specialist-item">
                                    <div class="image-wrap">
                                        <a href="bacsi.php?id=<?php echo $item['MaCK'] ?>" title="Chẩn đoán hình ảnh">
                                            <img class="lazyloaded" alt="Chẩn đoán hình ảnh" src="<?php echo $item['HinhAnh'] ?>">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="sub-title">
                                            <a href="bacsi.php?id=<?php echo $item['MaCK'] ?>" title="<?php echo $item['TenKhoa'] ?>"><?php echo $item['TenKhoa'] ?></a>
                                        </div>
                                        <div class="btn-left">
                                            <a class="btn btn-view-more" href="bacsi.php?id=<?php echo $item['MaCK'] ?>" title="<?php echo $item['TenKhoa'] ?>">
                                                <span>Xem chi tiết</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>

                            <div class="col w-full md:w-6/12" id="row-item" style="opacity: 0;">
                                <div class="specialist-item">
                                    
                                </div>
                            </div>


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
        <script src="css/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="css/bootstrap.min.js"></script>
        <?php if(isset($_SESSION['welcome'])) :?>
         <script>
            $('#dialog1').modal('show');
            var modal = document.getElementById("dialog1");
            modal.style.display = "flex"; 
        </script>
        <?php unset($_SESSION['welcome']); endif; ?>
    </body>
</html>
        

