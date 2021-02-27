        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <a id="backHome" class="btn btn-md btn-danger text-light"><i class="fa fa-times mr-1"></i>keluar</a>
                </div>
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <select id="fontSize" class="form-control form-control-md">
                                <option value="16px">Pilih Ukuran Tulisan</option>
                                <option value="20px">20</option>
                                <option value="25px">25</option>
                                <option value="30px">30</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <div class="col-12">
                    <div class="alert alert-info"><i class="fa fa-info-circle text-info"></i> Pilihlah jawaban yang tepat dari soal-soal berikut ini :</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3" id="hasilLatihanUp">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group">
                                <p>Selamat, Anda telah menyelesaikan latihan, nilai Anda adalah : </p>
                                <h3 class="text-center" id="nilaiUp"></h3>
                                <p class="msg-max"><strong>Anda dapat mengulangi latihan ini untuk mendapatkan nilai maksimal</strong></p>
                                <a href="<?= base_url($reload)?>" class="btn btn-block btn-success text-light">Ulangi</a>
                                <a href="<?= base_url($redirect)?>" class="btn btn-block btn-danger text-light">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <form action="" id="formSoal">
            <div class="row">
                <?php foreach ($mufrodat as $i => $kalimat) :?>
                    <div class="col-12 col-md-12 mb-3 soal" id="soal<?= $i?>">
                        <ul class="list-group">
                            <li class="list-group-item fontSize" id="soal-bg<?= $i?>">
                                <div class="form-group">
                                    <?php if($i%2 == 0) :?>
                                        <div class="d-flex justify-content-between">
                                            <label for="<?=$i?>" id="container-content"><?= $i+1?>. Apa bahasa Arabnya <br>"<?= $kalimat['arti']?>"?</label>
                                            <span class="icon-cek-<?= $i?>"></span>
                                        </div>
                                        <input type="hidden" name="kunci<?=$i?>" value="<?= $kalimat['kata_arab']?>">
                                    <?php else :?>
                                        <div class="d-flex justify-content-between">
                                            <label for="<?=$i?>" id="container-content"><?= $i+1?>. Apa bahasa Indonesianya <br>"<strong><?= $kalimat['kata_arab']?></strong>"?</label>
                                            <span class="icon-cek-<?= $i?>"></span>
                                        </div>
                                        <input type="hidden" name="kunci<?=$i?>" value="<?= $kalimat['arti']?>">
                                    <?php endif;?>
                                    <input type="hidden" name="j<?= $i?>" id="jawaban<?=$i?>">
                                    <div class="d-flex justify-content-center">
                                        <h5 class="text-right" id="j<?=$i?>"></h5>
                                    </div>
                                    <div id="select<?=$i?>">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <?php 
                                                    if($i%2 == 0){
                                                        $choice[0] = $kalimat['kata_arab'];
                                                        $r = 1;

                                                        shuffle($kata);

                                                        foreach ($kata as $cek) {
                                                            // if($r <= 3 && $cek['arti'] != $kalimat['arti']){
                                                            if($cek['kata_arab'] != $kalimat['kata_arab'] && $r <= 3 && $cek['arti'] != $kalimat['arti']){
                                                                $choice[$r] = $cek['kata_arab'];
                                                                $r++;
                                                            }
                                                        }
                                                        array_unique($choice);
                                                        rsort($choice);
                                                    } else {
                                                        $choice[0] = $kalimat['arti'] ;
                                                        $r = 1;

                                                        shuffle($kata_arab);

                                                        foreach ($kata_arab as $cek) {
                                                            if($cek != $kalimat['arti'] && $r <= 3){
                                                                $choice[$r] = $cek;
                                                                $r++;
                                                            }
                                                        }
                                                        array_unique($choice);
                                                        sort($choice);
                                                    }
                                                ?>
                                                <?php foreach ($choice as $k => $data) :?>
                                                    <div class="col-12 d-flex justify-content-end mb-3">
                                                        <label for="<?= $i.$k?>" class="mr-2" id="container-content"><center><b><?= $data?></b></center></label>
                                                        <input type="radio" class="cek" id="<?= $i.$k?>" name="choice<?= $i?>1" data-id="<?= $i?>|1" class="btn-primary" value="<?= $data?>">
                                                    </div>
                                                <?php endforeach;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="kunci-jawaban<?=$i?>" class="kunci-jawaban">
                                        <?php if($i%2 == 0) :?>
                                            <b><?= $kalimat['kata_arab']?></b>
                                        <?php else :?>
                                            <b><?= $kalimat['arti']?></b>
                                        <?php endif;?>
                                    </div>
                                </div>
                                <?php if($i == 0) :?>
                                    <div class="d-flex justify-content-center">
                                        <a id="right<?= $i?>" data-id="<?= $i?>" class="img-shadow btn btn-md btn-success text-light right"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                <?php elseif($i == COUNT($mufrodat)-1) :?>
                                    <div class="d-flex justify-content-center">
                                        <a id="left<?= $i?>" data-id="<?= $i?>" class="img-shadow btn btn-md btn-success text-light left mr-3"><i class="fa fa-angle-left"></i></a>
                                        <a id="simpan" data-id="<?= $i?>" class="img-shadow btn btn-md btn-primary text-light mr-3">
                                            simpan
                                        </a>
                                    </div>
                                <?php else :?>
                                    <div class="d-flex justify-content-center">
                                        <a id="left<?= $i?>" data-id="<?= $i?>" class="img-shadow btn btn-md btn-success text-light left mr-3"><i class="fa fa-angle-left"></i></a>
                                        <a id="right<?= $i?>" data-id="<?= $i?>" class="img-shadow btn btn-md btn-success text-light right"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                <?php endif;?>
                            </li>
                        </ul>
                    </div>
                <?php endforeach;?>

                <div class="col-12 col-md-12 mb-3 text-center angka">
                    <span class="btn btn-md btn-secondary"><span id="angka">1</span> / <?= COUNT($mufrodat)?></span>
                </div>
            </div>
            </form>
            <div class="row">
                <div class="col-12 mb-3" id="hasilLatihanDown">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group">
                                <p>Selamat, Anda telah menyelesaikan latihan, nilai Anda adalah : </p>
                                <h3 class="text-center" id="nilaiDown"></h3>
                                <p class="msg-max"><strong>Anda dapat mengulangi latihan ini untuk mendapatkan nilai maksimal</strong></p>
                                <a href="<?= base_url($reload)?>" class="btn btn-block btn-success text-light">Ulangi</a>
                                <a href="<?= base_url($redirect)?>" class="btn btn-block btn-danger text-light">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
    $("#hasilLatihanUp").hide();
    $("#hasilLatihanDown").hide();
    $(".soal").hide();
    $("#soal0").show();
    $(".kunci-jawaban").hide();
    
    $("#fontSize").change(function(){
        let size = $(this).val();
        $(".fontSize").css("font-size",size);
    })

    $(".right").click(function(){
        let id = $(this).data("id");

        var isChecked = $('input[name="choice'+id+'1"]:checked').val();

        if(isChecked == undefined){
            Swal.fire({
                position: 'center',
                icon: 'error',
                text: 'pilih jawaban terlebih dahulu',
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            id = id + 1;
            
            // menampilkan dan menyembunyikan soal 
                $(".soal").hide();
                $("#soal"+id).show();
            // menampilkan dan menyembunyikan soal 

            // index soal 
                if(id != <?= COUNT($mufrodat)?>){
                    $("#angka").html(id+1);
                } else {
                    $(".angka").hide();
                }
            // index soal 
        }

    })

    $(".left").click(function(){
        let id = $(this).data("id");
        $("#angka").html(id);
        id = id - 1;
        $(".soal").hide();
        $("#soal"+id).show();
    })

    $("#ulangi").click(function(){
        let count = $(this).data("id");
        
        // index soal
            $(".angka").show();
            $("#angka").html("1");
        // index soal 
        $(".soal").hide();

        $("#soal0").show();
        $("#right0").show();
    })

    $("#backHome").click(function(){
        Swal.fire({
            icon: 'question',
            text: 'yakin akan keluar dari latihan?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then(function (result) {
            if (result.value) {
                window.location = "<?= base_url($redirect)?>";
            }
        })
    })

    $(".cek").click(function(){
        let data = $(this).data("id");
        data = data.split("|");
        let id = parseInt(data[0]);
        let total = data[1];

        let html = '';
        for (let i = 0; i < total; i++) {
            html += $("input[name='choice"+id+""+1+"']:checked").val();
        }

        if(html === 'undefined'){
            html = '-';
        }

        if(html == $("input[name='kunci"+id+"']").val()){
            $("#jawaban"+id).val("betul");
        } 
        else {
            $("#jawaban"+id).val("salah");
        }
    })

    $("#simpan").click(function(){
        let id = $(this).data("id");

        var isChecked = $('input[name="choice'+id+'1"]:checked').val();

        if(isChecked == undefined){
            Swal.fire({
                position: 'center',
                icon: 'error',
                text: 'pilih jawaban terlebih dahulu',
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            Swal.fire({
                icon: 'question',
                text: 'Yakin telah menyelesaikan latihan Anda?',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then(function (result) {
                if (result.value) {
                    let count = <?= COUNT($mufrodat)?>;
                    let nilai = 0;
                    for (let i = 0; i < count; i++) {
                        cek = $("input[name='j"+i+"']").val();
                        if(cek == 'betul'){
                            nilai += 1;
                            $(".left").hide();
                            $(".right").hide();
                            $("#simpan").hide();
                            $("input:radio").attr("disabled",true);
                        } else {
                            $("#soal-bg"+i).addClass("list-group-item-danger");
                            $("#kunci-jawaban"+i).addClass("d-flex justify-content-center")
                            $("#kunci-jawaban"+i).show()
                            $(".left").hide();
                            $(".right").hide();
                            $("#simpan").hide();
                            $("input:radio").attr("disabled",true);
                        }
                    }

                    let latihan = "<?= $materi?>";
                    let id_kelas = "<?= $id_kelas?>";
                    
                    nilai = (nilai / count) * 100;
                    nilai = nilai.toFixed(2);

                    $.ajax({
                        type : "POST",
                        url : "<?= base_url()?>kosakata1/add_latihan",
                        dataType : "JSON",
                        data : {latihan: latihan, id_kelas: id_kelas, nilai: nilai, tipe: "Latihan 1"},
                        success : function(data){
                            // console.log(data)
                            $(".soal").show();
                            $(".angka").hide();
                            $("#hasilLatihanUp").show();
                            $("#hasilLatihanDown").show();
                            $("#nilaiUp").html(nilai);
                            $("#nilaiDown").html(nilai);
                            
                            if(nilai == 100){
                                $(".msg-max").hide();
                            } else {
                                $(".msg-max").show();
                            }
                        }
                    })
                }
            })
        }
    })

</script>