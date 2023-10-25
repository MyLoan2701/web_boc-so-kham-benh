<?php
    session_start();
    require_once __DIR__. '/libs/Database.php';

    $db = new Database;

    $data = 
    [
        'username' => postInput("username"),
        'password' => postInput("pass")
    ];
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $error = [];
        if(postInput("username") == '')
        {
            $error['username'] = "Tên đăng nhập không được để trống!";
        }
        if(postInput("pass") == '')
        {
            $error['password'] = "Mật khẩu không được để trống!";
        }

        //dang nhap thanh cong
        
        if(empty($error))
        {     

            $isset = $db->fetchOne("taikhoan","TenDangNhap = '".$data['username']."' ");
            if($isset > 0 && $isset['MatKhau'] == $data['password'])
            {
                $bs = $db->fetchOne("bacsi as b join nhanvien as n on b.MaNV = n.MaNV","MaTK = ".$isset['MaTK']);
                $_SESSION['idBs'] = $bs['MaBS'];
                echo "<script>location.href='".base_url()."quanlykham.php'</script>";           
            }
            else
            {
                $_SESSION['error'] = "Tên đăng nhập hoặc mật khẩu không chính xác!";
            }
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eHealthCare</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="css/style2.css">

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>

    <body style="background: #f0f2f5;">
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
                            <!--<li id="login-nv">
                                <i class="fas fa-sign-in-alt"></i>
                                <div>
                                    <a href="" title="Đăng nhập" id="login-nv2">Đăng nhập</a>
                                </div>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>

        </header>

        <div id="trangchu-nv">
            <div class="_8esk">
                <div class="_8esl">
                    <div class="_8ice">
                        <img class="logo1" src="img/ehealthcare.png" alt="eHealthCare">
                    </div>
                    <h2 class="_8eso">eHealthCare vì sức khỏe của bạn, vì cuộc sống của bạn.</h2>
                </div>
                <div class="_8esn">
                    <div class="_8iep">
                        <div class="_6luv">
                            <form class="_9vtf" data-testid="royal_login_form" action="" method="post" onsubmit="">
                                <!--<input type="hidden" name="jazoest" value="21001" autocomplete="off">
                                <input type="hidden" name="lsd" value="AVqZ0arqTHw" autocomplete="off">-->
                                <div>
                                    <div class="_6lux">
                                        <input type="text" class="inputtext _55r1 _6luy" name="username" id="username" placeholder="Tên đăng nhập" autofocus="1" aria-label="Tên đăng nhập">
                                    </div>
                                    <div class="_6lux">
                                        <!--<div class="_6luy _55r1 _1kbt" id="passContainer">-->
                                            <input type="password" class="inputtext _55r1 _6luy" name="pass" id="pass" placeholder="Mật khẩu" aria-label="Mật khẩu">
                                            <!--<div class="_9ls7 hidden_elem" id="u_0_b_Vc">
                                                <a href="#" role="button">
                                                    <div class="_9lsa">
                                                        <div class="_9lsb" id="u_0_c_2/"></div>
                                                    </div>
                                                </a>
                                            </div>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <?php if(isset($_SESSION['error'])) :?>
                                  <p style="text-align: left; margin: 0 40px; color: red;">*<?php echo $_SESSION['error'] ?></p>
                                <?php unset($_SESSION['error']); endif; ?>
                               
                                <!--<input type="hidden" autocomplete="off" name="login_source" value="comet_headerless_login">
                                <input type="hidden" autocomplete="off" name="next" value="">-->
                                <div class="_6ltg">
                                    <button value="1" class="_42ft _4jy0 _6lth _4jy6 _4jy1 selected _51sy" name="login" data-testid="royal_login_button" type="submit" id="u_0_d_qZ">Đăng nhập</button>
                                </div>
                                
                                <div class="_8icz"></div>
                                <div style="margin: 10px 0 0 0;
                                color: #888;
                                font-style: italic;">
                                    (Trang đăng nhập dành cho nhân viên)
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        

        <!--Bootstrap-->
        <script type="text/javascript" src="css/bootstrap.min.js"></script>
    </body>
</html>
        

