<!-- BEGIN: main -->
<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/default/css/bookmanager.css">
<div class="order-success-page py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Success Message -->
                <div class="text-center mb-5">
                    <div class="success-icon mb-4">
                        <i class="fas fa-check-circle fa-5x text-success"></i>
                    </div>
                    <h1 class="display-5 fw-bold text-success mb-3">{LANG.thank_you}!</h1>
                    <p class="lead text-muted mb-4">{LANG.order_confirmation}</p>
                    <div class="alert alert-success" role="alert">
                        <i class="fas fa-envelope me-2"></i>
                        Chúng tôi đã gửi email xác nhận đơn hàng đến địa chỉ <strong>{ORDER.customer_email}</strong>
                    </div>
                </div>

                <!-- Order Details Card -->
                <div class="card shadow mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-receipt me-2"></i>{LANG.order_details}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-muted mb-3">THÔNG TIN ĐƠN HÀNG</h6>
                                <p class="mb-2"><strong>{LANG.order_code}:</strong> <span class="badge bg-primary fs-6">{ORDER.order_code}</span></p>
                                <p class="mb-2"><strong>Ngày đặt:</strong> {ORDER.add_time_format}</p>
                                <p class="mb-2"><strong>{LANG.total_amount}:</strong> <span class="h5 text-success fw-bold">{ORDER.total_amount_format}</span></p>
                                <p class="mb-2"><strong>{LANG.payment_method}:</strong> {ORDER.payment_method}</p>
                                <p class="mb-2"><strong>{LANG.order_status}:</strong>
                                    <!-- BEGIN: pending --><span class="badge bg-warning">Chờ xử lý</span><!-- END: pending -->
                                    <!-- BEGIN: processing --><span class="badge bg-info">Đang xử lý</span><!-- END: processing -->
                                    <!-- BEGIN: completed --><span class="badge bg-success">Đã hoàn thành</span><!-- END: completed -->
                                    <!-- BEGIN: cancelled --><span class="badge bg-danger">Đã hủy</span><!-- END: cancelled -->
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted mb-3">THÔNG TIN GIAO HÀNG</h6>
                                <p class="mb-2"><strong>{LANG.customer_name}:</strong> {ORDER.customer_name}</p>
                                <p class="mb-2"><strong>{LANG.customer_email}:</strong> {ORDER.customer_email}</p>
                                <p class="mb-2"><strong>{LANG.customer_phone}:</strong> {ORDER.customer_phone}</p>
                                <p class="mb-2"><strong>{LANG.customer_address}:</strong> {ORDER.customer_address}</p>
                                <!-- BEGIN: order_note -->
                                <p class="mb-2"><strong>{LANG.order_note}:</strong> {ORDER.order_note}</p>
                                <!-- END: order_note -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- What's Next -->
                <div class="card border-info mb-4">
                    <div class="card-body">
                        <h6 class="card-title text-info"><i class="fas fa-info-circle me-2"></i>Tiếp theo sẽ xảy ra gì?</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Chúng tôi sẽ xử lý đơn hàng trong vòng 24 giờ</li>
                            <li class="mb-2"><i class="fas fa-truck text-primary me-2"></i>Đơn hàng sẽ được giao trong 3-5 ngày làm việc</li>
                            <li class="mb-2"><i class="fas fa-envelope text-info me-2"></i>Bạn sẽ nhận được email cập nhật trạng thái đơn hàng</li>
                        </ul>
                    </div>
                </div>

                <!-- Actions -->
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-shopping-bag me-2"></i>{LANG.continue_shopping}
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}=users" class="btn btn-outline-primary btn-lg w-100">
                                <i class="fas fa-user me-2"></i>Xem đơn hàng của tôi
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Social Share -->
                <div class="text-center mt-4">
                    <p class="text-muted mb-2">Chia sẻ trải nghiệm mua sắm của bạn:</p>
                    <div class="social-share">
                        <a href="#" class="btn btn-outline-secondary me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-outline-secondary me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-secondary"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Auto redirect after 10 seconds
setTimeout(function() {
    window.location.href = '{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}';
}, 10000);

// Add some celebration effect
document.addEventListener('DOMContentLoaded', function() {
    const successIcon = document.querySelector('.success-icon i');
    successIcon.style.animation = 'bounce 2s infinite';
});
</script>

<style>
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}
</style>
<!-- END: main -->
