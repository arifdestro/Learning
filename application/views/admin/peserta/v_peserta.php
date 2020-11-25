  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $tittle; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $tittle; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel <?= $tittle; ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Status Akun</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($ps as $p) :
                    $id = $p['ID_PS'];
                    $nama = $p['NM_PS'];
                    $email = $p['EMAIL_PS'];
                    $status = $p['ACTIVE'];
                  ?>
                    <tr>
                      <td class="text-center"><?= $no; ?></td>
                      <td><?= $id; ?></td>
                      <td><?= $nama; ?></td>
                      <td><?= $email; ?></td>
                      <td class="text-center">
                        <?php if ($status == 0) { ?>
                          <span class="badge-pill bg-danger"><b>Belum Aktivasi</b></span>
                        <?php } elseif ($status == 1) { ?>
                          <span class="badge-pill bg-success"><b>Sudah Aktif</b></span>
                        <?php } else { ?>
                          <span class="badge-pill bg-dark"><b>Terblokir</b></span>
                        <?php } ?>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-detail<?= $id; ?>"><b><i class="fas fa-edit"></i> Detail</b></button>
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus<?= $id; ?>"><i class="fas fa-trash"></i> <b>Hapus</b></button>
                        <?php if ($status == 0) { ?>

                        <?php } else { ?>
                          <?php if ($status == 1) { ?>
                            <button class="btn btn-sm btn-dark" data-toggle="modal" data-target="#modal-blok<?= $id; ?>"><i class="fas fa-ban"></i> <b>Blokir</b></button>
                          <?php } elseif ($status == 2) { ?>
                            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-unblok<?= $id; ?>"><i class="fas fa-check"></i> <b>Buka Blokir</b></button>
                          <?php } ?>
                        <?php } ?>
                      </td>
                    </tr>
                    <?php $no++; ?>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Status Akun</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php foreach ($ps as $p) :
    $id = $p['ID_PS'];
    $nama = $p['NM_PS'];
    $email = $p['EMAIL_PS'];
    $status = $p['ACTIVE'];
    $hp = $p['HP_PS'];
    $date = $p['DATE_CREATE'];
  ?>

    <!-- Modal Detail Data -->
    <div class="modal fade" id="modal-detail<?= $id; ?>">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Detail Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form role="form">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control text-bold" id="id" value="<?= $id; ?>" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control text-bold" id="nama" placeholder="Nama" value="<?= $nama; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control text-bold" id="email" placeholder="Email" value="<?= $email; ?>" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="hp">No Hp</label>
                    <input type="text" class="form-control text-bold" id="hp" placeholder="No hp" value="<?= $hp; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <b>Member sejak:</b> <span class="badge-pill bg-primary text-bold"><?= date('d F Y', $date); ?></span>
                </div>
                <div class="col-md-6">
                  <b>Status akun:</b>
                  <?php if ($status == 0) { ?>
                    <span class="badge-pill bg-danger"><b>Belum Aktivasi</b></span>
                  <?php } elseif ($status == 1) { ?>
                    <span class="badge-pill bg-success"><b>Sudah Aktif</b></span>
                  <?php } else { ?>
                    <span class="badge-pill bg-dark"><b>Terblokir</b></span>
                  <?php } ?>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-right">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal Hapus Data -->
    <div class="modal fade" id="modal-hapus<?= $id; ?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('admin/peserta/hapus'); ?>" method="POST">
            <div class="modal-body">
              <p>Apakah anda yakin ingin menghapus data dari <b><?= $nama; ?></b>?</p>
              <input type="hidden" name="id" value="<?= $id; ?>">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              <button type="submit" class="btn btn-danger">Ya</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal Blokir Data -->
    <div class="modal fade" id="modal-blok<?= $id; ?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Blokir</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('admin/peserta/blok'); ?>" method="POST">
            <div class="modal-body">
              <p>Apakah anda yakin ingin memblokir akun <b><?= $nama; ?></b>?</p>
              <input type="hidden" name="id" value="<?= $id; ?>">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              <button type="submit" class="btn btn-danger">Ya</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal Unblok Data -->
    <div class="modal fade" id="modal-unblok<?= $id; ?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Buka Blokir</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('admin/peserta/unblok'); ?>" method="POST">
            <div class="modal-body">
              <p>Apakah anda yakin ingin membuka blokir akun <b><?= $nama; ?></b>?</p>
              <input type="hidden" name="id" value="<?= $id; ?>">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              <button type="submit" class="btn btn-danger">Ya</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  <?php endforeach; ?>