<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\integrasi\models\SiasnDataUtama */

$this->title = 'Data CPNS PNS PPPK';
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="siasn-data-utama-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nipBaru',
            // 'nipLama',
            'nama',
            // 'gelarDepan',
            // 'gelarBelakang',
            // 'tempatLahir',
            // 'tglLahir',
            // 'agama',
            // 'email:email',
            // 'emailGov:email',
            // 'nik',
            // 'alamat',
            // 'noHp',
            // 'noTelp',
            // 'jenisPegawaiNama',
            // 'kedudukanPnsNama',
            // 'statusPegawai',
            // 'jenisKelamin',
            // 'jenisIdDokumenNama',
            // 'nomorIdDocument',
            // 'noSeriKarpeg',
            // 'tkPendidikanTerakhir',
            // 'pendidikanTerakhirNama',
            // 'tahunLulus',
            'tglSkCpns',
            'nomorSkCpns',
            'tmtCpns',
            'golRuangAwal',
            'tglSkPns',
            'nomorSkPns',
            'tmtPns',
            // 'tmtPensiun',
            // 'bupPensiun:integer',
            // 'latihanStrukturalNama',
            // 'instansiIndukId',
            // 'instansiIndukNama',
            // 'satuanKerjaIndukId',
            // 'satuanKerjaIndukNama',
            // 'kanregId',
            // 'kanregNama',
            // 'instansiKerjaId',
            // 'instansiKerjaNama',
            // 'instansiKerjaKodeCepat',
            // 'satuanKerjaKerjaId',
            // 'satuanKerjaKerjaNama',
            // 'unorId',
            // 'unorNama',
            // 'unorIndukId',
            // 'unorIndukNama',
            // 'jenisJabatanId',
            // 'jenisJabatan',
            // 'jabatanNama',
            // 'jabatanStrukturalId',
            // 'jabatanStrukturalNama',
            // 'jabatanFungsionalId',
            // 'jabatanFungsionalNama',
            // 'jabatanFungsionalUmumId',
            // 'jabatanFungsionalUmumNama',
            // 'tmtJabatan',
            // 'lokasiKerjaId',
            // 'lokasiKerja',
            // 'golRuangAwalId',
            // 'golRuangAkhirId',
            'golRuangAkhir',
            'tmtGolAkhir',
            //'nomorSptm',
            // 'masaKerja',
            // 'eselon',
            // 'eselonId',
            // 'eselonLevel',
            // 'tmtEselon',
            // 'gajiPokok',
            // 'kpknId',
            // 'kpknNama',
            // 'ktuaId',
            // 'ktuaNama',
            // 'taspenId',
            // 'taspenNama',
            // 'jenisKawinId',
            // 'statusPerkawinan',
            // 'statusHidup',
            'tglSuratKeteranganDokter',
            'noSuratKeteranganDokter',
            // 'jumlahIstriSuami:integer',
            // 'jumlahAnak:integer',
            'noSuratKeteranganBebasNarkoba',
            'tglSuratKeteranganBebasNarkoba',
            'skck',
            'tglSkck',
            // 'akteKelahiran',
            // 'akteMeninggal',
            // 'tglMeninggal',
            // 'noNpwp',
            // 'tglNpwp',
            // 'noAskes',
            // 'bpjs',
            // 'kodePos',
            'noSpmt',
            'tglSpmt',
            // 'noTaspen',
            // 'bahasa',
            // 'kppnId',
            // 'kppnNama',
            // 'pangkatAkhir',
            'tglSttpl',
            'nomorSttpl',
            // 'jenjang',
            // 'jabatanAsn',
            // 'kartuAsn',
            // 'mkTahun:integer',
            // 'mkBulan:integer',
            // 'flag',
            // 'updated',
            // 'validNik',
        ],
    ]) ?>

</div>