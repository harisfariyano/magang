<div class="content">
	<div class="row">
		<div class="col-md-4">
			<div class="block block-rounded">
				<div class="block-header block-header-default">
					<h3 class="block-title"><?php echo (uri(2) == 'edit') ? 'Edit' : 'Tambah'; ?> Sub Questionnaire</h3>
				</div>

				<div class="block-content block-content-full">
					<form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>" method="POST">
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<input type="hidden" name="id" value="<?php echo uri(2) == "edit" ? enkrip($edit->id) : ""; ?>">

						<div class="form-floating mb-4">
							<input type="text" class="form-control" name="title" value="<?php echo uri(2) == "edit" ? $edit->title : ""; ?>" placeholder="Title" autocomplete="off" required>
							<label>Title</label>
						</div>

						<div class="text-center">
							<button type="submit" class="btn btn-primary"><?php echo (uri(2) == 'edit') ? 'Update' : 'Tambah'; ?></button>

							<?php if (uri(2) == "edit") { ?>
								<button type="button" class="btn btn-outline-danger" onclick="window.location='<?php echo base_url(uri(1)); ?>'">Batal</button>
							<?php } ?>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-8">
			<div class="block block-rounded">
				<div class="block-header block-header-default">
					<h3 class="block-title">Daftar Sub Questionnaire</h3>
				</div>
				<div class="block-content">
					<table class="table table-striped table-hover table-vcenter" style="border-top:2px solid #eee">
						<thead>
							<tr>
								<th style="width:200px">Title</th>
								<th style="width:100px">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if ($data_user) {
								foreach ($data_user as $d) {
							?>
									<tr>
										<td><?php echo $d->title; ?></td>
										<td>
											<div class="btn-group">
												<a href="<?php echo url(1) . '/edit/' . enkrip($d->id); ?>" class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Sub Quest">
													<i class="fa fa-user-edit"></i>
												</a>
												<a href="<?php echo url(1) . '/hapus/' . enkrip($d->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin?')" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Sub Quest">
													<i class="fa fa-user-times"></i>
												</a>
											</div>
										</td>
									</tr>
								<?php }
							} else { ?>
								<tr>
									<td class="text-center" colspan="4">Tidak ada data</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>