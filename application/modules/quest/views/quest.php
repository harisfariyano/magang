<div class="container">
  <h1 class="mt-4"></h1>
  <div class="block block-rounded">
    <div class="block-header block-header-default bg-modern-dark text-gray">
      <h3 class="block-title">Daftar Quest:</h3>
    </div>
    <div class="block-content block-content-full overflow-x-auto">
      <div id="DataTables_Table_1_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
        <div class="container mb-3">
          <div class="row">
            <!-- Filter Form -->
            <div class="col-lg-9 col-md-8 col-12">
              <form method="get" action="<?php echo site_url('quest'); ?>">
                <div class="row">
                  <div class="form-group col-lg-4 col-md-6 mb-2">
                    <label for="id_jenis_quest">Jenis Quest</label>
                    <select name="id_jenis_quest" id="id_jenis_quest" class="form-control">
                      <option value="">All</option>
                      <?php foreach ($jenis_quests as $jenis_quest) : ?>
                        <option value="<?php echo $jenis_quest['id']; ?>"><?php echo $jenis_quest['title']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group col-lg-4 col-md-6 mb-2">
                    <label for="id_sub_quest">Sub Quest</label>
                    <select name="id_sub_quest" id="id_sub_quest" class="form-control">
                      <option value="">All</option>
                      <?php foreach ($sub_quests as $sub_quest) : ?>
                        <option value="<?php echo $sub_quest['id']; ?>"><?php echo $sub_quest['title']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group col-lg-2 col-md-4 mb-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                  </div>
                </div>
              </form>
            </div>

            <!-- Add Data Button -->
            <div class="col-lg-3 col-md-4 col-12 d-flex justify-content-end align-items-end">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDataModal">
                Tambah Data
              </button>
            </div>
          </div>
        </div>

        <div class="row mt-2 justify-content-md-center">
          <div class="col-12 ">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
              <thead>
                <tr role="row">
                  <!-- <th>#</th> -->
                  <th>Jenis Quest</th>
                  <th>Sub Quest</th>
                  <th>Quest</th>
                  <th class="text-center" style="width: 23%;">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $counter = 1;
                if (is_array($data_quest) && !empty($data_quest)) {
                  foreach ($data_quest as $quest) :
                ?>
                    <tr>
                      <!-- <td><?= $counter++; ?></td> -->
                      <td><?= htmlspecialchars($quest->jenis_quest, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?= htmlspecialchars($quest->sub_quest, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?= htmlspecialchars($quest->quesioner, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td>
                        <div class="btn-group-horizontal d-flex align-items-center">

                          <!-- Form for the checkbox -->
                          <form action="<?= base_url('quest/update_is_active'); ?>" method="post" class="d-flex align-items-center me-2">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                            <input type="hidden" name="id" value="<?= $quest->id; ?>">
                            <input type="hidden" name="is_active" value="0">
                            <input type="checkbox" name="is_active" value="1" <?= $quest->is_active ? 'checked' : ''; ?> onchange="this.form.submit()">
                          </form>

                          <!-- Button group -->
                          <div class="btn-group">
                            <button class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled update-btn" data-id="<?= $quest->id; ?>" data-toggle="modal" data-target="#updateDataModal">
                              <i class="fa fa-fw fa-pencil-alt"></i> Update
                            </button>
                            <a href="<?= base_url('quest/delete/' . $quest->id); ?>" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" onclick="return confirm('Are you sure you want to delete this quest?');">
                              <i class="fa fa-fw fa-trash"></i> Delete
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                <?php
                  endforeach;
                } else {
                  echo "<tr><td colspan='3'>No quests found.</td></tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Data Modal -->
<div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addDataModalLabel">Add New Quest</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('quest/add'); ?>" method="post">
          <!-- CSRF Token -->
          <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
          <div class="form-group">
            <label for="quesioner">Quest</label>
            <input type="text" class="form-control" id="quesioner" name="quesioner" required>
          </div>
          <div class="form-group">
            <label for="id_jenis_quest">Jenis Quest:</label>
            <select class="form-control" id="id_jenis_quest" name="id_jenis_quest" required>
              <?php foreach ($jenis_titles as $jenis_title) : ?>
                <option value="<?php echo $jenis_title['id']; ?>"><?php echo $jenis_title['title']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="id_sub_quest">Select Sub Quest:</label>
            <select class="form-control" id="id_sub_quest" name="id_sub_quest" required>
              <?php foreach ($titles as $title) : ?>
                <option value="<?php echo $title['id']; ?>"><?php echo $title['title']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="type_quest">Type Quest</label>
            <select class="form-control" id="type_quest" name="type_quest" required>
              <option value="Type1">Pilihan Ganda</option>
              <option value="Type2">Uraian</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Data Modal -->
<div class="modal fade" id="updateDataModal" tabindex="-1" aria-labelledby="updateDataModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateDataModalLabel">Update Quest</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="updateForm" action="<?= base_url('quest/update'); ?>" method="post">
          <!-- CSRF Token -->
          <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
          <input type="hidden" id="update_id" name="id">
          <div class="form-group">
            <label for="update_quesioner">Quest</label>
            <input type="text" class="form-control" id="update_quesioner" name="quesioner" required>
          </div>
          <div class="form-group">
            <label for="update_id_jenis_quest">Jenis Quest:</label>
            <select class="form-control" id="update_id_jenis_quest" name="id_jenis_quest" required>
              <?php foreach ($jenis_titles as $jenis_title) : ?>
                <option value="<?= $jenis_title['id']; ?>"><?= $jenis_title['title']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="update_id_sub_quest">Select Sub Quest:</label>
            <select class="form-control" id="update_id_sub_quest" name="id_sub_quest" required>
              <?php foreach ($titles as $title) : ?>
                <option value="<?= $title['id']; ?>"><?= $title['title']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="update_type_quest">Type Quest</label>
            <select class="form-control" id="update_type_quest" name="type_quest" required>
              <option value="Type1">Pilihan Ganda</option>
              <option value="Type2">Uraian</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
  $(document).ready(function() {
    $('.update-btn').on('click', function() {
      var id = $(this).data('id');
      $.ajax({
        url: '<?= base_url("quest/get_quest_by_id/"); ?>' + id,
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          $('#update_id').val(data.id);
          $('#update_id_jenis_quest').val(data.id_jenis_quest);
          $('#update_id_sub_quest').val(data.id_sub_quest);
          $('#update_quesioner').val(data.quesioner);
          $('#update_type_quest').val(data.type_quest);
          $('#updateForm').attr('action', '<?= base_url("quest/update/"); ?>' + data.id);
        }
      });
    });
  });
</script>