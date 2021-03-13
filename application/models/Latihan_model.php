<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan_model extends CI_Model {

    public function data(){
        $data = [
            [
                "id" => "1",
                "kata" => "رَزَقَ"
            ],
            [
                "id" => "2",
                "kata" => "خَتَمَ"
            ],
            // [
            //     "id" => "3",
            //     "kata" => "ءَامَنَ"
            // ],
            [
                "id" => "3",
                "kata" => "شَعَرَ"
            ],
            [
                "id" => "4",
                "kata" => "كَفَرَ"
            ],
            [
                "id" => "5",
                "kata" => "كَذَبَ"
            ],
            [
                "id" => "6",
                "kata" => "اَنْزَلَ"
            ],
            [
                "id" => "7",
                "kata" => "اَنْذَرَ"
            ],
            [
                "id" => "8",
                "kata" => "جَعَلَ"
            ],
        ];

        return $data;
    }

    public function fiil_madhi($id){
        // $data[1] = [
        //     $this->kata_fiil_madhi("1", "هُوَ + ضَرَبَ", "خَتَمَ", "ضَرَبَ"),
        //     $this->kata_fiil_madhi("1", "هُوَ + ضَرَبَ", "ءَامَنَ", "ضَرَبَ"),
        //     $this->kata_fiil_madhi("1", "هُوَ + ضَرَبَ", "شَعَرَ", "ضَرَبَ"),
        //     $this->kata_fiil_madhi("1", "هُوَ + ضَرَبَ", "كَفَرَ", "ضَرَبَ"),
        //     $this->kata_fiil_madhi("1", "هُوَ + ضَرَبَ", "كَذَبَ", "ضَرَبَ"),
        //     $this->kata_fiil_madhi("1", "هُوَ + ضَرَبَ", "اَنْزَلَ", "ضَرَبَ"),
        //     $this->kata_fiil_madhi("1", "هُوَ + ضَرَبَ", "اَنْذَرَ", "ضَرَبَ"),
        //     $this->kata_fiil_madhi("1", "هُوَ + ضَرَبَ", "جَعَلَ", "ضَرَبَ"),
        // ];

        // var_dump($data[1]);
        // exit();

        $data[1] = [
            $this->kata_fiil_madhi("1", "هُوَ + رَزَقَ", "رَزَقَ", "رَزَقَ"),
            $this->kata_fiil_madhi("1", "هُمَا (مذكر) + رَزَقَ", "رَزَقَ", "رَزَقَا"),
            $this->kata_fiil_madhi("1", "هُمْ + رَزَقَ", "رَزَقَ", "رَزَقُوْا"),
            $this->kata_fiil_madhi("1", "هِيَ + رَزَقَ", "رَزَقَ", "رَزَقَتْ"),
            $this->kata_fiil_madhi("1", "هُمَا (مؤنث) + رَزَقَ", "رَزَقَ", "رَزَقَتَا"),
            $this->kata_fiil_madhi("1", "هُنَّ + رَزَقَ", "رَزَقَ", "رَزَقْنَ"),
            $this->kata_fiil_madhi("1", "أَنْتَ + رَزَقَ", "رَزَقَ", "رَزَقْتَ"),
            $this->kata_fiil_madhi("1", "أَنْتُمَا + رَزَقَ", "رَزَقَ", "رَزَقْتُمَا"),
            $this->kata_fiil_madhi("1", "أَنْتُمْ + رَزَقَ", "رَزَقَ", "رَزَقْتُمْ"),
            $this->kata_fiil_madhi("1", "أَنْتِ + رَزَقَ", "رَزَقَ", "رَزَقْتِ"),
            $this->kata_fiil_madhi("1", "أَنْتُنَّ + رَزَقَ", "رَزَقَ", "رَزَقْتُنَّ"),
            $this->kata_fiil_madhi("1", "أَنَا + رَزَقَ", "رَزَقَ", "رَزَقْتُ"),
            $this->kata_fiil_madhi("1", "نَحْنُ + رَزَقَ", "رَزَقَ", "رَزَقْنَا"),
        ];

        
        $data[2] = [
            $this->kata_fiil_madhi("1", "هُوَ + خَتَمَ", "خَتَمَ", "خَتَمَ"),
            $this->kata_fiil_madhi("1", "هُمَا (مذكر) + خَتَمَ", "خَتَمَ", "خَتَمَا"),
            $this->kata_fiil_madhi("1", "هُمْ + خَتَمَ", "خَتَمَ", "خَتَمُوْا"),
            $this->kata_fiil_madhi("1", "هِيَ + خَتَمَ", "خَتَمَ", "خَتَمَتْ"),
            $this->kata_fiil_madhi("1", "هُمَا (مؤنث) + خَتَمَ", "خَتَمَ", "خَتَمَتَا"),
            $this->kata_fiil_madhi("1", "هُنَّ + خَتَمَ", "خَتَمَ", "خَتَمْنَ"),
            $this->kata_fiil_madhi("1", "أَنْتَ + خَتَمَ", "خَتَمَ", "خَتَمْتَ"),
            $this->kata_fiil_madhi("1", "أَنْتُمَا + خَتَمَ", "خَتَمَ", "خَتَمْتُمَا"),
            $this->kata_fiil_madhi("1", "أَنْتُمْ + خَتَمَ", "خَتَمَ", "خَتَمْتُمْ"),
            $this->kata_fiil_madhi("1", "أَنْتِ + خَتَمَ", "خَتَمَ", "خَتَمْتِ"),
            $this->kata_fiil_madhi("1", "أَنْتُنَّ + خَتَمَ", "خَتَمَ", "خَتَمْتُنَّ"),
            $this->kata_fiil_madhi("1", "أَنَا + خَتَمَ", "خَتَمَ", "خَتَمْتُ"),
            $this->kata_fiil_madhi("1", "نَحْنُ + خَتَمَ", "خَتَمَ", "خَتَمْنَا"),
        ];

        $data[3] = [
            $this->kata_fiil_madhi("1", "هُوَ + شَعَرَ", "شَعَرَ", "شَعَرَ"),
            $this->kata_fiil_madhi("1", "هُمَا (مذكر) + شَعَرَ", "شَعَرَ", "شَعَرَا"),
            $this->kata_fiil_madhi("1", "هُمْ + شَعَرَ", "شَعَرَ", "شَعَرُوْا"),
            $this->kata_fiil_madhi("1", "هِيَ + شَعَرَ", "شَعَرَ", "شَعَرَتْ"),
            $this->kata_fiil_madhi("1", "هُمَا (مؤنث) + شَعَرَ", "شَعَرَ", "شَعَرَتَا"),
            $this->kata_fiil_madhi("1", "هُنَّ + شَعَرَ", "شَعَرَ", "شَعَرْنَ"),
            $this->kata_fiil_madhi("1", "أَنْتَ + شَعَرَ", "شَعَرَ", "شَعَرْتَ"),
            $this->kata_fiil_madhi("1", "أَنْتُمَا + شَعَرَ", "شَعَرَ", "شَعَرْتُمَا"),
            $this->kata_fiil_madhi("1", "أَنْتُمْ + شَعَرَ", "شَعَرَ", "شَعَرْتُمْ"),
            $this->kata_fiil_madhi("1", "أَنْتِ + شَعَرَ", "شَعَرَ", "شَعَرْتِ"),
            $this->kata_fiil_madhi("1", "أَنْتُنَّ + شَعَرَ", "شَعَرَ", "شَعَرْتُنَّ"),
            $this->kata_fiil_madhi("1", "أَنَا + شَعَرَ", "شَعَرَ", "شَعَرْتُ"),
            $this->kata_fiil_madhi("1", "نَحْنُ + شَعَرَ", "شَعَرَ", "شَعَرْنَا"),
        ];
        
        $data[4] = [
            $this->kata_fiil_madhi("1", "هُوَ + كَفَرَ", "كَفَرَ", "كَفَرَ"),
            $this->kata_fiil_madhi("1", "هُمَا (مذكر) + كَفَرَ", "كَفَرَ", "كَفَرَا"),
            $this->kata_fiil_madhi("1", "هُمْ + كَفَرَ", "كَفَرَ", "كَفَرُوْا"),
            $this->kata_fiil_madhi("1", "هِيَ + كَفَرَ", "كَفَرَ", "كَفَرَتْ"),
            $this->kata_fiil_madhi("1", "هُمَا (مؤنث) + كَفَرَ", "كَفَرَ", "كَفَرَتَا"),
            $this->kata_fiil_madhi("1", "هُنَّ + كَفَرَ", "كَفَرَ", "كَفَرْنَ"),
            $this->kata_fiil_madhi("1", "أَنْتَ + كَفَرَ", "كَفَرَ", "كَفَرْتَ"),
            $this->kata_fiil_madhi("1", "أَنْتُمَا + كَفَرَ", "كَفَرَ", "كَفَرْتُمَا"),
            $this->kata_fiil_madhi("1", "أَنْتُمْ + كَفَرَ", "كَفَرَ", "كَفَرْتُمْ"),
            $this->kata_fiil_madhi("1", "أَنْتِ + كَفَرَ", "كَفَرَ", "كَفَرْتِ"),
            $this->kata_fiil_madhi("1", "أَنْتُنَّ + كَفَرَ", "كَفَرَ", "كَفَرْتُنَّ"),
            $this->kata_fiil_madhi("1", "أَنَا + كَفَرَ", "كَفَرَ", "كَفَرْتُ"),
            $this->kata_fiil_madhi("1", "نَحْنُ + كَفَرَ", "كَفَرَ", "كَفَرْنَا"),
        ];
        
        $data[5] = [
            $this->kata_fiil_madhi("1", "هُوَ + كَذَبَ", "كَذَبَ", "كَذَبَ"),
            $this->kata_fiil_madhi("1", "هُمَا (مذكر) + كَذَبَ", "كَذَبَ", "كَذَبَا"),
            $this->kata_fiil_madhi("1", "هُمْ + كَذَبَ", "كَذَبَ", "كَذَبُوْا"),
            $this->kata_fiil_madhi("1", "هِيَ + كَذَبَ", "كَذَبَ", "كَذَبَتْ"),
            $this->kata_fiil_madhi("1", "هُمَا (مؤنث) + كَذَبَ", "كَذَبَ", "كَذَبَتَا"),
            $this->kata_fiil_madhi("1", "هُنَّ + كَذَبَ", "كَذَبَ", "كَذَبْنَ"),
            $this->kata_fiil_madhi("1", "أَنْتَ + كَذَبَ", "كَذَبَ", "كَذَبْتَ"),
            $this->kata_fiil_madhi("1", "أَنْتُمَا + كَذَبَ", "كَذَبَ", "كَذَبْتُمَا"),
            $this->kata_fiil_madhi("1", "أَنْتُمْ + كَذَبَ", "كَذَبَ", "كَذَبْتُمْ"),
            $this->kata_fiil_madhi("1", "أَنْتِ + كَذَبَ", "كَذَبَ", "كَذَبْتِ"),
            $this->kata_fiil_madhi("1", "أَنْتُنَّ + كَذَبَ", "كَذَبَ", "كَذَبْتُنَّ"),
            $this->kata_fiil_madhi("1", "أَنَا + كَذَبَ", "كَذَبَ", "كَذَبْتُ"),
            $this->kata_fiil_madhi("1", "نَحْنُ + كَذَبَ", "كَذَبَ", "كَذَبْنَا"),
        ];
        
        $data[6] = [
            $this->kata_fiil_madhi("1", "هُوَ + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلَ"),
            $this->kata_fiil_madhi("1", "هُمَا (مذكر) + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلَا"),
            $this->kata_fiil_madhi("1", "هُمْ + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلُوْا"),
            $this->kata_fiil_madhi("1", "هِيَ + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلَتْ"),
            $this->kata_fiil_madhi("1", "هُمَا (مؤنث) + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلَتَا"),
            $this->kata_fiil_madhi("1", "هُنَّ + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلْنَ"),
            $this->kata_fiil_madhi("1", "أَنْتَ + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلْتَ"),
            $this->kata_fiil_madhi("1", "أَنْتُمَا + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلْتُمَا"),
            $this->kata_fiil_madhi("1", "أَنْتُمْ + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلْتُمْ"),
            $this->kata_fiil_madhi("1", "أَنْتِ + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلْتِ"),
            $this->kata_fiil_madhi("1", "أَنْتُنَّ + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلْتُنَّ"),
            $this->kata_fiil_madhi("1", "أَنَا + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلْتُ"),
            $this->kata_fiil_madhi("1", "نَحْنُ + اَنْزَلَ", "اَنْزَلَ", "اَنْزَلْنَا"),
        ];

        $data[7] = [
            $this->kata_fiil_madhi("1", "هُوَ + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرَ"),
            $this->kata_fiil_madhi("1", "هُمَا (مذكر) + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرَا"),
            $this->kata_fiil_madhi("1", "هُمْ + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرُوْا"),
            $this->kata_fiil_madhi("1", "هِيَ + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرَتْ"),
            $this->kata_fiil_madhi("1", "هُمَا (مؤنث) + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرَتَا"),
            $this->kata_fiil_madhi("1", "هُنَّ + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرْنَ"),
            $this->kata_fiil_madhi("1", "أَنْتَ + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرْتَ"),
            $this->kata_fiil_madhi("1", "أَنْتُمَا + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرْتُمَا"),
            $this->kata_fiil_madhi("1", "أَنْتُمْ + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرْتُمْ"),
            $this->kata_fiil_madhi("1", "أَنْتِ + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرْتِ"),
            $this->kata_fiil_madhi("1", "أَنْتُنَّ + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرْتُنَّ"),
            $this->kata_fiil_madhi("1", "أَنَا + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرْتُ"),
            $this->kata_fiil_madhi("1", "نَحْنُ + اَنْذَرَ", "اَنْذَرَ", "اَنْذَرْنَا"),
        ];

        $data[8] = [
            $this->kata_fiil_madhi("1", "هُوَ + جَعَلَ", "جَعَلَ", "جَعَلَ"),
            $this->kata_fiil_madhi("1", "هُمَا (مذكر) + جَعَلَ", "جَعَلَ", "جَعَلَا"),
            $this->kata_fiil_madhi("1", "هُمْ + جَعَلَ", "جَعَلَ", "جَعَلُوْا"),
            $this->kata_fiil_madhi("1", "هِيَ + جَعَلَ", "جَعَلَ", "جَعَلَتْ"),
            $this->kata_fiil_madhi("1", "هُمَا (مؤنث) + جَعَلَ", "جَعَلَ", "جَعَلَتَا"),
            $this->kata_fiil_madhi("1", "هُنَّ + جَعَلَ", "جَعَلَ", "جَعَلْنَ"),
            $this->kata_fiil_madhi("1", "أَنْتَ + جَعَلَ", "جَعَلَ", "جَعَلْتَ"),
            $this->kata_fiil_madhi("1", "أَنْتُمَا + جَعَلَ", "جَعَلَ", "جَعَلْتُمَا"),
            $this->kata_fiil_madhi("1", "أَنْتُمْ + جَعَلَ", "جَعَلَ", "جَعَلْتُمْ"),
            $this->kata_fiil_madhi("1", "أَنْتِ + جَعَلَ", "جَعَلَ", "جَعَلْتِ"),
            $this->kata_fiil_madhi("1", "أَنْتُنَّ + جَعَلَ", "جَعَلَ", "جَعَلْتُنَّ"),
            $this->kata_fiil_madhi("1", "أَنَا + جَعَلَ", "جَعَلَ", "جَعَلْتُ"),
            $this->kata_fiil_madhi("1", "نَحْنُ + جَعَلَ", "جَعَلَ", "جَعَلْنَا"),
        ];

        return $data[$id];
    }
    
    public function kata_fiil_madhi($latihan, $soal, $kata, $jawaban){
        $data = [
            "latihan" => $latihan,
            "soal" => $soal,
            "jawaban" => $jawaban,
            "kata" => $this->kata_madhi($kata),
            "huruf" => array_unique(array_diff($this->huruf($this->huruf_fiil_madhi($kata)), ["_"])),
        ];

        return $data;
    }

    public function kata_madhi($kata){
        $huwa = $kata;
        $huma_l = $kata . "ا";
        $hum = substr($kata, 0, -2) . "ُوْا";

        $hiya = $kata . "تْ";
        $huma_p = $kata . "تَا";
        $hunna = substr($kata, 0, -2) . "ْنَ";

        $anta = substr($kata, 0, -2) . "ْتَ";
        $antuma = substr($kata, 0, -2) . "ْتُمَا";
        $antum = substr($kata, 0, -2) . "ْتُمْ";

        $anti = substr($kata, 0, -2) . "ْتِ";
        $antunna = substr($kata, 0, -2) . "ْتُنَّ";

        $ana = substr($kata, 0, -2) . "ْتُ";
        $nahnu = substr($kata, 0, -2) . "ْنَا";

        $data[0] = $huwa;
        $data[1] = $huma_l;
        $data[2] = $hum;
        $data[3] = $hiya;
        $data[4] = $huma_p;
        $data[5] = $hunna;
        $data[6] = $anta;
        $data[7] = $antuma;
        $data[8] = $antum;
        $data[9] = $anti;
        $data[10] = $antunna;
        $data[11] = $ana;
        $data[12] = $nahnu;

        return $data;
    }

    public function huruf_fiil_madhi($kata){
        $huwa = $kata;
        $huma_l = $kata . "ا";
        $hum = substr($kata, 0, -2) . "ُوْا";

        $hiya = $kata . "تْ";
        $huma_p = $kata . "تَا";
        $hunna = substr($kata, 0, -2) . "ْنَ";

        $anta = substr($kata, 0, -2) . "ْتَ";
        $antuma = substr($kata, 0, -2) . "ْتُمَا";
        $antum = substr($kata, 0, -2) . "ْتُمْ";

        $anti = substr($kata, 0, -2) . "ْتِ";
        $antunna = substr($kata, 0, -2) . "ْتُنَّ";

        $ana = substr($kata, 0, -2) . "ْتُ";
        $nahnu = substr($kata, 0, -2) . "ْنَا";

        // $data = $huwa . " " . $huma_l . " " . $hum . " " . $hiya . " " . $huma_p . " " . $hunna . " " . $anta . " " . $antuma . " " . $antum . " " . $anti . " " . $antunna . " " . $ana . " " . $nahnu;
        $data = $huwa . "" . $huma_l . "" . $hum . "" . $hiya . "" . $huma_p . "" . $hunna . "" . $anta . "" . $antuma . "" . $antum . "" . $anti . "" . $antunna . "" . $ana . "" . $nahnu;

        return $data;
    }

    public function huruf($kata, $cek = ""){
        $i = 0;
        $huruf = [];
        while ($kata != ""){
            if(substr($kata, -1) == "-"){
                $huruf[$i] = substr($kata, -1);
                $kata = substr($kata, 0, -1);
            } else if(substr($kata, -1) == " "){
                $huruf[$i] = " ";
                $kata = substr($kata, 0, -1);
            } else if(substr($kata, -1) == "/"){
                $huruf[$i] = substr($kata, -1);
                $kata = substr($kata, 0, -1);
            } else if (substr($kata, -8) == "اَلْ") {
                $huruf[$i] = substr($kata, -8);
                $kata = substr($kata, 0, -8);
            } else if (substr($kata, -6) == "اَل" || substr($kata, -6) == "الْ" ){
                $huruf[$i] = substr($kata, -6);
                $kata = substr($kata, 0, -6);
            } else if (substr($kata, -4) == "ال" ){
                $huruf[$i] = substr($kata, -4);
                $kata = substr($kata, 0, -4);
            } else if (substr($kata, -2, 2) == "ّ" || substr($kata, -4, 2) == "ّ"){
                $huruf[$i] = substr($kata, -6);
                $kata = substr($kata, 0, -6);
            } else if(substr($kata, -2) == "ا" || substr($kata, -2) == "ى" || substr($kata, -2) == "ج" || substr($kata, -2) == "-" || substr($kata, -2) == "_" || substr($kata, -2) == "ل" || substr($kata, -2) == "آ" || substr($kata, -2) == "ي" || substr($kata, -2) == "و"){
                $huruf[$i] = substr($kata, -2);
                $kata = substr($kata, 0, -2);
            } else {
                $huruf[$i] = substr($kata, -4);
                $kata = substr($kata, 0, -4);
            }

            $i++;
        }

        if($cek != ""){
            $huruf[$i] = $cek;
        }
        
        return $huruf;
    }
    
}

/* End of file Latihan_model.php */
