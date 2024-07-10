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
			<h3 class="block-title">Penilaian Dosen : </h3>
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
					<div class="col-12">
						<table class="table table-bordered table-striped table-vcenter js-dataTable-full" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
							<thead>
								<tr role="row">
									<th class="text-center" style="width: 10%;">Tahun Ajaran</th>
									<th>Nama</th>
									<th class="d-none d-sm-table-cell" style="width: 15%;">Nilai</th>
									<th class="d-none d-sm-table-cell" style="width: 15%;">Detail</th>
								</tr>
							</thead>
							<tbody>
								<?php if (!empty($report_edom)) { ?>
									<?php foreach ($report_edom as $report) { ?>
										<tr>
											<td><?php echo $report['tahun_ajaran']; ?></td>
											<td><?php echo $report['id_dosen']; ?></td>
											<td><?php echo number_format($report['nilai'], 2); ?></td>
											<td><button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled update-btn" data-bs-toggle="modal" data-bs-target="#modal-block-popout"> Detail</button></td>
										</tr>
									<?php } ?>
								<?php } else { ?>
									<tr>
										<td colspan="4">No data available</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>

				<!-- Pop Out detail Modal -->
				<?php if (!empty($report_edom)) { ?>
					<?php foreach ($report_edom as $report) { ?>
						<div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
							<div class="modal-dialog modal-dialog-popout" role="document">
								<div class="modal-content">
									<div class="block block-rounded block-transparent mb-0">
										<div class="block-header block-header-default">
											<h3 class="block-title"><?php echo $report['id_dosen']; ?></h3>
											<div class="block-options">
												<button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
													<i class="fa fa-fw fa-times"></i>
												</button>
											</div>
										</div>
										<div class="block-content fs-sm">
											<div class="row mt-2 justify-content-md-center">
												<div class="col-12">
													<table class="table table-bordered table-striped table-vcenter js-dataTable-full" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
														<thead>
															<tr role="row">
																<th class="text-center" style="width: 20%;">Tahun Ajaran</th>
																<th class="d-none d-sm-table-cell" style="width: 60%;">Detail</th>
																<th class="d-none d-sm-table-cell" style="width: 20%;">Nilai</th>
															</tr>
														</thead>
														<tbody>
															<?php
															$total_nilai = 0;
															if (!empty($report_edom)) {
																foreach ($report_edom as $report) {
																	$total_nilai += $report['nilai'];
															?>
																	<tr>
																		<td><?php echo $report['tahun_ajaran']; ?></td>
																		<td><?php echo $report['sub_quest_title']; ?></td>
																		<td><?php echo number_format($report['nilai'], 2); ?></td>
																	</tr>
																<?php
																}
															} else {
																?>
																<tr>
																	<td colspan="3">No data available</td>
																</tr>
															<?php } ?>
														</tbody>
														<tfoot>
															<tr role="row">
																<th class="text-center" colspan="2">TOTAL NILAI</th>
																<th class="text-center"><?php echo number_format($total_nilai, 2); ?></th>
															</tr>
														</tfoot>
													</table>
												</div>
											</div>
										</div>
										<div class="block-content block-content-full text-end bg-body">
											<button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
											<button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Perfect</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
				<!-- END Pop Out detail Modal -->


				<div class="block block-rounded">
					<div class="block-header block-header-default bg-modern-dark text-gray">
						<h3 class="block-title">Penilaian Tenaga Kependidikan:</h3>
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
											<?php if (!empty($report_tendik)) { ?>
												<?php foreach ($report_tendik as $report) { ?>
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
				<div class="block block-rounded">
					<div class="block-header block-header-default bg-modern-dark text-gray">
						<h3 class="block-title">Penilaian Sarana dan Prasaran:</h3>
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
											<?php if (!empty($report_sarpras)) { ?>
												<?php foreach ($report_sarpras as $report) { ?>
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