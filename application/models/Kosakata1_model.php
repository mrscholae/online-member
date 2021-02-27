<?php
    class Kosakata1_model extends CI_MODEL{
        public function pertemuan($id){
            $data[1] = [
                ["kata" => "بَابٌ","kata_arab" => "بَابٌ","arti" => "Pintu","huruf" => array_unique($this->huruf("بَابٌ"))],
                ["kata" => "نَافِذَةٌ","kata_arab" => "نَافِذَةٌ","arti" => "Jendela","huruf" => array_unique($this->huruf("نَافِذَةٌ"))],
                ["kata" => "خِزَانَةٌ","kata_arab" => "خِزَانَةٌ","arti" => "Lemari","huruf" => array_unique($this->huruf("خِزَانَةٌ"))],
                ["kata" => "دُرْجٌ","kata_arab" => "دُرْجٌ","arti" => "Laci","huruf" => array_unique($this->huruf("دُرْجٌ"))],
                ["kata" => "دَفْتَرٌ","kata_arab" => "دَفْتَرٌ","arti" => "Buku Catatan","huruf" => array_unique($this->huruf("دَفْتَرٌ"))],
            ];

            $data[2] = [
                ["kata" => "مَجَلَّةٌ","kata_arab" => "مَجَلَّةٌ","arti" => "Majalah","huruf" => array_unique($this->huruf("مَجَلَّةٌ"))],
                ["kata" => "جَرِيْدَةٌ","kata_arab" => "جَرِيْدَةٌ","arti" => "Koran","huruf" => array_unique($this->huruf("جَرِيْدَةٌ"))],
                ["kata" => "رِسَالَةٌ","kata_arab" => "رِسَالَةٌ","arti" => "Surat","huruf" => array_unique($this->huruf("رِسَالَةٌ"))],
                ["kata" => "دِرَاسَةٌ","kata_arab" => "دِرَاسَةٌ","arti" => "Pelajaran","huruf" => array_unique($this->huruf("دِرَاسَةٌ"))],
                ["kata" => "نَشْرَةٌ","kata_arab" => "نَشْرَةٌ","arti" => "Brosur","huruf" => array_unique($this->huruf("نَشْرَةٌ"))],
            ];
            
            $data[3] = [
                ["kata" => "سُوْقٌ","kata_arab" => "سُوْقٌ","arti" => "Pasar","huruf" => array_unique($this->huruf("سُوْقٌ"))],
                ["kata" => "مَدْرَسَةٌ","kata_arab" => "مَدْرَسَةٌ","arti" => "Sekolah","huruf" => array_unique($this->huruf("مَدْرَسَةٌ"))],
                ["kata" => "إِدَارَةٌ","kata_arab" => "إِدَارَةٌ","arti" => "Kantor","huruf" => array_unique($this->huruf("إِدَارَةٌ"))],
                ["kata" => "مَكْتَبَةٌ","kata_arab" => "مَكْتَبَةٌ","arti" => "Perpustakaan","huruf" => array_unique($this->huruf("مَكْتَبَةٌ"))],
                ["kata" => "بَيْتٌ","kata_arab" => "بَيْتٌ","arti" => "Rumah","huruf" => array_unique($this->huruf("بَيْتٌ"))],
            ];
            
            $data[4] = [
                ["kata" => "رُزٌّ","kata_arab" => "رُزٌّ","arti" => "Nasi","huruf" => array_unique($this->huruf("رُزٌّ"))],
                ["kata" => "لَحْمٌ","kata_arab" => "لَحْمٌ","arti" => "Daging","huruf" => array_unique($this->huruf("لَحْمٌ"))],
                ["kata" => "سَمَكٌ","kata_arab" => "سَمَكٌ","arti" => "Ikan","huruf" => array_unique($this->huruf("سَمَكٌ"))],
                ["kata" => "دَجَاجٌ","kata_arab" => "دَجَاجٌ","arti" => "Ayam","huruf" => array_unique($this->huruf("دَجَاجٌ"))],
                ["kata" => "بَيْضٌ","kata_arab" => "بَيْضٌ","arti" => "Telur","huruf" => array_unique($this->huruf("بَيْضٌ"))],
            ];
            
            $data[5] = [
                ["kata" => "مَاءٌ","kata_arab" => "مَاءٌ","arti" => "Air","huruf" => array_unique($this->huruf("مَاءٌ"))],
                ["kata" => "قَهْوَةٌ","kata_arab" => "قَهْوَةٌ","arti" => "Kopi","huruf" => array_unique($this->huruf("قَهْوَةٌ"))],
                ["kata" => "عَصِيْرٌ","kata_arab" => "عَصِيْرٌ","arti" => "Jus","huruf" => array_unique($this->huruf("عَصِيْرٌ"))],
                ["kata" => "لَبَنٌ","kata_arab" => "لَبَنٌ","arti" => "Susu","huruf" => array_unique($this->huruf("لَبَنٌ"))],
                ["kata" => "عَسَلٌ","kata_arab" => "عَسَلٌ","arti" => "Madu","huruf" => array_unique($this->huruf("عَسَلٌ"))],
            ];
            
            $data[6] = [
                ["kata" => "ثَوْبٌ","kata_arab" => "ثَوْبٌ","arti" => "Baju","huruf" => array_unique($this->huruf("ثَوْبٌ"))],
                ["kata" => "قَمِيْصٌ","kata_arab" => "قَمِيْصٌ","arti" => "Kemeja","huruf" => array_unique($this->huruf("قَمِيْصٌ"))],
                ["kata" => "خِمَارٌ","kata_arab" => "خِمَارٌ","arti" => "Kerudung","huruf" => array_unique($this->huruf("خِمَارٌ"))],
                ["kata" => "تَنُّوْرَةٌ","kata_arab" => "تَنُّوْرَةٌ","arti" => "Rok","huruf" => array_unique($this->huruf("تَنُّوْرَةٌ"))],
                ["kata" => "إِزَارٌ","kata_arab" => "إِزَارٌ","arti" => "Sarung","huruf" => array_unique($this->huruf("إِزَارٌ"))],
            ];
            
            $data[7] = [
                ["kata" => "كُوْبٌ","kata_arab" => "كُوْبٌ","arti" => "Gelas","huruf" => array_unique($this->huruf("كُوْبٌ"))],
                ["kata" => "صَحْنٌ","kata_arab" => "صَحْنٌ","arti" => "Piring","huruf" => array_unique($this->huruf("صَحْنٌ"))],
                ["kata" => "مِلْعَقَةٌ","kata_arab" => "مِلْعَقَةٌ","arti" => "Sendok","huruf" => array_unique($this->huruf("مِلْعَقَةٌ"))],
                ["kata" => "شَوْكَةٌ","kata_arab" => "شَوْكَةٌ","arti" => "Garpu","huruf" => array_unique($this->huruf("شَوْكَةٌ"))],
                ["kata" => "سِكِّيْنٌ","kata_arab" => "سِكِّيْنٌ","arti" => "Pisau","huruf" => array_unique($this->huruf("سِكِّيْنٌ"))],
            ];
            
            $data[8] = [
                ["kata" => "دَرَّاجَةٌ","kata_arab" => "دَرَّاجَةٌ","arti" => "Sepeda","huruf" => array_unique($this->huruf("دَرَّاجَةٌ"))],
                ["kata" => "سَيَّارَةٌ","kata_arab" => "سَيَّارَةٌ","arti" => "Mobil","huruf" => array_unique($this->huruf("سَيَّارَةٌ"))],
                ["kata" => "حَافِلَةٌ","kata_arab" => "حَافِلَةٌ","arti" => "Bus","huruf" => array_unique($this->huruf("حَافِلَةٌ"))],
                ["kata" => "شَاحِنَةٌ","kata_arab" => "شَاحِنَةٌ","arti" => "Truk","huruf" => array_unique($this->huruf("شَاحِنَةٌ"))],
                ["kata" => "قِطَارٌ","kata_arab" => "قِطَارٌ","arti" => "Kereta Api","huruf" => array_unique($this->huruf("قِطَارٌ"))],
            ];
            
            $data[9] = [
                ["kata" => "تُفَّاحٌ","kata_arab" => "تُفَّاحٌ","arti" => "Apel","huruf" => array_unique($this->huruf("تُفَّاحٌ"))],
                ["kata" => "عِنَبٌ","kata_arab" => "عِنَبٌ","arti" => "Anggur","huruf" => array_unique($this->huruf("عِنَبٌ"))],
                ["kata" => "مَوْزٌ","kata_arab" => "مَوْزٌ","arti" => "Pisang","huruf" => array_unique($this->huruf("مَوْزٌ"))],
                ["kata" => "بُرْتُقَالٌ","kata_arab" => "بُرْتُقَالٌ","arti" => "Jeruk","huruf" => array_unique($this->huruf("بُرْتُقَالٌ"))],
                ["kata" => "تَمْرٌ","kata_arab" => "تَمْرٌ","arti" => "Kurma","huruf" => array_unique($this->huruf("تَمْرٌ"))],
            ];
            
            $data[10] = [
                ["kata" => "مَكْتَبٌ","kata_arab" => "مَكْتَبٌ","arti" => "Meja","huruf" => array_unique($this->huruf("مَكْتَبٌ"))],
                ["kata" => "كُرْسِيٌّ","kata_arab" => "كُرْسِيٌّ","arti" => "Kursi","huruf" => array_unique($this->huruf("كُرْسِيٌّ"))],
                ["kata" => "مِرْوَحَةٌ","kata_arab" => "مِرْوَحَةٌ","arti" => "Kipas Angin","huruf" => array_unique($this->huruf("مِرْوَحَةٌ"))],
                ["kata" => "مِكْنَسَةٌ","kata_arab" => "مِكْنَسَةٌ","arti" => "Sapu","huruf" => array_unique($this->huruf("مِكْنَسَةٌ"))],
                ["kata" => "أَرِيْكَةٌ","kata_arab" => "أَرِيْكَةٌ","arti" => "Sofa","huruf" => array_unique($this->huruf("أَرِيْكَةٌ"))],
            ];
            
            return $data[$id];
        }

        public function materi_pertemuan($id){
            $data[1] = [
                "<div class='carousel-item active'><img src='".base_url()."assets/img/kosakata1/1.1.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/1.2.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/1.3.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/1.4.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/1.5.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/1.6.png' class='d-block w-100'></div>",
            ];

            $data[2] = [
                "<div class='carousel-item active'><img src='".base_url()."assets/img/kosakata1/2.1.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/2.2.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/2.3.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/2.4.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/2.5.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/2.6.png' class='d-block w-100'></div>",
            ];
            
            $data[3] = [
                "<div class='carousel-item active'><img src='".base_url()."assets/img/kosakata1/3.1.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/3.2.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/3.3.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/3.4.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/3.5.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/3.6.png' class='d-block w-100'></div>",
            ];
            
            $data[4] = [
                "<div class='carousel-item active'><img src='".base_url()."assets/img/kosakata1/4.1.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/4.2.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/4.3.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/4.4.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/4.5.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/4.6.png' class='d-block w-100'></div>",
            ];

            $data[5] = [
                "<div class='carousel-item active'><img src='".base_url()."assets/img/kosakata1/5.1.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/5.2.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/5.3.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/5.4.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/5.5.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/5.6.png' class='d-block w-100'></div>",
            ];

            $data[6] = [
                "<div class='carousel-item active'><img src='".base_url()."assets/img/kosakata1/6.1.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/6.2.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/6.3.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/6.4.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/6.5.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/6.6.png' class='d-block w-100'></div>",
            ];
            
            $data[7] = [
                "<div class='carousel-item active'><img src='".base_url()."assets/img/kosakata1/7.1.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/7.2.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/7.3.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/7.4.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/7.5.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/7.6.png' class='d-block w-100'></div>",
            ];
            
            $data[8] = [
                "<div class='carousel-item active'><img src='".base_url()."assets/img/kosakata1/8.1.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/8.2.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/8.3.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/8.4.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/8.5.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/8.6.png' class='d-block w-100'></div>",
            ];
            
            $data[9] = [
                "<div class='carousel-item active'><img src='".base_url()."assets/img/kosakata1/9.1.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/9.2.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/9.3.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/9.4.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/9.5.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/9.6.png' class='d-block w-100'></div>",
            ];
            
            $data[10] = [
                "<div class='carousel-item active'><img src='".base_url()."assets/img/kosakata1/10.1.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/10.2.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/10.3.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/10.4.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/10.5.png' class='d-block w-100'></div>",
                "<div class='carousel-item'><img src='".base_url()."assets/img/kosakata1/10.6.png' class='d-block w-100'></div>",
            ];
            return $data[$id];
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