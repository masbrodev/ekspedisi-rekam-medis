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
			width: 20%;
		}
	</style>
</head>
<body>
    <b><?php echo $ket; ?></b><br /><br />
    
	<table border="1" cellpadding="8">
	<tr>
        <th>Tgl Pinjam</th>
        <th>No. RM</th>
        <th>Nama Pasien</th>
        <th>Jenis Layanan</th>
        <th>Nama Peminjam</th>
        <th>Kepentingan</th>
        <th>Tujuan</th>
        <th>Nama Petugas</th>
	</tr>

    <?php
    if( ! empty($laporan)){
    	$no = 1;
    	foreach($laporan as $data){
            $tgl_pinjam = date('d-m-Y', strtotime($data->tgl_pinjam));

    		echo "<tr>";
    		echo "<td>".$tgl_pinjam."</td>";
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
