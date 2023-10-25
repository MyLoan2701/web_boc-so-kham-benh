<?php
    session_start();
    require_once __DIR__. '/libs/Database.php';
    $db = new Database;
    if(!isset($_SESSION['idBs']))
    {
        header("location:/tam/loginnv.php");
    }
    $id = getInput("id");
    if($id != "") 
    {
        $phieukham = $db->fetchOne("dangkikham as d join benhnhan as b on d.MaBenhNhan = b.MaBN join hoso as h on h.MaHS = b.MaHS join thongtinyte as t on b.MaTTYT = t.MaTTYT join catruc as c on d.MaPhongKham = c.MaPhongKham join bacsi as bs on bs.MaBS = c.MaBS join nhanvien as n on n.MaNV = bs.MaNV", "id = ".$id);
    }
    $buoi = time() < strtotime("12:00:00") ? "1" : "2";
    $data = [
        'MaBS' => $phieukham['MaBS'],
        'MaHS' => $phieukham['MaHS'],
        'NgayKham' => postInput('date'),
        'TrieuChung' => postInput('trieuchung'),
        'TenBenh' => postInput('benh'),
    ];
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $isset = $db->insert("phieukham", $data);
        if($isset > 0)
        {
             $_SESSION['luupk'] = "Lưu thành công!";
        }
        else
        {
            $_SESSION['error'] = "Lưu thất bại!";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>eHealthCare</title>
 
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

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

        <div class="modal fade" id="dialog0" role="dialog" aria-hidden="true">
     
            <div class="modal-dialog modal-dialog-centered">
                 <div class="modal-content">
                     
                      <div class="modal-body">
                          <img class="dk-img" alt="error" src="img/right.png">
                        <h2 style="text-align: center">Lưu thành công!</h2>
                         
                     </div>
                        
                    <div class="modal-footer">
                         <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="reload()">Đóng</button>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="tao-pk">
            <div class="global-breadcrumb">
                <div class="container">
                    <div class="Module Module-154">
                        <div class="container" style="color: rgb(40, 140, 255);">
                            <i class="fas fa-long-arrow-alt-left">
                                <a href="quanlykham.php" style="text-decoration: none;">Danh sách khám/</a>Tạo phiếu khám
                            </i>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <div class="middle-fullwidth">
            <section class="booking-examination">
                <div class="container">
                    <div class="Module Module-176">
                        <div class="ModuleContent">
                            <div class="section-title">
                                <span>Đăng ký khám</span>
                            </div>
                        </div>
                    </div>
                    <div class="row border">
                        <div class="col w-full col-sm-4" >
                            <div class="item-bg">
                                <div class="content">
                                    <div class="Module Module-177">
                                        <div class="ModuleContent">
                                            <strong>Lưu ý :</strong>
                                            <p>Phiếu khám được tạo bởi bác sĩ trực thuộc Bệnh viện và là bác sĩ khám cho bạn.</p>
                                            <p>Quý khánh hàng vui lòng cung cấp thông tin chính xác để được phục vụ tốt nhất.</p>
                                            <p>Thông tin liên hệ</p>
                                            <ol class="list_footer">
                                                <span><strong>Bệnh viện Đà Nẵng - Da Nang General Hospital</strong></span>
                                                    <li><strong>Địa chỉ</strong>:  2000 Tôn Đức Thắng, Liên Chiểu, Thành Phố Đà Nẵng</li>
                                                    <li><strong>Điện thoại</strong>: 0227.220199 </li>
                                                    <li><strong>Email</strong>: ehealthcare@danang.gov.vn</li>
                                                    <li><strong>website</strong>: dananghospital</li>
                                                    <li><strong>Lịch làm việc</strong>: Từ thứ 2 - thứ 7 (7:30 - 16:30)</li>
                                                    
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col w-full">
                            <div class="medical-booking">
                                <div class="Module Module-210">
                                    <div class="ModuleContent">
                                        <div class="container">
                                            <div class="medical-form-wrapper">
                                                
                                                <div class="Module Module-161">
                                                    <div class="ModuleContent">
                                                        <div class="text">Tạo phiếu khám</div>
                                                        <div class="caption" style="margin-bottom: 5px">Vui lòng điền thông tin vào form bên dưới để tạo phiếu khám</div>
                                                    </div>
                                                </div>
                                                <div class="Module Module-160">
                                                    <div class="ModuleContent">
                                                        <div id="ctl00_mainContent_ctl02_pnlForm" class="wrap-form">
                                                            <form action="" method="POST">
                                                                <div class="row">
                                                                    <div class="form-group qtext require col col-sm-6">
                                                                        <p style="margin: 0; font-size: 13px">Tên bệnh nhân:</p>
                                                                        <input name="tenbn" type="text" 
                                                                        id="pk-name-bn" placeholder="Họ và tên bệnh nhân" value="<?php echo $phieukham['HoVaTen'] ?>">
                                                                        <!--Báo lỗi khi dòng này không được nhập-->
                                                                        <span id="ctl00_mainContent_ctl02_ctl00" class="fa fa-exclamation-triangle" 
                                                                            style="display:none;">Vui lòng nhập họ và tên</span>
                                                                    </div>

                                                                    

                                                                    <div class="form-group qtext require col col-sm-6">
                                                                        <p style="margin: 0; font-size: 13px">Giới tính:</p>
                                                                        <select name="gioitinh" id="pk-gioitinh-bn" value="<?php echo $phieukham['GioiTinh'] ?>">
                                                                            <option value="0">Giới tính</option>
                                                                            <option value="1" <?php if($phieukham['GioiTinh'] == 1)echo "selected"  ?> >Nữ</option>
                                                                            <option value="2" <?php if($phieukham['GioiTinh'] == 2)echo "selected"  ?>>Nam</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group qtext require col col-sm-6">
                                                                        <p style="margin: 0; font-size: 13px">Tên bác sĩ:</p>
                                                                        <input name="tenbs" type="text" 
                                                                        id="pk-name-bs" placeholder="Tên bác sĩ khám" value="<?php echo $phieukham['Ten'] ?>">
                                                                        <!--Báo lỗi khi dòng này không được nhập-->
                                                                        <span id="ctl00_mainContent_ctl02_ctl00" class="fa fa-exclamation-triangle" 
                                                                            style="display:none;">Vui lòng nhập tên bác sĩ khám</span>
                                                                    </div>

                                                                    <div class="form-group qtext require col col-sm-6">
                                                                        <p style="margin: 0; font-size: 13px">Email liên hệ bác sĩ:</p>
                                                                        <input name="email" type="text" 
                                                                        id="pk-email-bs" placeholder="Email liên hệ bác sĩ" value="<?php echo $phieukham['Email'] ?>">
                                                                        <!--Báo lỗi khi dòng này không được nhập-->
                                                                        <span id="ctl00_mainContent_ctl02_ctl01" class="fa fa-exclamation-triangle" 
                                                                        style="display:none;">Vui lòng nhập email</span>
                                                                        <!--Báo lỗi khi dòng này không hợp lệ-->
                                                                        <span id="ctl00_mainContent_ctl02_ctl02" class="fa fa-exclamation-triangle" 
                                                                        style="display:none;">Email không hợp lệ</span>
                                                                    </div>

                                                                    <div class="form-group qdropdown require col col-sm-12 custom-select">
                                                                        <p style="margin: 0; font-size: 13px">Khoa:</p>
                                                                        <select name="chuyenkhoa" id="pk-chuyenkhoa" value="<?php echo $phieukham['TenKhoa'] ?>">
                                                                            <option value="Xét nghiệm">Xét Nghiệm</option>
                                                                            <option value="Nhi khoa">Nhi khoa</option>
                                                                            <option value="Sản - Phụ khoa">Sản Phụ khoa</option>
                                                                            <option value="Cơ-Xương-Khớp">Cơ - xương - khớp</option>
                                                                            <option value="Khoa ngoại">Khoa Ngoại</option>
                                                                            <option value="Tai - Mũi - Họng">Tai Mũi Họng</option>
                                                                            <option value="Tim Mạch">Tim mạch</option>
                                                                            <option value="Tiêu hóa Gan mật">Tiêu Hoa Gan Mật</option>
                                                                            <option value="Nội tổng quát">Nội tổng quát</option>
                                                                            <option value="Mắt">Mắt</option>
                                                                            <option value="Răng - Hàm - Mặt">Răng - Hàm - Mặt</option>
                                                                            <option value="Cơ Xương Khớp">Cơ Xương Khớp</option>
                                                                            <option value="Nội Thần Kinh">Nội Thần Kinh</option>
                                                                            <option value="Tâm Thể">Tâm Thể</option>
                                                                            <option value="Nội Tiết">Nội Tiết</option>
                                                                            <option value="Dị ứng miễn dịch ">Dị ứng miễn dịch </option>
                                                                            <option value="Hô Hấp">Hô Hấp</option>
                                                                            <option value="Tư vấn giấc ngủ">Tư vấn giấc ngủ</option>
                                                                            <option value="Khám sức khoẻ tổng quát">Khám sức khoẻ tổng quát</option>
                                                                            <option value="Da liễu">Da liễu</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group qtdate require col col-sm-6">
                                                                        <input name="date" type="date" 
                                                                        id="pk-ngaykham" placeholder="Ngày khám" value="<?php echo date('Y-m-d'); ?>">
                                                                    </div>

                                                                    <div class="form-group qdropdown require col col-sm-6 custom-time">
                                                                        <p style="margin: 0"></p>
                                                                        <select name="buoi" id="pk-buoi" value="<?php echo $buoi ?>">
                                                                            <option value="1">Buổi sáng</option>
                                                                            <option value="2">Buổi chiều</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group qparagraph require col col-sm-12">
                                                                        <textarea name="trieuchung" rows="5" cols="20" id="pk-trieuchung" placeholder="Triệu chứng"></textarea>
                                                                        <!--Báo lỗi khi dòng này không được nhập-->
                                                                        <span id="pk-trieuchung2" class="fa fa-exclamation-triangle" style="display:none;">Vui lòng nhập triệu chứng</span>
                                                                    </div>

                                                                    <div class="form-group qparagraph require col col-sm-12">
                                                                        <textarea name="benh" rows="5" cols="20" id="pk-benhchuandoan" placeholder="Bệnh chuẩn đoán" style="height: 3rem;"></textarea>
                                                                        <!--Báo lỗi khi dòng này không được nhập-->
                                                                        <span id="pk-benhchuandoan2" class="fa fa-exclamation-triangle" style="display:none;">Vui lòng nhập bệnh chuẩn đoán</span>
                                                                    </div>
                                                                    
                                                                </div>

                                                                <hr>

                                                                <div>
                                                                    <div class="caption" style="padding-bottom: 10px;">ĐƠN THUỐC</div>
                                                                       <!--  <div class="modal fade" id="dialog1" role="dialog" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">

                                                                                    <div class="modal-body"> -->
                                                                            <div id="donthuoc">
                                                                               <!--  <div class='row thuoc' id='t0'>
                                                                                    <div class='xoadt' style='text-align: right;color: #b0b0b0;text-decoration: none;'>
                                                                                        <a href='#' onclick='removeDonThuoc("t0")'>x</a>
                                                                                    </div>
                                                                                    <div class='form-group qtext require col col-sm-4'>
                                                                                        <input name='' type='text' 
                                                                                        id='pk-name-thuoc' placeholder='Tên thuốc 1'>
                                                                                    </div>
                
                                                                                    <div class='form-group qnumber require col col-sm-4'>
                                                                                        <input name='' type='number' 
                                                                                        id='pk-soluong-thuoc' placeholder='Số lượng'>
                                                                                    </div>
                
                                                                                    <div class='form-group qtext require col col-sm-4'>
                                                                                        <input name='' type='text' 
                                                                                        id='pk-donvi-thuoc' placeholder='Đơn vị thuốc'>
                                                                                    </div>
                
                                                                                    <div class='form-group qparagraph require col col-sm-12'>
                                                                                        <textarea name='' rows='5' cols='20' id='pk-lieudung-thuoc' placeholder='Liều dùng' style='height: 3rem;'></textarea>
                                                                                    </div>
                
                                                                                    <div class='form-group qparagraph require col col-sm-12'>
                                                                                        <textarea name='' rows='5' cols='20' id='pk-cachdung-thuoc' placeholder='Cách dùng' style='height: 3rem'></textarea>
                                                                                    </div>
                                                                                </div> -->
                                                                            </div>
                                                                                       
                                                                                    <!-- </div>

                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="ok">Save</button>
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    </div>
                                                                                </div> -->
                                                                        <!--     </div>
                                                                        </div> -->
                                                                    <!-- <div class="row">
                                                                        <table>
                                                                            <tbody style="text-align: center;">
                                                                                <tr>
                                                                                    <th style="width:20%">Tên thuốc</th>
                                                                                    <th style="width:20%">Liều dùng</th>
                                                                                    <th style="width:20%">Cách dùng</th>
                                                                                    <th style="width:20%">Số lượng</th>
                                                                                    <th style="width:20%">Sửa/Xóa</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>(Tên thuốc)</td>
                                                                                    <td>()</td>
                                                                                    <td>()</td>
                                                                                    <td>()</td>
                                                                                    <td>()</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                       <!--  <div class="col-sm-4">Thuốc </div>
                                                                        <div class="col-sm-4" style="text-align: center;">2 lần/ngày</div>
                                                                        <div class="col-sm-4" style="text-align: right;">
                                                                        <a href="">sửa</a>
                                                                        <a href="">xóa</a>
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="wrap-btn">
                                                                       <a href="#" onclick="themDonThuoc(); return false;">Thêm đơn thuốc</a> 
                                                                    </div>
                                                                </div>

                                                                <div class="form-group frm-btnwrap">
                                                                    <label class="label">&nbsp;</label>
                                                                    <div class="frm-btn">
                                                                        <input type="submit" name="" value="Lưu" id="pk-btnSubmit">
                                                                    </div>
                                                                </div>
                                                                
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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

        <script type="text/javascript">
            var numrow = 0;
            function themDonThuoc() {
                numrow++;
                var input = "<div class='row thuoc' style='margin-bottom: 10px;' id='t"+numrow+"'><div class='xoadt' style='text-align: right;'><a href='#' style='text-decoration: none;' onclick='removeDonThuoc("+'"t'+numrow+'"'+"); return false;' >x</a></div><div class='form-group qtext require col col-sm-4'><input name='' type='text' id='pk-name-thuoc' placeholder='Tên thuốc'> </div> <div class='form-group qnumber require col col-sm-4'> <input name='' type='number' id='pk-soluong-thuoc' placeholder='Số lượng'> </div> <div class='form-group qtext require col col-sm-4'> <input name='' type='text' id='pk-donvi-thuoc' placeholder='Đơn vị thuốc'> </div> <div class='form-group qparagraph require col col-sm-12'><textarea name='' rows='5' cols='20' id='pk-lieudung-thuoc' placeholder='Liều dùng' style='height: 3rem;'></textarea></div> <div class='form-group qparagraph require col col-sm-12'><textarea name='' rows='5' cols='20' id='pk-cachdung-thuoc' placeholder='Cách dùng' style='height: 3rem'></textarea></div></div>";
                $('#donthuoc').append(input);
            }

            function removeDonThuoc(row) {
                $('#'+row).remove();
            }
           
        </script>
         <?php if(isset($_SESSION['luupk'])) :?>
         <script>
            $('#dialog0').modal('show'); 
        </script>
        <?php unset($_SESSION['luupk']); endif; ?>

    </body>
</html>
        

