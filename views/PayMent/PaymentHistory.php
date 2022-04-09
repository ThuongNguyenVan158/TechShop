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
                            <th class="text-center">
                                STT
                            </th>
                            <th class="text-center">
                            Chi tiết
                            </th>
                            <th class="text-center">
                            Tổng (VNĐ)
                            </th>
                            <th class="text-center">
                            Phương thức thanh toán
                            </th>
                            <th class="text-center">
                            Ngày thanh toán
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            $listbill = json_decode($data['listbill'], true);
                            $output='';
                            if (count($listbill) > 0){
                                foreach ($listbill as $item)
                                    {
                                        $output.='
                                        <tr>
                                            <td class="text-center">$i++</td>
                                            <td class="text-center">
                                                <a href="@Url.Action("PaymentDetailHistory","Payment",new { id=Data.Id })">Xem chi tiết: </a>
                                            </td>
                                            <td class="text-right price">'.$item['Total'].'</td>
                                            <td class="text-center">'.$item['PaymentMethod'].'</td>
                                            <td class="text-center">'.$item['CreatedDate'].'.ToLocalTime().ToString("dd/MM/yyyy HH:mm")</td>
                                        </tr>';
                                    }
                                }
                            else
                            {
                                $output.='
                                <tr>
                                    <td colspan="5" class="text-center">Bạn chưa thanh toán lần nào!!</td>
                                </tr>';
                            }
                            echo $output;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /STORE -->
        <!-- /row -->
    </div>
    <!-- /container -->
</div>