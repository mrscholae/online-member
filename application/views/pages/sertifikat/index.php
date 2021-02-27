<div class="container">
            <div class="row" id="dataKelas">
                <?php if($sertifikat) :?>
                    <?php foreach ($sertifikat as $sertifikat) :?>
                        <div class="col-12 col-md-4 mb-2">
                            <ul class="list-group shadow">
                                <li class="list-group-item list-group-item-success d-flex justify-content-between">
                                    <span>
                                        <i class="fa fa-book mr-2"></i><strong><?= $sertifikat['kelas']['nama_kelas']?></strong>
                                    </span>
                                </li>
                                <li class="list-group-item"><i class="fa fa-user-tie mr-2"></i><?= $sertifikat['civitas']['nama_civitas']?></li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span><small><?= date("d-m-Y", strtotime($sertifikat['kelas']['tgl_mulai']))?> s.d <?= date("d-m-Y", strtotime($sertifikat['kelas']['tgl_selesai']))?></small></span>
                                    <span><a href="<?= base_url()?>sertifikat/peserta/<?= md5($sertifikat['id'])?>" target="_blank" class="btn btn-md list-group-item-warning"><b><?= $sertifikat['nilai']?></b><i class="fa fa-award ml-1"></i></a></span>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach;?>
                <?php else : ?>
                    <div class="col-12 col-md-4 mb-2">
                        <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning"></i> list sertifikat kosong</div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
</script>