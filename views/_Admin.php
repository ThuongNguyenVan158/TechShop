<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EcommerceStore</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/app.css" />
    <link type="text/css" rel="stylesheet" href="../assets/css/grid.css" />
    <link type="text/css" rel="stylesheet" href="../assets/css/theme.css" />
    <style>
        .currSign:after {
            color: black;
            content: ' VND';
        }
    </style>
</head>
<body>
    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-user">
            <div class="sidebar-user-info">
                <div class="sidebar-user-name">
                    <h4>Hi Thuong</h4>
                </div>
            </div>
            <a href="@Url.Action("Logout","Home")" class="btn btn-outline">
                <i class="fas fa-sign-in-alt"></i>
            </a>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li>
                <a href="<?=Domain?>/Admin/Revenue">
                    <i class="fas fa-donate"></i>
                    <h4>Quản lí doanh thu</h4>
                </a>
            </li>
            <li>
                <a href="<?=Domain?>/Admin/Account">
                    <i class="fas fa-user"></i>
                    <h4>Quản lí tài khoản</h4>
                </a>
            </li>
            <li>
                <a href="<?=Domain?>/Admin/AdminProduct">
                    <i class="fas fa-tablet-alt"></i>
                    <h4>Quản lí sản phẩm</h4>
                </a>
            </li>
            <li>
                <a href="<?=Domain?>/Home/index">
                    <i class="fab fa-intercom"></i>
                    <h4>Trạng thái khách hàng</h4>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <?php require_once "./views/".$data["Page"].".php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
        let x = document.querySelectorAll(".price");
        for (let i = 0, len = x.length; i < len; i++) {
            let num = Number(x[i].innerHTML)
                .toLocaleString('en');
            x[i].innerHTML = num;
            x[i].classList.add("currSign");
        }
    </script>
</body>
</html>