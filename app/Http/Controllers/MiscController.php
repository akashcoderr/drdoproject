<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Misc2021;
use Illuminate\Support\Facades\DB;
class MiscController extends Controller
{
  function index(){ 
    $data=DB::select("select * from misc2021");
    return view('misc',['lists'=>$data]);
  }
  function addNew(Request $req){
    $misc= new Misc2021;
    $misc->bill_number=$req->bill_no;
    $misc->bill_date=$req->bill_date;
    $misc->so_number=$req->so_number;
    $misc->so_date=$req->so_date;
    $misc->vender=$req->vender;
    $misc->bill_amount=$req->bill_amount;
    $misc->bill_head=$req->bil_head;
    $misc->fund_status=$req->fund_avl;
    $misc->bill_rcvt_from=$req->rcd_date;
    $misc->bil_rtrn_to=$req->rtrn_date;
    $misc->progracive_expendture=2883777;
    $misc->balance_fund_avlbl=662788383;
    $misc->progracive_ex_prcnt=83.22;
    $misc->balance_fund_avlbl_prcnt=29.22;
    $misc->remarks=$req->remark;
    $misc->save();
    return redirect('/');
  }
}
