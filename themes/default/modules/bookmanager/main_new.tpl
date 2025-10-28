<!-- BEGIN: main -->
<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/default/css/bookmanager.css">
<div class="bookmanager-main">
    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Chào mừng đến với Thế giới Sách</h1>
                    <p class="lead mb-4">Khám phá hàng nghìn cuốn sách chất lượng với giá tốt nhất</p>
                    <a href="#books" class="btn btn-light btn-lg">Khám phá ngay</a>
                </div>
                <div class="col-lg-6">
                    <img src="{NV_BASE_SITEURL}themes/default/images/book-hero.png" alt="Books" class="img-fluid" onerror="this.style.display='none'">
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Danh mục sách</h2>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex justify-content-center flex-wrap gap-2">
                        <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}" class="btn btn-outline-primary <!-- BEGIN: all_selected -->active<!-- END: all_selected -->">{LANG.all_books}</a>
                        <!-- BEGIN: category -->
                        <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&cat_id={CAT.id}" class="btn btn-outline-secondary <!-- BEGIN: selected -->active<!-- END: selected -->">{CAT.title}</a>
                        <!-- END: category -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Books Section -->
    <section id="books" class="books-section py-5">
        <div class="container">
            <div class="row">
                <!-- Sidebar Filter -->
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Bộ lọc</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Giá từ</label>
                                <input type="number" class="form-control" id="price_min" placeholder="0">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Giá đến</label>
                                <input type="number" class="form-control" id="price_max" placeholder="1000000">
                            </div>
                            <button class="btn btn-primary w-100" onclick="filterBooks()">Áp dụng</button>
                        </div>
                    </div>
                </div>

                <!-- Books Grid -->
                <div class="col-lg-9">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>{LANG.books} <!-- BEGIN: category_title -->({CATEGORY_TITLE})<!-- END: category_title --></h2>
                        <div class="d-flex align-items-center">
                            <label class="me-2">Sắp xếp:</label>
                            <select class="form-select" id="sort_by" onchange="sortBooks(this.value)">
                                <option value="add_time">Mới nhất</option>
                                <option value="title">Tên A-Z</option>
                                <option value="price">Giá thấp-cao</option>
                            </select>
                        </div>
                    </div>

                    <div class="books-grid row g-3">
                        <!-- BEGIN: book -->
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-card h-100 border-0 shadow-sm position-relative overflow-hidden">
                                <!-- Product Image -->
                                <div class="product-image position-relative">
                                    <a href="{BOOK.link}" class="d-block">
                                        <!-- BEGIN: image -->
                                        <img src="{BOOK.image_url}" alt="{BOOK.title}" class="w-100 product-img">
                                        <!-- END: image -->
                                        <!-- BEGIN: no_image -->
                                        <div class="bg-light d-flex align-items-center justify-content-center product-img">
                                            <i class="fas fa-book fa-4x text-muted"></i>
                                        </div>
                                        <!-- END: no_image -->
                                    </a>

                                    <!-- Stock Badge -->
                                    <!-- BEGIN: in_stock -->
                                    <span class="badge bg-success position-absolute top-0 start-0 m-2 px-2 py-1">
                                        <i class="fas fa-check-circle me-1"></i>Còn hàng
                                    </span>
                                    <!-- END: in_stock -->
                                    <!-- BEGIN: out_of_stock -->
                                    <span class="badge bg-danger position-absolute top-0 start-0 m-2 px-2 py-1">
                                        <i class="fas fa-times-circle me-1"></i>Hết hàng
                                    </span>
                                    <!-- END: out_of_stock -->

                                    <!-- Quick Actions Overlay -->
                                    <div class="product-overlay position-absolute top-0 end-0 bottom-0 start-0 d-flex align-items-center justify-content-center opacity-0">
                                        <div class="btn-group-vertical">
                                            <a href="{BOOK.link}" class="btn btn-light btn-sm mb-1" title="Xem nhanh">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <!-- BEGIN: can_add_cart -->
                                            <button onclick="quickAddToCart({BOOK.book_id}, '{BOOK.title}')" class="btn btn-primary btn-sm mb-1" title="Thêm vào giỏ">
                                                <i class="fas fa-cart-plus"></i>
                                            </button>
                                            <!-- END: can_add_cart -->
                                            <button onclick="addToWishlist({BOOK.book_id})" class="btn btn-outline-danger btn-sm" title="Yêu thích">
                                                <i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product Info -->
                                <div class="product-info p-3">
                                    <!-- Category -->
                                    <div class="product-category mb-2">
                                        <small class="text-muted">{BOOK.category}</small>
                                    </div>

                                    <!-- Title -->
                                    <h6 class="product-title mb-2">
                                        <a href="{BOOK.link}" class="text-decoration-none text-dark fw-bold line-clamp-2">
                                            {BOOK.title}
                                        </a>
                                    </h6>

                                    <!-- Author -->
                                    <div class="product-author mb-2">
                                        <small class="text-muted">
                                            <i class="fas fa-user-edit me-1"></i>{BOOK.author}
                                        </small>
                                    </div>

                                    <!-- Rating -->
                                    <div class="product-rating mb-2">
                                        <div class="rating-stars">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star-half-alt text-warning"></i>
                                            <small class="text-muted ms-1">(4.5)</small>
                                        </div>
                                    </div>

                                    <!-- Price -->
                                    <div class="product-price mb-3">
                                        <span class="h5 text-danger fw-bold mb-0">{BOOK.price_format}</span>
                                        <small class="text-muted text-decoration-line-through ms-2">₫{BOOK.old_price}</small>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="product-actions d-flex gap-2">
                                        <a href="{BOOK.link}" class="btn btn-outline-primary btn-sm flex-fill">
                                            <i class="fas fa-eye me-1"></i>Xem
                                        </a>
                                        <!-- BEGIN: can_add_cart -->
                                        <button onclick="quickAddToCart({BOOK.book_id}, '{BOOK.title}')" class="btn btn-primary btn-sm flex-fill">
                                            <i class="fas fa-cart-plus me-1"></i>Mua
                                        </button>
                                        <!-- END: can_add_cart -->
                                        <!-- BEGIN: cannot_add_cart -->
                                        <button disabled class="btn btn-secondary btn-sm flex-fill">
                                            <i class="fas fa-times me-1"></i>Hết hàng
                                        </button>
                                        <!-- END: cannot_add_cart -->
                                    </div>
                                </div>

                                <!-- Sale Badge -->
                                <!-- BEGIN: on_sale -->
                                <div class="sale-badge position-absolute top-0 end-0">
                                    <span class="badge bg-danger rounded-pill px-2 py-1">
                                        <i class="fas fa-fire me-1"></i>Giảm {BOOK.discount}%
                                    </span>
                                </div>
                                <!-- END: on_sale -->
                            </div>
                        </div>
                        <!-- END: book -->
                    </div>

                    <!-- BEGIN: generate_page -->
                    <nav aria-label="Books pagination" class="mt-4">
                        <ul class="pagination justify-content-center">
                            {GENERATE_PAGE}
                        </ul>
                    </nav>
                    <!-- END: generate_page -->

                    <!-- BEGIN: no_books -->
                    <div class="text-center py-5">
                        <i class="fas fa-book-open fa-4x text-muted mb-3"></i>
                        <h3>{LANG.no_books}</h3>
                        <p class="text-muted">Không tìm thấy sách nào phù hợp.</p>
                        <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}" class="btn btn-primary">Xem tất cả sách</a>
                    </div>
                    <!-- END: no_books -->
                </div>
            </div>
        </div>
    </section>
</div>

<script>
function filterBooks() {
    const minPrice = document.getElementById('price_min').value;
    const maxPrice = document.getElementById('price_max').value;
    // AJAX filter implementation can be added here
    console.log('Filter:', minPrice, maxPrice);
}

function sortBooks(sortBy) {
    // AJAX sort implementation can be added here
    console.log('Sort by:', sortBy);
}

function quickAddToCart(bookId, title) {
    // AJAX add to cart implementation
    alert('Đã thêm "' + title + '" vào giỏ hàng!');
}

function addToWishlist(bookId) {
    // AJAX add to wishlist implementation
    alert('Đã thêm vào danh sách yêu thích!');
}

// Hover effects for product cards
document.addEventListener('DOMContentLoaded', function() {
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const overlay = this.querySelector('.product-overlay');
            if (overlay) {
                overlay.style.opacity = '1';
            }
        });
        card.addEventListener('mouseleave', function() {
            const overlay = this.querySelector('.product-overlay');
            if (overlay) {
                overlay.style.opacity = '0';
            }
        });
    });
});
</script>
<!-- END: main -->
