function showDateTime() {
    // Mendapatkan tanggal dan waktu saat ini
    var date = new Date();

    // Array nama hari dalam Bahasa Indonesia
    var days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

    // Array nama bulan dalam Bahasa Indonesia
    var months = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];

    // Mendapatkan hari, tanggal, bulan, tahun
    var day = days[date.getDay()];
    var tgl = date.getDate();
    var month = months[date.getMonth()];
    var year = date.getFullYear();

    // Mendapatkan jam, menit, dan detik
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();

    // Menambahkan angka nol jika kurang dari 10
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    // Menggabungkan hari, tanggal, bulan, tahun, dan waktu
    var fullDateTime = `${day}, ${tgl} ${month} ${year} - ${h}:${m}:${s}`;

    // Menampilkan hasil ke elemen dengan id "i_jam"
    $("#i_jam").html(fullDateTime);

    // Memperbarui waktu setiap detik
    setTimeout(showDateTime, 1000);
}

// Memanggil fungsi saat halaman dimuat
// showDateTime();

// function showTime() {
//     // Mendapatkan tanggal dan waktu saat ini
//     var date = new Date();
//     // Mendapatkan jam, menit, dan detik
//     var h = date.getHours();
//     var m = date.getMinutes();
//     var s = date.getSeconds();

//     // Menambahkan angka 0 di depan jika kurang dari 10
//     h = (h < 10) ? "0" + h : h;
//     m = (m < 10) ? "0" + m : m;
//     s = (s < 10) ? "0" + s : s;

//     // Menggabungkan waktu dalam format 24 jam
//     var time = h + ":" + m + ":" + s;

//     // Menampilkan waktu pada elemen dengan id "i_jam"
//     $("#i_jam").html(time);

//     // Memperbarui waktu setiap detik
//     setTimeout(showTime, 1000);
// }

// function showTime() {
//     // to get current time/ date.
//     var date = new Date();
//     // to get the current hour
//     var h = date.getHours();
//     // to get the current minutes
//     var m = date.getMinutes();
//     //to get the current second
//     var s = date.getSeconds();
//     // AM, PM setting
//     var session = "AM";

//     //conditions for times behavior 
//     if (h == 0) h = 12;
//     if (h >= 12) session = "PM";
//     if (h > 12) h = h - 12;

//     m = (m < 10) ? m = "0" + m : m;
//     s = (s < 10) ? s = "0" + s : s;

//     //putting time in one variable
//     var time = h + ":" + m + ":" + s + " " + session;
//     //putting time in our div
//     $("#i_jam").html(time);
//     //to change time in every seconds
//     setTimeout(showTime, 1000);
// }