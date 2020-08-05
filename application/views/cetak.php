<html>
<head>
	<title>Cetak PDF</title>
	<style>
		table {
			border-collapse:collapse;
			table-layout:fixed;width: 630px;
		}
		table td {
			word-wrap:break-word;
			width: 12%;
		}
	</style>
</head>
<body>
    <h3>LAPORAN EKSPEDISI</h3>
    <h4>RUMAH SAKIT UMUM DAERAH BESUKI</h4>
    <h4>KABUPATEN SITUBONDO</h4>
    <b><?php echo $ket; ?></b><br /><br />
    
	<table border="1" cellpadding="8">
	<tr>
        <th scope="col">Tgl Pinjam</th>
        <th scope="col">Tgl Kembali</th>
        <th scope="col">No. RM</th>
        <th scope="col">Nama Pasien</th>
        <th scope="col">Jenis Layanan</th>
        <th scope="col">Nama Peminjam</th>
        <th scope="col">Kepentingan</th>
        <th scope="col">Tujuan</th>
        <th scope="col">Nama Petugas</th> 
	</tr>

    <?php
    if( ! empty($eks)){
    	$no = 1;
    	foreach($eks as $data){
            $tgl_pinjam = date('d-m-Y', strtotime($data->tgl_pinjam));

    		echo "<tr>";
			echo "<td>".$tgl_pinjam."</td>";
			echo "<td>".$data->tgl_kembali."</td>";
    		echo "<td>".$data->no_rm."</td>";
    		echo "<td>".$data->nama_pasien."</td>";
    		echo "<td>".$data->jenis_layanan."</td>";
            echo "<td>".$data->nama_peminjam."</td>";
            echo "<td>".$data->kepentingan."</td>";
            echo "<td>".$data->tujuan_ekspedisi."</td>";
            echo "<td>".$data->nama_petugas."</td>";
    		echo "</tr>";
    		$no++;
    	}
    }

    ?>
	</table>
</body>
</html>
