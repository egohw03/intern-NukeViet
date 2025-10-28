<!-- BEGIN: main -->
<div class="book-detail">
    <div class="page-header">
        <div class="pull-right">
            <a href="{BACK_LINK}" class="btn btn-default">
                <i class="fa fa-arrow-left"></i> {GLANG.back}
            </a>
        </div>
        <h1>{BOOK.title}</h1>
        <div class="clearfix"></div>
    </div>
    
    <div class="row">
        <div class="col-md-4">
            <div class="book-cover">
                <!-- BEGIN: image -->
                <img src="{BOOK.image}" alt="{BOOK.title}" class="img-responsive img-thumbnail center-block">
                <!-- END: image -->
                <!-- BEGIN: no_image -->
                <div class="no-image-placeholder text-center">
                    <i class="fa fa-book fa-5x"></i>
                    <br>
                    <small>{GLANG.no_image}</small>
                </div>
                <!-- END: no_image -->
            </div>
        </div>
        <div class="col-md-8">
            <div class="book-info">
                <h2 class="book-title">{BOOK.title}</h2>
                
                <div class="book-meta">
                    <table class="table table-striped">
                        <tr>
                        <td width="120"><strong>{LANG.author}:</strong></td>
                        <td>{BOOK.author}</td>
                        </tr>
                        <tr>
                        <td><strong>{LANG.price}:</strong></td>
                        <td class="text-primary font-weight-bold">{BOOK.price_format}</td>
                        </tr>
                        <tr>
                        <td><strong>{LANG.stock_quantity}:</strong></td>
                        <td>{BOOK.stock_quantity}</td>
                        </tr>
                        <!-- BEGIN: publisher -->
                        <tr>
                            <td><strong>{LANG.publisher}:</strong></td>
                            <td>{BOOK.publisher}</td>
                        </tr>
                        <!-- END: publisher -->
                        <!-- BEGIN: publish_year -->
                        <tr>
                            <td><strong>{LANG.publish_year}:</strong></td>
                            <td>{BOOK.publish_year}</td>
                        </tr>
                        <!-- END: publish_year -->
                        <!-- BEGIN: isbn -->
                        <tr>
                            <td><strong>{LANG.isbn}:</strong></td>
                            <td>{BOOK.isbn}</td>
                        </tr>
                        <!-- END: isbn -->
                    </table>
                </div>
                
                <!-- BEGIN: description -->
                <div class="book-description">
                <h4>{LANG.description}</h4>
                <div class="well">
                {BOOK.description}
                </div>
                </div>
                <!-- END: description -->
                <div class="book-actions" style="margin-top: 20px;">
                    <!-- BEGIN: in_stock -->
                    <a href="{ADD_TO_CART_LINK}" class="btn btn-success btn-lg">Thêm vào giỏ hàng</a>
                    <!-- END: in_stock -->
                    <!-- BEGIN: out_of_stock -->
                    <button class="btn btn-secondary btn-lg" disabled>Hết hàng</button>
                    <!-- END: out_of_stock -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- BEGIN: related_books -->
    <div class="related-books">
        <h3>{LANG.related_books}</h3>
        <div class="row">
            <!-- BEGIN: related_loop -->
            <div class="col-md-3 col-sm-6">
                <div class="related-book-item">
                    <div class="book-cover-small">
                        <!-- BEGIN: image -->
                        <a href="{RELATED_BOOK.link}">
                            <img src="{RELATED_BOOK.image}" alt="{RELATED_BOOK.title}" class="img-responsive img-thumbnail">
                        </a>
                        <!-- END: image -->
                        <!-- BEGIN: no_image -->
                        <a href="{RELATED_BOOK.link}">
                            <div class="no-image-placeholder-small">
                                <i class="fa fa-book fa-2x"></i>
                            </div>
                        </a>
                        <!-- END: no_image -->
                    </div>
                    <div class="book-title-small">
                        <a href="{RELATED_BOOK.link}" title="{RELATED_BOOK.title}">
                            {RELATED_BOOK.title}
                        </a>
                    </div>
                    <div class="book-author-small">
                        {RELATED_BOOK.author}
                    </div>
                </div>
            </div>
            <!-- END: related_loop -->
        </div>
    </div>
    <!-- END: related_books -->
</div>

<style>
.book-detail .book-cover {
    margin-bottom: 20px;
}

.book-detail .no-image-placeholder {
    padding: 40px;
    background: #f5f5f5;
    border: 2px dashed #ddd;
    color: #999;
    border-radius: 5px;
}

.book-detail .book-title {
    color: #333;
    margin-top: 0;
}

.book-detail .book-meta table td {
    border-top: none;
}

.book-detail .book-description {
    margin-top: 20px;
}

.related-books {
    margin-top: 40px;
    padding-top: 20px;
    border-top: 1px solid #eee;
}

.related-book-item {
    text-align: center;
    margin-bottom: 20px;
}

.related-book-item .book-cover-small {
    margin-bottom: 10px;
}

.related-book-item .no-image-placeholder-small {
    padding: 20px;
    background: #f5f5f5;
    border: 1px solid #ddd;
    color: #999;
    border-radius: 3px;
}

.related-book-item .book-title-small {
    font-weight: bold;
    margin-bottom: 5px;
}

.related-book-item .book-title-small a {
    color: #333;
    text-decoration: none;
    font-size: 12px;
}

.related-book-item .book-title-small a:hover {
    color: #337ab7;
}

.related-book-item .book-author-small {
    color: #666;
    font-size: 11px;
}
</style>
<!-- END: main -->
