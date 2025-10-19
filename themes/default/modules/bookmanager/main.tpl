<!-- BEGIN: main -->
<div class="book-list">
    <div class="page-header">
        <h1>{LANG.book_list}</h1>
    </div>
    
    <!-- BEGIN: book_loop -->
    <div class="row">
        <div class="col-md-12">
            <div class="book-item">
                <div class="row">
                    <div class="col-md-2">
                        <!-- BEGIN: image -->
                        <div class="book-image">
                            <a href="{BOOK.link}">
                                <img src="{BOOK.image}" alt="{BOOK.title}" class="img-responsive img-thumbnail">
                            </a>
                        </div>
                        <!-- END: image -->
                        <!-- BEGIN: no_image -->
                        <div class="book-image">
                            <a href="{BOOK.link}">
                                <div class="no-image-placeholder">
                                    <i class="fa fa-book fa-3x"></i>
                                    <br>
                                    <small>{GLANG.no_image}</small>
                                </div>
                            </a>
                        </div>
                        <!-- END: no_image -->
                    </div>
                    <div class="col-md-10">
                        <div class="book-info">
                            <h3 class="book-title">
                                <a href="{BOOK.link}">{BOOK.title}</a>
                            </h3>
                            <div class="book-meta">
                                <p><strong>{LANG.author}:</strong> {BOOK.author}</p>
                                <!-- BEGIN: publisher -->
                                <p><strong>{LANG.publisher}:</strong> {BOOK.publisher}</p>
                                <!-- END: publisher -->
                                <!-- BEGIN: publish_year -->
                                <p><strong>{LANG.publish_year}:</strong> {BOOK.publish_year}</p>
                                <!-- END: publish_year -->
                                <!-- BEGIN: isbn -->
                                <p><strong>{LANG.isbn}:</strong> {BOOK.isbn}</p>
                                <!-- END: isbn -->
                            </div>
                            <!-- BEGIN: description -->
                            <div class="book-description">
                                <p>{BOOK.description}</p>
                            </div>
                            <!-- END: description -->
                            <div class="book-actions">
                                <a href="{BOOK.link}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i> {LANG.view}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <!-- END: book_loop -->
    
    <!-- BEGIN: no_books -->
    <div class="alert alert-info text-center">
        <i class="fa fa-info-circle fa-2x"></i>
        <br>
        {LANG.no_books}
    </div>
    <!-- END: no_books -->
    
    <!-- BEGIN: pagination -->
    <div class="text-center">
        {PAGINATION}
    </div>
    <!-- END: pagination -->
</div>

<!-- END: main -->
