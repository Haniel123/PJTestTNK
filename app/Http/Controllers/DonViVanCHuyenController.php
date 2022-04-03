<?php

namespace App\Http\Controllers;
use App\DonViVanChuyen;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class DonViVanCHuyenController extends Controller
{
public function getall(Request $req)
{
 $dvvc=DonViVanChuyen::all();
 return Datatables::of($dvvc)->make(true);
}
}
