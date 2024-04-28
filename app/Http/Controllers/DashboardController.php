<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $menu = Menu::get();
        $data['count_menu'] = $menu->count();

        $pelanggan = Pelanggan::get();
        $data['count_pelanggan'] = $pelanggan->count();

        $transaksi = Transaksi::get();
        $data['count_transaksi'] = $transaksi->count();
        $today = Carbon::today();

        $data['count_transaksi_today'] = DB::table('transaksis')
            ->whereDate('tanggal', $today)
            ->count();
        $data['data_penjualan']= 

        $data['pelanggan'] = Pelanggan::limit(10)->orderBy('created_at', 'desc')->get();

        return view('dashboard.index')->with($data);
    }

    public function data_penjualan($lastCount){
        $data = 0;
        if($lastCount == 0){
            $data = Transaksi::select(
            'tanggal',
            DB::raw('SUM(total_harga) as total_bayar'),
            DB::raw('COUNT(id) as jumlah'))
            ->groupBy('tanggal')
            ->orderBy('tanggal','asc')
            ->get();
        }else{
            $data = Transaksi::select(
            'tanggal',
            DB::raw('SUM(total_harga) as total_bayar'),
            DB::raw('COUNT(id) as jumlah'))
            ->groupBy('tanggal')
            ->orderBy('tanggal','asc')
            ->skip($lastCount - 1)
            ->limit(264187365)
            ->get();
            }
        return response($data);
    }
}
