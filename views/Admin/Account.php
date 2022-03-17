<div class="main">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card__header1">
                        <h3>Tạo tài khoản Admin</h3>
                    </div>
                    <div class="card__body">
                        <form asp-action="InsertAccountAdmin" asp-controller="Admin">
                            <div class="form-group">
                                <lable>Tên tài khoản</lable>
                                <input type="text" class="form-control" name="account.UserName"/>
                            </div>
                            <div class="form-group">
                                <lable>Mật khẩu</lable>
                                <input type="password" class="form-control" name="account.Password"/>
                            </div>
                            <div class="form-group">
                                <lable>Nhập lại mật khẩu</lable>
                                <input type="password" class="form-control" name="account.RePassword"/>
                            </div>
                            <div class="form-group">
                                <lable>Họ và tên</lable>
                                <input type="text" class="form-control" name="account.FullName"/>
                            </div>
                            <div class="form-group">
                                <lable>Email</lable>
                                <input type="email" class="form-control" name="account.Email"/>
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
                        <h3>Danh sách tài khoản</h3>
                    </div>
                    <div class="card__body">
                        <div class="col-12">
                            <!-- ORDERS TABLE -->
                            <div class="box">
                                <div class="box-header">
                                    Danh sách tài khoản
                                </div>
                                <div class="box-body overflow-scroll">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Tên</th>
                                                <th>Giới tính</th>
                                                <th>Ngày sinh</th>
                                                <th>Điểm tích lũy</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (var account in Model)
                                            {
                                            <tr>
                                                <td>@account.FullName</td>
                                                @if (account.Gender == true)
                                                {
                                                    <td>Nam</td>
                                                }
                                                else
                                                {
                                                    <td>Nữ</td>
                                                }
                                                <td>@account.BirthDay</td>
                                                <td>@account.Point</td>
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