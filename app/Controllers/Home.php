<?php

namespace App\Controllers;

use App\Models\beritaModel;
use App\Models\gbrnewModel;
use App\Models\gbrgerakModel;
use App\Models\visimisiModel;
use App\Models\bidangipwModel;
use App\Models\bidangpmmModel;
use App\Models\uploadnewModel;
use App\Models\analisdataModel;
use App\Models\bidangesdaModel;
use App\Models\isicontentModel;
use App\Models\sekretariatModel;
use App\Models\tugasfungsiModel;
use App\Models\informasipdfModel;
use App\Models\ungkapannetizenModel;
use App\Models\kegiatanunggulanModel;

class Home extends BaseController
{
    protected $gbrgerak;
    protected $isicontent;
    protected $berita;
    protected $netizen;
    protected $visimisi;
    protected $kegiatanunggulan;
    protected $tugasfungsi;
    protected $strukturorganisasi;
    protected $sekretariat;
    protected $analisdata;
    protected $pmm;
    protected $esda;
    protected $ipw;
    protected $dokumen;
    protected $datainformasi;

    public function __construct()
    {
        $this->gbrgerak = new gbrgerakModel();
        $this->isicontent = new isicontentModel();
        $this->berita = new beritaModel();
        $this->netizen = new ungkapannetizenModel();
        $this->visimisi = new visimisiModel();
        $this->kegiatanunggulan = new kegiatanunggulanModel();
        $this->tugasfungsi = new tugasfungsiModel();
        $this->strukturorganisasi = new gbrnewModel();
        $this->sekretariat = new sekretariatModel();
        $this->analisdata = new analisdataModel();
        $this->pmm = new bidangpmmModel();
        $this->esda = new bidangesdaModel();
        $this->ipw = new bidangipwModel();
        $this->dokumen = new uploadnewModel();
        $this->datainformasi = new informasipdfModel();
    }

    public function index(): string
    {
        $getgbrgerak = $this->gbrgerak->getgbrgerak();
        $count_gbrgerak = count($getgbrgerak);

        $getfirstcontent = $this->isicontent->isicontentfirst();

        $getduaberitalatest = $this->berita->getberitalatestdua();
        $count_getduaberitalatest = count($getduaberitalatest);

        $data = [
            'tittle' => 'Halaman Utama Web Bappeda',
            'gbrgerak' => $getgbrgerak,
            'countgbrgerak' => $count_gbrgerak,
            'firstcontent' => $getfirstcontent,
            'beritalatest' => $getduaberitalatest,
            'countberitalatest' => $count_getduaberitalatest
        ];

        return view('pages/index', $data);
    }

    public function detailkediri()
    {
        $getfirstcontent = $this->isicontent->isicontentfirst();

        $data = [
            'tittle' => 'Halaman Detail Kediri Web Bappeda',
            'detaildata' => $getfirstcontent,
        ];

        return view('pages/detailkdrview', $data);
    }

    public function detailberita($id)
    {
        $get_berita = $this->berita->getberitabyid($id);

        $data = [
            'tittle' => 'Halaman Detail Berita Web Bappeda',
            'detailberita' => $get_berita,
        ];

        return view('pages/detailberitaview', $data);
    }

    public function allberita()
    {
        $keyword = $this->request->getGet('cari');
        $get_all_berita = $this->berita->getPaginate(6, $keyword);

        $data = [
            'tittle' => 'Halaman Berita Web Bappeda',
            'data' => $get_all_berita,
            'keyword' => $keyword
        ];

        return view('pages/beritakedirirayaview', $data);
    }

    public function allgalery()
    {
        $get_all_berita = $this->berita->getPaginate(6);

        $data = [
            'tittle' => 'Halaman Galeri Web Bappeda',
            'data' => $get_all_berita
        ];

        return view('pages/galeriview', $data);
    }

    public function contactnetizen()
    {
        $dateformat = date("Y-m-d");
        $nama = $this->request->getPost('first-name');
        $email = $this->request->getPost('email');
        $handphone = $this->request->getPost('no_hp');
        $pesan_netizen = $this->request->getPost('message');

        $arraynetizen = [
            'nama_pengirim' => $nama,
            'alamat_email' => $email,
            'no_hp' => $handphone,
            'tanggal_dikirim' => $dateformat,
            'opinion' => $pesan_netizen
        ];

        $this->netizen->isicontentfirst($arraynetizen);

        session()->setFlashdata('pesan', 'successnetizen');

        return redirect()->to('/');
    }

    public function visimisi()
    {
        $getvisimisi = $this->visimisi->getdatavisimisi();
        $count_getvisimisi = count($getvisimisi);

        $getkegiatanunggulan = $this->kegiatanunggulan->getkegiatanunggulan();

        $data = [
            'tittle' => 'Halaman Visi Misi Web Bappeda',
            'visimisi' => $getvisimisi,
            'hitungvisimisi' => $count_getvisimisi,
            'kegunggulan' => $getkegiatanunggulan
        ];

        return view('pages/visimisi', $data);
    }

    public function tugaspokok()
    {
        $getdatatgsfungsi = $this->tugasfungsi->getdatatugasfungsi();
        $count_getdatatgsfungsi = count($getdatatgsfungsi);

        $data = [
            'tittle' => 'Halaman Tugas Pokok dan Fungsi Web Bappeda',
            'datatgsfungsi' => $getdatatgsfungsi,
            'hitungtgsfungsi' => $count_getdatatgsfungsi
        ];

        return view('pages/tugaspokokfungsi', $data);
    }

    public function strukturorg()
    {
        $id = 4;
        $gbridempat = $this->strukturorganisasi->getgbrnewbyid($id);

        $data = [
            'tittle' => 'Halaman Struktur Organisasi Web Bappeda',
            'datagbrempat' => $gbridempat
        ];

        return view('pages/strukturorganisasi', $data);
    }

    public function sekretariat()
    {
        $getdatasekret = $this->sekretariat->getdatasekret();
        $count_getdatasekret = count($getdatasekret);

        $data = [
            'tittle' => 'Halaman Sekretariat Web Bappeda',
            'datasekret' => $getdatasekret,
            'hitungsekret' => $count_getdatasekret
        ];

        return view('pages/sekretariatview', $data);
    }

    public function analisdata()
    {
        $getdataanalisdata = $this->analisdata->getdataanalisdata();
        $count_getdataanalisdata = count($getdataanalisdata);

        $data = [
            'tittle' => 'Halaman Analisis Data Web Bappeda',
            'dataanalis' => $getdataanalisdata,
            'hitungdataanalis' => $count_getdataanalisdata
        ];

        return view('pages/analisdataview', $data);
    }

    public function pmm()
    {
        $getdatapmm = $this->pmm->getdatapmm();
        $count_getdatapmm = count($getdatapmm);

        $data = [
            'tittle' => 'Halaman Bidang PMM Web Bappeda',
            'datapmm' => $getdatapmm,
            'hitungdatapmm' => $count_getdatapmm
        ];

        return view('pages/pmmview', $data);
    }

    public function esda()
    {
        $getdataesda = $this->esda->getdataesda();
        $count_getdataesda = count($getdataesda);

        $data = [
            'tittle' => 'Halaman Bidang ESDA Web Bappeda',
            'dataesda' => $getdataesda,
            'hitungdataesda' => $count_getdataesda
        ];

        return view('pages/esdaview', $data);
    }

    public function ipw()
    {
        $getdataipw = $this->ipw->getdataipw();
        $count_getdataipw = count($getdataipw);

        $data = [
            'tittle' => 'Halaman Bidang IPW Web Bappeda',
            'dataipw' => $getdataipw,
            'hitungdataipw' => $count_getdataipw
        ];

        return view('pages/ipwview', $data);
    }
    public function dokumenbpd()
    {
        $id = 2;
        $getdatacontent = $this->isicontent->isicontentbyid($id);
        $getdatadokumen = $this->dokumen->findAll();
        $count_getdatadokumen = count($getdatadokumen);

        $data = [
            'tittle' => 'Halaman Dokumen Web Bappeda',
            'datacontent' => $getdatacontent,
            'datadokumen' => $getdatadokumen,
            'hitungdatadokumen' => $count_getdatadokumen
        ];

        return view('pages/dokbappedaview', $data);
    }

    public function datapenduduk()
    {
        $id = 1;
        $getdatapenduduk = $this->datainformasi->getdatainformasipdfbyid($id);

        $data = [
            'tittle' => 'Halaman Data Penduduk Web Bappeda',
            'datapenduduk' => $getdatapenduduk
        ];

        return view('pages/datakependudukview', $data);
    }

    public function datapertumbuhanekonomi()
    {
        $id = 2;
        $getdataekonomi = $this->datainformasi->getdatainformasipdfbyid($id);

        $data = [
            'tittle' => 'Halaman Data Pertumbuhan Ekonomi Web Bappeda',
            'dataekonomi' => $getdataekonomi
        ];

        return view('pages/dataekonomiview', $data);
    }

    public function perkeminflasi()
    {
        $id = 3;
        $getdatainflasi = $this->datainformasi->getdatainformasipdfbyid($id);

        $data = [
            'tittle' => 'Halaman Data Inflasi Web Bappeda',
            'datainflasi' => $getdatainflasi
        ];

        return view('pages/perkeminflasi', $data);
    }

    public function dataipm()
    {
        $id = 4;
        $getdatapmm = $this->datainformasi->getdatainformasipdfbyid($id);

        $data = [
            'tittle' => 'Halaman Data IPM Web Bappeda',
            'dataipm' => $getdatapmm
        ];

        return view('pages/indekpemmanusiaview', $data);
    }
}
