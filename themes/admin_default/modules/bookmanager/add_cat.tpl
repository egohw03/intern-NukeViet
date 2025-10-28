<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{LANG.add_cat}</h3>
        <div class="pull-right">
            <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}=categories" class="btn btn-default btn-sm">
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

<form method="post" action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" enctype="multipart/form-data" id="category-form">
<input type="hidden" name="submit" value="1">

<div class="form-group">
<label for="title">{LANG.title} <span class="text-danger">*</span></label>
<input type="text" class="form-control" id="title" name="title" value="{DATA.title}" required>
</div>

<div class="form-group">
<label for="description">{LANG.description}</label>
<textarea class="form-control" id="description" name="description" rows="5">{DATA.description}</textarea>
</div>

<div class="form-group">
    <label for="status">{LANG.status}</label>
        <select class="form-control" id="status" name="status">
                <option value="1" selected="selected">{LANG.active}</option>
                    <option value="0">{LANG.inactive}</option>
            </select>
    </div>

    <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i> {LANG.save}
                </button>
                <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}=categories" class="btn btn-default">
                    <i class="fa fa-times"></i> {LANG.cancel}
                </a>
            </div>
        </form>
    </div>
</div>
<!-- END: main -->
