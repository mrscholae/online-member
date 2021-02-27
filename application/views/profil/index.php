<!-- Modal -->
<div class="modal fade" id="daftarIsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="daftarIsiTitle">Daftar Materi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
            <div class="listGroup"></div>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

        <div class="container">
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12">
                        <?=$this->session->flashdata('pesan')?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item"><i class="fa fa-user mr-2"></i><?= $user['nama']?></li>
                        <!-- <li class="list-group-item"><i class="fa fa-birthday-cake mr-2"></i><?= $user['t4_lahir'].", ".date("d-m-Y", strtotime($user['tgl_lahir']))?></li> -->
                        <li class="list-group-item"><i class="fa fa-phone mr-2"></i><?= $user['no_hp']?></li>
                        <!-- <li class="list-group-item"><i class="fa fa-map-marker-alt mr-2"></i><?= $user['alamat']?></li> -->
                    </ul>
                </div>
                <div class="col-12 mb-3">
                  <div class="alert alert-info"><i class="fa fa-info-circle text-info"></i> Klik <a href="https://api.whatsapp.com/send?phone=62<?= substr($wa_admin['value'], 1)?>&text=Permisi%20Admin%20ada%20kesalahan%20data"><b>di sini</b></a> untuk menghubungi Admin jika ada kesalahan data</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>
<script>
</script>