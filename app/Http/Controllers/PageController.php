<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page)
    {
        $peribadi = DB::table('papar_peribadi')->get();
        $perkhidmatan = DB::table('papar_perkhidmatan_sedang berkhidmat')->get();
        $perkhidmatan_pesara = DB::table('papar_perkhidmatan_pesara')->get();
        $perubatan = DB::table('papar_perubatan2')->get();
        $pembekal = DB::table('pembekal')->get();
        $hospital = DB::table('hospital')->get();
        $kategorituntutan = DB::table('kategorituntutan')->get();
        $bilrawatan = DB::table('papar_bil_rawatan')->get();
        $pentadbir = DB::table('pentadbir')->get();
        $kategorituntutan = DB::table('kategorituntutan')->get();
        $kos_bulanan = DB::table('jumlah_kos_bulanan')->get();

        $jabatan = DB::table('jabatan')->get();
        $jawatan = DB::table('jawatan')->get();
        $hubungan = DB::table('hubungan')->get();

        if (view()->exists("pages.{$page}")) {
            return view(
                "pages.{$page}",
                compact(
                    'bilrawatan',
                    'peribadi2',
                    'peribadi',
                    'perkhidmatan',
                    'jabatan',
                    'jawatan',
                    'hubungan',
                    'perkhidmatan_pesara',
                    'hospital',
                    'pembekal',
                    'kategorituntutan',
                    'perubatan',
                    'pentadbir',
                    'kategorituntutan',
                    'kos_bulanan'
                )
            );
        }
        return abort(404);
    }

    public function withid($page, $id)
    {
        $peribadi = DB::table('peribadi')->where('idPeribadi', $id)->get();
        $perkhidmatan = DB::table('papar_perkhidmatan')->where('id', $id)->get();

        $jabatan = DB::table('jabatan')->get();
        $jawatan = DB::table('jawatan')->get();
        $hubungan = DB::table('hubungan')->get();
        $pembekal = DB::table('pembekal')->get();
        $hospital = DB::table('hospital')->get();
        $kategorituntutan = DB::table('kategorituntutan')->get();
        $kos_bulanan = DB::table('jumlah_kos_bulanan')->where('Tahun', $id)->orderBy('bulan', 'asc')->get();
        $kos_bulanan_status = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->orderBy('bulan', 'asc')->get();

        $waris = $this->waris($id);
        $butiranwaris = $this->butiranwaris($id);
        $butiranperubatan = $this->butiranperubatan($id);
        $senaraiperubatanwaris = $this->senaraiperubatanwaris($id);
        $senaraiperubatanpegawai = $this->senaraiperubatanpegawai($id);
        $butiranrawatan = $this->butiranrawatan($id);
        $senaraibilwaris = $this->senaraibilwaris($id);
        $senaraibilpegawai = $this->senaraibilpegawai($id);



        if (view()->exists("pages.{$page}")) {
            return view(
                "pages.{$page}",
                compact(
                    'peribadi',
                    'perkhidmatan',
                    'butiranwaris',
                    'jabatan',
                    'jawatan',
                    'hubungan',
                    'waris',
                    'pembekal',
                    'hospital',
                    'butiranperubatan',
                    'kategorituntutan',
                    'senaraiperubatanwaris',
                    'senaraiperubatanpegawai',
                    'senaraibilwaris',
                    'senaraibilpegawai',
                    'butiranrawatan',
                    'kos_bulanan',
                    'kos_bulanan_status'
                )
            );
        }
        return abort(404);
    }

    public function tambahjabatan(Request $req)
    {
        $id = DB::table('jabatan')->insertGetId(
            [
                'singkatanJabatan' => $req->input('singkatan'),
                'namaJabatan' => $req->input('nama_jabatan')
            ]
        );

        return back()->with('success', 'jabatan telah berjaya ditambah.');
    }

    public function kemaskinijabatan(Request $req)
    {
        $id = $req->input('id');

        DB::table('jabatan')->where('idJabatan', $id)
            ->update(
                [
                    'singkatanJabatan' => $req->input('singkatan'),
                    'namaJabatan' => $req->input('nama_jabatan')
                ]
            );

        return back()->with('success', 'jabatan telah berjaya dikemaskini.');
    }

    public function tambahjawatan(Request $req)
    {
        $id = DB::table('jawatan')->insertGetId(
            [
                'namaJawatan' => $req->input('jawatan')
            ]
        );

        return back()->with('success', 'jawatan telah berjaya ditambah.');
    }

    public function kemaskinijawatan(Request $req)
    {
        $id = $req->input('id');

        DB::table('jawatan')->where('idJawatan', $id)
            ->update(
                [
                    'namaJawatan' => $req->input('jawatan')
                ]
            );

        return back()->with('success', 'jabatan telah berjaya dikemaskini.');
    }

    public function kemaskiniperkhidmatan(Request $req)
    {
        $id = $req->input('id');

        DB::table('peribadi')->where('idPeribadi', $id)
            ->update(
                [
                    'nama' => $req->input('nama'),
                    'idGred' => $req->input('gred'),
                    'idSkimPerkhidmatan' => $req->input('skim'),
                    'idJabatan' => $req->input('jabatan'),
                    'idJawatan' => $req->input('jawatan')
                ]
            );

        return back()->with('success', 'perkhidmatan telah berjaya dikemaskini.');
    }

    public function tambahperibadi(Request $req)
    {
        $id = DB::table('peribadi')->insertGetId(
            [
                'nama' => $req->input('namapenuh'),
                'kadPengenalan' => $req->input('nokp'),
                'tarikhLahir' => $req->input('tarikhlahir'),
                'jantina' => $req->input('jantina'),
                'pesara' => $req->input('status_perkhidmatan'),
                'idPendaftar' => Auth::user()->id
            ]
        );

        return back()->with('success', 'Pegawai / pesara telah berjaya Ditambah.');
    }

    public function tambahwaris(Request $req)
    {
        DB::table('epp_waris')->insertGetId(
            [
                'idPesara' => $req->input('id'),
                'nama' => $req->input('nama'),
                'nokp' => $req->input('nokp'),
                'tarikhLahir' => $req->input('tarikhlahir'),
                'jantina' => $req->input('jantina'),
                'hubungan' => $req->input('hubungan'),
                'idPendaftar' => Auth::user()->id
            ]
        );

        return back()->with('success', 'Waris telah berjaya Ditambah.');
    }

    public function kemaskiniperibadi(Request $req)
    {
        $id = $req->input('id');

        DB::table('peribadi')->where('idPeribadi', $id)
            ->update(
                [
                    'nama' => $req->input('nama'),
                    'kadPengenalan' => $req->input('nokp'),
                    'tarikhLahir' => $req->input('tarikhlahir'),
                    'jantina' => $req->input('jantina'),
                    'pesara' => $req->input('statusPesara')
                ]
            );

        return back()->with('success', 'Maklumat Peribadi telah berjaya dikemaskini.');
    }

    public function waris($id)
    {
        $waris = DB::table('epp_waris')
            ->select('epp_waris.*', 'hubungan.namaHubungan as hubungan')
            ->join('hubungan', 'hubungan.id', '=', 'epp_waris.hubungan')
            ->where('idPesara', $id)
            ->get();

        return $waris;
    }

    public function butiranwaris($id)
    {
        $waris = DB::table('epp_waris')
            ->select('epp_waris.*', 'peribadi.nama as nama_pegawai', 'peribadi.kadPengenalan as ic_pegawai', 'jawatan.namaJawatan', 'hubungan.namaHubungan as hubungan')
            ->join('hubungan', 'hubungan.id', '=', 'epp_waris.hubungan')
            ->join('peribadi', 'peribadi.idPeribadi', '=', 'epp_waris.idPesara')
            ->leftjoin('jawatan', 'jawatan.idJawatan', '=', 'peribadi.idJawatan')
            ->where('epp_waris.id', $id)
            ->get();

        return $waris;
    }

    public function butiranperubatan($id)
    {
        $butiranperubatan = DB::table('papar_butiran_perubatan')
            ->where('idTuntutan', $id)
            ->get();

        return $butiranperubatan;
    }

    public function senaraiperubatanwaris($id)
    {
        $senaraiperubatanwaris = DB::table('papar_butiran_perubatan')
            ->where('idwaris', $id)
            ->get();

        return $senaraiperubatanwaris;
    }

    public function senaraibilpegawai($id)
    {
        $senaraibilpegawai = DB::table('papar_bil_rawatan')
            ->where('idPeribadi', $id)
            ->get();

        return $senaraibilpegawai;
    }

    public function butiranrawatan($id)
    {
        $butiranrawatan = DB::table('papar_bil_rawatan')
            ->where('idRawatan', $id)
            ->get();

        return $butiranrawatan;
    }

    public function senaraibilwaris($id)
    {
        $senaraibilwaris = DB::table('papar_bil_rawatan')
            ->where('id_waris', $id)
            ->get();

        return $senaraibilwaris;
    }

    public function senaraiperubatanpegawai($id)
    {
        $senaraiperubatanpegawai = DB::table('papar_butiran_perubatan')
            ->where('idpenjawatawam', $id)
            ->get();

        return $senaraiperubatanpegawai;
    }

    public function kemaskiniwaris(Request $req)
    {
        $id = $req->input('id');

        DB::table('epp_waris')->where('id', $id)
            ->update(
                [
                    'nama' => $req->input('nama'),
                    'nokp' => $req->input('nokp'),
                    'jantina' => $req->input('jantina'),
                    'tarikhLahir' => $req->input('tarikhlahir'),
                    'hubungan' => $req->input('hubungan')
                ]
            );

        return back()->with('success', 'maklumat Waris telah berjaya Dikemaskini.');
    }

    public function kemaskiniperubatan(Request $req)
    {
        $id = $req->input('id');

        DB::table('tuntutan')->where('idTuntutan', $id)
            ->update(
                [
                    'idHospital' => $req->input('hospital'),
                    'tarikhRawatan' => $req->input('tarikhRawatan'),
                    'idPembekal' => $req->input('pembekal'),
                    'tarikhKemudahanPerubatanDiperolehi' => $req->input('tarikhKemudahanPerubatanDiperolehi'),
                    'idKategoriTuntutan' => $req->input('kategorituntutan'),
                    'detailTuntutan' => $req->input('namaubat'),
                    'noRujukanKewangan' => $req->input('baucer'),
                    'jumlahTuntutan' => $req->input('hargatuntutan'),
                    'jumlahSebenar' => $req->input('hargalulus'),
                    'tarikhKelulusan' => $req->input('tarikh_lulus'),
                    'jenisPermohonan' => $req->input('jenisPermohonan'),
                    'tarikhTerimaPermohonan' => $req->input('tarikh_terima_permohonan'),
                    'catatanPermohonan' => $req->input('catatan_permohonan'),
                    'noFail' => $req->input('nofail')
                ]
            );
        return back()->with('success', 'Maklumat perubatan telah berjaya Dikemaskini.');
    }

    public function tambahbilrawatan(Request $req)
    {
        $id = $req->input('id');

        DB::table('rawatan')->insertGetId(
            [
                'idPeribadi' => $id,
                'tarikh_bil' => $req->input('tarikh_bil'),
                'jumlah_bil' => $req->input('jumlah_bil'),
                'no_bil' => $req->input('no_bil'),
            ]
        );

        return back()->with('success', 'Bil Rawatan telah berjaya Ditambah.');
    }

    public function tambahbilrawatanwaris(Request $req)
    {
        $id = $req->input('id');
        $idwaris = $req->input('idwaris');

        DB::table('rawatan')->insertGetId(
            [
                'idPeribadi' => $id,
                'idwaris' => $idwaris,
                'tarikh_bil' => $req->input('tarikh_bil'),
                'jumlah_bil' => $req->input('jumlah_bil'),
                'no_bil' => $req->input('no_bil'),
            ]
        );

        return back()->with('success', 'Bil Rawatan Waris telah berjaya Ditambah.');
    }

    public function kemaskinibilrawatan(Request $req)
    {
        $id = $req->input('id');

        DB::table('rawatan')->where('idRawatan', $id)
            ->update(
                [
                    'tarikh_bil' => $req->input('tarikh_bil'),
                    'jumlah_bil' => $req->input('jumlah_bil'),
                    'no_bil' => $req->input('no_bil')
                ]
            );
        return back()->with('success', 'Maklumat Bil Rawatan telah berjaya Dikemaskini.');
    }

    public function tambahperubatan(Request $req)
    {
        $id = $req->input('id');

        $dd = DB::table('tuntutan')->insertGetId(
            [
                'idpenjawatawam' => $req->input('id'),
                'idHospital' => $req->input('hospital'),
                'tarikhRawatan' => $req->input('tarikhRawatan'),
                'idPembekal' => $req->input('pembekal'),
                'tarikhKemudahanPerubatanDiperolehi' => $req->input('tarikhKemudahanPerubatanDiperolehi'),
                'idKategoriTuntutan' => $req->input('kategorituntutan'),
                'detailTuntutan' => $req->input('namaubat'),
                'noRujukanKewangan' => $req->input('baucer'),
                'jumlahTuntutan' => $req->input('hargatuntutan'),
                'jumlahSebenar' => $req->input('hargalulus'),
                'tarikhKelulusan' => $req->input('tarikh_lulus'),
                'jenisPermohonan' => $req->input('jenisPermohonan'),
                'tarikhTerimaPermohonan' => $req->input('tarikh_terima_permohonan'),
                'catatanPermohonan' => $req->input('catatan_permohonan'),
                'noFail' => $req->input('nofail')
            ]
        );

        return redirect('senarai-perubatan/' . $id . '')->with('success', 'Maklumat perubatan telah berjaya ditambah.');
    }

    public function tambahperubatanwaris(Request $req)
    {
        $id = $req->input('id');

        $dd = DB::table('tuntutan')->insertGetId(
            [
                'idwaris' => $id,
                'idpenjawatawam' => $req->input('idPesara'),
                'idHospital' => $req->input('hospital'),
                'tarikhRawatan' => $req->input('tarikhRawatan'),
                'idPembekal' => $req->input('pembekal'),
                'tarikhKemudahanPerubatanDiperolehi' => $req->input('tarikhKemudahanPerubatanDiperolehi'),
                'idKategoriTuntutan' => $req->input('kategorituntutan'),
                'detailTuntutan' => $req->input('namaubat'),
                'noRujukanKewangan' => $req->input('baucer'),
                'jumlahTuntutan' => $req->input('hargatuntutan'),
                'jumlahSebenar' => $req->input('hargalulus'),
                'tarikhKelulusan' => $req->input('tarikh_lulus'),
                'jenisPermohonan' => $req->input('jenisPermohonan'),
                'tarikhTerimaPermohonan' => $req->input('tarikh_terima_permohonan'),
                'catatanPermohonan' => $req->input('catatan_permohonan'),
                'noFail' => $req->input('nofail')
            ]
        );

        return redirect('senarai-perubatan-waris/' . $id . '')->with('success', 'Maklumat perubatan waris telah berjaya ditambah.');
    }

    public function padampegawaipesara(Request $req)
    {
        $id = $req->input('id');

        DB::table('tuntutan')->where('idpenjawatawam', $id)->delete();
        DB::table('epp_waris')->where('idPesara', $id)->delete();
        DB::table('peribadi')->where('idPeribadi', $id)->delete();

        return redirect('peribadi')->with('success', 'Pegawai/pesara telah berjaya dipadam.');
    }

    public function padamwaris(Request $req)
    {
        $id = $req->input('id');

        $wrs = DB::table('epp_waris')->where('id', $id)->first();
        $pbr = DB::table('peribadi')->where('idPeribadi', $wrs->idPesara)->first();


        DB::table('tuntutan')->where('idwaris', $id)->delete();
        DB::table('epp_waris')->where('id', $id)->delete();

        return redirect('butiran-peribadi/' . $pbr->idPeribadi . '')->with('success', 'Waris telah berjaya dipadam.');
    }

    public function padamperubatan(Request $req)
    {
        $id = $req->input('id');

        // $wrs = DB::table('epp_waris')->where('id', $id)->first();
        // $pbr = DB::table('peribadi')->where('idPeribadi', $wrs->idPesara)->first();


        DB::table('tuntutan')->where('idTuntutan', $id)->delete();

        return redirect('perubatan')->with('success', 'Maklumat Perubatan telah berjaya dipadam.');
    }

    public function padambil(Request $req)
    {
        $id = $req->input('id');

        DB::table('rawatan')->where('idRawatan', $id)->delete();

        return redirect('bil-rawatan')->with('success', 'Bil Rawatan telah berjaya dipadam.');
    }

    public function laporan(Request $req)
    {
        $jenisLaporan = $req->input('jenisLaporan');
        $kategoriLaporan = $req->input('kategoriLaporan');
        $tahun = $req->input('tahunLaporan');

        if ($jenisLaporan == 1) {
            if ($kategoriLaporan == 1) {
                $kod = "01";
                $kategori = 'PEMBEKALAN PERUBATAN';

                $data = DB::table('papar_perubatan2')
                    ->where('tahun', $tahun)
                    ->whereIn('idKategoriTuntutan', [$kod])
                    ->get();

                $pdf = PDF::loadView('pages/pdf-belanja-perubatan-kategori',  compact('tahun', 'kategori', 'data'))->setPaper('a4', 'landscape');
                return $pdf->download('PERBELANJAAN PERUBATAN BAGI TAHUN ' . $tahun . '.pdf');
                //  return dd($data);
                // return view('pages/pdf-belanja-perubatan-kategori',  compact('tahun', 'kategori', 'data'));

            } elseif ($kategoriLaporan == 2) {
                $kod = "02, 03, 04, 05, 06, 07";
                $kategori = 'PEMBEKALAN PERALATAN';

                $data = DB::table('papar_perubatan2')
                    ->where('tahun', $tahun)
                    ->whereIn('idKategoriTuntutan', [$kod])
                    ->get();

                $pdf = PDF::loadView('pages/pdf-belanja-perubatan-kategori',  compact('tahun', 'kategori', 'data'))->setPaper('a4', 'landscape');
                return $pdf->download('PERBELANJAAN PERALATAN BAGI TAHUN ' . $tahun . '.pdf');
                //  return dd($data);
                // return view('pages/pdf-belanja-perubatan-kategori',  compact('tahun', 'kategori', 'data'));

            } elseif ($kategoriLaporan == 3) {
                $kod = "12";
                $kategori = 'RAWATAN SUSULAN DI INSTITUT JANTUNG NEGARA';

                $data = DB::table('papar_perubatan2')
                    ->where('tahun', $tahun)
                    ->whereIn('idKategoriTuntutan', [$kod])
                    ->get();

                $pdf = PDF::loadView('pages/pdf-belanja-perubatan-kategori',  compact('tahun', 'kategori', 'data'))->setPaper('a4', 'landscape');
                return $pdf->download('PERBELANJAAN RAWATAN DI INSTITUT JANTUNG NEGARA BAGI TAHUN ' . $tahun . '.pdf');
                //  return dd($data);
                // return view('pages/pdf-belanja-perubatan-kategori',  compact('tahun', 'kategori', 'data'));

            } elseif ($kategoriLaporan == 4) {
                $kod = "13";
                $kategori = 'RAWATAN PENYAKIT BUAH PINGGANG';

                $data = DB::table('papar_perubatan2')
                    ->where('tahun', $tahun)
                    ->whereIn('idKategoriTuntutan', [$kod])
                    ->get();

                $pdf = PDF::loadView('pages/pdf-belanja-perubatan-kategori',  compact('tahun', 'kategori', 'data'))->setPaper('a4', 'landscape');
                return $pdf->download('PERBELANJAAN RAWATAN HAEMODIALISIS BAGI TAHUN ' . $tahun . '.pdf');
                //  return dd($data);
                // return view('pages/pdf-belanja-perubatan-kategori',  compact('tahun', 'kategori', 'data'));

            }
        } elseif ($jenisLaporan == 2) {
            $j1 = DB::table('jumlah_belanja_ubat')
                ->whereIn('id_kategori', ['01'])
                ->where('tahun', $tahun)
                ->sum('total');

            $j2 = DB::table('jumlah_belanja_ubat')
                ->whereIn('id_kategori', ['02', '03', '04', '05', '06', '07'])
                ->where('tahun', $tahun)
                ->sum('total');

            $j3 = DB::table('jumlah_belanja_ubat')
                ->whereIn('id_kategori', ['12'])
                ->where('tahun', $tahun)
                ->sum('total');

            $j4 = DB::table('jumlah_belanja_ubat')
                ->whereIn('id_kategori', ['13'])
                ->where('tahun', $tahun)
                ->sum('total');

            $alltotal = $j1 + $j2 + $j3 + $j4;

            $pdf = PDF::loadView('pages/pdf-belanja-perubatan',  compact('tahun', 'jumlah', 'j1', 'j2', 'j3', 'j4', 'alltotal'))->setPaper('a4', 'landscape');
            return $pdf->download('Jumlah Perbelanjaan Tahun ' . $tahun . '.pdf');

            // return dd($j2, $j1, $j3, $j4, $alltotal);
            // return view('pages/pdf-belanja-perubatan',  compact('tahun', 'jumlah', 'j1', 'j2', 'j3', 'j4', 'alltotal'));
        } elseif ($jenisLaporan == 3) {

            $pembekal = DB::table('pembekal')->get();
            $belanja = DB::table('belanja_haemodialisis_hospital')
            ->where('tahun', $tahun)
            ->get();

            $bulanan = DB::table('belanja_haemodialisis_hospital')
            ->select(DB::raw("SUM(jumlahSebenar) as jumlah"), 'bulan', 'idPembekal')
            ->where('tahun', $tahun)
            ->groupBy('idPembekal', 'bulan')
            ->get();

            // return dd($bulanan);
            $pdf = PDF::loadView('pages/pdf-belanja-haemodialisis', compact('tahun', 'pembekal', 'belanja', 'bulanan'))->setPaper('a4', 'landscape');
            return $pdf->download('Jumlah Pembelanjaan Haemodialisis Tahun ' . $tahun . '.pdf');

            return view('pages/pdf-belanja-haemodialisis', compact('tahun', 'pembekal', 'belanja', 'bulanan'));
        } elseif ($jenisLaporan == 4) {
            $list = DB::table('senarai_pesakit_haemodialisis')
                ->where('tahun', $tahun)
                ->get();

            $pdf = PDF::loadView('pages/pdf-senarai-pesakit-haemodialisis', compact('tahun', 'list'))->setPaper('a4', 'landscape');
            return $pdf->download('Senarai Pesakit Haemodialisis Tahun ' . $tahun . '.pdf');
        }
    }

    public function tambahhospital(Request $req)
    {
        $id = DB::table('hospital')->insertGetId(
            [
                'namaHospital' => $req->input('namahospital'),
                'alamatHospital' => $req->input('alamathospital'),
                'alamat2' => $req->input('alamat2'),
                'alamat3' => $req->input('alamat3'),
                'bandar' => $req->input('bandar'),
                'poskod' => $req->input('poskod'),
                'negeri' => $req->input('negeri')
            ]
        );

        return back();
    }

    public function tambahpembekal(Request $req)
    {
        $id = DB::table('pembekal')->insertGetId(
            [
                'namaPembekal' => $req->input('namaPembekal'),
                'alamatPembekal' => $req->input('alamatPembekal'),
                'alamat2' => $req->input('alamat2'),
                'alamat3' => $req->input('alamat3'),
                'bandar' => $req->input('bandar'),
                'poskod' => $req->input('poskod'),
                'negeri' => $req->input('negeri')
            ]
        );

        return back();
    }
}
