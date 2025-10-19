<div class="panel panel-default">
    <div class="panel-heading">{$LANG.delete_book}</div>
    <div class="panel-body">
        {if !empty($ERROR)}
        <div class="alert alert-danger">{$ERROR}</div>
        {/if}
        <p>{$LANG.confirm_delete}: <strong>{$BOOK.title}</strong>?</p>
        <form action="{$FORM_ACTION}" method="post">
            <input type="hidden" name="confirm" value="1">
            <button type="submit" class="btn btn-danger">{$LANG.delete_book}</button>
            <a href="{$CANCEL_LINK}" class="btn btn-default">{$LANG.cancel}</a>
        </form>
    </div>
</div>
