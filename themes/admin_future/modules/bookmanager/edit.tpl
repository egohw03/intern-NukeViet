<form action="{$FORM_ACTION}" method="post" class="form-horizontal">
    <div class="panel panel-default">
        <div class="panel-heading">{$LANG.edit_book}</div>
        <div class="panel-body">
            {if !empty($ERROR)}
            <div class="alert alert-danger">{$ERROR}</div>
            {/if}
            {if !empty($SUCCESS)}
            <div class="alert alert-success">{$SUCCESS}</div>
            {/if}
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.title} <span class="text-danger">(*)</span></label>
                <div class="col-sm-21">
                    <input type="text" name="title" value="{$BOOK.title}" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.author} <span class="text-danger">(*)</span></label>
                <div class="col-sm-21">
                    <input type="text" name="author" value="{$BOOK.author}" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.publisher}</label>
                <div class="col-sm-21">
                    <input type="text" name="publisher" value="{$BOOK.publisher}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.publish_year}</label>
                <div class="col-sm-21">
                    <input type="number" name="publish_year" value="{$BOOK.publish_year}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.isbn}</label>
                <div class="col-sm-21">
                    <input type="text" name="isbn" value="{$BOOK.isbn}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.description}</label>
                <div class="col-sm-21">
                    <textarea name="description" class="form-control" rows="5">{$BOOK.description}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.status}</label>
                <div class="col-sm-21">
                    <div class="radio">
                        <label><input type="radio" name="status" value="1" {$CHECKED_ACTIVE}> {$LANG.active}</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="status" value="0" {$CHECKED_INACTIVE}> {$LANG.inactive}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <input type="submit" name="submit" value="{$LANG.save}" class="btn btn-primary">
            <a href="{$CANCEL_LINK}" class="btn btn-default">{$LANG.cancel}</a>
        </div>
    </div>
</form>
