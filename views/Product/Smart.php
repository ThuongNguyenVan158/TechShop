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
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- ASIDE -->
                        <div id="aside" class="col-md-3">
                            <!-- aside Widget -->
                            <div class="aside">
                                <h3 class="aside-title">Nhà sản xuất</h3>
                                <div class="checkbox-filter">
            
                                    <form asp-controller="Product" asp-action="Smart" method="post">
                                        <div class="input-checkbox">
                                            <input type="checkbox" id="category-1" value="Apple" name="Category[]">
                                            <label for="category-1">
                                                <span></span>
                                                Apple
                                            </label>
                                        </div>
            
                                        <div class="input-checkbox">
                                            <input type="checkbox" id="category-2" value="Samsung" name="Category[]">
                                            <label for="category-2">
                                                <span></span>
                                                Samsung
                                            </label>
                                        </div>
            
                                        <div class="input-checkbox">
                                            <input type="checkbox" id="category-3" value="Xiaomi" name="Category[]">
                                            <label for="category-3">
                                                <span></span>
                                                Xiaomi
                                            </label>
                                        </div>
            
                                        <div class="input-checkbox">
                                            <input type="checkbox" id="category-4" value="Oppo" name="Category[]">
                                            <label for="category-4">
                                                <span></span>
                                                Oppo
                                            </label>
                                        </div>
            
                                        <div class="input-checkbox">
                                            <input type="checkbox" id="category-5" value="Huwei" name="Category[]">
                                            <label for="category-5">
                                                <span></span>
                                                Huwei
                                            </label>
                                        </div>
            
                                        <div class="input-checkbox">
                                            <input type="checkbox" id="category-6" value="Vivo" name="Category[]">
                                            <label for="category-6">
                                                <span></span>
                                                Vivo
                                            </label>
                                        </div>
                                        <div class="input-checkbox">
                                            <input type="submit" value="Lọc danh sách" style="background-color:yellow">
                                        </div>
                                    </form>
            
                                </div>
                            </div>
                        </div>
                        <!-- /ASIDE -->
                        <!-- STORE -->
                        <div id="store" class="col-md-9">
                            <!-- store products -->
                            <div class="row">
                                @foreach (var laptop in Model)
                                {
                                    <!-- product -->
                                    <form asp-action="InsertProduct" asp-controller="Product" method="post" onsubmit="confirm('Bạn muốn thêm vào giỏ hàng?!!!')">
                                        <input type="hidden" name="product.InsertProductToCart.ProductId" value="@laptop.ProductId" />
                                        <input type="hidden" name="product.InsertProductToCart.Quantity" value="1" />
                                        <input type="hidden" name="product.InsertProductToCart.Name" value="@laptop.Name" />
                                        <input type="hidden" name="product.InsertProductToCart.ProductPrice" value="@laptop.Price" />
                                        <div class="col-md-4 col-xs-6">
                                            <div class="product">
                                                <div class="product-img">
                                                    <img src="@laptop.ImgUrl" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <p class="product-category">@laptop.Producer</p>
                                                    <h3 class="product-name"><a href="">@laptop.Name</a></h3>
                                                    <div class="product-price-old-new">
                                                        @if (laptop.OldPrice != 0)
                                                        {
                                                            <h4 class="product-price price">@laptop.Price</h4> <del class="product-old-price price">@laptop.OldPrice</del>
                                                        }
                                                        else
                                                        {
                                                            <h4 class="product-price price">@laptop.Price </h4>
                                                        }
                                                    </div>
                                                    <div class="product-rating">
                                                        @{
                                                            for (int i = 0; i < laptop.Rating; i++)
                                                            {
                                                                <i class="fa fa-star"></i>
                                                            }
                                                        }
                                                    </div>
                                                </div>
                                                <div class="add-to-cart">
                                                    <button class="add-to-cart-btn" type="submit">
                                                        <i class="fa fa-shopping-cart"></i> add to
                                                        cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /product -->
                                }
                            </div>
                            <!-- /store products -->
                            <!-- store bottom filter -->
                            <div class="store-filter clearfix">
                                <ul class="store-pagination">
                                    <li class="active">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- /store bottom filter -->
                        </div>
                        <!-- /STORE -->
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
    @RenderSection("Scripts", required: false)
</body>
</html>