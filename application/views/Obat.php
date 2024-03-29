

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$pagetitle; ?>
        <a href="<?= base_url('obat/tambah'); ?>" class="btn btn-info">Tambah Data</a>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><?=$pagetitle; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
   <?php
    if ($this->session->flashdata('stat') == 'sukses') {
      ?>
      <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               Sukses
              </div>
      <?php
    }
    ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
        <table id="table" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Obat</th>
                  <th>Stok</th>
                  <th>Harga Beli</th>
                  <th>Harga Jual</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
		foreach($obats as $obat){ 
		?>
		<tr>
			<td><?php echo $obat->obat_nama ?></td>
            <td><?php echo $obat->obat_stok ?></td>
            <td><?php echo $obat->obat_beli ?></td>
            <td><?php echo $obat->obat_jual ?></td>
            <td><a href="<?= base_url('obat/edit/'); ?><?php echo $obat->obat_id ?>" class="btn btn-warning">Edit</a> | <a href="<?= base_url('obat/delete/'); ?><?php echo $obat->obat_id ?>" class="btn btn-danger">Delete</a></td>
		</tr>
        <?php } ?>
        </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
