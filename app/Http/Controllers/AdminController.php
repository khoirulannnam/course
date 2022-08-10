<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Scheme;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function skema()
    {
        $scheme = Scheme::all();
        return view('admin.skema', compact('scheme'));
    }

    public function tambahskema(Request $request)
    {
        $scheme = new Scheme();
        $image=$request->gambar;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->gambar->move('gambar',$imagename);
        $scheme->nama=$request->nama;
        $scheme->detail=$request->detail;
        $scheme->waktu=$request->waktu;
        $scheme->gambar=$imagename;
        $scheme->save();

        return redirect()->back()->with('message','Skema Berhasil Ditambahkan');
    }

    public function hapusskema($id)
    {
        $scheme=Scheme::find($id);
        $scheme->delete();

        return redirect()->back();
    }

    public function jadwal()
    {
        $schdule = Schedule::all();
        return view('admin.jadwal', compact('schdule'));
    }

    public function tambahjadwal(Request $request)
    {
        $schdule = new Schedule();
        $schdule->nama=$request->nama;
        $schdule->jadwal=$request->jadwal;
        $schdule->save();

        return redirect()->back()->with('message','Jadwal Berhasil Ditambahkan');
    }

    public function hapusjadwal($id)
    {
        $schdule=Schedule::find($id);
        $schdule->delete();

        return redirect()->back();
    }

    public function permohonan()
    {
        $data = Registration::all();
        return view('admin.permohonan', compact('data'));
    }

    public function daftarmahasiswa()
    {
        $user=User::where('usertype', '0')->get();
        return view('admin.daftarmahasiswa', compact('user'));
    }

    public function verifikasi($id)
    {
        $user=User::find($id);
        $user->verified='Terverifikasi';
        $user->save();

        return redirect()->back();
    }

    public function hapususer($id)
    {
        $user=User::find($id);
        $user->delete();


        return redirect()->back();
    }

    public function konfirmasi($id)
    {
        $registration=Registration::find($id);
        $registration->status='Konfirmasi';
        $registration->save();

        return redirect()->back();
    }
}
