<div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <a href="<?= base_url()?>kosakata1/kelas/<?= $link?>" class="btn btn-md btn-success"><i class="fa fa-home mr-1"></i>Kosa Kata 1</a>
                </div>
                <div class="col-12 mb-3">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= base_url()?>assets/img/hifdzi_1/pertemuan1/1.1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url()?>assets/img/hifdzi_1/pertemuan1/1.2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url()?>assets/img/hifdzi_1/pertemuan1/1.3.png" alt="Third slide">
                        </div> -->
                        <?php foreach ($image as $image) :?>
                            <!-- <div class="carousel-item"> -->
                                <?= $image?>
                            <!-- </div> -->
                        <?php endforeach;?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <?php if($back != "" && $next == "") :?>
                        <div class="d-flex justify-content-start">
                            <a href="<?= base_url()?>kosakata1/kelas/<?= $link?>?pertemuan=<?= $back?>" class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i></a>
                        </div>
                    <?php elseif($back != "" && $next != "") :?>
                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url()?>kosakata1/kelas/<?= $link?>?pertemuan=<?= $back?>" class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i></a>
                            <a href="<?= base_url()?>kosakata1/kelas/<?= $link?>?pertemuan=<?= $next?>" class="btn btn-md btn-success"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    <?php elseif($back == "" && $next != "") :?>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>kosakata1/kelas/<?= $link?>?pertemuan=<?= $next?>" class="btn btn-md btn-success"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    <?php endif;?>
                </div>
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-warning">Latihan</li>
                        <?php if($latihan1):?>
                            <li class="list-group-item d-flex">
                                <?php if($latihan1['nilai'] != 100) :?>
                                    <a href="<?= base_url()?>kosakata1/kelas/<?= $link?>?latihan1=<?= MD5($title)?>" class="btn btn-md btn-block btn-danger mr-3">
                                <?php else :?>
                                    <a href="<?= base_url()?>kosakata1/kelas/<?= $link?>?latihan1=<?= MD5($title)?>" class="btn btn-md btn-block btn-success mr-3">
                                <?php endif;?>
                                    <div class="d-flex justify-content-between">Latihan 1 <span><?= date("d-m-y", strtotime($latihan1['waktu']))?></span></div>
                                </a>
                                <span class="btn btn-md btn-outline-dark"><?= $latihan1['nilai']?></span>
                            </li>
                        <?php else :?>
                            <li class="list-group-item"><a href="<?= base_url()?>kosakata1/kelas/<?= $link?>?latihan1=<?= MD5($title)?>" class="btn btn-md btn-block btn-danger">Latihan 1</a></li>
                        <?php endif;?>
                        <?php if($latihan2):?>
                            <li class="list-group-item d-flex">
                                <?php if($latihan1['nilai'] != 100) :?>
                                    <a href="<?= base_url()?>kosakata1/kelas/<?= $link?>?latihan2=<?= MD5($title)?>" class="btn btn-md btn-block btn-danger mr-3">
                                <?php else :?>
                                    <a href="<?= base_url()?>kosakata1/kelas/<?= $link?>?latihan2=<?= MD5($title)?>" class="btn btn-md btn-block btn-success mr-3">
                                <?php endif;?>
                                    <div class="d-flex justify-content-between">Latihan 2 <span><?= date("d-m-y", strtotime($latihan2['waktu']))?></span></div>
                                </a>
                                <span class="btn btn-md btn-outline-dark"><?= $latihan2['nilai']?></span>
                            </li>
                        <?php else :?>
                            <li class="list-group-item"><a href="<?= base_url()?>kosakata1/kelas/<?= $link?>?latihan2=<?= MD5($title)?>" class="btn btn-md btn-block btn-danger">Latihan 2</a></li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
</script>