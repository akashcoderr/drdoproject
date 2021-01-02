<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rev2021;
use Illuminate\Support\Facades\DB;
class RevController extends Controller
{
    //
    function index(){ 
        $data=DB::select("select * from rev2021");
        return view('revanue',['lists'=>$data]);
    }
    function addNew(Request $req){
        $rev= new Rev2021;
        $rev->bill_number=$req->bill_no;
        $rev->bill_date=$req->bill_date;
        $rev->so_number=$req->so_number;
        $rev->so_date=$req->so_date;
        $rev->vender=$req->vender;
        $rev->bill_amount=$req->bill_amount;
        $rev->bill_head=$req->bil_head;
        $rev->fund_status=$req->fund_avl;
        $rev->bill_rcvt_from=$req->rcd_date;
        $rev->bil_rtrn_to=$req->rtrn_date;
        $rev->progracive_expendture=2883777;
        $rev->balance_fund_avlbl=662788383;
        $rev->progracive_ex_prcnt=83.22;
        $rev->balance_fund_avlbl_prcnt=29.22;
        $rev->remarks=$req->remark;
        $rev->save();
        return redirect('/');
    }
}
