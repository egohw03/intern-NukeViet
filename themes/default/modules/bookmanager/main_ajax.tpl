<!-- BEGIN: main -->
<!-- Books Grid -->
<div class="books-wrapper">
<!-- BEGIN: full_size -->
                            <div class="row g-4" id="books-grid">
                            <!-- END: full_size -->
                            <!-- BEGIN: normal -->
                            <div class="row g-4" id="books-grid">
                            <!-- END: normal -->
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
                        <!-- END: normal -->
                        <!-- END: full_size -->
<!-- END: main -->
