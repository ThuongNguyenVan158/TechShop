<body>
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Khuyến mãi</h3>
                </div>
            </div>
            <!-- shop -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
                                @foreach (var khuyenMai in Model)
                                {
                                    if (khuyenMai.Special == "khuyenmai")
                                    {
                                        <!-- product -->
                                        <form asp-action="InsertProduct" asp-controller="Product" method="post" onsubmit="notify()">
                                            <input type="hidden" name="product.InsertProductToCart.ProductId" value="@khuyenMai.ProductId" />
                                            <input type="hidden" name="product.InsertProductToCart.Quantity" value="1" />
                                            <input type="hidden" name="product.InsertProductToCart.Name" value="@khuyenMai.Name" />
                                            <input type="hidden" name="product.InsertProductToCart.ProductPrice" value="@khuyenMai.Price" />
                                                <div class="product">
                                                    <div class="product-img">
                                                        <img src="@khuyenMai.ImgUrl" alt="">
                                                        <div class="product-label">
                                                            <span class="sale">-@khuyenMai.SellOff%</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-body">
                                                        <p class="product-category">@khuyenMai.Producer</p>
                                                        <h3 class="product-name"><a href="@Url.Action("Product","Product",new { id=khuyenMai.ProductId })">@khuyenMai.Name</a></h3>
                                                        <h4 class="product-price price">@khuyenMai.Price</h4><del class="product-old-price price">@khuyenMai.OldPrice</del>
                                                        <div class="product-rating">
                                                            @{
                                                                for (int i = 0; i < khuyenMai.Rating; i++)
                                                                {
                                                                    <i class="fa fa-star"></i>
                                                                }
                                                            }
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <button class="add-to-cart-btn" type="submit">
                                                            <i class="fa fa-shopping-cart"></i> add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                        </form>
                                        <!-- /product -->
                                    }
                                }
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section"> 
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div>
                                <h3 id = "ngay">5</h3>
                                <span>Ngày</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3 id = "gio">3</h3>
                                <span>Giờ</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3 id = "phut">2</h3>
                                <span>Phút</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3 id = "giay">55</h3>
                                <span>Giây</span>
                            </div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">Khuyến mãi hot nhất</h2>
					<p>New Collection Up to @Model.Max(p=>p.SellOff)% OFF</p>
                    <a class="primary-btn cta-btn" href="@Url.Action("Product","Product",new { id =  @Model.Find(p=>p.SellOff == @Model.Max(p=>p.SellOff)).ProductId})">Xem chi tiết</a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Sản phẩm mới</h3>
                </div>
            </div>
            <!-- shop -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-2">
                                @foreach (var moi in Model)
                                {
                                    if (moi.Special == "moi")
                                    {
                                        <!-- product -->
                                        <form asp-action="InsertProduct" asp-controller="Product" method="post" onsubmit="notify()">
                                            <input type="hidden" name="product.InsertProductToCart.ProductId" value="@moi.ProductId" />
                                            <input type="hidden" name="product.InsertProductToCart.Quantity" value="1" />
                                            <input type="hidden" name="product.InsertProductToCart.Name" value="@moi.Name" />
                                            <input type="hidden" name="product.InsertProductToCart.ProductPrice" value="@moi.Price" />                                                <div class="product">
                                                    <div class="product-img">
                                                        <img src="@moi.ImgUrl" alt="">
                                                    </div>
                                                    <div class="product-body">
                                                        <p class="product-category">@moi.Producer</p>
                                                        <h3 class="product-name"><a href="@Url.Action("Product","Product",new { id=moi.ProductId })">@moi.Name</a></h3>
                                                        <h4 class="product-price price">@moi.Price</h4>
                                                        <div class="product-rating">
                                                            @{
                                                                for (int i = 0; i < moi.Rating; i++)
                                                                {
                                                                    <i class="fa fa-star"></i>
                                                                }
                                                            }
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <button class="add-to-cart-btn" type="submit">
                                                            <i class="fa fa-shopping-cart"></i> add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                        </form>
                                        <!-- /product -->
                                    }
                                }
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Bán chạy nhất</h3>
                </div>
            </div>
            <!-- /section title -->
            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-3">
                                @foreach (var banChay in Model)
                                {
                                    if (banChay.Special == "banchay")
                                    {
                                        <!-- product -->
                                        <form asp-action="InsertProduct" asp-controller="Product" method="post" onsubmit="notify()">
                                            <input type="hidden" name="product.InsertProductToCart.ProductId" value="@banChay.ProductId" />
                                            <input type="hidden" name="product.InsertProductToCart.Quantity" value="1" />
                                            <input type="hidden" name="product.InsertProductToCart.Name" value="@banChay.Name" />
                                            <input type="hidden" name="product.InsertProductToCart.ProductPrice" value="@banChay.Price" />
                                                <div class="product">
                                                    <div class="product-img">
                                                        <img src="@banChay.ImgUrl" alt="">
                                                    </div>
                                                    <div class="product-body">
                                                        <p class="product-category">@banChay.Producer</p>
                                                        <h3 class="product-name"><a href="@Url.Action("Product","Product",new { id=banChay.ProductId })">@banChay.Name</a></h3>
                                                        <h4 class="product-price price">@banChay.Price</h4>
                                                        <div class="product-rating">
                                                            @{
                                                                for (int i = 0; i < banChay.Rating; i++)
                                                                {
                                                                    <i class="fa fa-star"></i>
                                                                }
                                                            }
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <button class="add-to-cart-btn" type="submit">
                                                            <i class="fa fa-shopping-cart"></i> add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                        </form>
                                        <!-- /product -->
                                    }
                                }
                            </div>
                            <div id="slick-nav-3" class="products-slick-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
</body>
<script type="text/javascript">
    function startCountdown(timeLeft) {
        var interval = setInterval( countdown, 1000 );
        update();

        function countdown() {
            if ( --timeLeft > 0 ) {
                update();
            } else {
                clearInterval( interval );
                update();
                completed();
            }
        }

        function update() {
            days   = Math.floor( timeLeft / 86400 );
            hours   = Math.floor( timeLeft / 3600 );
            minutes = Math.floor( ( timeLeft % 3600 ) / 60 );
            seconds = timeLeft % 60;

            document.getElementById('ngay').innerHTML = days;
            document.getElementById('gio').innerHTML = hours;
            document.getElementById('phut').innerHTML = minutes;
            document.getElementById('giay').innerHTML = seconds;

        }

        function completed() {
            // Do whatever you need to do when the timer runs out...
        }
    }
</script>