<form action="{$FORM_ACTION}" method="post" class="form-horizontal">
    <div class="panel panel-default">
        <div class="panel-heading">{$LANG.add_book}</div>
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
                    <input type="text" name="title" value="" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.author} <span class="text-danger">(*)</span></label>
                <div class="col-sm-21">
                    <input type="text" name="author" value="" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.publisher}</label>
                <div class="col-sm-21">
                    <input type="text" name="publisher" value="" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.publish_year}</label>
                <div class="col-sm-21">
                    <input type="number" name="publish_year" value="" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.isbn}</label>
                <div class="col-sm-21">
                    <input type="text" name="isbn" value="" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.description}</label>
                <div class="col-sm-21">
                    <textarea name="description" class="form-control" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">{$LANG.status}</label>
                <div class="col-sm-21">
                    <div class="radio">
                        <label><input type="radio" name="status" value="1" checked> {$LANG.active}</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="status" value="0"> {$LANG.inactive}</label>
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
