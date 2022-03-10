<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EcommerceStore</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../../assets/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="../../assets/css/slick-theme.css"/>
    <link type="text/css" rel="stylesheet" href="../../assets/css/nouislider.min.css"/>
    <link type="text/css" rel="stylesheet" href="../../assets/css/site.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .currSign:after {
            color: black;
            content: ' VND';
        }
        .enMoney:after {
            content: ' ₫';
        }
		.swal-wide{
			width:500px !important;
			height:350px !important;
			font-size: 1.7rem !important;
		}
    </style>
</head>
<body>
    <header>
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i>0394003431</a></li>
                    <li><a href="#"><i class="far fa-envelope"></i>EcommerceStore@hcmut.edu.vn</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i>Ho Chi Minh</a></li>
                </ul>
                <partial name="_LoginPartial" />
            </div>
        </div>
        <!-- /TOP HEADER -->
        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <img src="#" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->
                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <input class="input-select" placeholder="Tìm kiếm tại đây">
                                <button class="search-btn">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->
                   <!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Cart -->
								<div class="dropdown">
									<a href="">
										<i class="fas fa-shopping-cart" style="font-size:20px;"></i>
										<span  style="font-size:16px;">Giỏ hàng</span>
									</a>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars" style="font-size:20px;"></i>
										<span style="font-size:16px;">Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
        <!-- NAVIGATION -->
        <nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav">
                        <li><a href="">Trang chủ</a></li>
                        <li><a href="">Laptop</a></li>
                        <li><a href="">Di động</a></li>
                        <li><a href="">Phụ kiện</a></li>
                        <li><a href="">Lịch sử thanh toán</a></li>
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
        <!-- /NAVIGATION -->
    </header>
    <div class="container">
        <main role="main" class="pb-3">
            <!-- content -->
            <form asp-controller="PayMent" asp-action="PayMent" method="post" id="payment" onsubmit="kiemtra()"></form>
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-5">
					<!-- Billing Details -->
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Thông tin giao hàng</h3>
						</div>
						<div class="form-group">
							<label>Họ và tên</label>
							<input class="input" id="input11" type="text" name="bill.Name" value="@(Model.Name)" onchange="setValue1()" form="payment"/>
						</div>
						<div class="form-group">
							<label>Số nhà/Tên đường - Thôn</label>
							<input class="input" id="input22" type="text" name="bill.Hamlet" value="@(Model.Hamlet)" onchange="setValue2()" form="payment"/>
						</div>
						<div class="form-group">
							<label>Xã - Phường - Thị trấn</label>
							<input class="input" id="input33" type="text" name="bill.Village" value="@(Model.Village)" onchange="setValue3()" form="payment"/>
						</div>
						<div class="form-group">
							<label>Quận - Huyện - Thành phố</label>
							<input class="input" id="input44" type="text" name="bill.District" value="@(Model.District)" onchange="setValue4()" form="payment"/>
						</div>
						<div class="form-group">
							<label>Tỉnh - Thành phố</label>
							<input class="input" id="input55" type="text" name="bill.Province" value="@(Model.Province)" onchange="setValue5()" form="payment"/>
						</div>
						<div class="form-group">
							<label>Số điện thoại</label>
							<input class="input" id="input66" type="tel" name="bill.Telephone" value="@(Model.Telephone)" onchange="setValue6()" form="payment"/>
						</div>
					</div>
					</div>
				<!-- /Billing Details -->
				<!-- Order Details -->
				<div class="col-md-7 order-details">
					<div class="section-title text-center">
						<h3 class="title">Giỏ hàng của bạn</h3>
					</div>
					<div class="order-summary">
						<table class="table">
						<thead>
							<tr>
								<th></th>
								<th>Sản phẩm</th>
								<th class="text-right">Giá tiền</th>
								<th class="text-center">Số lượng</th>
								<th class="text-right">Tổng Giá tiền</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@{
								if(Model==null)
								{
									<tr>
										<td colspan="6" class="text-center">Không có sản phẩm nào để thanh toán</td>
									</tr>
								}
								else
								{
										if (Model.ListProduct != null)
										{
											if (Model.ListProduct.Count > 0)
											{
												foreach (var Data in Model.ListProduct)
												{
													<tr>
														<td>
														<a href="@Url.Action("Product","Product",new { id=Data.ProductId })">
																<img src="@(Data.Url)" title="" width="60" height="60">
														</a>
														</td>
														<td>
														<a href="@Url.Action("Product","Product",new { id=Data.ProductId })">
															@Data.ProductName
															@{
																if(@Data.SellOff!="0")
																{
																	<br>
																	<i style="color:red">(-@Data.SellOff%)</i>
																}
															}
														</a>
														</td>
														<td class="price1 text-right"style="width: 110px">@(Data.ProductPrice)</td>
														<form asp-controller="PayMent" asp-action="PayMent" method="post">
														<td class="text-center"style="width: 130px">
															<input class="input1" type="hidden" name="bill.Name" value=""/>
															<input class="input2" type="hidden" name="bill.Hamlet"  value="" />
															<input class="input3" type="hidden" name="bill.Village"  value="" />
															<input class="input4" type="hidden" name="bill.District"  value="" />
															<input class="input5" type="hidden" name="bill.Province"  value="" />
															<input class="input6" type="hidden" name="bill.Telephone"  value="" />
															<input type="hidden" value="@Data.ProductId" name="bill.Product.ProductId"/>
															<span><input style="width:25px;height:35px"  type="submit" value="-" name="bill.Type" /></span>
															<span><input class="text-center" style="height:35px;text-align:center;width:50px" type="number" min="0" value="@Data.Quantity" name="bill.Product.Quantity" required /></span>
															<span><input style="width:25px;height:35px" type="submit" value="+" name="bill.Type" /></span>
															<button value="q" name="bill.Type" style="width:110px;margin-top:3px">
															<i class="fas fa-edit" style="font-size:30px"></i> Cập nhật
															</button>
														</td>
														<td class="price1 text-right"style="width: 120px">@(Data.TotalProductPrice)</td>
														<td class="text-center">
															
																<button class="remove_cart" rel="1" value="d" name="bill.Type">
																	<i class="fa fa-trash"></i>
																</button>
														</td>
														</form>
													</tr>
												}
											}
											else
											{
												<tr>
													<td colspan="6" class="text-center">Không có sản phẩm nào để thanh toán</td>
												</tr>
											} 
										}
										else
										{
											<tr>
												<td colspan="6" class="text-center">Không có sản phẩm nào để thanh toán</td>
											</tr>
										} 
									}
								}
						</tbody>
					    </table>
						<div class="order-col">
							<div style="font-size:20px"><strong>Tổng giá tiền</strong></div>
									<div><strong class="order-total price1">@Model.Total</strong></div>
						</div>
					</div>
					@{
						if(Model!=null && Model.Total!=0 &&Model.ListProduct.Count!=0)
						{
						<div class="input-checkbox">
							<input type="checkbox" id="terms" form="payment" checked>
							<label for="terms">
								<span></span>
								Tôi đồng ý với các <a href="#" style="color: blue;">Điều khoản & và điều kiện</a>
							</label>
						</div>
						<div  class="text-right">
						<a class="btn btn-info my-1"href="" >Tiếp tục mua hàng</a>
						<button class="btn btn-success my-1" value="p" name="bill.Type" style="margin-left:15px" form="payment">Đặt hàng</button>
						
						</div>
						}
						else
						{
							<div class="col-md-50 text-center">
							<a class="btn btn-success my-1"href="" style="font-size: 25px;"><strong>Tiếp tục mua hàng</strong></a>
							</div>
						}
					}
				</div>
				<!-- /Order Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
</div>
             <!-- content -->
        </main>
    </div>

    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-5 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Mọi thắc mắc vui lòng liên hệ</h3>
                            <ul class="footer-links">
                                <li><i class="fa fa-map-marker"></i>Hồ Chí Minh</li>
                                <li><i class="fa fa-phone"></i>0394003434</li>
                                <li><i class="far fa-envelope"></i>EcommerceStore@hcmut.edu.vn</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Các dòng sản phẩm</h3>
                            <ul class="footer-links">
                                <li>Laptop</li>
                                <li>Di động</li>
                                <li>Phụ kiện</li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>
                    <div class="col-md-4 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Dịch vụ</h3>
                            <ul class="footer-links">
                                <li>Thanh toán online, tiết kiệm thời gian</li>
                                <li>Mua online, giao hàng tận nơi</li>
                                <li>Tri ân khách hàng</li>
                                <li>Mua trả góp lãi xuất 0%</li>
                                <li>Hỗ trợ giải đáp mọi thắc mắc</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->
    </footer>
    <!-- /FOOTER -->
    <script src="~/lib/jquery/dist/jquery.min.js"></script>
    <script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="~/js/site.js" asp-append-version="true"></script>
    <script src="~/js/jquery.min.js"></script>
    <script src="~/js/bootstrap.min.js"></script>
    <script src="~/js/slick.min.js"></script>
    <script src="~/js/main.js"></script>
    <script type="text/javascript">
        let x = document.querySelectorAll(".price");
        for (let i = 0, len = x.length; i < len; i++) {
            let num = Number(x[i].innerHTML)
                .toLocaleString('en');
            x[i].innerHTML = num;
            x[i].classList.add("currSign");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<script type="text/javascript">
	$('.price1').each(function () {
    var item = $(this).text();
    var num = Number(item).toLocaleString('en');    

    $(this).addClass('enMoney');
    
    $(this).text(num);
	});
			var list = document.querySelectorAll('.input1');
			var n;
			for (n = 0; n < list.length; ++n) {
				list[n].value=document.getElementById("input11").value;
			}
			list = document.querySelectorAll('.input2');
			for (n = 0; n < list.length; ++n) {
				list[n].value=document.getElementById("input22").value;
			}
			list = document.querySelectorAll('.input3');
			for (n = 0; n < list.length; ++n) {
				list[n].value=document.getElementById("input33").value;
			}
			list = document.querySelectorAll('.input4');
			for (n = 0; n < list.length; ++n) {
				list[n].value=document.getElementById("input44").value;
			}
			list = document.querySelectorAll('.input5');
			for (n = 0; n < list.length; ++n) {
				list[n].value=document.getElementById("input55").value;
			}
			list = document.querySelectorAll('.input6');
			for (n = 0; n < list.length; ++n) {
				list[n].value=document.getElementById("input66").value;
			}
		  function setValue1()
		  {
			var list = document.querySelectorAll('.input1');
			var n;
			for (n = 0; n < list.length; ++n) {
				list[n].value=document.getElementById("input11").value;
			}
		  }
		  function setValue2()
		  {
			var list = document.querySelectorAll('.input2');
			var n;
			for (n = 0; n < list.length; ++n) {
				list[n].value=document.getElementById("input22").value;
			}
		  }
		  function setValue3()
		  {
			var list = document.querySelectorAll('.input3');
			var n;
			for (n = 0; n < list.length; ++n) {
				list[n].value=document.getElementById("input33").value;
			}
		  }
		  function setValue4()
		  {
			var list = document.querySelectorAll('.input4');
			var n;
			for (n = 0; n < list.length; ++n) {
				list[n].value=document.getElementById("input44").value;
			}
		  }
		  function setValue5()
		  {
			var list = document.querySelectorAll('.input5');
			var n;
			for (n = 0; n < list.length; ++n) {
				list[n].value=document.getElementById("input55").value;
			}
		  }
		  function setValue6()
		  {
			var list = document.querySelectorAll('.input6');
			var n;
			for (n = 0; n < list.length; ++n) {
				list[n].value=document.getElementById("input66").value;
			}
		  }
function kiemtra(){
    var d1 = document.getElementById("input11").value;
    var d2= document.getElementById("input22").value;
	var d3 = document.getElementById("input33").value;
	var d4 = document.getElementById("input44").value;
	var d5 = document.getElementById("input55").value;
	var d6 = document.getElementById("input66").value;
	if(document.getElementById("terms").checked == false)
	{
		 Swal.fire({
		  icon: 'error',
	      title: 'Oops...',
		  text: 'Vui lòng chọn Tôi đồng ý với các điều khoản & và điều kiện!',
		  customClass: 'swal-wide',
		  timer: 2000
		})
        return false;
	}
    if (d1=="") {
		  Swal.fire({
		  icon: 'error',
	      title: 'Oops...',
		  text: 'Vui lòng nhập Họ và Tên!',
		  customClass: 'swal-wide',
		  timer: 2000
		})
        return false;
    }
    if (d2=="") {
        Swal.fire({
		  icon: 'error',
	      title: 'Oops...',
		  text: 'Vui lòng nhập Số nhà/Tên đường - Thôn!',
		  customClass: 'swal-wide',
		  timer: 2000
		})
        return false;
    } 
	if (d3=="") {
		Swal.fire({
		  icon: 'error',
	      title: 'Oops...',
		  text: 'Vui lòng nhập Xã - Phường - Thị trấn!',
		  customClass: 'swal-wide',
		  timer: 2000
		})
        return false;
    }
	if (d4=="") {
		Swal.fire({
		  icon: 'error',
	      title: 'Oops...',
		  text: 'Vui lòng nhập Quận - Huyện - Thành phố!',
		  customClass: 'swal-wide',
		  timer: 2000
		})
        return false;
    }
	if (d5=="") {
		Swal.fire({
		  icon: 'error',
	      title: 'Oops...',
		  text: 'Vui lòng nhập Tỉnh - Thành phố!',
		  customClass: 'swal-wide',
		  timer: 2000
		})
        return false;
    }
	if (d6=="") {
		Swal.fire({
		  icon: 'error',
	      title: 'Oops...',
		  text: 'Vui lòng nhập Số điện thoại!',
		  customClass: 'swal-wide',
		  timer: 2000
		})
        return false;
    }
    return true;
}
</script>
</body>
</html>