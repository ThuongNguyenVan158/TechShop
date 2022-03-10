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
                        <!-- Product main img -->
                        <div class="col-md-6 ">
                            <div class="product-preview">
                                <img src="@Model.ImgUrl" alt="">
                            </div>
                        </div>
                        <!-- /Product main img -->
                        <!-- Product details -->
                        <form asp-action="InsertProduct" asp-controller="Product" method="post" onsubmit="confirm('Bạn muốn thêm vào giỏ hàng?!!!')">
                            <div class="col-md-6">
                                <div class="product-details">
                                    <h2 class="product-name">@Model.Name</h2>
                                    <div>
                                        <div class="product-rating">
                                            @{
                                                for (int i = 0; i < Model.Rating; i++)
                                                {
                                                    <i class="fa fa-star"></i>
                                                }
                                            }
                                        </div>
                                        @Model.Evalutions.Count Reviews |
                                        <a class="review-link" href="#tab1">Xem chi tiết và đánh giá</a>
                                    </div>
                                    <div>
                                        <div class="product-price-old-new">
                                            @if (Model.OldPrice != 0)
                                            {
                                                <h3 class="product-price price">@Model.Price</h3> <del class="product-old-price price">@Model.OldPrice</del>
                                            }
                                            else
                                            {
                                                <h3 class="product-price price">@Model.Price </h3>
                                            }
                                        </div><br>
                                        <span class="product-available">Có sẵn trong kho</span>
                                    </div>
                                    <div class="product-options">
                                        <label>
                                            Số lượng
                                            <input type="number" value=1 class="input-select" name="product.InsertProductToCart.Quantity" />
                                        </label>
                                    </div>
                                    <input type="hidden" name="product.InsertProductToCart.ProductId" value="@Model.ProductId" />
                                    <input type="hidden" name="product.InsertProductToCart.Name" value="@Model.Name" />
                                    <input type="hidden" name="product.InsertProductToCart.ProductPrice" value="@Model.Price" />
                                    <div class="add-to-cart">
                                        <button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product details -->
                        </form>
                        <!-- Product tab -->
                        <div class="col-md-12">
                            <div id="product-tab">
                                <!-- product tab nav -->
                                <ul class="tab-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab1">Mô tả chi tiết</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Đánh giá (3)</a></li>
                                </ul>
                                <!-- /product tab nav -->
                                <!-- product tab content -->
                                <div class="tab-content">
                                    <!-- tab1  -->
                                    <div id="tab1" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <article class="area_article area_articleFull">
                                                    @foreach (var des in Model.Descriptions)
                                                    {
                                                        <h3>@des.MainDesc</h3>
                                                        <p>@des.Desc</p>
                                                        <p><img class="alignnone size-full wp-image-141456" src="@des.ImgUrl" alt="" width="1020" height="570" /></p>
                                                    }
            
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /tab1  -->
                                    <!-- tab2  -->
                                    <div id="tab2" class="tab-pane fade in">
                                        <div class="row">
                                            <!-- Rating -->
                                            <div class="col-md-3">
                                                <div id="rating">
                                                    <div class="rating-avg">
                                                        <span>@Model.Rating</span>
                                                        <div class="rating-stars">
                                                            @for (int i = 0; i < Model.Rating; i++)
                                                            {
                                                                <i class="fa fa-star"></i>
                                                            }
                                                        </div>
                                                    </div>
                                                    <ul class="rating">
                                                        <li>
                                                            <div class="rating-stars">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            @{int count5 = 0; }
            
                                                            @foreach (var eval in Model.Evalutions)
                                                            {
                                                                if (eval.Rating == 5)
                                                                {
                                                                    count5++;
                                                                }
                                                            }
                                                            <div class="rating-progress">
                                                                <div style="width: cal(count5 * 20%);"></div>
                                                            </div>
                                                            <span class="sum">@count5</span>
                                                        </li>
                                                        <li>
                                                            <div class="rating-stars">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            @{int count4 = 0; }
                                                            @foreach (var eval in Model.Evalutions)
                                                            {
            
                                                                if (eval.Rating == 4)
                                                                {
                                                                    count4++;
                                                                }
                                                            }
                                                            <div class="rating-progress">
                                                                <div style="width: cal(count4 * 20%);"></div>
                                                            </div>
                                                            <span class="sum">@count4</span>
                                                        </li>
                                                        <li>
                                                            <div class="rating-stars">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            @{int count3 = 0; }
                                                            @foreach (var eval in Model.Evalutions)
                                                            {
                                                                if (eval.Rating == 3)
                                                                {
                                                                    count3++;
                                                                }
                                                            }
                                                            <div class="rating-progress">
                                                                <div style="width: cal(count3 * 20%);"></div>
                                                            </div>
                                                            <span class="sum">@count3</span>
                                                        </li>
                                                        <li>
                                                            <div class="rating-stars">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            @{int count2 = 0; }
                                                            @foreach (var eval in Model.Evalutions)
                                                            {
                                                                if (eval.Rating == 2)
                                                                {
                                                                    count2++;
                                                                }
                                                            }
                                                            <div class="rating-progress">
                                                                <div style="width: cal(count2 * 20%);"></div>
                                                            </div>
                                                            <span class="sum">@count2</span>
                                                        </li>
                                                        <li>
                                                            <div class="rating-stars">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            @{int count1 = 0; }
                                                            @foreach (var eval in Model.Evalutions)
                                                            {
                                                                if (eval.Rating == 1)
                                                                {
                                                                    count1++;
                                                                }
                                                            }
                                                            <div class="rating-progress">
                                                                <div style="width: cal(count1 * 20%);"></div>
                                                            </div>
                                                            <span class="sum">@count1</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Rating -->
                                            <!-- Reviews -->
                                            <div class="col-md-6">
                                                <div id="reviews">
                                                    <ul class="reviews">
                                                        @foreach (var eval in Model.Evalutions)
                                                        {
                                                            <li>
                                                                <div class="review-heading">
                                                                    <h5 class="name">@eval.Fullname</h5>
                                                                    <p class="date">@eval.EvalTime.ToLocalTime().ToString("dd/MM/yyyy HH:mm")</p>
                                                                    <div class="review-rating">
                                                                        @for (int i = 0; i < eval.Rating; i++)
                                                                        {
                                                                            <i class="fa fa-star"></i>
                                                                        }
                                                                    </div>
                                                                </div>
                                                                <div class="review-body">
                                                                    <p>@eval.Comment</p>
                                                                </div>
                                                            </li>
                                                        }
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Reviews -->
                                            <!-- Review Form -->
                                            <div class="col-md-3">
                                                <div id="review-form">
                                                    <form class="review-form text-center" asp-controller="Product" asp-action="InsertEvaluation" method="post">
                                                        <input class="input" type="text" placeholder="Nhận xét" name="product.InsertEvaluation.Comment" />
                                                        <div class="input-rating">
                                                            <span>Xếp hạng: </span>
                                                            <div class="review-rating" style="color: red;">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="stars">
                                                                <input id="star5" name="product.InsertEvaluation.Rating" value="5" type="radio"><label for="star5"></label>
                                                                <input id="star4" name="product.InsertEvaluation.Rating" value="4" type="radio"><label for="star4"></label>
                                                                <input id="star3" name="product.InsertEvaluation.Rating" value="3" type="radio"><label for="star3"></label>
                                                                <input id="star2" name="product.InsertEvaluation.Rating" value="2" type="radio"><label for="star2"></label>
                                                                <input id="star1" name="product.InsertEvaluation.Rating" value="1" type="radio"><label for="star1"></label>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product.InsertEvaluation.ProductId" value="@Model.ProductId" />
                                                        <button type="submit" class="primary-btn">Đánh giá</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /Review Form -->
                                        </div>
                                    </div>
                                    <!-- /tab2  -->
                                </div>
                                <!-- /product tab content  -->
                            </div>
                        </div>
                        <!-- /product tab -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /SECTION -->
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