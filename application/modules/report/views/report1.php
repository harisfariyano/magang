<div class="content">
	<!-- <div class="block block-rounded"> -->

	<div class="row flex">
		<div class="col-6 col-lg-3">
			<a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.html">
				<div class="block-content block-content-full">
					<div class="fs-1 fw-semibold text-primary">35</div>
				</div>
				<div class="block-content py-1 bg-modern-dark">
					<p class="block-title text-gray mb-0">
						Keandalan
					</p>
				</div>
			</a>
		</div>
		<div class="col-6 col-lg-3">
			<a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.html">
				<div class="block-content block-content-full">
					<div class="fs-1 fw-semibold text-primary">35</div>
				</div>
				<div class="block-content py-1 bg-modern-dark">
					<p class="block-title text-gray mb-0">
						Daya Tanggap
					</p>
				</div>
			</a>
		</div>
		<div class="col-6 col-lg-3">
			<a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.html">
				<div class="block-content block-content-full">
					<div class="fs-1 fw-semibold text-primary">35</div>
				</div>
				<div class="block-content py-1 bg-modern-dark">
					<p class="block-title text-gray mb-0">
						Kepastian
					</p>
				</div>
			</a>
		</div>
		<div class="col-6 col-lg-3">
			<a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.html">
				<div class="block-content block-content-full">
					<div class="fs-1 fw-semibold text-primary">35</div>
				</div>
				<div class="block-content py-1 bg-modern-dark">
					<p class="block-title text-gray mb-0">
						Kepedulian
					</p>
				</div>
			</a>
		</div>
	</div>

	<div class="block block-rounded">
		<div class="block-header block-header-default bg-modern-dark text-gray">
			<h3 class="block-title">Penilaian Evaluasi Pengelolaan:</h3>
		</div>
		<div class="block-content block-content-full overflow-x-auto">
			<div id="DataTables_Table_1_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
				<div class="row mt-2 justify-content-between">
					<div class="col-md-auto me-auto ">
						<div class="dt-buttons btn-group flex-wrap">
						</div>
					</div>
				</div>
				<div class="row mt-2 justify-content-md-center">
					<div class="col-12 ">
						<table class="table table-bordered table-striped table-vcenter js-dataTable-full" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
							<thead>
								<tr role="row">
									<th class="text-center dt-type-numeric dt-orderable-asc dt-orderable-desc dt-ordering-asc" style="width: 80px;" data-dt-column="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: Activate to invert sorting" tabindex="0"><span class="dt-column-title" role="button">Tahun Ajaran</span><span class="dt-column-order"></span></th>
									<th data-dt-column="1" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc" aria-label="Name: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Prodi</span><span class="dt-column-order"></span></th>
									<th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" style="width: 30%;" data-dt-column="1" rowspan="1" colspan="1" aria-label="Email: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Sub Quest</span><span class="dt-column-order"></span></th>
									<th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" style="width: 30%;" data-dt-column="2" rowspan="1" colspan="1" aria-label="Email: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Quest</span><span class="dt-column-order"></span></th>
									<th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" style="width: 15%;" data-dt-column="4" rowspan="1" colspan="1" aria-label="Registered: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Nilai</span><span class="dt-column-order"></span></th>
								</tr>
							</thead>
							<tbody>
								<?php if (!empty($report_eval)) { ?>
									<?php foreach ($report_eval as $report) { ?>
										<tr>
											<td><?php echo $report['tahun_ajaran']; ?></td>
											<td><?php echo $report['prodi_name']; ?></td>
											<td><?php echo $report['sub_quest_title']; ?></td>
											<td><?php echo $report['quesioner']; ?></td>
											<td><?php echo number_format($report['avg_score'], 2); ?></td>
										</tr>
									<?php } ?>
								<?php } else { ?>
									<tr>
										<td colspan="6">No data available</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>