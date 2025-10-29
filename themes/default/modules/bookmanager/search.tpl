<!-- BEGIN: main -->
<div class="bookmanager-search">
    <h1>{LANG.search_results}</h1>

    <!-- Search Form -->
    <div class="search-form mb-4">
        <form method="get" action="{NV_BASE_SITEURL}index.php">
            <input type="hidden" name="{NV_LANG_VARIABLE}" value="{NV_LANG_DATA}" />
            <input type="hidden" name="{NV_NAME_VARIABLE}" value="{MODULE_NAME}" />
            <input type="hidden" name="{NV_OP_VARIABLE}" value="search" />

            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="q" value="{SEARCH_QUERY}" class="form-control" placeholder="{LANG.search_placeholder}" />
                </div>
                <div class="col-md-3">
                    <select name="cat" class="form-control">
                        <option value="0">{LANG.all_categories}</option>
                        <!-- BEGIN: cat_filter -->
                        <option value="{CAT.id}" {CAT.selected}>{CAT.title}</option>
                        <!-- END: cat_filter -->
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary btn-block">{LANG.search}</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Results -->
    <div class="search-results">
        <!-- BEGIN: book_loop -->
        <div class="book-item row mb-3">
            <div class="col-md-2">
                <!-- BEGIN: image -->
                <img src="{BOOK.image_url}" alt="{BOOK.title}" class="img-responsive" />
                <!-- END: image -->
            </div>
            <div class="col-md-10">
                <h3><a href="{BOOK.link}">{BOOK.title}</a></h3>
                <p class="text-muted">{LANG.author}: {BOOK.author}</p>
                <p class="text-muted">{LANG.category}: {BOOK.cat_title}</p>
                <p class="price text-danger"><strong>{BOOK.price_format}</strong></p>
                <p>{BOOK.description|truncate:200}</p>
            </div>
        </div>
        <!-- END: book_loop -->

        <!-- BEGIN: no_books -->
        <div class="alert alert-info">{LANG.no_search_results}</div>
        <!-- END: no_books -->
    </div>

    <!-- Pagination -->
    <!-- BEGIN: pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <!-- BEGIN: page -->
            <li class="{PAGE.current}"><a href="{PAGE.link}">{PAGE.num}</a></li>
            <!-- END: page -->
        </ul>
    </nav>
    <!-- END: pagination -->
</div>
<!-- END: main -->
