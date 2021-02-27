<?php
    function kata_mudhori($kata){
        $huwa = $kata;
        $huma_l = substr($kata, 0, -2) . "َانِ";
        $hum = substr($kata, 0, -2) . "ُوْنَ";
        $hiya = "تَ" . substr($kata, 4);
        $huma_p = "تَ" . substr($kata, 4, -2) . "َانِ";
        $hunna = substr($kata, 0, -2) . "ْنَ";
        $anta = "تَ" . substr($kata, 4);
        $antuma = "تَ" . substr($kata, 4, -2) . "َانِ";
        $antum = "تَ" . substr($kata, 4, -2) . "ُوْنَ";
        $anti = "تَ" . substr($kata, 4, -2) . "ِيْنَ";
        $antunna = "تَ" . substr($kata, 4, -2) . "ْنَ";
        $ana = "أَ" . substr($kata, 4);
        $nahnu = "نَ" . substr($kata, 4);

        $data[] = $huma_l;
        $data[] = $hum;
        $data[] = $antuma;
        $data[] = $antum;
        $data[] = $anti;
        // return $data;
        var_dump($data);
    }
?>
        <div class="container">
            <div class="row">
                <div class="mb-3">
                    <a id="backHome" class="btn btn-md btn-danger text-light"><i class="fa fa-times mr-1"></i>keluar</a>
                </div>

                <div class="col-12 p-0 mb-3">
                    <a href="javascript:void(0)" class="btn btn-md btn-block btn-success" id="allSoal">Tampilkan Semua Soal</a>
                </div>
                
                <div class="col-12 p-0">
                    <div class="alert alert-info"><i class="fa fa-info-circle text-info"></i> Terjemahkan kalimat berikut ke dalam bahasa Arab</div>
                </div>

                <div class="col-12 mb-3 bg-light" id="isiForm">
                    <?php if($data_latihan['periksa'] == 1) :?>
                        <ul class="list-group mt-3">
                            <li class="list-group-item">Nilai : <b><?= $data_latihan['nilai']?></b></li>
                        </ul>
                    <?php endif;?>

                    <?php 
                        $data_soal = [
                            [
                                "no" => "1",
                                "soal" => "Ahmad telah menghafalkan Al-Qur’an surat al-Baqoroh",
                                "jawaban" => ""
                            ],
                            [
                                "no" => "2",
                                "soal" => "Telah datang ketua kelas, Muhammad pagi ini",
                                "jawaban" => ""
                            ],
                            [
                                "no" => "3",
                                "soal" => "Dia (lk) telah mengecat rumah kamarnya",
                                "jawaban" => ""
                            ],
                            [
                                "no" => "4",
                                "soal" => "Guru itu sedang menghukum murid-murid setengahnya",
                                "jawaban" => ""
                            ],
                            [
                                "no" => "5",
                                "soal" => "Salman itu ganteng bapaknya",
                                "jawaban" => ""
                            ],
                        ];
                    ?>

                    <?php foreach ($data_soal as $i => $soal) :?>
                        <ul class="list-group soal" id="soal<?= $i+1?>">
                            <div class="form-group mt-3">
                                <label for="" ><?= $soal['no'].". ".$soal['soal']?></label>
                                <?php if($data_latihan['periksa'] == 1) :?>
                                    <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][$i]?></span></div>
                                    <?php if($data_latihan['pembahasan'][$i] != ""):?>
                                        <div class="pembahasan mb-3"><b><span class="text-danger">Pembahasan : </span></b> <br><?= $data_latihan['pembahasan'][$i]?></div>
                                    <?php endif;?>
                                <?php elseif($data_latihan['periksa'] == 2) :?>   
                                    <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][$i]?></span></div>
                                <?php else:?>
                                    <textarea name="jawaban[]" id="jawaban<?= $i+1?>" cols="30" rows="5" class="form-control form-control-lg"><?= $data_latihan['jawaban'][$i]?></textarea>
                                    <small id="msg-empty-<?=$i?>" class="form-text text-danger">
                                        <?php 
                                            if($data_latihan['jawaban'][$i] == ""):
                                        ?>
                                            *jawaban kosong, tekan tombol simpan untuk menyimpan jawaban
                                        <?php endif;?>
                                        </small>
                                <?php endif;?>
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <span>
                                    <?php if($data_latihan['periksa'] == 0) :?>
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-primary mr-3 btnSimpan" data-id="1">simpan</a> -->
                                    <?php endif;?>
                                </span>
                                <span>
                                    <?php if($i != 0):?>
                                        <a data-id="<?= $i+1?>" class="btn btn-md btn-success text-light left mr-3"><i class="fa fa-angle-left"></i></a>
                                    <?php endif;?>
                                    <?php if($i != COUNT($data_soal)-1) :?>
                                        <a data-id="<?= $i+1?>" class="btn btn-md btn-success mr-3 text-light right"><i class="fa fa-angle-right"></i></a>
                                    <?php endif;?>
                                </span>
                            </div>
                        </ul>
                    <?php endforeach;?>
                    
                    <?php if($data_latihan['periksa'] == 0) :?>
                        <div class="d-flex mb-3">
                            <a href="javascript:void(0)" class="btn btn-md btn-block btn-primary btnSimpan">simpan</a>
                        </div>
                    <?php endif;?>
                </div>

                <div class="col-12 col-md-12 mb-3 text-center angka">
                    <span class="btn btn-md btn-secondary"><span id="angka">1</span> / <?= COUNT($data_soal)?></span>
                </div>
                <?php if($data_latihan['periksa'] == 0) :?>
                    <div class="col-12 col-md-12 mb-3 p-0">
                        <div class="btn btn-md btn-block btn-info" id="btnKumpul">kumpulkan tugas</div>
                    </div>
                    <div class="col-12 p-0">
                        <div class="alert alert-info"><i class="fa fa-info-circle text-info"></i> tekan tombol kumpulkan tugas, untuk mengumpulkan tugas</div>
                    </div>
                <?php elseif($data_latihan['periksa'] == 2) :?>
                    <div class="col-12 col-md-12 mb-3 p-0">
                        <div class="btn btn-md btn-block btn-warning" id="btnEdit">edit jawaban</div>
                    </div>
                    <div class="col-12 p-0">
                        <div class="alert alert-info"><i class="fa fa-info-circle text-info"></i> menunggu tugas Anda dikoreksi, untuk mengubah jawaban tekan tombol edit jawaban</div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
    
    $('#allSoal').on('click', function() {
        var click = $(this).data('clicks');

        if (click) {
            // $('.ure_billeder').show();
            $('#allSoal').html("Tampilkan Semua Soal")
            $(".soal").hide();
            $("#soal1").show();
            $(".left").show()
            $(".right").show()
            $(".angka").show()
            $("#angka").html("1")
        } else {
            $('#allSoal').html("Sembunyikan Semua Soal")
            $(".soal").show();
            $(".left").hide()
            $(".right").hide()
            $(".angka").hide()
        };

        $(this).data('clicks', !click); // you have to set it

    });

    $(".soal").hide();
    $("#soal1").show();

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

    $("#btnKumpul").click(function(){
        let kosong = false
        $("textarea").each(function(i){
            let text = $(this).val();
            if(text == ""){
                kosong = true;
            }
        });

        if(kosong){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'gagal mengumpulkan tugas karena jawaban belum lengkap',
            })
        } else {
            Swal.fire({
                icon: 'question',
                text: 'yakin akan mengumpulkan tugas Anda?',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then(function (result) {
                if (result.value) {
                    $.ajax({
                        url: "<?= base_url("tarkibi2/kumpul_tugas/".$data_latihan['id_kumpul'])?>",
                        dataType: "JSON",
                        success: function(result){
                            if(result == 1){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'gagal mengumpulkan tugas karena jawaban belum lengkap',
                                })
                            } else {
                                window.location = result;
                            }
                        }
                    })
                }
            })
        }
    })

    $("#btnEdit").click(function(){
        Swal.fire({
            icon: 'question',
            text: 'yakin akan mengubah jawaban Anda?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    url: "<?= base_url("tarkibi2/edit_jawaban/".$data_latihan['id_kumpul'])?>",
                    dataType: "JSON",
                    success: function(result){
                        window.location = result;
                    }
                })
            }
        })
    })

    $(".right").click(function(){
        let id = $(this).data("id")
        id ++;
        $(".soal").hide();
        $("#soal"+id).show()
        $("#angka").html(id)
    })
    
    $(".left").click(function(){
        let id = $(this).data("id")
        id --;
        $(".soal").hide();
        $("#soal"+id).show()
        $("#angka").html(id)
    })

    $(".btnSimpan").click(function(){
        let id = $(this).data("id");
        let id_kelas = "<?= $id_kelas?>";
        let pertemuan = "<?= $materi?>";

        html = "";

        $("textarea").each(function(){
            let text = $(this).val();
            html += text+"###";
        });

        $.ajax({
            url: "<?= base_url()?>tarkibi2/add_latihan_isian",
            data: {id_kelas:id_kelas, pertemuan:pertemuan, text:html},
            type: "POST",
            success: function(data){
                if($("#jawaban"+id).val() == ""){
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        text: 'jawaban kosong',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        text: 'berhasil menyimpan jawaban',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

                $("textarea").each(function(i){
                    let text = $(this).val();
                    if(text == ""){
                        $("#msg-empty-"+i).html("*jawaban kosong, tekan tombol simpan untuk menyimpan jawaban");
                    } else {
                        $("#msg-empty-"+i).html("");
                    }
                });
            }
        })
    })
    
    // $("textarea").on({
    //     keydown: function(e) {
    //     if (e.which === 32 || e.which === 13)
    //         return false;
    //     },
    //     keyup: function(){
    //     this.value = this.value.toLowerCase();
    //     },
    //     change: function() {
    //         this.value = this.value.replace(/\s/g, "");
            
    //     }
    // });
</script>