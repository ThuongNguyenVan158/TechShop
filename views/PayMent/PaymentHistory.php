<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <!-- store products -->
            <div>
                <h2>Lịch sử thanh toán</h2>
                <table class="table table-bordered table-striped table-hover">
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
                                foreach (var Data in Model)
                                {
                                    <tr>
                                        <td class="text-center">@(i++)</td>
                                        <td class="text-center">
                                            <a href="@Url.Action("PaymentDetailHistory","Payment",new { id=Data.Id })">Xem chi tiết: </a>
                                        </td>
                                        <td class="text-right price">@Data.Total</td>
                                        <td class="text-center">@Data.PaymentMethod</td>
                                        <td class="text-center">@Data.CreatedDate.ToLocalTime().ToString("dd/MM/yyyy HH:mm")</td>
                                    </tr>
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