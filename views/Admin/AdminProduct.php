<div class="main">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card__header1">
                        <h3>Quản lí sản phẩm</h3>
                    </div>
                    <div class="card__body">
                        <form asp-controller="Admin" asp-action="InsertProductToDb" method="post">
                            <div class="form-group">
                                <lable>Mã sản phẩm</lable>
                                <input type="text" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <lable>Tên sản phẩm</lable>
                                <input type="text" class="form-control" name="product.Name"/>
                            </div>
                            <div class="form-group">
                                <lable>Loại sản phẩm</lable>
                                <input type="text" class="form-control" name="product.Status"/>
                            </div>
                            <div class="form-group">
                                <lable>Hãng sản xuất</lable>
                                <input type="text" class="form-control" name="product.Producer"/>
                            </div>
                            <div class="form-group">
                                <lable>Giá</lable>
                                <input type="number" class="form-control" name="product.Price"/>
                            </div>
                            <div class="form-group">
                                <lable>Đặc biệt</lable>
                                <input type="text" class="form-control" name="product.Special"/>
                            </div>
                            <div class="form-group">
                                <lable>ImgUrl</lable>
                                <input type="text" class="form-control" name="product.ImgUrl"/>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="buttonform">Thêm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card__header1">
                        <h3>Danh sách sản phẩm</h3>
                    </div>
                    <div class="card__body">
                        <div class="col-12">
                            <!-- ORDERS TABLE -->
                            <div class="box">
                                <div class="box-header">
                                    Danh sách sản phẩm hiện có
                                </div>
                                <div class="box-body overflow-scroll">
                                    <table class="adminproduct">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Loại sản phẩm</th>
                                                <th>Hãng sản xuất</th>
                                                <th>Giá sản phẩm</th>
                                                <th>Đánh giá</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (var product in Model)
                                            {
                                            <tr>
                                                <td>@product.ProductId</td>
                                                <td>@product.Name </td>
                                                <td>@product.Status</td>
                                                <td>@product.Producer</td>
                                                <td class="price">@product.Price</td>
                                                <td>@product.Rating</td>
                                                <form asp-controller="Admin" asp-action="DeleteProduct">
                                                    <td class="text-center">
                                                        <input name="product" type="hidden" value="@product.ProductId" />
                                                        <button type="submit" class="primary-btn">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </form>
                                            </tr>
                                             }
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