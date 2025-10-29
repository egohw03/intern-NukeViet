<!-- BEGIN: main -->
<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/default/css/bookmanager.css">
<div class="book-detail-page py-5">
    <div class="container">
        <div class="row">
            <!-- Book Images -->
            <div class="col-lg-5 mb-4">
                <div class="book-images">
                    <div class="main-image mb-3">
                        <!-- BEGIN: image -->
                        <img src="{BOOK.image_url}" alt="{BOOK.title}" class="img-fluid rounded shadow" id="main-book-image">
                        <!-- END: image -->
                        <!-- BEGIN: no_image -->
                        <div class="d-flex align-items-center justify-content-center bg-light rounded shadow" style="height: 400px;">
                            <i class="fas fa-book fa-5x text-muted"></i>
                        </div>
                        <!-- END: no_image -->
                    </div>
                </div>
            </div>

            <!-- Book Info -->
            <div class="col-lg-7">
                <div class="book-info">
                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}">{LANG.books}</a></li>
                            <li class="breadcrumb-item"><a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&cat_id={BOOK.cat_id}">{BOOK.category}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{BOOK.title}</li>
                        </ol>
                    </nav>

                    <h1 class="book-title mb-3">{BOOK.title}</h1>

                    <div class="book-meta mb-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-2"><strong>{LANG.author}:</strong> {BOOK.author}</p>
                                <p class="mb-2"><strong>{LANG.category}:</strong> {BOOK.category}</p>
                                <!-- BEGIN: publisher -->
                                <p class="mb-2"><strong>{LANG.publisher}:</strong> {BOOK.publisher}</p>
                                <!-- END: publisher -->
                            </div>
                            <div class="col-sm-6">
                                <!-- BEGIN: publish_year -->
                                <p class="mb-2"><strong>{LANG.publish_year}:</strong> {BOOK.publish_year}</p>
                                <!-- END: publish_year -->
                                <!-- BEGIN: isbn -->
                                <p class="mb-2"><strong>ISBN:</strong> {BOOK.isbn}</p>
                                <!-- END: isbn -->
                                <p class="mb-2"><strong>{LANG.stock_quantity}:</strong>
                                    <!-- BEGIN: in_stock -->
                                    <span class="badge bg-success">{LANG.in_stock} ({BOOK.stock_quantity})</span>
                                    <!-- END: in_stock -->
                                    <!-- BEGIN: out_of_stock -->
                                    <span class="badge bg-danger">{LANG.out_of_stock}</span>
                                    <!-- END: out_of_stock -->
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="book-price mb-4">
                        <h3 class="text-primary mb-0">{BOOK.price_format}</h3>
                    </div>

                    <!-- Add to Cart Form -->
                    <!-- BEGIN: add_to_cart -->
                    <form method="post" action="{BOOK.link}" class="add-to-cart-form mb-4">
                        <div class="row align-items-end">
                            <div class="col-sm-3">
                                <label for="quantity" class="form-label">{LANG.quantity}</label>
                                <input type="number" name="quantity" id="quantity" value="1" min="1" max="{BOOK.stock_quantity}" class="form-control">
                            </div>
                            <div class="col-sm-9">
                                <button type="submit" name="add_to_cart" value="1" class="btn btn-primary btn-lg me-2">
                                    <i class="fas fa-cart-plus me-2"></i>{LANG.add_to_cart}
                                </button>
                                <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=cart" class="btn btn-outline-primary btn-lg">
                                    <i class="fas fa-shopping-cart me-2"></i>{LANG.cart}
                                </a>
                            </div>
                        </div>
                    </form>
                    <!-- END: add_to_cart -->

                    <!-- Login Required -->
                    <!-- BEGIN: login_required -->
                    <div class="alert alert-warning">
                        <i class="fas fa-info-circle me-2"></i>{LANG.login_required}
                        <a href="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}=users" class="btn btn-primary btn-sm ms-2">{GLANG.login}</a>
                    </div>
                    <!-- END: login_required -->
                </div>
            </div>
        </div>

        <!-- Tabs Section -->
        <div class="row mt-5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="bookTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">{LANG.description}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="false">Chi tiết sách</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">{LANG.reviews} ({TOTAL_REVIEWS})</button>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="bookTabsContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <!-- BEGIN: description -->
                        <div class="book-description">
                            {BOOK.description}
                        </div>
                        <!-- END: description -->
                        <!-- BEGIN: no_description -->
                        <p class="text-muted">Chưa có mô tả cho cuốn sách này.</p>
                        <!-- END: no_description -->
                    </div>
                    <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                        <div class="book-details">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td><strong>Tên sách</strong></td>
                                        <td>{BOOK.title}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tác giả</strong></td>
                                        <td>{BOOK.author}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Thể loại</strong></td>
                                        <td>{BOOK.category}</td>
                                    </tr>
                                    <!-- BEGIN: publisher_row -->
                                    <tr>
                                        <td><strong>Nhà xuất bản</strong></td>
                                        <td>{BOOK.publisher}</td>
                                    </tr>
                                    <!-- END: publisher_row -->
                                    <!-- BEGIN: publish_year_row -->
                                    <tr>
                                        <td><strong>Năm xuất bản</strong></td>
                                        <td>{BOOK.publish_year}</td>
                                    </tr>
                                    <!-- END: publish_year_row -->
                                    <!-- BEGIN: isbn_row -->
                                    <tr>
                                        <td><strong>ISBN</strong></td>
                                        <td>{BOOK.isbn}</td>
                                    </tr>
                                    <!-- END: isbn_row -->
                                    <tr>
                                        <td><strong>Giá</strong></td>
                                        <td>{BOOK.price_format}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tồn kho</strong></td>
                                        <td>
                                            <!-- BEGIN: in_stock_detail -->
                                            {BOOK.stock_quantity} cuốn
                                            <!-- END: in_stock_detail -->
                                            <!-- BEGIN: out_of_stock_detail -->
                                            Hết hàng
                                            <!-- END: out_of_stock_detail -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <!-- BEGIN: reviews -->
                        <div class="reviews-section">
                        <div class="average-rating mb-4">
                        <h4>{LANG.average_rating}: {AVG_RATING}/5 ★</h4>
                        <small class="text-muted">{TOTAL_REVIEWS} {LANG.total_reviews}</small>
                        </div>

                        <!-- BEGIN: review_loop -->
                        <div class="review-item mb-4 p-3 border rounded">
                        <div class="review-header d-flex justify-content-between align-items-start mb-2">
                        <div>
                        <strong>{REVIEW.username}</strong>
                        <div class="rating">
                        {REVIEW.rating}/5 ★
                        </div>
                        </div>
                        <small class="text-muted">{REVIEW.add_time_format}</small>
                        </div>
                        <!-- BEGIN: review_title -->
                        <h6 class="review-title">{REVIEW.title}</h6>
                        <!-- END: review_title -->
                        <div class="review-content">
                        {REVIEW.content}
                        </div>
                        </div>
                        <!-- END: review_loop -->
                        </div>
                        <!-- END: reviews -->

                        <!-- BEGIN: no_reviews -->
                        <div class="no-reviews text-center py-4">
                        <i class="fas fa-comments fa-3x text-muted mb-3"></i>
                        <p class="text-muted">{LANG.no_reviews}</p>
                        </div>
                        <!-- END: no_reviews -->

                        <!-- BEGIN: review_form -->
                        <div class="review-form mt-4">
                        <h5>{LANG.write_review}</h5>
                        <form method="post" action="">
                        <div class="mb-3">
                        <label class="form-label">{LANG.rating}</label>
                        <select name="rating" class="form-select" required>
                        <option value="">{LANG.select_rating}</option>
                        <option value="5">5 ★ - Xuất sắc</option>
                        <option value="4">4 ★ - Tốt</option>
                        <option value="3">3 ★ - Bình thường</option>
                        <option value="2">2 ★ - Tệ</option>
                        <option value="1">1 ★ - Rất tệ</option>
                        </select>
                        </div>
                        <div class="mb-3">
                        <label class="form-label">{LANG.review_title} ({LANG.optional})</label>
                        <input type="text" name="review_title" class="form-control" maxlength="255">
                        </div>
                        <div class="mb-3">
                        <label class="form-label">{LANG.review_content}</label>
                        <textarea name="review_content" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" name="submit_review" class="btn btn-primary">{LANG.submit_review}</button>
                        </form>
                        </div>
                        <!-- END: review_form -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Books -->
        <!-- BEGIN: related_books -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="mb-4">Sách liên quan</h3>
                <div class="related-books row">
                    <!-- BEGIN: related -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="card-title">
                                    <a href="{RELATED.link}" class="text-decoration-none">{RELATED.title}</a>
                                </h6>
                                <p class="card-text small text-muted">{RELATED.author}</p>
                                <p class="card-text text-primary fw-bold">{RELATED.price_format}</p>
                            </div>
                        </div>
                    </div>
                    <!-- END: related -->
                </div>
            </div>
        </div>
        <!-- END: related_books -->
    </div>
</div>

<script>
// Initialize Bootstrap tabs if available
if (typeof bootstrap !== 'undefined') {
    var triggerTabList = [].slice.call(document.querySelectorAll('#bookTabs button'))
    triggerTabList.forEach(function (triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)
        triggerEl.addEventListener('click', function (event) {
            event.preventDefault()
            tabTrigger.show()
        })
    })
}
</script>
<!-- END: main -->
