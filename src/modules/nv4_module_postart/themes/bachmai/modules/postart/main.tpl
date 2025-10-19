<!-- BEGIN: main -->
<h2>{LANG.post_list}</h2>
<div>
<span>{TITLE}</span>
<!-- BEGIN: loop -->
    <div>{ROW.title} - {ROW.add_time}</div>
<!-- END: loop -->
<!-- BEGIN: nodata -->
    <li>{LANG.nodata}</li>
<!-- END: nodata -->
</div>
<!-- END: main -->
