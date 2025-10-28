<!-- BEGIN: main -->
<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/default/css/bookmanager.css">
<div class="checkout-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}">{LANG.books}</a></li>
                        <li class="breadcrumb-item"><a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=cart">{LANG.cart}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{LANG.checkout}</li>
                    </ol>
                </nav>

                <h1 class="mb-4"><i class="fas fa-credit-card me-2"></i>{LANG.checkout}</h1>
            </div>
        </div>

        <!-- BEGIN: error -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>{ERROR}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        </div>
        <!-- END: error -->

        <form method="post" action="">
            <div class="row">
                <!-- Billing Information -->
                <div class="col-lg-8 mb-4">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h5 class="mb-0"><i class="fas fa-user me-2"></i>{LANG.customer_info}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="customer_name" class="form-label">{LANG.customer_name} <span class="text-danger">*</span></label>
                                    <input type="text" name="customer_name" id="customer_name" value="{CUSTOMER.name}" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="customer_email" class="form-label">{LANG.customer_email} <span class="text-danger">*</span></label>
                                    <input type="email" name="customer_email" id="customer_email" value="{CUSTOMER.email}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="customer_phone" class="form-label">{LANG.customer_phone} <span class="text-danger">*</span></label>
                                    <input type="tel" name="customer_phone" id="customer_phone" value="{CUSTOMER.phone}" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="payment_method" class="form-label">{LANG.payment_method}</label>
                                    <select name="payment_method" id="payment_method" class="form-select">
                                        <option value="COD">Thanh toán khi nhận hàng (COD)</option>
                                        <option value="Bank Transfer">Chuyển khoản ngân hàng</option>
                                        <option value="Credit Card">Thẻ tín dụng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="customer_address" class="form-label">{LANG.customer_address} <span class="text-danger">*</span></label>
                                <textarea name="customer_address" id="customer_address" class="form-control" rows="3" placeholder="Nhập địa chỉ giao hàng chi tiết..." required>{CUSTOMER.address}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="order_note" class="form-label">{LANG.order_note}</label>
                                <textarea name="order_note" id="order_note" class="form-control" rows="2" placeholder="Ghi chú thêm về đơn hàng..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-lg-4">
                    <div class="card sticky-top" style="top: 20px;">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0"><i class="fas fa-receipt me-2"></i>{LANG.order_details}</h5>
                        </div>
                        <div class="card-body">
                            <!-- Order Items -->
                            <div class="order-items mb-3">
                                <!-- BEGIN: item -->
                                <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">{ITEM.title}</h6>
                                        <small class="text-muted">{LANG.quantity}: {ITEM.quantity}</small>
                                    </div>
                                    <div class="text-end">
                                        <span class="fw-bold">{ITEM.subtotal_format}</span>
                                    </div>
                                </div>
                                <!-- END: item -->
                            </div>

                            <!-- Order Total -->
                            <div class="order-total border-top pt-3">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="h5 mb-0">{LANG.total}:</span>
                                    <span class="h4 mb-0 text-success fw-bold">{TOTAL}</span>
                                </div>
                            </div>

                            <!-- Place Order Button -->
                            <div class="d-grid">
                                <button type="submit" name="place_order" value="1" class="btn btn-success btn-lg">
                                    <i class="fas fa-check-circle me-2"></i>{LANG.place_order}
                                </button>
                            </div>

                            <!-- Security Notice -->
                            <div class="text-center mt-3">
                                <small class="text-muted">
                                    <i class="fas fa-shield-alt me-1"></i>
                                    Thanh toán an toàn và bảo mật 100%
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
// Form validation
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const requiredFields = form.querySelectorAll('input[required], textarea[required]');

    form.addEventListener('submit', function(e) {
        let isValid = true;

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('is-invalid');
                isValid = false;
            } else {
                field.classList.remove('is-invalid');
                field.classList.add('is-valid');
            }
        });

        const emailField = document.getElementById('customer_email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailField.value && !emailRegex.test(emailField.value)) {
            emailField.classList.add('is-invalid');
            isValid = false;
        }

        if (!isValid) {
            e.preventDefault();
            alert('Vui lòng điền đầy đủ thông tin bắt buộc.');
        }
    });

    // Real-time validation
    requiredFields.forEach(field => {
        field.addEventListener('blur', function() {
            if (this.value.trim()) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            } else {
                this.classList.remove('is-valid');
                this.classList.add('is-invalid');
            }
        });
    });
});
</script>
<!-- END: main -->
