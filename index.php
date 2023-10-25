<?php
    session_start();
    require_once __DIR__. '/libs/Database.php';

    $db = new Database;

    $data = 
    [
        'MaBH' => postInput("bhyt"),
    ];

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $error = [];
        if(postInput('bhyt') == '')
        {
            $error['bhyt'] = "Vui lòng nhập mã bảo hiểm của bạn!!";
        }

        //dang nhap thanh cong
        
        if(empty($error))
        {     

            $isset = $db->fetchOne("baohiem as b join benhnhan as bn on b.MaBH = bn.MaBH","b.MaBH = '".$data['MaBH']."' ");
            if($isset > 0)
            {
                $today = new DateTime();
                $expDate = new DateTime($isset['NgayHetHan']);
                if($expDate > $today)
                { 
                    $_SESSION['ma_bh'] = $isset['MaBN'];
                    $_SESSION['welcome'] = "true";
                    echo "<script>location.href='".base_url()."home.php'</script>";
                }
                else
                {
                    $_SESSION['error'] = "Thẻ đã hết hạn!";
                }
              
            }
            else
            {
                $_SESSION['error'] = "Thẻ không tồn tại!";
            }
        }
    }

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

    <body style="background-image: linear-gradient( 
        135deg,#58d5ff 30%,#e4eeeb 100%);
            background-repeat: no-repeat;">
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
         
        <form id="login-bhyt" action="" method="POST">
            <div class="modal-header-login">
                <h5 class="modal-title">eHealthCare</h5>
            </div>

            <hr>
            <div class="modal-header-login-title">
                <div class="modal-header-login-title-1">Đăng nhập vào Bệnh Viện</div>
                <div class="modal-header-login-title-2">(Dành cho khách hàng)</div>
            </div>

            <div class="modal-header-body">
                <div style="visibility: visible;">
                    <form action="">
                        <label id="label-1" for="bhyt">Nhập mã Bảo Hiểm:</label>
                        <input class="login-input" type="text" id="bhyt" name="bhyt">
                        <input type="submit" value="Gửi mã" id="btn-login">
                    </form>
                </div>
            </div>

        </form>
        <div class="modal fade" id="dialog1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header flex-column">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>                      
                        <h4 class="modal-title w-100"><?php echo $_SESSION['error'] ?></h4>    
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--Bootstrap-->
        <script src="css/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="css/bootstrap.min.js"></script>
       
        <?php if(isset($_SESSION['error'])) :?>
         <script>
            $('#dialog1').modal('show');
            var modal = document.getElementById("dialog1");
            modal.style.display = "flex";  
        </script>
        <?php unset($_SESSION['error']); endif; ?>
    </body>
</html>
        

