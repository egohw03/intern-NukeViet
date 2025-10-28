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
                                <ul class="pagination pagination-lg justify-content-center" id="books-pagination">
                                    <!-- Previous -->
                                    <li class="page-item <!-- BEGIN: prev_disabled -->disabled<!-- END: prev_disabled -->">
                                        <a class="page-link" href="javascript:void(0)" onclick="changePage({PREV_PAGE}); return false;" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>

                                    <!-- Page numbers -->
                                    <!-- BEGIN: page -->
                                    <li class="page-item <!-- BEGIN: active -->active<!-- END: active -->">
                                        <a class="page-link" href="javascript:void(0)" onclick="changePage({PAGE_NUM}); return false;">{PAGE_NUM}</a>
                                    </li>
                                    <!-- END: page -->

                                    <!-- Next -->
                                    <li class="page-item <!-- BEGIN: next_disabled -->disabled<!-- END: next_disabled -->">
                                        <a class="page-link" href="javascript:void(0)" onclick="changePage({NEXT_PAGE}); return false;" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
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
// Safe JavaScript initialization to avoid jQuery conflicts
(function() {
    'use strict';

    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        try {
            initializeBookStore();
        } catch (error) {
            console.error('BookManager initialization error:', error);
        }
    });

    function initializeBookStore() {
        // Initialize components safely
        safeSetViewMode('grid');
        safeInitializePriceRange();
        safeInitializeHoverEffects();
    }

    // Safe view mode functions
    function safeSetViewMode(mode) {
        try {
            const gridView = document.getElementById('grid-view');
            const listView = document.getElementById('list-view');
            const booksGrid = document.getElementById('books-grid');

            if (booksGrid) {
                if (mode === 'list') {
                    if (gridView) gridView.classList.remove('active');
                    if (listView) listView.classList.add('active');
                    booksGrid.classList.add('list-view');
                } else {
                    if (listView) listView.classList.remove('active');
                    if (gridView) gridView.classList.add('active');
                    booksGrid.classList.remove('list-view');
                }
            }
        } catch (error) {
            console.error('Error setting view mode:', error);
        }
    }

    function safeInitializePriceRange() {
        try {
            const priceMin = document.getElementById('price_min');
            const priceMax = document.getElementById('price_max');

            if (priceMin && priceMax) {
                updatePriceDisplay();
                priceMin.addEventListener('input', updatePriceDisplay);
                priceMax.addEventListener('input', updatePriceDisplay);
            }
        } catch (error) {
            console.error('Error initializing price range:', error);
        }
    }

    function safeInitializeHoverEffects() {
        try {
            const bookItems = document.querySelectorAll('.book-item');
            bookItems.forEach(function(item) {
                item.addEventListener('mouseenter', function() {
                    const actions = this.querySelector('.book-actions');
                    if (actions) {
                        actions.style.opacity = '1';
                        actions.style.transform = 'translateX(0)';
                    }
                });
                item.addEventListener('mouseleave', function() {
                    const actions = this.querySelector('.book-actions');
                    if (actions) {
                        actions.style.opacity = '0';
                        actions.style.transform = 'translateX(10px)';
                    }
                });
            });
        } catch (error) {
            console.error('Error initializing hover effects:', error);
        }
    }

    // Global functions (attached to window for onclick handlers)
    window.toggleView = function(mode) {
        safeSetViewMode(mode);
    };

    window.sortBooks = function(sortBy) {
        if (!sortBy) return;
        console.log('Sorting by:', sortBy);
        showToastSafe('Đã sắp xếp theo: ' + sortBy, 'info');
    };

    window.applyFilters = function() {
        try {
            const minPrice = document.getElementById('price_min')?.value || 0;
            const maxPrice = document.getElementById('price_max')?.value || 1000000;
            const inStockOnly = document.getElementById('in_stock_only')?.checked || false;
            const sortBy = document.getElementById('sort_by')?.value || 'add_time';

            console.log('Filters:', { minPrice, maxPrice, inStockOnly, sortBy });
            showToastSafe('Đã áp dụng bộ lọc!', 'success');
        } catch (error) {
            console.error('Error applying filters:', error);
        }
    };

    window.quickView = function(bookId) {
        showToastSafe('Tính năng xem nhanh sẽ được phát triển!', 'info');
    };

    window.quickAddToCart = function(bookId, title) {
        if (!bookId || !title) {
            showToastSafe('Thông tin sách không hợp lệ', 'error');
            return;
        }

        fetch('{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&action=add_to_cart', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'book_id=' + encodeURIComponent(bookId) + '&quantity=1'
        })
        .then(function(response) {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(function(data) {
            if (data.status === 'success') {
                showToastSafe('✓ Đã thêm "' + title + '" vào giỏ hàng!', 'success');
                updateCartCount();
            } else {
                showToastSafe('✗ ' + (data.message || 'Có lỗi xảy ra'), 'error');
            }
        })
        .catch(function(error) {
            console.error('Error adding to cart:', error);
            showToastSafe('✗ Không thể kết nối đến server', 'error');
        });
    };

    window.addToWishlist = function(bookId) {
        if (!bookId) {
            showToastSafe('ID sách không hợp lệ', 'error');
            return;
        }

        fetch('{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&action=add_to_wishlist', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'book_id=' + encodeURIComponent(bookId)
        })
        .then(function(response) { return response.json(); })
        .then(function(data) {
            if (data.status === 'success') {
                showToastSafe('♥ Đã thêm vào danh sách yêu thích!', 'success');
            } else {
                showToastSafe('✗ ' + (data.message || 'Có lỗi xảy ra'), 'error');
            }
        })
        .catch(function(error) {
            console.error('Error adding to wishlist:', error);
            showToastSafe('✗ Không thể kết nối đến server', 'error');
        });
    };

    // AJAX Pagination
    let currentPage = 1;

    window.changePage = function(pageNum) {
        if (!pageNum || pageNum < 1) return;
        currentPage = pageNum;
        loadBooksPage(pageNum);
    };

    function loadBooksPage(pageNum) {
        const booksContainer = document.querySelector('.books-wrapper');
        const paginationContainer = document.getElementById('books-pagination');

        if (!booksContainer) {
            console.error('Books container not found');
            return;
        }

        // Show loading
        booksContainer.innerHTML = '<div class="text-center py-5"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div><p class="mt-2">Đang tải...</p></div>';

        // Build URL
        let url = '{BASE_URL}';
        if (pageNum > 1) {
            url += '&page=' + pageNum;
        }

        // AJAX request
        fetch(url, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(function(response) {
            if (!response.ok) {
                throw new Error('HTTP error! status: ' + response.status);
            }
            return response.text();
        })
        .then(function(html) {
            try {
                // Extract books content from HTML
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newBooksContainer = doc.querySelector('.books-wrapper');
                const newPagination = doc.querySelector('#books-pagination');

                if (newBooksContainer) {
                    booksContainer.innerHTML = newBooksContainer.innerHTML;
                } else {
                    throw new Error('Books content not found in response');
                }

                if (newPagination && paginationContainer) {
                    paginationContainer.innerHTML = newPagination.innerHTML;
                }

                // Update URL without reload
                try {
                    const newUrl = url.replace('&amp;', '&');
                    window.history.pushState({page: pageNum}, '', newUrl);
                } catch (e) {
                    console.warn('History API not supported');
                }

                // Scroll to top of books
                const booksSection = document.querySelector('.books-container');
                if (booksSection) {
                    booksSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }

                showToastSafe('Đã tải trang ' + pageNum, 'success');

                // Re-initialize hover effects for new content
                safeInitializeHoverEffects();

            } catch (parseError) {
                console.error('Error parsing HTML:', parseError);
                booksContainer.innerHTML = '<div class="alert alert-danger">Có lỗi xảy ra khi xử lý dữ liệu. Vui lòng thử lại.</div>';
                showToastSafe('Lỗi xử lý dữ liệu', 'error');
            }
        })
        .catch(function(error) {
            console.error('Error loading page:', error);
            booksContainer.innerHTML = '<div class="alert alert-danger">Có lỗi xảy ra khi tải dữ liệu. Vui lòng thử lại.</div>';
            showToastSafe('Lỗi tải trang', 'error');
        });
    }

    // Handle browser back/forward
    window.addEventListener('popstate', function(event) {
        if (event.state && event.state.page) {
            loadBooksPage(event.state.page);
        }
    });

    // Utility functions
    function updatePriceDisplay() {
        try {
            const minPriceEl = document.getElementById('min_price_display');
            const maxPriceEl = document.getElementById('max_price_display');
            const minInput = document.getElementById('price_min');
            const maxInput = document.getElementById('price_max');

            if (minPriceEl && maxPriceEl && minInput && maxInput) {
                const minPrice = minInput.value;
                const maxPrice = maxInput.value;
                minPriceEl.textContent = formatPrice(minPrice);
                maxPriceEl.textContent = formatPrice(maxPrice);
            }
        } catch (error) {
            console.error('Error updating price display:', error);
        }
    }

    function formatPrice(price) {
        try {
            return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(price);
        } catch (e) {
            return price + 'đ';
        }
    }

    function showToastSafe(message, type = 'info') {
        try {
            // Remove existing toasts
            const existingToasts = document.querySelectorAll('.toast-notification');
            existingToasts.forEach(function(toast) { toast.remove(); });

            const toast = document.createElement('div');
            toast.className = 'toast-notification toast-' + (type === 'success' ? 'success' : type === 'error' ? 'error' : 'info');

            toast.innerHTML = '<div class="toast-content">' + (message || 'Thông báo') + '</div><button class="toast-close" onclick="this.parentElement.remove()">&times;</button>';

            document.body.appendChild(toast);

            // Animate in
            setTimeout(function() { toast.classList.add('show'); }, 10);

            // Auto remove
            setTimeout(function() {
                if (toast && toast.parentElement) {
                    toast.classList.remove('show');
                    setTimeout(function() {
                        if (toast.parentElement) {
                            toast.remove();
                        }
                    }, 300);
                }
            }, 4000);
        } catch (error) {
            console.error('Error showing toast:', error);
            // Fallback
            alert(message);
        }
    }

    function updateCartCount() {
        fetch('{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&action=get_cart_count')
        .then(function(response) { return response.json(); })
        .then(function(data) {
            const cartBadge = document.querySelector('.cart-count');
            if (cartBadge) {
                cartBadge.textContent = data.count || 0;
            }
        })
        .catch(function(error) { console.error('Error updating cart count:', error); });
    }

})();
</script>
<!-- END: main -->
