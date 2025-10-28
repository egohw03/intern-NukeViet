<!-- BEGIN: main -->
<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/default/css/bookmanager.css">
<div class="modern-bookstore">
    <!-- Minimal Hero -->
    <section class="hero-minimal py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-light text-primary mb-3">Khám phá Bộ sưu tập Sách</h1>
                    <p class="lead text-muted mb-4">Hàng nghìn cuốn sách chất lượng đang chờ bạn khám phá</p>
                    <div class="d-flex gap-3">
                        <a href="#featured" class="btn btn-primary btn-lg px-4">Khám phá ngay</a>
                        <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&cat_id=4" class="btn btn-outline-primary btn-lg px-4">Sách Văn học</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="hero-icon">
                        <i class="fas fa-book-open fa-6x text-primary opacity-25"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Navigation -->
    <section class="categories-nav py-4 bg-white border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center flex-wrap gap-2">
                        <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}" class="category-pill <!-- BEGIN: all_selected -->active<!-- END: all_selected -->">
                            <i class="fas fa-th-large me-2"></i>Tất cả
                        </a>
                        <!-- BEGIN: category -->
                        <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&cat_id={CAT.id}" class="category-pill <!-- BEGIN: selected -->active<!-- END: selected -->">
                            <i class="fas fa-tag me-2"></i>{CAT.title}
                        </a>
                        <!-- END: category -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content py-5">
        <div class="container-fluid">
            <div class="row g-0">
                <!-- Sidebar -->
                <div class="col-lg-3 col-xl-2">
                    <div class="sidebar-wrapper h-100">
                        <div class="sidebar-content p-4">
                            <h5 class="mb-4 fw-light">Bộ lọc & Sắp xếp</h5>

                            <!-- Sort Options -->
                            <div class="mb-4">
                                <label class="form-label small fw-semibold text-muted mb-2">Sắp xếp theo</label>
                                <select class="form-select form-select-sm" id="sort_by" onchange="sortBooks(this.value)">
                                    <option value="add_time">Mới nhất</option>
                                    <option value="title">Tên sách A-Z</option>
                                    <option value="price">Giá thấp đến cao</option>
                                    <option value="price_desc">Giá cao đến thấp</option>
                                </select>
                            </div>

                            <!-- Price Filter -->
                            <div class="mb-4">
                                <label class="form-label small fw-semibold text-muted mb-2">Khoảng giá</label>
                                <div class="price-range">
                                    <input type="range" class="form-range" id="price_min" min="0" max="1000000" step="10000" value="0">
                                    <input type="range" class="form-range" id="price_max" min="0" max="1000000" step="10000" value="1000000">
                                    <div class="d-flex justify-content-between small text-muted mt-1">
                                        <span id="min_price_display">0đ</span>
                                        <span id="max_price_display">1,000,000đ</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Availability -->
                            <div class="mb-4">
                                <label class="form-label small fw-semibold text-muted mb-2">Tình trạng</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="in_stock_only" checked>
                                    <label class="form-check-label small" for="in_stock_only">
                                        Chỉ hiển thị sách còn hàng
                                    </label>
                                </div>
                            </div>

                            <!-- Apply Filters -->
                            <button class="btn btn-primary w-100 btn-sm" onclick="applyFilters()">
                                <i class="fas fa-filter me-2"></i>Áp dụng
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Main Books Area -->
                <div class="col-lg-9 col-xl-10">
                    <div class="books-container p-4">
                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                                <h2 class="h4 mb-1 fw-light">
                                    {LANG.books} <!-- BEGIN: category_title --><span class="text-primary">({CATEGORY_TITLE})</span><!-- END: category_title -->
                                </h2>
                                <p class="text-muted small mb-0">Khám phá và chọn sách yêu thích của bạn</p>
                            </div>
                            <div class="view-options">
                                <button class="btn btn-outline-secondary btn-sm me-2" onclick="toggleView('grid')" id="grid-view">
                                    <i class="fas fa-th"></i>
                                </button>
                                <button class="btn btn-outline-secondary btn-sm" onclick="toggleView('list')" id="list-view">
                                    <i class="fas fa-list"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Books Grid -->
                        <div class="books-wrapper">
                            <div class="row g-4" id="books-grid">
                                <!-- BEGIN: book -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="book-item">
                                        <div class="book-cover">
                                            <a href="{BOOK.link}" class="book-link">
                                                <!-- BEGIN: image -->
                                                <img src="{BOOK.image_url}" alt="{BOOK.title}" class="book-image">
                                                <!-- END: image -->
                                                <!-- BEGIN: no_image -->
                                                <div class="no-image-placeholder">
                                                    <i class="fas fa-book fa-3x text-muted"></i>
                                                </div>
                                                <!-- END: no_image -->
                                            </a>

                                            <!-- Status Badges -->
                                            <!-- BEGIN: in_stock -->
                                            <div class="status-badge status-in-stock">
                                                <i class="fas fa-circle"></i> Còn hàng
                                            </div>
                                            <!-- END: in_stock -->
                                            <!-- BEGIN: out_of_stock -->
                                            <div class="status-badge status-out-stock">
                                                <i class="fas fa-circle"></i> Hết hàng
                                            </div>
                                            <!-- END: out_of_stock -->

                                            <!-- Quick Actions -->
                                            <div class="book-actions">
                                                <button class="action-btn" onclick="quickView({BOOK.book_id})" title="Xem nhanh">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <!-- BEGIN: can_add_cart -->
                                                <button class="action-btn" onclick="quickAddToCart({BOOK.book_id}, '{BOOK.title}')" title="Thêm vào giỏ">
                                                    <i class="fas fa-cart-plus"></i>
                                                </button>
                                                <!-- END: can_add_cart -->
                                                <button class="action-btn" onclick="addToWishlist({BOOK.book_id})" title="Yêu thích">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="book-info">
                                            <div class="book-category">
                                                <small class="text-muted">{BOOK.category}</small>
                                            </div>

                                            <h3 class="book-title">
                                                <a href="{BOOK.link}" class="text-decoration-none">
                                                    {BOOK.title}
                                                </a>
                                            </h3>

                                            <div class="book-author">
                                                <small class="text-muted">
                                                    <i class="fas fa-user-edit me-1"></i>{BOOK.author}
                                                </small>
                                            </div>

                                            <div class="book-rating mb-2">
                                                <div class="stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <small class="text-muted ms-1">(4.5)</small>
                                            </div>

                                            <div class="book-price">
                                                <span class="current-price">{BOOK.price_format}</span>
                                                <small class="original-price text-decoration-line-through text-muted ms-2">₫{BOOK.old_price}</small>
                                            </div>

                                            <div class="book-actions mt-3">
                                                <a href="{BOOK.link}" class="btn btn-outline-primary btn-sm w-100 mb-2">
                                                    <i class="fas fa-eye me-1"></i>Xem chi tiết
                                                </a>
                                                <!-- BEGIN: can_add_cart -->
                                                <button onclick="quickAddToCart({BOOK.book_id}, '{BOOK.title}')" class="btn btn-primary btn-sm w-100">
                                                    <i class="fas fa-cart-plus me-1"></i>Thêm vào giỏ
                                                </button>
                                                <!-- END: can_add_cart -->
                                                <!-- BEGIN: cannot_add_cart -->
                                                <button disabled class="btn btn-secondary btn-sm w-100">
                                                    <i class="fas fa-times me-1"></i>Hết hàng
                                                </button>
                                                <!-- END: cannot_add_cart -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: book -->
                            </div>

                            <!-- Empty State -->
                            <!-- BEGIN: no_books -->
                            <div class="empty-state text-center py-5">
                                <div class="empty-icon mb-4">
                                    <i class="fas fa-book-open fa-4x text-muted"></i>
                                </div>
                                <h4 class="text-muted mb-3">Không tìm thấy sách nào</h4>
                                <p class="text-muted mb-4">Hãy thử điều chỉnh bộ lọc hoặc tìm kiếm từ khóa khác</p>
                                <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}" class="btn btn-primary">
                                    <i class="fas fa-home me-2"></i>Về trang chủ
                                </a>
                            </div>
                            <!-- END: no_books -->
                        </div>

                        <!-- Pagination -->
                        <!-- BEGIN: generate_page -->
                        <div class="pagination-wrapper mt-5">
                            <nav aria-label="Books pagination">
                                <ul class="pagination pagination-lg justify-content-center">
                                    {GENERATE_PAGE}
                                </ul>
                            </nav>
                        </div>
                        <!-- END: generate_page -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
// Initialize
document.addEventListener('DOMContentLoaded', function() {
    // Set initial view
    setViewMode('grid');

    // Initialize price range
    updatePriceDisplay();
    document.getElementById('price_min').addEventListener('input', updatePriceDisplay);
    document.getElementById('price_max').addEventListener('input', updatePriceDisplay);
});

// View toggle functions
function toggleView(mode) {
    setViewMode(mode);
}

function setViewMode(mode) {
    const gridView = document.getElementById('grid-view');
    const listView = document.getElementById('list-view');
    const booksGrid = document.getElementById('books-grid');

    if (mode === 'list') {
        gridView.classList.remove('active');
        listView.classList.add('active');
        booksGrid.classList.add('list-view');
    } else {
        listView.classList.remove('active');
        gridView.classList.add('active');
        booksGrid.classList.remove('list-view');
    }
}

// Price range functions
function updatePriceDisplay() {
    const minPrice = document.getElementById('price_min').value;
    const maxPrice = document.getElementById('price_max').value;
    document.getElementById('min_price_display').textContent = formatPrice(minPrice);
    document.getElementById('max_price_display').textContent = formatPrice(maxPrice);
}

function formatPrice(price) {
    return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(price);
}

function applyFilters() {
    const minPrice = document.getElementById('price_min').value;
    const maxPrice = document.getElementById('price_max').value;
    const inStockOnly = document.getElementById('in_stock_only').checked;
    const sortBy = document.getElementById('sort_by').value;

    // AJAX filter implementation
    console.log('Filters:', { minPrice, maxPrice, inStockOnly, sortBy });
    showToast('Đã áp dụng bộ lọc!', 'success');
}

// Quick view modal (placeholder)
function quickView(bookId) {
    showToast('Tính năng xem nhanh sẽ được phát triển!', 'info');
}

// Enhanced cart functions
function quickAddToCart(bookId, title) {
    fetch('{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&action=add_to_cart', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'book_id=' + bookId + '&quantity=1'
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            showToast('✓ Đã thêm "' + title + '" vào giỏ hàng!', 'success');
            updateCartCount();
        } else {
            showToast('✗ ' + (data.message || 'Có lỗi xảy ra'), 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showToast('✗ Không thể kết nối đến server', 'error');
    });
}

function addToWishlist(bookId) {
    fetch('{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&action=add_to_wishlist', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'book_id=' + bookId
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            showToast('♥ Đã thêm vào danh sách yêu thích!', 'success');
        } else {
            showToast('✗ ' + (data.message || 'Có lỗi xảy ra'), 'error');
        }
    })
    .catch(error => showToast('✗ Không thể kết nối đến server', 'error'));
}

// Toast notifications
function showToast(message, type = 'info') {
    const toast = document.createElement('div');
    toast.className = `toast-notification toast-${type}`;
    toast.innerHTML = `
        <div class="toast-content">
            ${message}
        </div>
        <button class="toast-close" onclick="this.parentElement.remove()">&times;</button>
    `;

    document.body.appendChild(toast);

    // Animate in
    setTimeout(() => toast.classList.add('show'), 10);

    // Auto remove
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => toast.remove(), 300);
    }, 4000);
}

function updateCartCount() {
    fetch('{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&action=get_cart_count')
    .then(response => response.json())
    .then(data => {
        const cartBadge = document.querySelector('.cart-count');
        if (cartBadge) {
            cartBadge.textContent = data.count || 0;
        }
    })
    .catch(error => console.error('Error updating cart count:', error));
}

// Sort function
function sortBooks(sortBy) {
    console.log('Sorting by:', sortBy);
    showToast('Đã sắp xếp theo: ' + sortBy, 'info');
}
</script>
<!-- END: main -->
