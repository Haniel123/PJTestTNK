<?php

namespace App\Http\Controllers;

use App\DonViVanCHuyen;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class DonViVanCHuyenController extends Controller
{
    public function getall(Request $req)
    {
        $dvvc = DonViVanCHuyen::all();
        return DataTables::of(DonViVanCHuyen::query())->make(true);
    }

    public function index()
    {
        return view('dvvc');
    }
}
