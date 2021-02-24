<!DOCTYPE html>

<body>
<!-- HALAMAN PERTAMA -->
<table border="1"width='600px' height='900px'>

<?php foreach ($sikap as $data):?> 
	<tr><td align="center" colspan="3">PENILAIAN PRESTASI KERJA<br>
						PEGAWAI NEGERI SIPIL</td>
	</tr>
	<tr><td rowspan="2" colspan="2">DINAS KOMUNIKASI DAN INFORMATIKA</td>
		<td align="right">Jangka Waktu Penilaian</td>
	<tr><td align="right"><?=$data->bulan?> - <?=$data->tahun?></td>
	</tr>
	<tr border="1">	<td rowspan="6" width="8%">1</td>
			<td colspan="2">YANG DINILAI</td>
		</tr>
		<tr border="1"><td width="45%">a. Nama</td>
			<td width="50%" ><?=$data->nama?></td>
		</tr >
		<tr border="1" ><td>b. NIP</td>
			<td><?=$data->nip?></td>
		</tr>
		<tr border="1"><td>c. Pangkat, Golongan</td>
			<td></td>
		</tr>
		<tr border="1"><td>d. Jabatan/Pekerjaan</td>
			<td></td>
		</tr>
		<tr><td>e. Unit Organisasi</td>
			<td>Dinas Komunikasi dan Informatika Prov. Jatim</td>
	</tr>
	<tr>	<td rowspan="6" width="8%">2</td>
			<td colspan="2">PEJABAT PENILAI</td>
		</tr>
		<tr><td width="45%">a. Nama</td>
			<td width="50%" ><?=$data->penilai?></td>
		</tr>
		<tr><td>b. NIP</td>
			<td></td>
		</tr>
		<tr><td>c. Pangkat, Golongan</td>
			<td></td>
		</tr>
		<tr><td>d. Jabatan/Pekerjaan</td>
			<td></td>
		</tr>
		<tr><td>e. Unit Organisasi</td>
			<td>Dinas Komunikasi dan Informatika Prov. Jatim</td>
	</tr>
	<tr>	<td rowspan="6" width="8%">3</td>
			<td colspan="2">ATASAN PEJABAT PENILAI</td>
		</tr>
		<tr><td width="45%">a. Nama</td>
			<td width="50%" ></td>
		</tr>
		<tr><td>b. NIP</td>
			<td></td>
		</tr>
		<tr><td>c. Pangkat, Golongan</td>
			<td></td>
		</tr>
		<tr><td>d. Jabatan/Pekerjaan</td>
			<td></td>
		</tr>
		<tr><td>e. Unit Organisasi</td>
			<td>Dinas Komunikasi dan Informatika Prov. Jatim</td>
	</tr>
	
</table>
<br><br>
<!-- HALAMAN KEDUA -->
<table border="1"width='600px' height='842px'>

	<tr border="1">	<td rowspan="11" width="8%">4</td>
			<td colspan="5">UNSUR YANG DINILAI</td>
			<td width="20%" align="center"> Jumlah </td>
		</tr>
		<tr><td width="45%" colspan="2">a. Sasaran Kerja Pegawai (SKP)</td>
			<td width="8%"align="center" ><?=$data->skp?></td>
			<td align="center"> x </td>
			<td width="8%" align="center"> 60% </td>
			<td></td>
		</tr >
		<tr border="1" ><td rowspan="9" width="30%">b. Perilaku Kerja</td>
			<td width="30%">1. Orientasi Pelayanan</td>	
			<td width="8%" align="center"><?=$data->pelayanan?></td>
			<td colspan="2"></td>
			<td></td>
		</tr>
		<tr>
			<td>2. Integritas</td>
			<td width="8%" align="center"><?=$data->integritas?></td>
			<td colspan="2"></td>
			<td></td>
		</tr>
		<tr>
			<td>3. Komitmen</td>
			<td width="8%" align="center"><?=$data->komitmen?></td>
			<td colspan="2"></td>
			<td></td>
		</tr>
		<tr>
			<td>4. Disipilin</td>
			<td width="8%" align="center"><?=$data->disiplin?></td>
			<td colspan="2"></td>
			<td></td>
		</tr>
		<tr>
			<td>5. Kerjasama</td>
			<td width="8%" align="center"><?=$data->kerjasama?></td>
			<td colspan="2"></td>
			<td></td>
		</tr>
		<tr>
			<td>6. Kepemimpinan</td>
			<td width="8%" align="center"><?=$data->kepemimpinan?></td>
			<td colspan="2"></td>
			<td></td>
		</tr>
		<tr>
			<td>7. Jumlah</td>
			<td width="8%" align="center"><?=$data->jumlah?></td>
			<td colspan="2"></td>
			<td></td>
		</tr>
		<tr>
			<td>8. Nilai Rata-rata</td>
			<td width="8%" align="center"><?=$data->rata?></td>
			<td colspan="2"></td>
			<td></td>
		</tr>
		<tr>
			<td>9. Nilai Perilaku Kerja</td>
			<td width="8%" align="center"><?=$data->rata?></td>
			<td align="center" width="5%">x</td>
			<td align="center" >40%</td>
			<td></td>
		</tr>
		<tr><td colspan="7">5. KEBERATAN DARI PEGAWAI NEGERI SIPIL
			YANG DINILAI (APABILA ADA) 
			</td>
		</tr>
		<tr>
			<td rowspan="4" colspan="7" align="center">Tanggal, 
			</td>
		</tr>
<?php endforeach;?>
</table>
</body>
<script>window.print()</script>