<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous" />

    <!--Fontawesome CDN-->
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
          crossorigin="anonymous" />

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/site.css" />
</head>
<body class="login-page">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Đăng ký</h3>
                </div>
                <div class="card-body">
                    <form asp-controller="Home" asp-action="Register" method="post">
                        <span asp-validation-for="UserName" class="text-danger"></span>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text"
                                   required="required"
                                   class="form-control"
                                   placeholder="Tên tài khoản"
                                   asp-for="UserName" />
                        </div>
                        <span asp-validation-for="Password" class="text-danger"></span>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-key"></i>
                                </span>
                            </div>
                            <input type="password"
                                   required="required"
                                   class="form-control"
                                   placeholder="Mật khẩu (đủ 4 loại)"
                                   asp-for="Password" />
                        </div>
                        <span asp-validation-for="RePassword" class="text-danger"></span>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-key"></i>
                                </span>
                            </div>
                            <input type="password"
                                   class="form-control"
                                   required="required"
                                   placeholder="Xác nhận mật khẩu"
                                   asp-for="RePassword" />
                        </div>
                        <span asp-validation-for="FullName" class="text-danger"></span>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-signature"></i>
                                </span>
                            </div>
                            <input type="text"
                                   class="form-control"
                                   required="required"
                                   placeholder="Họ và tên"
                                   asp-for="FullName" />
                        </div>
                        <span asp-validation-for="PhoneNumber" class="text-danger"></span>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                </span>
                            </div>
                            <input type="text"
                                   required="required"
                                   class="form-control"
                                   placeholder="Số điện thoại"
                                   asp-for="PhoneNumber" />
                        </div>
                        <span asp-validation-for="Email" class="text-danger"></span>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope-open-text"></i>
                                </span>
                            </div>
                            <input type="email"
                                   required="required"
                                   class="form-control"
                                   placeholder="Email"
                                   asp-for="Email" />
                        </div>
                        <span asp-validation-for="Birthday" class="text-danger"></span>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-birthday-cake"></i>
                                </span>
                            </div>
                            <input type="date" id="birthdaytime" asp-for="Birthday" class="form-control">
                        </div>
                        <span asp-validation-for="Gender" class="text-danger"></span>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-venus-mars"></i>
                                </span>
                            </div>
                            <select class="form-control" asp-for="Gender">
                                <option value="true">Nam</option>
                                <option value="false">Nữ</option>
                            </select>
                        </div>
                        <!-- @if(Model!=null){
                            @if(Model.ErrorMessage!=null){
                                <span class="text-danger">@Model.ErrorMessage</span>
                            }
                        } -->
                        <div class="form-group">
                            <input type="submit"
                                   value="Đăng ký"
                                   class="btn float-right login_btn" />
                        </div>
                    </form>
                    <div class="form-group">
                        <a href="@Url.Action("Login", "Home")"
                           class="btn float-left login_btn">
                            Trở lại
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>