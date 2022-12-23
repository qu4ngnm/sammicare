<?php include_once("inc/header.php") ?>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $gg_sheet_import = 
    }
?>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Nhập số liệu khách hàng</h3>
                        <form method="POST" action="">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <div id="date-picker-example"
                                            class="md-form md-outline input-with-post-icon datepicker" inline="true">
                                            <input placeholder="Select date" type="text" id="date" name="date"
                                                width="276" />
                                            <script>
                                            $('#date').datepicker({
                                                uiLibrary: 'bootstrap5'
                                            });
                                            </script>
                                            <label for="example">Chọn ngày</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <input type="text" id="name" name="name" class="form-control form-control-lg" />
                                        <label class="form-label" for="name">Họ tên</label>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-outline" style="width: 100%;">
                                    <input type="text" class="form-control form-control-lg" id="address"
                                        name="address" />
                                    <label for="address" class="form-label">Địa chỉ khách hàng</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <input type="number" id="price" name="price"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="price">Giá trị gói (vnd)</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <input type="number" id="total-proceeds" name="total-proceeds"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="total-proceeds">Tổng thu (vnd)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions"
                                            id="tam-be" value="option1" checked />
                                        <label class="form-check-label" for="tam-be">Tắm bé</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions"
                                            id="ttts" value="option2" />
                                        <label class="form-check-label" for="ttts">TTTS</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="note" class="form-label">Ghi chú</label>
                                    <textarea class="form-control" id="note" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="mt-4 pt-2">
                                <input class="btn btn-primary btn-lg" type="submit" value="Xác nhận" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once("inc/footer.php") ?>