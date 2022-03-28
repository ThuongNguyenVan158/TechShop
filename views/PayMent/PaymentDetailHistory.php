<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <!-- store products -->
            <div>
                <h2>Lịch sử thanh toán</h2>
                <table class="table table-borderless table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            @{
                                foreach (var head in PaymentHeader)
                                {
                                    <th class="text-center">
                                        @head
                                    </th>
                                }
                            }
                        </tr>
                    </thead>
                    <tbody>
                        @{
                            int i = 1;
                            if (Model.Count > 0)
                            {
                                foreach (var Data in Model)
                                {
                                        <tr>
                                            <td class="text-center">@(i++)</td>
                                            <td class="text-center">
                                                <a href="@Url.Action("Product","Product",new { id=Data.ProductId })">
                                                   @Data.ProductName
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="@Url.Action("Product","Product",new { id=Data.ProductId })">
                                                    <img src="@(Data.ImgUrl)" class="rounded" width="60" height="60">
                                                </a>
                                            </td>
                                            <td class="text-center price">@Data.ProductPrice</td>
                                            <td class="text-center">@Data.Quantity</td>
                                            <td class="text-center price">@Data.TotalProductPrice</td>
                                        </tr>
                                }
                            }
                            else
                            {
                                <tr>
                                    <td colspan="5" class="text-center">Bạn chưa thanh toán lần nào!!</td>
                                </tr>
                            }
                        }
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /STORE -->
        <!-- /row -->
    </div>
    <!-- /container -->
</div>