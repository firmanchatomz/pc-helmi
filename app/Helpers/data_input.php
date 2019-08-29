<?php
/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Firman Setiawan
 * @copyright      Copyright (c) Firman Setiawan
 *
 * ---------------------------------------------------------------------------------------------------------------
 */

// kumpulan array untuk inputan data

// --------------------- INPUT AK -----------------------------------------
// data hubungan keluarga
function dataHubunganKeluarga() {
	$data = ['Adik','Anak Angkat','Anak Kandung','Anak Tiri','Ayah','Cucu','Famili Lain','Ibu','Istri','Kakak','Kakek','Kepala Keluarga','Keponakan','Lainnya','Menantu','Mertua','Nenek','Paman','Sepupu','Suami','Tante','Teman'];

	return $data;
}

function dataagama() {
	$data = [ 'Budha',
						'Hindu',
						'Islam',
						'Katholik',
						'konghucu',
						'Kristen',
						'Kepercayaan Kepada Tuhan YME'];
	return $data;
}

function datagoldar() {
	$data = [ 'O',
						'A',
						'B',
						'AB',
						'Tidak Tahu'];
	return $data;
}

function datakewarganegaraan() {
	$data = [ 'Warga Negara Indonesia',
						'Warga Negara Asing',
						'Dwi Kewarganegaraan'];
	return $data;
}

function datapendidikan(){
	$data = [	'Belum masuk TK/Kelompok Bermain',
						'Sedang TK/Kelompok Bermain',
						'Sedang SD/sederajat',
						'Sedang SLTP/sederajat',
						'Sedang SLTA/sederajat',
						'Sedang D-1/sederajat',
						'Sedang D-2/sederajat',
						'Sedang D-3/sederajat',
						'Sedang S-1/sederajat',
						'Sedang S-2/sederajat',
						'Sedang S-3/sederajat',
						'Tamat SD/sederajat',
						'Tamat SLTP/sederajat',
						'Tamat SLTA/sederajat',
						'Tamat D-1/sederajat',
						'Tamat D-2/sederajat',
						'Tamat D-3/sederajat',
						'Tamat D-4/sederajat',
						'Tamat S-1/sederajat',
						'Tamat S-2/sederajat',
						'Tamat S-3/sederajat',
						'Sedang SLB A/sederajat',
						'Sedang SLB B/sederajat',
						'Sedang SLB C/sederajat',
						'Tamat SLB A/sederajat',
						'Tamat SLB B/sederajat',
						'Tamat SLB C/sederajat',
						'Tidak pernah sekolah',
						'Tidak dapat membaca dan menulis huruf Latin/Arab',
						'Tidak tamat SD/sederajat'];

	return $data;
}

function datapencaharian() {
	$data = [ 'Ahli Pengobatan Alternatif',
						'Akuntan',
						'Anggota kabinet kementrian',
						'Anggota Legistatif',
						'Anggota Mahkamah konstitusi',
						'Apoteker',
						'Arsitektur/Desainer',
						'Belum Bekerja',
						'Biarawati',
						'Bidan Swasta',
						'Bupati/walikota',
						'Buruh Harian Lepas',
						'Buruh jasa perdagangan hasil bumi',
						'Buruh Migran',
						'Buruh Tani',
						'Buruh usaha hotel dan penginapan lainnya',
						'Buruh usaha jasa hiburan dan pariwisata',
						'Buruh usaha jasa informasi dan komunikasi',
						'Buruh usaha jasa transportasi dan perhubungan',
						'Dokter swasta',
						'Dosen swasta',
						'Dukun Tradisional',
						'Dukun/paranormal/supranatural',
						'Duta besar',
						'Gubernur',
						'Guru swasta',
						'Ibu Rumah Tangga',
						'Jasa Konsultan Manajemen dan Teknis',
						'Jasa Pengobatan alternatif',
						'Jasa penyewaan peralatan pesta',
						'Juru Masak',
						'Karyawan Honorer',
						'Karyawan Perusahaan Pemerintah',
						'Karyawan Perusahaan Swasta',
						'Kepala Daerah',
						'Konsultan Manajemen dan Teknis',
						'Kontraktor',
						'Montir',
						'Nelayan',
						'Notaris',
						'Pedagang barang kelontongan',
						'Pedagang Keliling',
						'Pegawai Negeri Sipil',
						'Pelajar',
						'Pelaut',
						'Pembantu rumah tangga',
						'Pemilik perusahaan',
						'Pemilik usaha hotel dan penginapan lainnya',
						'Pemilik usaha informasi dan komunikasi',
						'Pemilik usaha jasa hiburan dan pariwisata',
						'pemilik usaha jasa transportasi dan perhubungan',
						'pemilik usaha warung, rumah makan dan restoran',
						'Pemuka Agama',
						'Pemulung',
						'Penambang',
						'Peneliti',
						'Pengacara',
						'Pengrajin',
						'Pengrajin industri rumah tangga lainnya',
						'Pengusaha kecil, menengah dan besar',
						'Pengusaha perdagangan hasil bumi',
						'Penyiar radio',
						'Perangkat Desa',
						'Perawat swasta',
						'Petani',
						'Peternak',
						'Pialang',
						'Pilot',
						'POLRI',
						'Presiden',
						'Psikiater/Psikolog',
						'Purnawirawan/Pensiunan',
						'Satpam/Security',
						'Seniman/artis',
						'Sopir',
						'Tidak Mempunyai Pekerjaan Tetap',
						'TNI',
						'Tukang Anyaman',
						'Tukang Batu',
						'Tukang Cuci',
						'Tukang Cukur',
						'Tukang Gigi',
						'Tukang Kue',
						'Tukang Las',
						'Tukang Listrik',
						'Tukang Rias',
						'Tukang Sumur',
						'Usaha jasa pengerah tenaga kerja',
						'Wakil bupati',
						'Wakil Gubernur',
						'Wakil Presiden',
						'Wartawan',
						'Wiraswasta'];
	return $data;
}

function datakb() {
	$data = [ 'KB Alamiah/Kalender',
						'Kondom',
						'Obat Tradisional',
						'Pil',
						'Spiral',
						'Suntik',
						'Susuk KB (implant)',
						'Tidak Menggunakan kontrasepsi',
						'Tidak Menjawab',
						'Tubektomi',
						'Vasektomi'];
	return $data;
}

function datacacatfisik() {
	$data = [ 'Lumpuh',
						'Sumbing',
						'Tuna Netra',
						'Tuna Rungu',
						'Tuna Wicara'];
	return $data;
}

function datacacatmental() {
	$data = [ 'Gila',
						'Idiot',
						'Stress'];
	return $data;
}

function datawajibpajak() {
	$data = [ 'Wajib Pajak Badan/Perusahaan',
						'Wajib Pajak Bumi dan Bangunan',
						'Wajib Pajak Kendaraan Bermotor',
						'Wajib Pajak Penghasilan Perorangan',
						'Wajib Retribusi Keamanan',
						'Wajib Retribusi Kebersihan'];
	return $data;
}

function datalembagapemerintahan() {
	$data = [ 'Anggota BPD',
						'Kepala Desa/Lurah',
						'Kepala Dusun/Lingkungan',
						'Kepala Urusan',
						'Ketua BPD',
						'Sekretaris BPD',
						'Sekretaris Desa/Kelurahan',
						'Staf Desa/Kelurahan',
						'Wakil Ketua BPD'];
	return $data;
}

function datalembagakemasyarakatan() {
	$data = [ 'Anggota Karang Taruna',
						'Anggota Lembaga gotong royong',
						'Anggota LKMD/K/LPM',
						'Anggota Organisasi Bapak-bapak',
						'Anggota Organisasi Keagamaan',
						'Anggota Organisasi Kelompok Tani/Nelayan',
						'Anggota Organisasi pemirsa/pendengar',
						'Anggota Organisasi pecinta alam',
						'Anggota Organisasi pengembangan ilmu pengetahuan',
						'Anggota Organisasi pensiunan',
						'Anggota Organisasi Perempuan',
						'Anggota Organisasi Profesi Guru',
						'Anggota Organisasi profesi wartawan',
						'Anggota Organisasi profesi/tenaga medis',
						'Anggota Pengurus RT',
						'Anggota Pengurus RW',
						'Anggota PKK',
						'Anggota Satgas Kebakaran',
						'Anggota Satgas Kebersihan',
						'Anggota Tim Penanggulangan Bencana',
						'Anggota yayasan',
						'Pemilik yayasan',
						'Pengurus Hansip/Linmas',
						'Pengurus Karang Taruna',
						'Pengurus Lembaga Adat',
						'Pengurus Lembaga Gotong Royong',
						'Pengurus Lembaga Pencinta Alam',
						'Pengurus LKMD/LPM',
						'Pengurus Organsasi Bapak-bapak',
						'Pengurus Organisasi Keagamaan',
						'Pengurus Organisasi Kelompok Tani/Nelayan',
						'Pengurus Organisasi pemirsa/pendengar',
						'Pengurus Organisasi pengembangan ilmu pengetahuan',
						'Pengurus Organisasi pensiunan',
						'Pengurus Organisasi Perempuan',
						'Pengurus Organisasi profesi dokter/tenaga medis',
						'Pengurus Organisasi profesi guru',
						'Pengurus Organisasi profesi wartawan',
						'Pengurus PKK',
						'Pengurus Poskamling',
						'Pengurus Posko Penanggulangan Bencana',
						'Pengurus Posyandu',
						'Pengurus Posyantekdes',
						'Pengurus RT',
						'Pengurus RW',
						'Pengurus Satgas Kebakaran',
						'Pengurus Satgas Kebersihan',
						'Pengurus yayasan'];
	return $data;
}

function datalembagaekonomi() {
	$data =[	'Angkutan Darat',
						'Angkutan Laut',
						'Angkutan Sungai',
						'Angkutan Udara',
						'Asrama',
						'Bank Perkreditan Rakyat',
						'Bioskop',
						'Film Keliling',
						'Group Lawak',
						'Group Musik/Band',
						'Group Vokal/Paduan Suara',
						'Home Stay',
						'Hotel',
						'Industri Alat Pertanian',
						'Industri Alat Rumah Tangga',
						'Industri Farmasi',
						'Industri Karoseri',
						'Industri Kerajinan Tangan',
						'Industri Pakaian',
						'Industri Perakitan Elektronik',
						'Industri Usaha Bahan Bangunan',
						'Industri Usaha Makanan',
						'Jaipongan',
						'Jasa Ekspedisi/Pengiriman Barang',
						'Kelompok Simpan Pinjam',
						'Konsultan Manajemen',
						'Konsultan Teknik',
						'Kontrakan Rumah',
						'Koperasi',
						'Lembaga Keuangan Bukan Bank',
						'Lembaga Perkreditan Rakyat',
						'Losmen',
						'Mess',
						'Notaris',
						'Pedagang Pengumpul/Tengkulak',
						'Pegadaian',
						'Pejabat Pembuat Akta Tanah',
						'Pengacara/Advokat',
						'Pengijon',
						'Pengolahan Kayu',
						'Penitipan Kendaraan Bermotor',
						'Persewaan Kamar',
						'Restoran',
						'Sandiwara/Drama',
						'Toko/Swalayan',
						'Town House',
						'Tukang Batu',
						'Tukang Besi',
						'Tukang Cukur',
						'Tukang Pijat/Urut',
						'Tukang Service Elektronik',
						'Tukang Sumur',
						'Unit Usaha Simpan Pinjam',
						'Usaha Air Minum Dalam Kemasan',
						'Usaha Asuransi',
						'Usaha Minuman',
						'Usaha Pasar Harian',
						'Usaha Pasar Hasil Bumi dan Tambang',
						'Usaha Pasar Mingguan',
						'Usaha Pasar Ternak',
						'Usaha Pengecer Gas Dan Bahan Bakar Minyak',
						'Usaha Pengolahan dan Penjualan Hasil Hutan',
						'Usaha Penyewaan Alat Pesta',
						'Usaha Perdagangan Antar Pulau',
						'Usaha Perikanan',
						'Usaha Perkebunan',
						'Usaha Penyewaan Tenang Listrik',
						'Usaha Peternakan',
						'Villa',
						'Warung kelontongan/Kios',
						'Wayang Orang/Golek',
						'Wisma'];
	return $data;
}