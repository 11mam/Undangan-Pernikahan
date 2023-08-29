
// ==============================
// HITUNG MUNDUR WAKTU RESEPSI
// ==============================
// Set the date we're counting down to
var countDownDate = new Date("Jun 24, 2023 10:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

// Get today's date and time
var now = new Date().getTime();
    
// Find the distance between now and the count down date
var distance = countDownDate - now;
    
// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
// Output the result in an element with id="countdown-demo"
document.getElementById("countdown-demo").innerHTML = days + " Hari Menuju Resepsi ";
document.getElementById("hari").innerHTML = days;
document.getElementById("jam").innerHTML = hours;
document.getElementById("mnt").innerHTML = minutes;
document.getElementById("dtk").innerHTML = seconds;

     
    
// If the count down is over, write some text 
if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown-demo").innerHTML = "Selesai";
    document.getElementById("hari").innerHTML = "00";
    document.getElementById("jam").innerHTML = "00";
    document.getElementById("mnt").innerHTML = "00";
    document.getElementById("dtk").innerHTML = "00";
}
}, 1000);

// ==============================
// HITUNG MUNDUR WAKTU AKAD 1
// ==============================

// Set the date we're counting down to
var hitungMundur = new Date("Jun 19, 2023 09:00:00").getTime();

// Update the count down every 1 second
var y = setInterval(function() {

// Get today's date and time
var now = new Date().getTime();
    
// Find the distance between now and the count down date
var alur = hitungMundur - now;
    
// Time calculations for days, hours, minutes and seconds
var days = Math.floor(alur / (1000 * 60 * 60 * 24));
    
// Output the result in an element with id="countdown-demo"
document.getElementById("akad-satu").innerHTML = days + " Hari Menuju Akad ";
    
    
// If the count down is over, write some text 
if (alur < 0) {
    clearInterval(x);
    document.getElementById("akad-satu").innerHTML = "Selesai";
}
}, 1000);

// ==============================
// HITUNG MUNDUR WAKTU AKAD 2
// ==============================

// Set the date we're counting down to
var menuju = new Date("Jun 23, 2023 14:00:00").getTime();

// Update the count down every 1 second
var y = setInterval(function() {

// Get today's date and time
var now = new Date().getTime();
    
// Find the distance between now and the count down date
var jadwal = menuju - now;
    
// Time calculations for days, hours, minutes and seconds
var days = Math.floor(jadwal / (1000 * 60 * 60 * 24));
    
// Output the result in an element with id="countdown-demo"
document.getElementById("akad-dua").innerHTML = days + " Hari Menuju Akad ";
    
    
// If the count down is over, write some text 
if (jadwal < 0) {
    clearInterval(x);
    document.getElementById("akad-dua").innerHTML = "Selesai";
}
}, 1000);


// PENGARAH MENU
    document.getElementById('menu1').onclick= function change_image()
	{
		document.getElementById("menu1").src="gmb/t1a.png";
        document.getElementById("menu2").src="gmb/t2b.png";
        document.getElementById("menu3").src="gmb/t3b.png";
        document.getElementById("menu4").src="gmb/t4b.png";
        document.getElementById("mulai").scrollIntoView();
	}

    document.getElementById('menu2').onclick = function change_image()
	{
		document.getElementById("menu2").src="gmb/t2a.png";
        document.getElementById("menu1").src="gmb/t1b.png";
        document.getElementById("menu3").src="gmb/t3b.png";
        document.getElementById("menu4").src="gmb/t4b.png";
        document.getElementById("salam").scrollIntoView();
	}

    document.getElementById('menu3').onclick = function change_image()
	{
		document.getElementById("menu2").src="gmb/t2b.png";
        document.getElementById("menu1").src="gmb/t1b.png";
        document.getElementById("menu3").src="gmb/t3a.png";
        document.getElementById("menu4").src="gmb/t4b.png";
        document.getElementById("judul").scrollIntoView();
	}
	
    document.getElementById('menu4').onclick = function change_image()
	{
		document.getElementById("menu2").src="gmb/t2b.png";
        document.getElementById("menu1").src="gmb/t1b.png";
        document.getElementById("menu3").src="gmb/t3b.png";
        document.getElementById("menu4").src="gmb/t4a.png";
        document.getElementById("slmt").scrollIntoView();
	}


    //

    // $(document).ready(function(){
    //     $("#opening").on("screen",function(){
    //         $("#couple").fadeIn(5000);
    //         $("div.hitung").fadeIn(5000);
    //     });
           
    // });