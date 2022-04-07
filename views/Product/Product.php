<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-6 ">
                <div class="product-preview">
                    <?php echo "<img src=\"".$data["product"]["ImgUrl"]."\" alt=\"\">";?>
                </div>
            </div>
            <!-- /Product main img -->
            <!-- Product details -->
            <form asp-action="InsertProduct" asp-controller="Product" method="post" onsubmit="return confirm('Bạn muốn thêm vào giỏ hàng?!!!')">
                <div class="col-md-6">
                    <div class="product-details">
                        <h2 class="product-name"><?php echo $data["product"]["Name"];?></h2>
                        <div>
                            <div class="product-rating">
                                <?php
                                    for ($i = 0; $i < $data["product"]["Rating"]; $i++)
                                    {
                                        echo "<i class=\"fa fa-star\"></i>";
                                    }
                                ?>
                            </div>
                            <?php echo sizeof($data["eval"])?> Reviews |
                            <a class="review-link" href="#tab1">Xem chi tiết và đánh giá</a>
                        </div>
                        <div>
                            <div class="product-price-old-new">
                                <?php
                                    if ($data["product"]["OldPrice"] != 0)
                                    {
                                        echo "<h3 class=\"product-price price\">".$data["product"]["Price"]."</h3> <del class=\"product-old-price price\">".$data["product"]["Price"]."</del>";
                                    }
                                    else
                                    {
                                        echo "<h3 class=\"product-price price\">".$data["product"]["Price"]." </h3>";
                                    }
                                ?>
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
                                        <?php
                                            foreach ($data["desc"] as $item)
                                            {
                                                echo "<h3 style=\"text-align: center;\">".$item["MainDesc"]."</h3>";
                                                echo "<p style=\"text-align: justify;
                                                            margin-bottom: 25px;\">".$item["Descip"]."</p>";
                                                echo "<p><img style=\"  display: block;
                                                margin-left: auto;
                                                margin-right: auto;
                                                margin-bottom: 25px;
                                                \" src=\"".$item["ImgUrl"]."\" alt=\"\" width=\"700\" height=\"500\" /></p>";
                                            }
                                        ?>
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
                                            <span><?php $data["product"]["Rating"] ?></span>
                                            <div class="rating-stars">
                                                <?php
                                                for ($i = 0; $i < $data["product"]["Rating"]; $i++)
                                                {
                                                    echo "<i class=\"fa fa-star\"></i>";
                                                }
                                                ?>
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
                                                <?php
                                                        $count5 = 0; 
                                                        $count4 = 0;
                                                        $count3 = 0;
                                                        $count2 = 0;
                                                        $count1 = 0;    
                                                        for ($i = 0;$i < sizeof($data["eval"]);$i++)
                                                        {
                                                            if ($data["eval"]["Rating"] == 5)
                                                            {
                                                                $count5++;
                                                            }
                                                            if ($data["eval"]["Rating"] == 4)
                                                            {
                                                                $count4++;
                                                            }
                                                            if ($data["eval"]["Rating"] == 3)
                                                            {
                                                                $count3++;
                                                            }
                                                            if ($data["eval"]["Rating"] == 2)
                                                            {
                                                                $count2++;
                                                            }
                                                            if ($data["eval"]["Rating"] == 1)
                                                            {
                                                                $count1++;
                                                            }
                                                        }
                                                        echo"
                                                            <div class=\"rating-progress\">
                                                                <div style=\"width: ".($count5 * 20)."%;\"></div>
                                                            </div>
                                                            <span class=\"sum\">$count5</span>
                                                        </li>
                                                        <li>
                                                            <div class=\"rating-stars\">
                                                                <i class=\"fa fa-star\"></i>
                                                                <i class=\"fa fa-star\"></i>
                                                                <i class=\"fa fa-star\"></i>
                                                                <i class=\"fa fa-star\"></i>
                                                            </div>
                                                            <div class=\"rating-progress\">
                                                                <div style=\"width: ".($count4*20)."%;\"></div>
                                                            </div>
                                                            <span class=\"sum\">$count4</span>
                                                        </li>
                                                        <li>
                                                            <div class=\"rating-stars\">
                                                                <i class=\"fa fa-star\"></i>
                                                                <i class=\"fa fa-star\"></i>
                                                                <i class=\"fa fa-star\"></i>
                                                            </div>
                                                            <div class=\"rating-progress\">
                                                                <div style=\"width: ".($count3*20)."%;\"></div>
                                                            </div>
                                                            <span class=\"sum\">$count3</span>
                                                        </li>
                                                        <li>
                                                            <div class=\"rating-stars\">
                                                                <i class=\"fa fa-star\"></i>
                                                                <i class=\"fa fa-star\"></i>
                                                            </div>
                                                            <div class=\"rating-progress\">
                                                                <div style=\"width: ".($count2*20)."%;\"></div>
                                                            </div>
                                                            <span class=\"sum\">$count2</span>
                                                        </li>
                                                        <li>
                                                            <div class=\"rating-stars\">
                                                                <i class=\"fa fa-star\"></i>
                                                            </div>
                                                            <div class=\"rating-progress\">
                                                                <div style=\"width: ".($count1*20)."%;\"></div>
                                                            </div>
                                                            <span class=\"sum\">$count1</span>
                                                        </li>";
                                                ?>
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