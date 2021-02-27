<div class="container">
            <div class="row" id="dataKelas">
            </div>
            <div class="row" id="dataMateri"></div>
            <div class="row" id="dataUjian" style="display: none"></div>
            <div class="row" id="dataFaq">
                <!-- <div class="col-12">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-info">
                        FAQ
                        </li>
                        <input type="text" name="search_faq" id="search_faq" class="form-control form-control-lg mt-1 mb-1" placeholder="cari faq ..." autocomplete="off">
                        <div id="list-faq"></div>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<!-- modal kelas -->
    <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalBodyDetail">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <!-- <li class="nav-item">
                                <a href="javascript:void(0)" class='nav-link' id="btn-form-1"><i class="fas fa-clock"></i></a>
                            </li> -->
                            <li class="nav-item">
                                <a href="javascript:void(0)" class='nav-link active' id="btn-form-2"><i class="fas fa-list-ol"></i></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="javascript:void(0)" class='nav-link' id="btn-form-3"><i class="fas fa-list-ol"></i></a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="card-body cus-font">

                        <div id="form-1">
                            <div class="msgListPertemuan"></div>
                            <div id="kehadiran"></div>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info">List Pertemuan</li>
                            </ul>
                            <form id="formListPertemuan">
                                <input type="hidden" name="id_kelas">
                                <ul class="list-group">
                                    <div id="list-pertemuan"></div>
                                </ul>
                            </form>
                        </div>

                        <div id="form-2">
                            <div class="row">
                                <div class="col-12">
                                    <select name="jenis_nilai" id="jenis_nilai" class="form-control form-control-sm mb-2">
                                        <option value="Latihan 1">Latihan 1</option>
                                        <option value="Latihan 2">Latihan 2</option>
                                    </select>
                                </div>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info titleNilai">Nilai Latihan 1</li>
                            </ul>
                            <ul class="list-group">
                                <div id="list-latihan-1"></div>
                            </ul>
                            <ul class="list-group">
                                <div id="list-latihan-2"></div>
                            </ul>
                        </div>

                        <div class="card" id="form-3">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info">Nilai Ujian</li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Ujian Form Pekan 1</span>
                                    <span id="nilai-pekan-1">0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Ujian Lisan Pekan 1</span>
                                    <span id="nilai-pekan-1-lisan">0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Ujian Form Pekan 2</span>
                                    <span id="nilai-pekan-2">0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Ujian Lisan Pekan 2</span>
                                    <span id="nilai-pekan-2-lisan">0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Ujian Pertengahan</span>
                                    <span id="nilai-pertengahan">0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Ujian Form Pekan 3</span>
                                    <span id="nilai-pekan-3">0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Ujian Lisan Pekan 3</span>
                                    <span id="nilai-pekan-3-lisan">0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Ujian Form Pekan 4</span>
                                    <span id="nilai-pekan-4">0</span>
                                </li>
                                <!-- <li class="list-group-item d-flex justify-content-between">
                                    <span>Ujian Lisan Pekan 4</span>
                                    <span id="nilai-pekan-4-lisan">0</span>
                                </li> -->
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Ujian Akhir Form</span>
                                    <span id="nilai-akhir-form">0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Ujian Akhir Video</span>
                                    <span id="nilai-akhir-video">0</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<!-- modal kelas -->

<!-- modal faq-->
    <div class="modal fade" id="modalFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFaqTitle">FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body cus-font">
                        <div id="soalFaq" class="mb-3"></div>
                        <div id="jawabanFaq"></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<!-- modal faq-->

<script>
    reload_data();
    $("#dataFaq").hide()

    let a = [];

    $("#dataKelas").on("click", "#btnMateri", function(){
        reload_data("materi");

        $("#dataMateri").show();
        $("#dataUjian").hide();
        $("#dataFaq").hide()

        $("#dataKelas > #btnMateri").addClass("btn-primary")
        $("#btnMateri").addClass("text-light")
        $("#btnUjian").removeClass("btn-primary")
        $("#btnUjian").removeClass("text-light")
        $("#btnFaq").removeClass("btn-primary")
        $("#btnFaq").removeClass("text-light")
    })
    
    $("#dataKelas").on("click", "#btnUjian", function(){
        reload_data("ujian");

        $("#dataMateri").hide();
        $("#dataUjian").show();
        $("#dataFaq").hide()

        $("#btnMateri").removeClass("btn-primary")
        $("#btnMateri").removeClass("text-light")
        $("#btnUjian").addClass("btn-primary")
        $("#btnUjian").addClass("text-light")
        $("#btnFaq").removeClass("btn-primary")
        $("#btnFaq").removeClass("text-light")
    })

    $("#dataKelas").on("click", "#btnFaq", function(){
        reload_data("faq");
        $("#search_faq").val("");

        $("#dataMateri").hide();
        $("#dataUjian").hide();
        $("#dataFaq").show()

        $("#btnMateri").removeClass("btn-primary")
        $("#btnMateri").removeClass("text-light")
        $("#btnUjian").removeClass("btn-primary")
        $("#btnUjian").removeClass("text-light")
        $("#btnFaq").addClass("btn-primary")
        $("#btnFaq").addClass("text-light")
    })

    $("#dataKelas").on("click", ".detail", function(){
        a = [];
        $("#select1").html(0);
        const id = $(this).data('id');
        detail(id)
        btn_2();
        // nilai
            $("#jenis_nilai").val("Latihan 1")
            $(".titleNilai").html("Nilai Latihan 1");
            $("#list-latihan-1").show();
            $("#list-latihan-2").hide();
            $("#list-tugas-hafalan").hide();
        // nilai
        // delete_msg();
    })
    
    $("#dataFaq").on("click", ".detailFaq", function(){
        const id = $(this).data('id');
        $.ajax({
            type: "POST",
            url: "<?= base_url()?>kelas/get_faq",
            data: {id: id},
            dataType: "JSON",
            success: function(data){
                console.log(data.soal)
                $("#soalFaq").html("Soal : "+data.soal)
                $("#jawabanFaq").html("Jawaban : "+data.jawaban)
            }
        })
    })
    
    $('#formListPertemuan').on('click', '#addHadir', function(){
        let data = $(this).data("id");
        data = data.split("|")
        
        $.ajax({
            type : "POST",
            url : "<?= base_url()?>kelas/add_hadir",
            dataType : "JSON",
            data : {pertemuan:data[0], id_kelas:data[1]},
            success : function(result){
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    text: 'Berhasil menginputkan kehadiran '+data[0],
                    showConfirmButton: false,
                    timer: 1500
                })
                detail(result);
                reload_data();
            }
        })
    });

    $("#jenis_nilai").change(function(){
        let data = $(this).val();
        if(data == "Latihan 1"){
            $(".titleNilai").html("Nilai Latihan 1");
            $("#list-latihan-1").show();
            $("#list-latihan-2").hide();
            $("#list-tugas-hafalan").hide();
        } else if(data == "Latihan 2"){
            $(".titleNilai").html("Nilai Latihan 2");
            $("#list-latihan-1").hide();
            $("#list-latihan-2").show();
            $("#list-tugas-hafalan").hide();
        } else if(data == "Hafalan"){
            $(".titleNilai").html("Nilai Tugas Hafalan");
            $("#list-latihan-1").hide();
            $("#list-latihan-2").hide();
            $("#list-tugas-hafalan").show();
        }
    })

    // detail
        $("#btn-form-1").click(function(){
            btn_1();
            delete_msg();
        })
        
        $("#btn-form-2").click(function(){
            btn_2();
            delete_msg();
        })
        
        $("#btn-form-3").click(function(){
            btn_3();
            delete_msg();
        })
    // detail

    // function 
        function reload_data(btn = "materi"){
            $.ajax({
                type : "GET",
                url : "<?= base_url()?>kosakata1/ajax_one",
                dataType : "JSON",
                data : {id_kelas: "<?= $link?>"},
                success : function(data){
                    let sertifikat = ""
                    if(data.kelas.sertifikat == 1)
                        sertifikat = `<a href="<?= base_url()?>sertifikat/peserta/`+data.kelas.id_sertifikat+`" target="_blank" class="btn btn-md list-group-item-warning mr-1"><i class="fa fa-file-download"></i></a>`;
                    else 
                        sertifikat = "";
                    
                    if(btn == "materi"){
                        btn = ` <a href="javascript:void(0)" class="btn btn-md btn-primary text-light" id="btnMateri">materi</a>`;
                                // <a href="javascript:void(0)" class="btn btn-md btn-secondary" id="btnUjian">ujian</a>`;
                        // btn = ` <a href="javascript:void(0)" class="btn btn-md btn-primary text-light" id="btnMateri">materi</a>
                        //         <a href="javascript:void(0)" class="btn btn-md btn-secondary" id="btnUjian">ujian</a>                      
                        //         <a href="javascript:void(0)" data-id="`+data.kelas.id_kelas+`" data-toggle="modal" class="btn btn-md btn-secondary" id="btnFaq">FAQ</a>`;
                    } else if(btn == "ujian") {
                        // btn = ` <a href="javascript:void(0)" class="btn btn-md btn-secondary" id="btnMateri">materi</a>
                        //         <a href="javascript:void(0)" class="btn btn-md btn-primary text-light" id="btnUjian">ujian</a>                      
                        //         <a href="javascript:void(0)" data-id="`+data.kelas.id_kelas+`" data-toggle="modal" class="btn btn-md btn-secondary" id="btnFaq">FAQ</a>`;
                        btn = ` <a href="javascript:void(0)" class="btn btn-md btn-secondary" id="btnMateri">materi</a>
                                <a href="javascript:void(0)" class="btn btn-md btn-primary text-light" id="btnUjian">ujian</a>`;
                    } else if(btn == "faq"){
                        btn = ` <a href="javascript:void(0)" class="btn btn-md btn-secondary" id="btnMateri">materi</a>
                                <a href="javascript:void(0)" class="btn btn-md btn-secondary" id="btnUjian">ujian</a>                      
                                <a href="javascript:void(0)" data-id="`+data.kelas.id_kelas+`" data-toggle="modal" class="btn btn-md btn-primary text-light" id="btnFaq">FAQ</a>`;
                    }

                    let html = "";
                    html += `<div class="col-12 col-md-4 mb-3">
                                <ul class="list-group shadow">
                                    <li class="list-group-item list-group-item-success d-flex justify-content-between">
                                        <span>
                                            <i class="fa fa-book mr-2"></i><strong>`+data.kelas.nama_kelas+`</strong>
                                        </span>
                                        <span>
                                            <a href="<?= base_url()?>kelas" class="btn btn-sm btn-danger"><i class="fa fa-sign-out-alt"></i></a>
                                        </span>
                                    </li>
                                    <li class="list-group-item"><i class="fa fa-user-tie mr-2"></i>`+data.kelas.guru+`</li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div class="">
                                            `+btn+`
                                        </div>
                                        <div class="">
                                            <a href="#modalDetail" data-toggle="modal" data-id="`+data.kelas.id_kelas+`" class="btn btn-md list-group-item-success detail mr-1"><i class="fa fa-flag"></i></a>
                                            `+sertifikat+`
                                        </div>
                                    </li>
                                </ul>
                            </div>`;

                    $("#dataKelas").html(html);

                    // html = `<div class="col-12 mb-3">
                    //             <ul class="list-group">
                    //                 <li class="list-group-item"><a href="<?= base_url()?>hifdzi1/how_to/<?= md5($kelas['id_kelas'])?>" class="btn btn-md btn-secondary btn-block"><i class="fa fa-question mr-2"></i>Cara Penggunaan</a></li>
                    //             </ul>
                    //         </div>`;
                    
                    html = ""
                            
                    // html += `<div id="dataMateri">`;
                    data.pertemuan.forEach(pertemuan => {
                        html +=     
                        `<div class="col-12 col-md-4 mb-3">`;
                            if(pertemuan.nilai != "-"){
                                html += `
                                    <div class="card rounded-lg border-primary">
                                    <div class="card-header list-group-item-primary d-flex justify-content-between">
                                        <span class="text-dark"><strong>`+pertemuan.materi+`</strong></span>
                                        <span class="text-dark"><b>`+pertemuan.nilai+`</b></span>    
                                    </div>`;
                            } else {
                                html += `
                                    <div class="card rounded-lg border-danger">
                                    <div class="card-header list-group-item-danger"><span class="text-dark"><strong>`+pertemuan.materi+`</strong></span></div>`;
                            }
                            html += `<div class="card-body">`;

                            if(pertemuan.nilai != "-"){
                                html += `<a href="<?= base_url()?>`+data.kelas.link+`?pertemuan=`+pertemuan.link+`" class="btn btn-block btn-md btn-primary"><span><i class="fa fa-book mr-1"></i> Mulai</span></a>`
                            } else {
                                html += `
                                <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning"></i> Anda belum menyelesaikan latihan pada pertemuan ini</div>
                                <a href="<?= base_url()?>`+data.kelas.link+`?pertemuan=`+pertemuan.link+`" class="btn btn-block btn-md btn-danger"><i class="fa fa-book mr-1"></i> Mulai</a>`;
                            }
                            html += `
                                    </div>
                                </div>
                            </div>`;
                    });
                    
                    $("#dataMateri").html(html);
                    // html += `</div>`;

                    html = "";
                    // html += `<div id="dataUjian">`;
                    data.ujian.forEach(ujian => {
                        html +=     
                        `<div class="col-12 col-md-4 mb-3">`;
                            if(ujian.nilai != "-"){
                                html += `
                                    <div class="card rounded-lg border-primary">
                                    <div class="card-header list-group-item-primary d-flex justify-content-between">
                                        <span class="text-dark"><strong>`+ujian.materi+`</strong></span>
                                        <span class="text-dark"><b>`+ujian.nilai+`</b></span>    
                                    </div>`;
                            } else {
                                html += `
                                    <div class="card rounded-lg border-danger">
                                    <div class="card-header list-group-item-danger"><span class="text-dark"><strong>`+ujian.materi+`</strong></span></div>`;
                            }
                            html += `<div class="card-body">`;

                            if(ujian.nilai != "-"){
                                html += `<a href="<?= base_url()?>`+data.kelas.link+`?ujian=`+ujian.link+`" class="btn btn-block btn-md btn-primary"><span><i class="fa fa-book mr-1"></i> Mulai</span></a>`
                            } else {
                                html += `
                                <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning"></i> Anda belum menyelesaikan ujian ini</div>
                                <a href="<?= base_url()?>`+data.kelas.link+`?ujian=`+ujian.link+`" class="btn btn-block btn-md btn-danger"><i class="fa fa-book mr-1"></i> Mulai</a>`;
                            }
                            html += `
                                    </div>
                                </div>
                            </div>`;
                    });
                    // html += `</div>`;

                    $("#dataUjian").html(html);
                    
                    html = "";
                    data.faq.forEach(faq => {
                        html += `<li class="list-group-item d-flex justify-content-between">
                                    <span>
                                        `+faq.soal+`
                                    </span>
                                    <span>
                                        <a href="#modalFaq" data-toggle="modal" data-id="`+faq.id+`" class="detailFaq"><i class="fa fa-question-circle text-info"></i></a>
                                    </span>
                                </li>`
                    });

                    $("#list-faq").html(html)
                }
            })
        }
        
        function detail(id){
            $.ajax({
                url : "<?=base_url()?>kosakata1/get_detail_kelas",
                method : "POST",
                data : {id : id},
                async : true,
                dataType : 'json',
                success : function(data){
                    $("#modalDetailTitle").html(data.nama_kelas);
                    $("input[name='id_kelas']").val(data.id_kelas);
                    
                    let html = "";
                    let check = "";
                    
                    absen = [];
                    data.absen.forEach((materi, i) => {
                        absen[i] = materi.pertemuan;
                    });

                    pert = [];
                    data.pertemuan.forEach((materi, i) => {
                        if(materi.absen == 1){
                            if(absen.includes(materi.materi))
                                symbol = `<i class="fa fa-check-circle text-success"></i>`
                            else 
                                symbol = `<a href="javascript:void(0)" class="btn btn-md btn-outline-primary" data-id="`+materi.materi+`|`+data.id_kelas+`" id="addHadir"><i class="fa fa-user-check"></i></a>`

                            html += `<li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <label for="per`+i+`">`+materi.materi+`</label>
                                            <span>`+symbol+`</span>
                                        </div>
                                    </li>`;
                        } else {
                            if(absen.includes(materi.materi))
                                symbol = `<i class="fa fa-check-circle text-success"></i>`
                            else 
                                symbol = `<i class="fa fa-times-circle text-danger"></i>`

                            html += `<li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <label for="per`+i+`">`+materi.materi+`</label>
                                            <span>`+symbol+`</span>
                                        </div>
                                    </li>`;
                        }
                    });
                    
                    $("#list-pertemuan").html(html);

                    html = `<div class="alert alert-info"><i class="fa fa-info-circle text-info"></i> Kehadiran Anda adalah `+data.absen.length+`/`+data.pertemuan.length+`</div>`;
                    $("#kehadiran").html(html)
                    
                    html = "";
                    data.latihan_1.forEach((nilai, i) => {
                        html += `<li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <label for="per`+i+`">`+nilai.pertemuan+`</label>
                                        <span>`+nilai.nilai+`</span>
                                    </div>
                                </li>`;
                    });
                    
                    $("#list-latihan-1").html(html);
                    
                    html = "";
                    data.latihan_2.forEach((nilai, i) => {
                        html += `<li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <label for="per`+i+`">`+nilai.pertemuan+`</label>
                                        <span>`+nilai.nilai+`</span>
                                    </div>
                                </li>`;
                    });
                    
                    $("#list-latihan-2").html(html);
                    
                    html = "";
                    data.nilai_hafalan.forEach((nilai, i) => {
                        html += `<li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <label for="per`+i+`">`+nilai.pertemuan+`</label>
                                        <span>`+nilai.nilai+`</span>
                                    </div>
                                </li>`;
                    });
                    
                    $("#list-tugas-hafalan").html(html);

                    $("#nilai-pekan-1").html(data.ujian[0]);
                    $("#nilai-pekan-1-lisan").html(data.ujian[1]);
                    $("#nilai-pekan-2").html(data.ujian[2]);
                    $("#nilai-pekan-2-lisan").html(data.ujian[3]);
                    $("#nilai-pertengahan").html(data.ujian[4]);
                    $("#nilai-pekan-3").html(data.ujian[5]);
                    $("#nilai-pekan-3-lisan").html(data.ujian[6]);
                    $("#nilai-pekan-4").html(data.ujian[7]);
                    // $("#nilai-pekan-4-lisan").html(data.ujian[8]);
                    $("#nilai-akhir-form").html(data.ujian[9]);
                    $("#nilai-akhir-video").html(data.ujian[10]);
                }
                
            })
        }

        function btn_1(){
            $("#btn-form-1").addClass('active');
            $("#btn-form-2").removeClass('active');
            $("#btn-form-3").removeClass('active');
            
            $("#form-1").show();
            $("#form-2").hide();
            $("#form-3").hide();
        }

        function btn_2(){ 
            $("#btn-form-1").removeClass('active');
            $("#btn-form-2").addClass('active');
            $("#btn-form-3").removeClass('active');
            
            $("#form-1").hide();
            $("#form-2").show();
            $("#form-3").hide();
        }
        
        function btn_3(){
            $("#id_kelas_add").val("");
            $("#btn-form-1").removeClass('active');
            $("#btn-form-2").removeClass('active');
            $("#btn-form-3").addClass('active');
            
            $("#form-1").hide();
            $("#form-2").hide();
            $("#form-3").show();
        }
        
        function delete_msg(){
            $('.msgHapusPeserta').html("");
            $('.msgEditKelas').html("");
            $('.msg-add-data').html("");
            $('.msgListPertemuan').html("");
        }
    // function 
</script>