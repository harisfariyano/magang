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
    <!-- <div class="xblock block-rounded">
			<div class="block-header block-header-default bg-modern-dark">
				<h3 class="block-title text-gray">Statistik Overview</h3>
				<div class="block-options">
					<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
					<i class="si si-refresh"></i>
					</button>
				</div>
				</div>
				<div class="block-content block-content-full">
			<div style="height: 400px;">
				<canvas id="js-chartjs-overview" style="display: block; box-sizing: border-box; height: 400px; width: 755px;" width="944" height="500"></canvas>
			</div>
		</div>
	</div> -->

    <div class="block block-rounded">
        <div class="block-header block-header-default bg-modern-dark text-gray">
            <h3 class="block-title"><?php echo $report[0]['jenis_quest_title']; ?> </h3>
        </div>
        <div class="block-content block-content-full overflow-x-auto">
            <div id="DataTables_Table_1_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                <div class="row mt-2 justify-content-between">
                    <div class="col-md-auto me-auto ">
                        <div class="dt-buttons btn-group flex-wrap">
                            <!-- <button class="btn btn-sm btn-primary buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>Copy</span></button> 
        <button class="btn btn-sm btn-primary buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>Excel</span></button> 
        <button class="btn btn-sm btn-primary buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>CSV</span></button> 
        <button class="btn btn-sm btn-primary buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>PDF</span></button> 
        <button class="btn btn-sm btn-primary buttons-print" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>Print</span></button>  -->
                        </div>
                    </div>
                    <div class="row mt-2 justify-content-between">
                        <div class="col-md-auto me-auto ">
                            <div class="dt-length"><select name="DataTables_Table_2_length" aria-controls="DataTables_Table_2" class="form-select form-select-sm" id="dt-length-1">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select><label for="dt-length-1"></label></div>
                        </div>
                        <div class="col-md-auto ms-auto ">
                            <div class="dt-search"><input type="search" class="form-control form-control-sm" id="dt-search-2" placeholder="Search.." aria-controls="DataTables_Table_2"><label for="dt-search-2"></label></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 justify-content-md-center">
                    <div class="col-12 ">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <?php if ($jenis_quest != 4) { ?>
                                    <tr role="row">
                                        <th class="text-center dt-type-numeric dt-orderable-asc dt-orderable-desc dt-ordering-asc" style="width: 80px;" data-dt-column="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: Activate to invert sorting" tabindex="0"><span class="dt-column-title" role="button">Tahun Ajaran</span><span class="dt-column-order"></span></th>
                                        <th data-dt-column="1" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc" aria-label="Name: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Prodi</span><span class="dt-column-order"></span></th>
                                        <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" style="width: 30%;" data-dt-column="1" rowspan="1" colspan="1" aria-label="Email: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Sub Quest</span><span class="dt-column-order"></span></th>
                                        <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" style="width: 30%;" data-dt-column="2" rowspan="1" colspan="1" aria-label="Email: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Quest</span><span class="dt-column-order"></span></th>
                                        <!-- <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" style="width: 15%;" data-dt-column="3" rowspan="1" colspan="1" aria-label="Access: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Access</span><span class="dt-column-order"></span></th> -->
                                        <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" style="width: 15%;" data-dt-column="4" rowspan="1" colspan="1" aria-label="Registered: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Nilai</span><span class="dt-column-order"></span></th>
                                    </tr>
                                <?php } else { ?>
                                    <tr role="row">
                                        <th class="text-center dt-type-numeric dt-orderable-asc dt-orderable-desc dt-ordering-asc" style="width: 80px;" data-dt-column="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: Activate to invert sorting" tabindex="0"><span class="dt-column-title" role="button">Tahun Ajaran</span><span class="dt-column-order"></span></th>
                                        <th data-dt-column="1" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc" aria-label="Name: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Nama</span><span class="dt-column-order"></span></th>
                                        <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" style="width: 30%;" data-dt-column="2" rowspan="1" colspan="1" aria-label="Email: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Sub Quest</span><span class="dt-column-order"></span></th>
                                        <!-- <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" style="width: 15%;" data-dt-column="3" rowspan="1" colspan="1" aria-label="Access: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Access</span><span class="dt-column-order"></span></th> -->
                                        <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" style="width: 15%;" data-dt-column="4" rowspan="1" colspan="1" aria-label="Registered: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Nilai</span><span class="dt-column-order"></span></th>
                                    </tr>
                                <?php } ?>
                            </thead>
                            <tbody>
                                <?php if (!empty($report)) { ?>
                                    <?php if ($jenis_quest != "4") { ?>
                                        <?php foreach ($report as $report) { ?>
                                            <tr>
                                                <td><?php echo $report['tahun_ajaran']; ?></td>
                                                <td><?php echo $report['prodi_name']; ?></td>
                                                <td><?php echo $report['sub_quest_title']; ?></td>
                                                <td><?php echo $report['quesioner']; ?></td>
                                                <td><?php echo number_format($report['avg_score'], 2); ?></td>
                                            </tr>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php foreach ($report as $report) { ?>
                                            <tr>
                                                <td><?php echo $report['tahun_ajaran']; ?></td>
                                                <td><?php echo $report['id_dosen']; ?></td>
                                                <td><?php echo $report['sub_quest_title']; ?></td>
                                                <td><?php echo number_format($report['nilai'], 2); ?></td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="6">No data available</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row mt-2 justify-content-between">
                    <div class="col-md-auto me-auto ">
                        <div class="dt-info" aria-live="polite" id="DataTables_Table_1_info" role="status">Page <strong>1</strong> of <strong>4</strong></div>
                    </div>
                    <div class="col-md-auto ms-auto ">
                        <div class="dt-paging paging_simple_numbers">
                            <ul class="pagination">
                                <li class="dt-paging-button page-item disabled"><a class="page-link previous" aria-controls="DataTables_Table_1" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1"><i class="fa fa-angle-left"></i></a></li>
                                <li class="dt-paging-button page-item active"><a href="#" class="page-link" aria-controls="DataTables_Table_1" aria-current="page" data-dt-idx="0" tabindex="0">1</a></li>
                                <li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0">2</a></li>
                                <li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0">3</a></li>
                                <li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="DataTables_Table_1" data-dt-idx="3" tabindex="0">4</a></li>
                                <li class="dt-paging-button page-item"><a href="#" class="page-link next" aria-controls="DataTables_Table_1" aria-label="Next" data-dt-idx="next" tabindex="0"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>