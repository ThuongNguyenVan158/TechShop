<div class="main">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card__header1">
                        <h3>Quản lí doanh thu</h3>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6 col-sm-12">
                            <div class="box box-hover">
                                <!-- COUNTER -->
                                <div class="counter">
                                    <div class="counter-title">
                                        Tổng đơn hàng
                                    </div>
                                    <div class="counter-info">
                                        <div class="counter-count">
                                            @{
                                                int i = 0;
                                                foreach (var vene in Model)
                                                {
                                                    i++;
                                                }
                                            }
                                            @i
                                        </div>
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                </div>
                                <!-- END COUNTER -->
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                            <div class="box box-hover">
                                <!-- COUNTER -->
                                <div class="counter">
                                    <div class="counter-title">
                                        Tổng doanh thu
                                    </div>
                                    <div class="counter-info">
                                        <div class="counter-count price">
                                            @{ 
                                                int count = 0;
                                                foreach(var count_ in Model)
                                                {
                                                    count += count_.TotalPrice;
                                                }
                                            }
                                            @count
                                        </div>
                                        <i class="fas fa-donate"></i>
                                    </div>
                                </div>
                                <!-- END COUNTER -->
                            </div>
                        </div>
                    </div>
                    <div className="card__body">
                        <div class="col-12">
                            <!-- ORDERS TABLE -->
                            <div class="box">
                                <div class="box-header">
                                    Danh sách Bill đã thanh toán
                                </div>
                                <div class="box-body overflow-scroll">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên</th>
                                                <th>Phương thức thanh toán</th>
                                                <th>Số điện thoại</th>
                                                <th>Tổng thanh toán</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (var revenue in Model)
                                            {
                                                <tr>
                                                    <td>@revenue.BillId</td>
                                                    <td>
                                                        @revenue.FullName
                                                    </td>
                                                    <td>@revenue.PaymentMethod</td>
                                                    <td>@revenue.PhoneNumber</td>
                                                    <td class="price">@revenue.TotalPrice</td>
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