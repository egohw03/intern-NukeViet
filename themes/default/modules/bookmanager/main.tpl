<!-- BEGIN: main -->
<div class="book-list">
    <div class="page-header">
        <h1>{LANG.book_list}</h1>
    </div>

    <div class="row">
        <!-- BEGIN: book_loop -->
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
            <div class="card h-100 shadow-sm border-0" style="display: flex; flex-direction: column; justify-content: space-between; min-height: 300px; max-width: 320px; margin: 0 auto; padding: 10px; transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)';">
                <!-- BEGIN: image -->
                <a href="{BOOK.link}">
                    <img src="{BOOK.image}" alt="{BOOK.title}" class="card-img-top" style="height: 100px; object-fit: cover;">
                </a>
                <!-- END: image -->
                <!-- BEGIN: no_image -->
                <a href="{BOOK.link}">
                    <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 100px;">
                        <div class="text-center">
                            <i class="fa fa-book fa-4x text-muted"></i>
                            <br>
                            <small class="text-muted">{GLANG.no_image}</small>
                        </div>
                    </div>
                </a>
                <!-- END: no_image -->
                <div class="card-body" style="display: flex; flex-direction: column; height: 100%; justify-content: space-between; align-items: center;">
                <div>
                <h6 class="card-title text-center">
                <a href="{BOOK.link}" class="text-decoration-none text-dark">{BOOK.title}</a>
                </h6>
                <p class="text-center text-muted small">{BOOK.author}</p>
                        <p class="text-center text-primary font-weight-bold">{BOOK.price_format}</p>
                </div>
                <div>
                <a href="{BOOK.link}" class="btn btn-primary btn-sm w-100">
                    <i class="fa fa-eye"></i> {LANG.view}
                        </a>
                </div>
                </div>
            </div>
        </div>
        <!-- END: book_loop -->
    </div>
    
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
