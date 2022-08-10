<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Scheme;
use App\Models\Schedule;
use App\Models\Registration;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $scheme = Scheme::all();
                return view('user.home', compact('scheme'));
            } else {
                return view('admin.home');
            }
        } else {
            $scheme = Scheme::all();
            return view('user.home', compact('scheme'));
        }
    }

    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $scheme = Scheme::all();
                return view('user.home', compact('scheme'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function skemakursus($id)
    {
        $scheme = Scheme::where('id', $id)->first();
        return view('user.skema', compact('scheme'));
    }

    public function riwayatkursus()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $registration = Registration::where('user_id', $userid)->get();
            return view('user.riwayat', compact('registration'));
        } else {
            return redirect()->back();
        }
    }

    public function daftarkursus()
    {
        $schedule = Schedule::all();
        return view('user.daftar', compact('schedule'));
    }

    public function daftar(Request $request)
    {
        $registration = new Registration;
        $krs = $request->krs;
        $krsname = time() . '.' . $krs->getClientoriginalExtension();
        $request->krs->move('krs', $krsname);
        $registration->nama = $request->nama;
        $registration->npm = $request->npm;
        $registration->kelas = $request->kelas;
        $registration->skema = $request->skema;
        $registration->krs = $krsname;
        if (Auth::id()) {
            $registration->user_id = Auth::user()->id;
        }

        $registration->save();
        return redirect('daftarkursus')->with('message', 'Pendaftaran Berhasil');
    }
}
