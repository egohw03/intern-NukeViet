<!-- BEGIN: main -->
<div class="row">
	<!-- Revenue Stats -->
	<div class="col-md-12">
		<h3>{LANG.revenue_stats}</h3>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">{LANG.revenue_today}</div>
					<div class="panel-body">{REVENUE_TODAY}</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">{LANG.revenue_week}</div>
					<div class="panel-body">{REVENUE_WEEK}</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">{LANG.revenue_month}</div>
					<div class="panel-body">{REVENUE_MONTH}</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Order Stats -->
	<div class="col-md-12">
		<h3>{LANG.order_stats}</h3>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-warning">
					<div class="panel-heading">{LANG.orders_pending}</div>
					<div class="panel-body">{ORDERS_PENDING}</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">{LANG.orders_completed}</div>
					<div class="panel-body">{ORDERS_COMPLETED}</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-danger">
					<div class="panel-heading">{LANG.orders_cancelled}</div>
					<div class="panel-body">{ORDERS_CANCELLED}</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Top Selling Books -->
	<div class="col-md-6">
		<h3>{LANG.top_selling_books}</h3>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>{LANG.title}</th>
					<th>{LANG.total_sold}</th>
				</tr>
			</thead>
			<tbody>
				<!-- BEGIN: top_book -->
				<tr>
					<td>{TOP_BOOK.title}</td>
					<td>{TOP_BOOK.total_sold}</td>
				</tr>
				<!-- END: top_book -->
			</tbody>
		</table>
	</div>

	<!-- Low Stock Alerts -->
	<div class="col-md-6">
		<h3>{LANG.low_stock_alerts}</h3>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>{LANG.title}</th>
					<th>{LANG.stock_quantity}</th>
				</tr>
			</thead>
			<tbody>
				<!-- BEGIN: low_stock -->
				<tr>
					<td>{LOW_STOCK.title}</td>
					<td>{LOW_STOCK.stock_quantity}</td>
				</tr>
				<!-- END: low_stock -->
			</tbody>
		</table>
	</div>
</div>
<!-- END: main -->
