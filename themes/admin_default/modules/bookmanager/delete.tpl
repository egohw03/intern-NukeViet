<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{LANG.delete_book}</h3>
    </div>
    <div class="panel-body">
        <div class="alert alert-warning">
            <strong>{LANG.confirm_delete}</strong>
        </div>
        <div class="row">
            <div class="col-md-12">
                <dl class="dl-horizontal">
                    <dt>{LANG.title}:</dt>
                    <dd>{BOOK.title}</dd>
                    <dt>{LANG.author}:</dt>
                    <dd>{BOOK.author}</dd>
                    <dt>{LANG.publisher}:</dt>
                    <dd>{BOOK.publisher}</dd>
                </dl>
            </div>
        </div>
        <form method="post" action="{FORM_ACTION}">
            <div class="text-center">
                <input type="hidden" name="confirm" value="1">
                <button type="submit" class="btn btn-danger">{GLANG.delete}</button>
                <a href="{CANCEL_LINK}" class="btn btn-default">{LANG.cancel}</a>
            </div>
        </form>
        <!-- BEGIN: error -->
        <div class="alert alert-danger">{ERROR}</div>
        <!-- END: error -->
    </div>
</div>
<!-- END: main -->
