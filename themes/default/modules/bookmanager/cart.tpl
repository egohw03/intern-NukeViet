<!-- BEGIN: main -->
<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/default/css/bookmanager.css">
<div class="shopping-cart-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}">{LANG.books}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{LANG.cart}</li>
                    </ol>
                </nav>

                <h1 class="mb-4"><i class="fas fa-shopping-cart me-2"></i>{LANG.cart}</h1>
            </div>
        </div>

        <!-- BEGIN: empty -->
        <div class="row">
            <div class="col-12">
                <div class="text-center py-5">
                    <i class="fas fa-shopping-cart fa-5x text-muted mb-4"></i>
                    <h3 class="mb-3">{LANG.cart_empty}</h3>
                    <p class="text-muted mb-4">Giỏ hàng của bạn đang trống. Hãy thêm một số sách yêu thích!</p>
                    <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}" class="btn btn-primary btn-lg">
                        <i class="fas fa-book me-2"></i>{LANG.continue_shopping}
                    </a>
                </div>
            </div>
        </div>
        <!-- END: empty -->

        <!-- BEGIN: checkout -->
        <form method="post" action="">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="cart-items">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">Sản phẩm trong giỏ hàng</h5>
                            </div>
                            <div class="card-body p-0">
                                <!-- BEGIN: item -->
                                <div class="cart-item d-flex align-items-center p-3 border-bottom">
                                    <div class="cart-item-image me-3">
                                        <!-- BEGIN: image -->
                                        <img src="{ITEM.image_url}" alt="{ITEM.title}" class="img-fluid rounded" style="width: 80px; height: 80px; object-fit: cover;">
                                        <!-- END: image -->
                                        <!-- BEGIN: no_image -->
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                            <i class="fas fa-book fa-2x text-muted"></i>
                                        </div>
                                        <!-- END: no_image -->
                                    </div>
                                    <div class="cart-item-info flex-grow-1">
                                        <h6 class="mb-1">
                                            <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=detail&id={ITEM.book_id}" class="text-decoration-none text-dark">{ITEM.title}</a>
                                        </h6>
                                        <p class="text-muted small mb-2">{LANG.author}: {ITEM.author}</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="quantity-control">
                                                <label class="form-label me-2">{LANG.quantity}:</label>
                                                <input type="number" name="quantity[{ITEM.id}]" value="{ITEM.quantity}" min="1" max="{ITEM.stock_quantity}" class="form-control d-inline-block" style="width: 80px;">
                                            </div>
                                            <div class="item-price text-end">
                                                <p class="mb-1 fw-bold text-primary">{ITEM.price_format}</p>
                                                <p class="mb-0 text-muted small">{LANG.subtotal}: {ITEM.subtotal_format}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item-actions ms-3">
                                        <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=cart&remove={ITEM.id}" class="btn btn-outline-danger btn-sm" title="{LANG.remove}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- END: item -->
                            </div>
                        </div>
                    </div>

                    <div class="cart-actions mt-3 d-flex justify-content-between">
                        <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}" class="btn btn-outline-primary">
                            <i class="fas fa-arrow-left me-2"></i>{LANG.continue_shopping}
                        </a>
                        <button type="submit" name="update_cart" value="1" class="btn btn-secondary">
                            <i class="fas fa-sync me-2"></i>{LANG.update_cart}
                        </button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="cart-summary card sticky-top" style="top: 20px;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Tóm tắt đơn hàng</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                            <span>Tổng tiền ({NUM_ITEMS} sản phẩm):</span>
                            <strong class="text-primary h4 mb-0">{TOTAL}</strong>
                            </div>

                            <!-- Coupon Section -->
                            <div class="coupon-section mb-3">
                                <label class="form-label fw-bold">{LANG.apply_coupon}</label>
                                <div class="input-group">
                                    <input type="text" name="coupon_code" value="{COUPON_CODE}" class="form-control" placeholder="{LANG.coupon_code}">
                                    <button type="submit" name="apply_coupon" class="btn btn-outline-primary">{LANG.apply_coupon}</button>
                                </div>
                                <!-- BEGIN: coupon_error -->
                                <div class="text-danger small mt-1">{COUPON_ERROR}</div>
                                <!-- END: coupon_error -->
                                <!-- BEGIN: coupon_applied -->
                                <div class="text-success small mt-1">{LANG.coupon_applied}</div>
                                <!-- END: coupon_applied -->
                            </div>

                            <!-- BEGIN: discount_row -->
                            <div class="d-flex justify-content-between mb-2">
                                <span>{LANG.discount}:</span>
                                <strong class="text-success">-{DISCOUNT}</strong>
                            </div>
                            <!-- END: discount_row -->

                            <!-- BEGIN: final_total -->
                            <div class="d-flex justify-content-between mb-3 border-top pt-3">
                                <span class="fw-bold">{LANG.total}:</span>
                                <strong class="text-primary h4 mb-0">{FINAL_TOTAL}</strong>
                            </div>
                            <!-- END: final_total -->

                            <div class="d-grid gap-2">
                                <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=checkout" class="btn btn-success btn-lg">
                                    <i class="fas fa-credit-card me-2"></i>{LANG.checkout_now}
                                </a>
                                <small class="text-muted text-center">Thanh toán an toàn và bảo mật</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END: checkout -->
    </div>
</div>

<script>
// Update total when quantity changes
document.addEventListener('DOMContentLoaded', function() {
    const quantityInputs = document.querySelectorAll('input[name^="quantity"]');
    quantityInputs.forEach(input => {
        input.addEventListener('change', function() {
            // Can add AJAX update here if needed
            console.log('Quantity changed:', this.name, this.value);
        });
    });
});
</script>
<!-- END: main -->
