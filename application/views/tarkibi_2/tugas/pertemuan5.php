        <div class="container">
            <div class="row">
                <div class="mb-3">
                    <a id="backHome" class="btn btn-md btn-danger text-light"><i class="fa fa-times mr-1"></i>keluar</a>
                </div>

                <div class="col-12 p-0 mb-3">
                    <a href="javascript:void(0)" class="btn btn-md btn-block btn-success" id="allSoal">Tampilkan Semua Soal</a>
                </div>
                
                <div class="col-12 p-0">
                    <div class="alert alert-info"><i class="fa fa-info-circle text-info"></i> Tulislah kata berikut ini sesuai dhomir dan i'rob yang berada di dalam kurung </div>
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
                                "soal" => "هُوَ + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "يَنْكِحُ"
                            ],
                            [
                                "no" => "2",
                                "soal" => "هُمَا + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "يَنْكِحَانِ"
                            ],
                            [
                                "no" => "3",
                                "soal" => "هُمْ + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "يَنْكِحُوْنَ"
                            ],
                            [
                                "no" => "4",
                                "soal" => "هِيَ + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "تَنْكِحُ"
                            ],
                            [
                                "no" => "5",
                                "soal" => "هُمَا + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "تَنْكِحَانِ"
                            ],
                            [
                                "no" => "6",
                                "soal" => "هُنَّ + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "يَنْكِحْنَ"
                            ],
                            [
                                "no" => "7",
                                "soal" => "أَنْتَ + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "تَنْكِحُ"
                            ],
                            [
                                "no" => "8",
                                "soal" => "أَنْتُمَا + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "تَنْكِحَانِ"
                            ],
                            [
                                "no" => "9",
                                "soal" => "أَنْتُمْ + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "تَنْكِحُوْنَ"
                            ],
                            [
                                "no" => "10",
                                "soal" => "أَنْتِ + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "تَنْكِحِيْنَ"
                            ],
                            [
                                "no" => "11",
                                "soal" => "أَنْتُمَا + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "تَنْكِحَانِ"
                            ],
                            [
                                "no" => "12",
                                "soal" => "أَنْتُنَّ + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "تَنْكِحْنَ"
                            ],
                            [
                                "no" => "13",
                                "soal" => "أَنَا + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "أَنْكِحُ"
                            ],
                            [
                                "no" => "14",
                                "soal" => "نَحْنُ + يَنْكِحُ (رَفْعٌ)",
                                "jawaban" => "نَنْكِحُ"
                            ],
                            [
                                "no" => "15",
                                "soal" => "هُوَ + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ يَنْكِحَ"
                            ],
                            [
                                "no" => "16",
                                "soal" => "هُمَا + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ يَنْكِحَا"
                            ],
                            [
                                "no" => "17",
                                "soal" => "هُمْ + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ يَنْكِحُوْا"
                            ],
                            [
                                "no" => "18",
                                "soal" => "هِيَ + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ تَنْكِحَ"
                            ],
                            [
                                "no" => "19",
                                "soal" => "هُمَا + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ تَنْكِحَا"
                            ],
                            [
                                "no" => "20",
                                "soal" => "هُنَّ + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ يَنْكِحْنَ"
                            ],
                            [
                                "no" => "21",
                                "soal" => "أَنْتَ + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ تَنْكِحَ"
                            ],
                            [
                                "no" => "22",
                                "soal" => "أَنْتُمَا + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ تَنْكِحَا"
                            ],
                            [
                                "no" => "23",
                                "soal" => "أَنْتُمْ + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ تَنْكِحُوْا"
                            ],
                            [
                                "no" => "24",
                                "soal" => "أَنْتِ + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ تَنْكِحِيْ"
                            ],
                            [
                                "no" => "25",
                                "soal" => "أَنْتُمَا + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ تَنْكِحَا"
                            ],
                            [
                                "no" => "26",
                                "soal" => "أَنْتُنَّ + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ تَنْكِحْنَ"
                            ],
                            [
                                "no" => "27",
                                "soal" => "أَنَا + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ أَنْكِحَ"
                            ],
                            [
                                "no" => "28",
                                "soal" => "نَحْنُ + يَنْكِحُ (نَصْبٌ)",
                                "jawaban" => "أَنْ نَنْكِحَ"
                            ],
                            [
                                "no" => "29",
                                "soal" => "هُوَ + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ يَنْكِحْ"
                            ],
                            [
                                "no" => "30",
                                "soal" => "هُمَا + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ يَنْكِحَا"
                            ],
                            [
                                "no" => "31",
                                "soal" => "هُمْ + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ يَنْكِحُوْا"
                            ],
                            [
                                "no" => "32",
                                "soal" => "هِيَ + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ تَنْكِحْ"
                            ],
                            [
                                "no" => "33",
                                "soal" => "هُمَا + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ تَنْكِحَا"
                            ],
                            [
                                "no" => "34",
                                "soal" => "هُنَّ + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ يَنْكِحْنَ"
                            ],
                            [
                                "no" => "35",
                                "soal" => "أَنْتَ + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ تَنْكِحْ"
                            ],
                            [
                                "no" => "36",
                                "soal" => "أَنْتُمَا + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ تَنْكِحَا"
                            ],
                            [
                                "no" => "37",
                                "soal" => "أَنْتُمْ + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ تَنْكِحُوْا"
                            ],
                            [
                                "no" => "38",
                                "soal" => "أَنْتِ + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ تَنْكِحِيْ"
                            ],
                            [
                                "no" => "39",
                                "soal" => "أَنْتُمَا + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ تَنْكِحَا"
                            ],
                            [
                                "no" => "40",
                                "soal" => "أَنْتُنَّ + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ تَنْكِحْنَ"
                            ],
                            [
                                "no" => "41",
                                "soal" => "أَنَا + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ أَنْكِحْ"
                            ],
                            [
                                "no" => "42",
                                "soal" => "نَحْنُ + يَنْكِحُ (جَزْمٌ)",
                                "jawaban" => "لَمْ نَنْكِحْ"
                            ],
                            [
                                "no" => "43",
                                "soal" => "هُوَ + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "يَشْوِي"
                            ],
                            [
                                "no" => "44",
                                "soal" => "هُمَا + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "يَشْوِيَانِ"
                            ],
                            [
                                "no" => "45",
                                "soal" => "هُمْ + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "يَشْوُوْنَ"
                            ],
                            [
                                "no" => "46",
                                "soal" => "هِيَ + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "تَشْوِي"
                            ],
                            [
                                "no" => "47",
                                "soal" => "هُمَا + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "تَشْوِيَانِ"
                            ],
                            [
                                "no" => "48",
                                "soal" => "هُنَّ + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "يَشْوِيْنَ"
                            ],
                            [
                                "no" => "49",
                                "soal" => "أَنْتَ + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "تَشْوِي"
                            ],
                            [
                                "no" => "50",
                                "soal" => "أَنْتُمَا + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "تَشْوِيَانِ"
                            ],
                            [
                                "no" => "51",
                                "soal" => "أَنْتُمْ + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "تَشْوُوْنَ"
                            ],
                            [
                                "no" => "52",
                                "soal" => "أَنْتِ + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "تَشْوِيْنَ"
                            ],
                            [
                                "no" => "53",
                                "soal" => "أَنْتُمَا + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "تَشْوِيَانِ"
                            ],
                            [
                                "no" => "54",
                                "soal" => "أَنْتُنَّ + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "تَشْوِيْنَ"
                            ],
                            [
                                "no" => "55",
                                "soal" => "أَنَا + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "أَشْوِي"
                            ],
                            [
                                "no" => "56",
                                "soal" => "نَحْنُ + يَشْوِي (رَفْعٌ)",
                                "jawaban" => "نَشْوِي"
                            ],
                            [
                                "no" => "57",
                                "soal" => "هُوَ + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ يَشْوِيَ"
                            ],
                            [
                                "no" => "58",
                                "soal" => "هُمَا + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ يَشْوِيَا"
                            ],
                            [
                                "no" => "59",
                                "soal" => "هُمْ + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ يَشْوُوْا"
                            ],
                            [
                                "no" => "60",
                                "soal" => "هِيَ + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ تَشْوِيَ"
                            ],
                            [
                                "no" => "61",
                                "soal" => "هُمَا + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ تَشْوِيَا"
                            ],
                            [
                                "no" => "62",
                                "soal" => "هُنَّ + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ يَشْوِيْنَ"
                            ],
                            [
                                "no" => "63",
                                "soal" => "أَنْتَ + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ تَشْوِيَ"
                            ],
                            [
                                "no" => "64",
                                "soal" => "أَنْتُمَا + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ تَشْوِيَا"
                            ],
                            [
                                "no" => "65",
                                "soal" => "أَنْتُمْ + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ تَشْوُوْا"
                            ],
                            [
                                "no" => "66",
                                "soal" => "أَنْتِ + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ تَشْوِيْ"
                            ],
                            [
                                "no" => "67",
                                "soal" => "أَنْتُمَا + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ تَشْوِيَا"
                            ],
                            [
                                "no" => "68",
                                "soal" => "أَنْتُنَّ + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ تَشْوِيْنَ"
                            ],
                            [
                                "no" => "69",
                                "soal" => "أَنَا + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ أَشْوِيَ"
                            ],
                            [
                                "no" => "70",
                                "soal" => "نَحْنُ + يَشْوِي (نَصْبٌ)",
                                "jawaban" => "أَنْ نَشْوِيَ"
                            ],
                            [
                                "no" => "71",
                                "soal" => "هُوَ + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ يَشْوِ"
                            ],
                            [
                                "no" => "72",
                                "soal" => "هُمَا + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ يَشْوِيَا"
                            ],
                            [
                                "no" => "73",
                                "soal" => "هُمْ + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ يَشْوُوْا"
                            ],
                            [
                                "no" => "74",
                                "soal" => "هِيَ + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ تَشْوِ"
                            ],
                            [
                                "no" => "75",
                                "soal" => "هُمَا + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ تَشْوِيَا"
                            ],
                            [
                                "no" => "76",
                                "soal" => "هُنَّ + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ يَشْوِيْنَ"
                            ],
                            [
                                "no" => "77",
                                "soal" => "أَنْتَ + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ تَشْوِ"
                            ],
                            [
                                "no" => "78",
                                "soal" => "أَنْتُمَا + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ تَشْوِيَا"
                            ],
                            [
                                "no" => "79",
                                "soal" => "أَنْتُمْ + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ تَشْوُوْا"
                            ],
                            [
                                "no" => "80",
                                "soal" => "أَنْتِ + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ تَشْوِيْ"
                            ],
                            [
                                "no" => "81",
                                "soal" => "أَنْتُمَا + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ تَشْوِيَا"
                            ],
                            [
                                "no" => "82",
                                "soal" => "أَنْتُنَّ + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ تَشْوِيْنَ"
                            ],
                            [
                                "no" => "83",
                                "soal" => "أَنَا + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ أَشْوِ"
                            ],
                            [
                                "no" => "84",
                                "soal" => "نَحْنُ + يَشْوِي (جَزْمٌ)",
                                "jawaban" => "لَمْ نَشْوِ"
                            ],
                        ];
                    ?>

                    <?php foreach ($data_soal as $i => $soal) :?>
                        <ul class="list-group soal" id="soal<?= $i+1?>">
                            <div class="form-group mt-3">
                                <label for="" class="d-flex justify-content-end"><?= angka_arab($soal['no']).". ".$soal['soal']?></label>
                                <?php if($data_latihan['periksa'] == 1) :?>
                                    <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][$i]?></span></div>
                                    <?php if($data_latihan['pembahasan'][$i] != ""):?>
                                        <div class="pembahasan mb-3"><b><span class="text-danger">Pembahasan : </span></b> <br><?= $data_latihan['pembahasan'][$i]?></div>
                                    <?php endif;?>
                                <?php elseif($data_latihan['periksa'] == 2) :?>   
                                    <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][$i]?></span></div>
                                <?php else:?>
                                    <textarea name="jawaban[]" id="jawaban<?= $i+1?>" cols="30" rows="5" class="form-control form-control-lg"><?= $soal['jawaban']?></textarea>
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

    $("textarea").on({
        keydown: function(e) {
        if ((e.which === 32 || e.which === 13) || (($(this).val() == "أَنْ " || $(this).val() == "لَمْ ") && (e.which === 8 || e.which === 46 )))
            return false;
        },
        keyup: function(){
        this.value = this.value.toLowerCase();
        },
        change: function() {
            this.value = this.value.replace(/\s/g, "");
            
        }
    });
</script>