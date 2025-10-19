<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="w100">{$LANG.title}</th>
                <th class="w150">{$LANG.author}</th>
                <th class="w150">{$LANG.publisher}</th>
                <th class="w100">{$LANG.publish_year}</th>
                <th class="w100">{$LANG.status}</th>
                <th class="w150 text-center">{$LANG.function}</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$BOOKS item=book}
            <tr>
                <td>{$book.title}</td>
                <td>{$book.author}</td>
                <td>{$book.publisher}</td>
                <td>{$book.publish_year}</td>
                <td>
                    {if $book.status}
                    <span class="text-success">{$LANG.active}</span>
                    {else}
                    <span class="text-danger">{$LANG.inactive}</span>
                    {/if}
                </td>
                <td class="text-center">
                    <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={$module_name}&{NV_OP_VARIABLE}=edit&id={$book.id}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> {$LANG.edit_book}</a>
                    <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={$module_name}&{NV_OP_VARIABLE}=delete&id={$book.id}" class="btn btn-xs btn-danger" onclick="return confirm('{$LANG.confirm_delete}')"><i class="fa fa-trash"></i> {$LANG.delete_book}</a>
                </td>
            </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{if empty($BOOKS)}
<div class="text-center">
    <p>{$LANG.no_data}</p>
</div>
{/if}
<div class="text-center">
    <a href="{$ADD_LINK}" class="btn btn-primary">{$LANG.add_book}</a>
</div>
