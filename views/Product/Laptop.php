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

                        <form asp-controller="Product" asp-action="Laptop" method="post">
                            <div class="input-checkbox">
                                <input type="checkbox" id="category-1" value="Apple" name="Category[]">
                                <label for="category-1">
                                    <span></span>
                                    Apple
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-2" value="Dell" name="Category[]">
                                <label for="category-2">
                                    <span></span>
                                    Dell
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-3" value="Asus" name="Category[]">
                                <label for="category-3">
                                    <span></span>
                                    Asus
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-4" value="Lenevo" name="Category[]">
                                <label for="category-4">
                                    <span></span>
                                    Lenevo
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-5" value="MSI" name="Category[]">
                                <label for="category-5">
                                    <span></span>
                                    MSI
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-6" value="HP" name="Category[]">
                                <label for="category-6">
                                    <span></span>
                                    HP
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="category-7" value="Acer" name="Category[]">
                                <label for="category-7">
                                    <span></span>
                                    Acer
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
                        <form asp-action="InsertProduct" asp-controller="Product" method="post" onsubmit="return confirm('Bạn muốn thêm vào giỏ hàng?!!!')">
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
                                        <h3 class="product-name"><a href="@Url.Action("Product",new { id=laptop.ProductId })">@laptop.Name</a></h3>
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
                                            <i class="fa fa-shopping-cart"></i> add to cart
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