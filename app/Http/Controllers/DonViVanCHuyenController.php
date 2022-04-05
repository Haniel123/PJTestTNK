<?php

namespace App\Http\Controllers;

use App\DonViVanCHuyen;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DonViVanCHuyenController extends Controller
{
    public function formatdate($date)
    {
        $dateconvert = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
        return $dateconvert;
    }
    public function getall(Request $req)
    {
        if (request()->ajax()) {
            if (!empty($req->from_date || $req->to_date)) {

                // $fromdate = Carbon::createFromFormat('d/m/Y', $req->from_date)->format('Y-m-d');
                // $todate = $this->formatdate($req->to_date);
                $dvvc = DonViVanCHuyen::whereBetween('created_at', array($req->from_date,  $req->to_date))->get();

                return DataTables::of($dvvc)->make(true);
            } else {

                $dvvc = DonViVanCHuyen::all();

                return DataTables::of($dvvc)->make(true);
            }
        }

        return redirect()->back();
    }

    public function index()
    {
        return view('dvvc');
    }
}
