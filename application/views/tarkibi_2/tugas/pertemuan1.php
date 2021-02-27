        <div class="container">
            <div class="row">
                <div class="mb-3">
                    <a id="backHome" class="btn btn-md btn-danger text-light"><i class="fa fa-times mr-1"></i>keluar</a>
                </div>
                
                <div class="col-12 p-0 mb-3">
                    <a href="javascript:void(0)" class="btn btn-md btn-block btn-success" id="allSoal">Tampilkan Semua Soal</a>
                </div>
                
                <div class="col-12 p-0">
                    <div class="alert alert-info"><i class="fa fa-info-circle text-info"></i> Buatlah contoh berupa <b>jumlah mufidah</b> dari : </div>
                </div>

                <div class="col-12 mb-3 bg-light" id="isiForm">
                    <?php if($data_latihan['periksa'] == 1) :?>
                        <ul class="list-group mt-3">
                            <li class="list-group-item">Nilai : <b><?= $data_latihan['nilai']?></b></li>
                        </ul>
                    <?php endif;?>
                    <ul class="list-group soal" id="soal1">
                        <div class="form-group mt-3">
                            <label for="">1. Asmaul Khomsah yang bersandar dengan <b>isim dhohir</b></label>
                            <?php if($data_latihan['periksa'] == 1) :?>
                                <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][0]?></span></div>
                                <?php if($data_latihan['pembahasan'][0] != ""):?>
                                    <div class="pembahasan mb-3"><b><span class="text-danger">Pembahasan : </span></b> <br><?= $data_latihan['pembahasan'][0]?></div>
                                <?php endif;?>
                            <?php elseif($data_latihan['periksa'] == 2) :?>   
                                <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][0]?></span></div>
                            <?php else:?>
                                <textarea name="jawaban[]" id="jawaban1" cols="30" rows="5" class="form-control form-control-lg"><?= $data_latihan['jawaban'][0]?></textarea>
                                <small id="msg-empty-0" class="form-text text-danger">
                                    <?php 
                                        if($data_latihan['jawaban'][0] == ""):
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
                                <a data-id="1" class="btn btn-md btn-success mr-3 text-light right"><i class="fa fa-angle-right"></i></a>
                            </span>
                        </div>
                    </ul>
                    <ul class="list-group soal" id="soal2">
                        <div class="form-group mt-3">
                            <label for="">2. Asmaul Khomsah yang bersandar dengan <b>isim dhomir</b></label>
                            <?php if($data_latihan['periksa'] == 1) :?>
                                <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][1]?></span></div>
                                <?php if($data_latihan['pembahasan'][1] != ""):?>
                                    <div class="pembahasan mb-3"><b><span class="text-danger">Pembahasan : </span></b> <br><?= $data_latihan['pembahasan'][1]?></div>
                                <?php endif;?>
                            <?php elseif($data_latihan['periksa'] == 2) :?>   
                                <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][0]?></span></div>
                            <?php else:?>
                                <textarea name="jawaban[]" id="jawaban2" cols="30" rows="5" class="form-control form-control-lg"><?= $data_latihan['jawaban'][1]?></textarea>
                                <small id="msg-empty-1" class="form-text text-danger">
                                    <?php 
                                        if($data_latihan['jawaban'][1] == ""):
                                    ?>
                                        *jawaban kosong, tekan tombol simpan untuk menyimpan jawaban
                                    <?php endif;?>
                                    </small>
                            <?php endif;?>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <span>
                                <a data-id="2" class="btn btn-md btn-success text-light left mr-3"><i class="fa fa-angle-left"></i></a>
                            </span>
                            <span>
                                <?php if($data_latihan['periksa'] == 0) :?>
                                    <!-- <a href="javascript:void(0)" class="btn btn-md btn-primary mr-3 btnSimpan" data-id="2">simpan</a> -->
                                <?php endif;?>
                            </span>
                            <span>
                                <a data-id="2" class="btn btn-md btn-success mr-3 text-light right"><i class="fa fa-angle-right"></i></a>
                            </span>
                        </div>
                    </ul>
                    <ul class="list-group soal" id="soal3">
                        <div class="form-group mt-3">
                            <label for="">3. Asmaul Khomsah yang bersandar dengan <b>Isim ghoiru munsorif</b></label>
                            <?php if($data_latihan['periksa'] == 1) :?>
                                <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][2]?></span></div>
                                <?php if($data_latihan['pembahasan'][2] != ""):?>
                                    <div class="pembahasan mb-3"><b><span class="text-danger">Pembahasan : </span></b> <br><?= $data_latihan['pembahasan'][2]?></div>
                                <?php endif;?>
                            <?php elseif($data_latihan['periksa'] == 2) :?>   
                                <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][0]?></span></div>
                            <?php else:?>
                                <textarea name="jawaban[]" id="jawaban3" cols="30" rows="5" class="form-control form-control-lg"><?= $data_latihan['jawaban'][2]?></textarea>
                                <small id="msg-empty-2" class="form-text text-danger">
                                    <?php 
                                        if($data_latihan['jawaban'][2] == ""):
                                    ?>
                                        *jawaban kosong, tekan tombol simpan untuk menyimpan jawaban
                                    <?php endif;?>
                                    </small>
                            <?php endif;?>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <span>
                                <a data-id="3" class="btn btn-md btn-success text-light left mr-3"><i class="fa fa-angle-left"></i></a>
                            </span>
                            <span>
                                <?php if($data_latihan['periksa'] == 0) :?>
                                    <!-- <a href="javascript:void(0)" class="btn btn-md btn-primary mr-3 btnSimpan" data-id="3">simpan</a> -->
                                <?php endif;?>
                            </span>
                            <span>
                                <a data-id="3" class="btn btn-md btn-success mr-3 text-light right"><i class="fa fa-angle-right"></i></a>
                            </span>
                        </div>
                    </ul>
                    <ul class="list-group soal" id="soal4">
                        <div class="form-group mt-3">
                            <label for="">4. Asmaul Khomsah yang bersandar dengan <b>Isim manqus</b></label>
                            <?php if($data_latihan['periksa'] == 1) :?>
                                <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][3]?></span></div>
                                <?php if($data_latihan['pembahasan'][3] != ""):?>
                                    <div class="pembahasan mb-3"><b><span class="text-danger">Pembahasan : </span></b> <br><?= $data_latihan['pembahasan'][3]?></div>
                                <?php endif;?>
                            <?php elseif($data_latihan['periksa'] == 2) :?>   
                                <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][0]?></span></div>
                            <?php else:?>
                                <textarea name="jawaban[]" id="jawaban4" cols="30" rows="5" class="form-control form-control-lg"><?= $data_latihan['jawaban'][3]?></textarea>
                                <small id="msg-empty-3" class="form-text text-danger">
                                    <?php 
                                        if($data_latihan['jawaban'][3] == ""):
                                    ?>
                                        *jawaban kosong, tekan tombol simpan untuk menyimpan jawaban
                                    <?php endif;?>
                                    </small>
                            <?php endif;?>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <span>
                                <a data-id="4" class="btn btn-md btn-success text-light left mr-3"><i class="fa fa-angle-left"></i></a>
                            </span>
                            <span>
                                <?php if($data_latihan['periksa'] == 0) :?>
                                    <!-- <a href="javascript:void(0)" class="btn btn-md btn-primary mr-3 btnSimpan" data-id="4">simpan</a> -->
                                <?php endif;?>
                            </span>
                            <span>
                                <a data-id="4" class="btn btn-md btn-success mr-3 text-light right"><i class="fa fa-angle-right"></i></a>
                            </span>
                        </div>
                    </ul>
                    <ul class="list-group soal" id="soal5">
                        <div class="form-group mt-3">
                            <label for="">5. Asmaul Khomsah yang bersandar dengan <b>Isim maqsur</b></label>
                            <?php if($data_latihan['periksa'] == 1) :?>
                                <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][4]?></span></div>
                                <?php if($data_latihan['pembahasan'][4] != ""):?>
                                    <div class="pembahasan mb-3"><b><span class="text-danger">Pembahasan : </span></b> <br><?= $data_latihan['pembahasan'][4]?></div>
                                <?php endif;?>
                            <?php elseif($data_latihan['periksa'] == 2) :?>   
                                <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][0]?></span></div>
                            <?php else:?>
                                <textarea name="jawaban[]" id="jawaban5" cols="30" rows="5" class="form-control form-control-lg"><?= $data_latihan['jawaban'][4]?></textarea>
                                <small id="msg-empty-4" class="form-text text-danger">
                                    <?php 
                                        if($data_latihan['jawaban'][4] == ""):
                                    ?>
                                        *jawaban kosong, tekan tombol simpan untuk menyimpan jawaban
                                    <?php endif;?>
                                    </small>
                            <?php endif;?>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <span>
                                <a data-id="5" class="btn btn-md btn-success text-light left mr-3"><i class="fa fa-angle-left"></i></a>
                            </span>
                            <span>
                                <?php if($data_latihan['periksa'] == 0) :?>
                                    <!-- <a href="javascript:void(0)" class="btn btn-md btn-primary mr-3 btnSimpan" data-id="5">simpan</a> -->
                                <?php endif;?>
                            </span>
                        </div>
                    </ul>
                    
                    
                    <?php if($data_latihan['periksa'] == 0) :?>
                        <div class="d-flex mb-3">
                            <a href="javascript:void(0)" class="btn btn-md btn-block btn-primary btnSimpan">simpan</a>
                        </div>
                    <?php endif;?>
                </div>

                <div class="col-12 col-md-12 mb-3 text-center angka">
                    <span class="btn btn-md btn-secondary"><span id="angka">1</span> / 5</span>
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
</script>