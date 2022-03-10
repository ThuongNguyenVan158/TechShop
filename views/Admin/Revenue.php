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
    <link type="text/css" rel="stylesheet" href="../../assets/css/app.css" />
    <link type="text/css" rel="stylesheet" href="../../assets/css/grid.css" />
    <link type="text/css" rel="stylesheet" href="../../assets/css/theme.css" />
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
            <a href="" class="btn btn-outline">
                <i class="fas fa-sign-in-alt"></i>
            </a>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li>
                <a href="">
                    <i class="fas fa-donate"></i>
                    <h4>Quản lí doanh thu</h4>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-user"></i>
                    <h4>Quản lí tài khoản</h4>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-tablet-alt"></i>
                    <h4>Quản lí sản phẩm</h4>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fab fa-intercom"></i>
                    <h4>Trạng thái khách hàng</h4>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- conttent -->
    <div class="main">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card__header1">
                        <h3>Quản lí doanh thu</h3>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6 col-sm-12">
                            <div class="box box-hover">
                                <!-- COUNTER -->
                                <div class="counter">
                                    <div class="counter-title">
                                        Tổng đơn hàng
                                    </div>
                                    <div class="counter-info">
                                        <div class="counter-count">
                                            3
                                        </div>
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                </div>
                                <!-- END COUNTER -->
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                            <div class="box box-hover">
                                <!-- COUNTER -->
                                <div class="counter">
                                    <div class="counter-title">
                                        Tổng doanh thu
                                    </div>
                                    <div class="counter-info">
                                        <div class="counter-count price">
                                            3
                                        </div>
                                        <i class="fas fa-donate"></i>
                                    </div>
                                </div>
                                <!-- END COUNTER -->
                            </div>
                        </div>
                    </div>
                    <div className="card__body">
                        <div class="col-12">
                            <!-- ORDERS TABLE -->
                            <div class="box">
                                <div class="box-header">
                                    Danh sách Bill đã thanh toán
                                </div>
                                <div class="box-body overflow-scroll">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên</th>
                                                <th>Phương thức thanh toán</th>
                                                <th>Số điện thoại</th>
                                                <th>Tổng thanh toán</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>@revenue.BillId</td>
                                                <td>
                                                    @revenue.FullName
                                                </td>
                                                <td>@revenue.PaymentMethod</td>
                                                <td>@revenue.PhoneNumber</td>
                                                <td class="price">@revenue.TotalPrice</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END ORDERS TABLE -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- conttent -->
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