<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{LANG.edit_book}</h3>
        <div class="pull-right">
            <a href="{BACK_LINK}" class="btn btn-default btn-sm">
                <i class="fa fa-arrow-left"></i> {LANG.back}
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <!-- BEGIN: error -->
        <div class="alert alert-danger">
            {ERROR}
        </div>
        <!-- END: error -->

        <form method="post" action="{FORM_ACTION}" enctype="multipart/form-data" id="book-form">
            <input type="hidden" name="submit" value="1">

            <div class="row">
            <div class="col-md-8">
            <div class="form-group">
            <label for="cat_id">{LANG.category} <span class="text-danger">*</span></label>
            <select class="form-control" id="cat_id" name="cat_id" required>
                    <option value="">{LANG.category_select}</option>
                            <!-- BEGIN: category -->
                            <option value="{CAT.id}" {CAT.selected}>{CAT.title}</option>
                            <!-- END: category -->
                        </select>
                    </div>

            <div class="form-group">
            <label for="title">{LANG.title} <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="title" name="title" value="{DATA.title}" required>
                    </div>

                    <div class="form-group">
                        <label for="author">{LANG.author} <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="author" name="author" value="{DATA.author}" required>
                    </div>

                    <div class="form-group">
                        <label for="publisher">{LANG.publisher}</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" value="{DATA.publisher}">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="publish_year">{LANG.publish_year}</label>
                                <input type="number" class="form-control" id="publish_year" name="publish_year" value="{DATA.publish_year}" min="1800" max="{CURRENT_YEAR}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="isbn">{LANG.isbn}</label>
                                <input type="text" class="form-control" id="isbn" name="isbn" value="{DATA.isbn}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">{LANG.description}</label>
                        <textarea class="form-control" id="description" name="description" rows="6">{DATA.description}</textarea>
                    </div>
                </div>

                <div class="col-md-4">
                <div class="form-group">
                <label for="price">{LANG.price} (VNĐ)</label>
                        <input type="number" class="form-control" id="price" name="price" value="{DATA.price}" step="0.01" min="0" required>
                    </div>

                    <div class="form-group">
                        <label for="stock_quantity">{LANG.stock_quantity}</label>
                        <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" value="{DATA.stock_quantity}" min="0" required>
                    </div>

                    <div class="form-group">
                        <label>{LANG.current_image}</label>
                        <!-- BEGIN: current_image -->
                        <div class="mb-2">
                            <img src="{DATA.image_url}" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                        <!-- END: current_image -->
                        <label for="image">{LANG.image} (Để trống nếu không thay đổi)</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        <small class="help-block">{LANG.upload_allow_img}</small>
                    </div>

                    <div class="form-group">
                        <label for="status">{LANG.status}</label>
                        <select class="form-control" id="status" name="status">
                        <option value="1" {DATA.status_1_selected}>{LANG.active}</option>
                        <option value="0" {DATA.status_0_selected}>{LANG.inactive}</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i> {LANG.save}
                </button>
                <a href="{BACK_LINK}" class="btn btn-default">
                    <i class="fa fa-times"></i> {LANG.cancel}
                </a>
            </div>
        </form>
    </div>
</div>
<!-- END: main -->
