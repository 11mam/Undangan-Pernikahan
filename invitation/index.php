<?php

// KONEKSI KE DATABASE
// include 'koneksi.php';

if (isset($_GET['kpd'])){
    $kpd = $_GET('kpd');
} else {
    $kpd = 'Nama Tamu Undangan';
}

?>

<!DOCTYPE html>
<html lang="en" id="halaman">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="jquery-3.7.0.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="script.js"></script>
    <title>Undangan Pernikahan [Iqbal & Imel | Putri & Zam]</title>
</head>
<body>
    <audio loop id="suara">
        <source src="https://drive.google.com/uc?export=download&id=1m9kOBHzVowGDoj37y1wR0DwEs3E_eC2Q" type="audio/mp3"
        style="display:none" controls autoplay loop>
        <!-- <source src="gmb/Maher Zain-FTROML.mp3" type="audio/mp3"> -->
    </audio>
    
    <div class="latar2" id="first">
        <div class="wallpaper" style="background-size: cover;">
            <div class="inti">
                <div class="cover" data-aos="fade-up" data-aos-duration="1500">
                    <p id="pengantar"> MAIMBAU BARALEK</p><br>
                    <img src="gmb/pasangan.png" alt="" id="pasangan"><br><br>
                    <h2>Iqbal & Imel</h2>
                    <h3>>>>>>>><<<<<<<</h3>
                    <h2>Putri & Zam</h2>
                    <br>
                    <p>Yang Kami Hormati, <br> Bapak/Ibu/Saudara/i :</p> <br>
                    <h4><?php echo $kpd ?> </h4><br>
                    <button id="tmb">Buka Undangan</button>
                </div>
            </div>
        </div>
    </div>

<div id="isi">
    <div class="latar2">
        <div class="wallpaper">
            <div class="inti" id="mulai" style="padding-top: 3vh; padding-bottom: 3vh;">
                    <br>
                    <div class="depan" data-aos="fade-up" data-aos-duration="1500">
                        <br>
                        <img src="gmb/mempelai.png" alt="" id="mpl"><br><br>
                        <h3> Sabtu, 24 Juni 2023</h3> <br><br>
    
                        <div class="hitung" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1000">
                            <span id="htg"><h3 id="hari"></h3><p>Hari</p></span>
                            <h3 style="margin-left: 3%; margin-right: 3%;">:</h3>
                            <span id="htg"><h3 id="jam"></h3><p>Jam</p></span>
                            <h3 style="margin-left: 3%; margin-right: 3%;">:</h3>
                            <span id="htg"><h3 id="mnt"></h3><p>Menit</p></span>
                            <h3 style="margin-left: 3%; margin-right: 3%;">:</h3>
                            <span id="htg"><h3 id="dtk"></h3><p>Detik</p></span>
                        </div>
                        <br><br>
                        <h5>"</h5>
                        <p>Dan diantara tanda-tanda (kebesaran)-Nya ialah Dia yang menciptakan pasangan-pasangan untukmu
                            dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan 
                            diantaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda
                            (Kebesaran Allah) bagi kaum yang berfikir
                        </p><br>
                        <h5 style="font-size: 2vh;">-- Q.S Ar-Rum : 21 --</h5>
                        <br>
                        <h5>"</h5>
                    </div>
            </div>
        </div>
    </div>

    <div class="latar2">
        <div class="wallpaper">
            <div class="inti">
                <div class="awal" data-aos="fade-up" data-aos-duration="1500" >
                    <h3 id="salam">Assalamu'alaikum, Wr. Wb</h3> <br>
                    <p id="psnbuka">Dengan mengharap Ridho dari Allah SWT <br>
                    Tanpa Mengurangi rasa hormat, Kami Mengundang Bapak/Ibu/Saudara/i 
                    untuk menghadiri acara pernikahan kami :</p>
                </div>
            </div>
        </div>
    </div>

    <div class="latar1">
        <div class="wallpaper">
            <div class="inti" style="padding-top: 2.5vh; padding-bottom: 2.5vh;">
                <div class="psg1" data-aos="fade-right" data-aos-duration="1500">
                    <img src="gmb/bouquet.png" alt="" id="icon">
                    <h2 data-aos="zoom-in" data-aos-duration="2000">Muhammad Iqbal Pahlawan, S.K.G</h2><br>
                    <h4 data-aos="zoom-in" data-aos-duration="2000">Putra dari Bapak Dr. Alwis, M.Pd dan Ibu Widiyawati, S.Pd</h4>
                    <p data-aos="zoom-in" data-aos-duration="2000">&</p>
                    <h2 data-aos="zoom-in" data-aos-duration="2000">Putri Melati, M.Pd</h2><br>
                    <h4 data-aos="zoom-in" data-aos-duration="2000">Putri dari Bpk. Yafni Zen, S.H & Ibu Butet Iriani Maria</h4>
                </div>
                <div class="batas">
                    <br><br>
                    <img src="gmb/bunga.png" alt="" id="bts">
                    <br><br>
                </div>
                <div class="psg2" data-aos="fade-left" data-aos-duration="1500">
                    <img src="gmb/bouquet.png" alt="" id="icon">
                    <h2 data-aos="zoom-in" data-aos-duration="2000">Putri Novrilia Handayani, M.Pd</h2><br>
                    <h4 data-aos="zoom-in" data-aos-duration="2000">Putri dari Bpk. Suhendri dan Ibu Salminawati (Almh)</h4>
                    <p data-aos="zoom-in" data-aos-duration="2000">&</p>
                    <h2 data-aos="zoom-in" data-aos-duration="2000">H. Zammachsyari</h2><br>
                    <h4 data-aos="zoom-in" data-aos-duration="2000">Putra dari Bpk. H. Maswir dan Ibu Hj. Asnur</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="latar1">
        <div class="wallpaper">
            <div class="inti">
                <div class="jadwal" data-aos="fade-up" data-aos-duration="1500">
                    <h3 id="judul">--- Jadwal Acara ---</h3>
                    <p id="kata">Insya Allah rangkaian acara yang akan dilaksanakan :</p>
                </div>
            </div>
        </div>
    </div>

    <div class="latar2">
        <div class="wallpaper">
            <div class="inti" style="padding:3vh">
                <div class="bingkaiacr">
                    <div class="acara" data-aos="flip-left" data-aos-duration="1500">
                        <img src="gmb/akad.png" alt="" id="akad">
                        <h2>Akad Nikah</h2><br>
                        
                        <div class="akad1" data-aos="zoom-in" data-aos-duration="1500">
                            <img src="gmb/bunga.png" width="30vh">
                            <h4>Iqbal & Imel</h4>
                            <div id="waktu" data-aos="zoom-in" data-aos-duration="1500">
                                <h5 style="padding-left: 3%;">Senin</h5>
                                <h5 id="tgl">19 <br> Juni </h5>
                                <h5 style="padding-right: 3%;">2023</h5>
                            </div>
                            <p>Pukul 09.00 WIB - Selesai</p>
                            <p>Jl. Pagaruyung II Painan, Kec. IV Jurai, Kab. Pesisir Selatan </p>
                            <h6 id="akad-satu"></h6>

                            <br><br>

                            <img src="gmb/bunga.png" width="30vh">
                            <h4>Putri & Zam</h4>
                            <div id="waktu" data-aos="zoom-in" data-aos-duration="1500">
                                <h5 style="padding-left: 3%;">Jum'at</h5>
                                <h5 id="tgl">23 <br> Juni </h5>
                                <h5 style="padding-right: 3%;">2023</h5>
                            </div>
                            <p>Pukul 14.00 WIB - Selesai</p>
                            <p>Masjid Istiqomah, Cubadak Aia Koto Hilalang, Ampek Angkek, Agam </p>
                            <h6 id="akad-dua"></h6><br>
                        </div>
                    </div>
                </div>

                <br>

                <div class="bingkaiacr">
                    <div class="acara" data-aos="flip-right" data-aos-duration="1500">
                        <img src="gmb/resepsi.png" alt="" id="akad">
                        <h2>Resepsi Pernikahan</h2><br>
                        
                        <div class="akad1" data-aos="zoom-in" data-aos-duration="1500">
                            <img src="gmb/bunga.png" width="30vh">
                            <div id="waktu" >
                                <h5 style="padding-left: 3%;">Sabtu</h5>
                                <h5 id="tgl">24 <br> Juni </h5>
                                <h5 style="padding-right: 3%;">2023</h5>
                            </div>
                            <p>Pukul 10.00 WIB - Selesai</p>
                            <p>Kubu Cubadak Aia Jorong Koto Hilalang, Ampek Angkek, Agam  </p>
                            <h6 id="countdown-demo"></h6>

                            <div class="peta" data-aos="fade-up" data-aos-duration="1500">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5335.328267358832!2d100.449485!3d-0.29511450000000183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd5375bceb8bd45%3A0x91415eccec0a2c09!2sKue%20bareh%20tek%20kas!5e1!3m2!1sid!2sid!4v1686768041385!5m2!1sid!2sid" width="210" height="200" style="border:0px; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <a href="https://goo.gl/maps/1tsa8W7eJrT8ApWm6" target="_blank"><button>Lihat Lokasi</button></a>
                            <br>
                        </div>
                    </div>
                </div>

            </div>
            <br>
        </div>
    </div>

    <div class="latar2">
        <div class="wallpaper">
            <div class="inti">
                <div class="ucapan" data-aos="fade-up" data-aos-duration="1500">
                    <h3 id="slmt">--- Ucapan Selamat --- </h3>
                    <p id="psnslmt">Sampaikan ucapan selamat kepada mempelai :</p>

                    <div class="formulir" data-aos="fade-up" data-aos-duration="1500">
                        <br>
                        <form method="post" class="form-user">
                            <input type="text" name="nama" id="nm" placeholder="Nama">
                            <textarea name="pesan" id="psn" rows="3" placeholder="Isi Ucapan"></textarea>
                            <button class="tombol-simpan">Kirim Ucapan</button>
                        </form> <br><br>
        
                        <div class="tabel">
                            <!-- <div class="selamat" style="margin-bottom: 1vh;">
                                 <table border="0">

                                </table> -->
                                
                                <!-- <h4 style="font-size: 1.9vh;"> </h4>
                                <h5 style="line-height:5vh; font-size: x-small; font-weight: normal;"></h5> -->
                            <!-- </div> -->
                        </div>

                        <script type="text/javascript">
                            $(document).ready(function(){
                                $('.tabel').load("tampil.php");
                                
                                $(".tombol-simpan").on('click',function(event){
                                    event.preventDefault();
                                    var data = $('.form-user').serialize();
                                    $.ajax({
                                        type:'POST',
                                        url:"aksi.php",
                                        data: data,
                                        cache : false,
                                        success: function(data) {
                                            $('.tabel').load("tampil.php");
                                            document.getElementById('nm').value = "";
                                            document.getElementById('psn').value = "";
                                        }
                                    });
                                }); return false;
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="latar1">
        <div class="wallpaper">
            <div class="inti">
                <div class="kado"  data-aos="fade-up" data-aos-duration="1500">
                    <img src="gmb/kado.png" alt="" id="gift">
                    <h3 id="judul">--- Kado Digital ---</h3>
                    <br>

                    <div class="daftar">
                        <div class="acc">
                            <div class="logo">
                                <img src="gmb/spay.png" alt="" id="act">
                            </div>
                            <img src="gmb/spayuda.png.jpg" id="qr">
                        </div><br>

                        <div class="acc">
                            <div class="logo">
                                <img src="gmb/gopay.png" alt="" id="act">
                            </div>
                            <img src="gmb/gpuda.jpg" id="qr">
                        </div><br>

                        <div class="acc">
                            <div class="logo">
                                <img src="gmb/jago.png" alt="" id="act">
                                </div>
                            <label for="" id="rek">108511781398</label>
                            <h4>a/n Muhammad Iqbal Pahlawan</h4>
                        </div><br>

                        <div class="acc">
                            <div class="logo">
                                <img src="gmb/bsi.png" alt="" id="act" style="margin-bottom: 1.5vh;"> 
                            </div>
                            <label for="" id="rek">7099392236</label>
                            <h4>a/n Putri Novrilia Handayani</h4>
                        </div><br>

                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

    <div class="latar2">
        <div class="wallpaper">
            <div class="inti">
                <div class="thanks" data-aos="fade-up" data-aos-duration="1500">
                    <h3>"</h3>
                    <p id="psntutup">Merupakan sebuah kehormatan dan kebahagiaan bagi kami, Apabila Bapak/Ibu/Saudara/i dapat berkenan hadir dan memberikan doa restu. 
                        <br> atas kehadiran dan do'a restunya kami ucapkan terima kasih </p>
                    <br><h3>"</h3>
                    <div class="bye">
                        <h3>Iqbal <br>& <br>Imel</h3>
                        <img src="gmb/bunga.png" alt="">
                        <h3>Putri <br> &  <br>Zam</h3>
                    </div>
                    <br><br>
                    <h4>Organized by : M.A.M</h4>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>

    <div class="latar1" id="tutup">
        <div class="wallpaper">
            <div class="inti">
                <div class="footer" id="bawah">
                    <button><img src="gmb/t1b.png" alt="" id="menu1"></button>
                    <button><img src="gmb/t2b.png" alt="" id="menu2"></button>
                    <button><img src="gmb/t3b.png" alt="" id="menu3"></button>
                    <button><img src="gmb/t4b.png" alt="" id="menu4"></button>
                    <button><img src="gmb/mute.png" alt="" id="menu5" type="button"></button>
                </div>
            </div>
        </div>
    </div>

</div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>   
    
    <script type="text/javascript">
        
        var musik = document.getElementById("suara");

        window.addEventListener('load',function(){
            window.scrollTo(0,0);
            document.getElementById("first").scrollIntoView();
            document.getElementById("tutup").style.zIndex = "-1";
            // $("#isi").slideUp();
            document.getElementById("isi").style.display = "none";
            musik.pause();
          
        });

		$(document).ready(function(){
 
			$("#tmb").click(function(){
               
                $("#first").slideUp(function(){
                    AOS.init();
                });
                document.getElementById("isi").style.display = "block";
                AOS.refresh();
                // $("#isi").slideDown(function(){
                //     AOS.refresh();
                // });
                musik.play(); 
                document.getElementById("tutup").style.zIndex = "1";

			});  
 
		});
                
                document.getElementById('menu5').onclick = function pause()
                {
                    musik.muted = true;
                    document.getElementById('menu5').src="gmb/play.png";
                    document.getElementById('menu5').id = 'menu6';
                    return false;
                }
            
                document.getElementById('menu5').onclick = function muzik()
                {
                    if (window.musik.play = true){
                        document.getElementById('menu5').src="gmb/play.png";
                        musik.muted = true ;
                    } else if (window.musik.muted = true){
                        document.getElementById('menu5').src="gmb/mute.png";
                        musik.play = true;
                    }
                }

    </script>
    
    <script src="script.js"></script>

</body>

</html>