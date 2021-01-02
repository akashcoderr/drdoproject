<?php

namespace App\Http\Controllers;
use App\Models\Capital2021;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CapitalController extends Controller
{
    //
    function index(){ 
        $data=DB::select("select * from capital2021");
        return view('capital',['lists'=>$data]);
    }
    function addNew(Request $req){
        $cap= new Capital2021;
        $cap->bill_number=$req->bill_no;
        $cap->bill_date=$req->bill_date;
        $cap->so_number=$req->so_number;
        $cap->so_date=$req->so_date;
        $cap->vender=$req->vender;
        $cap->bill_amount=$req->bill_amount;
        $cap->bill_head=$req->bil_head;
        $cap->fund_status=$req->fund_avl;
        $cap->bill_rcvt_from=$req->rcd_date;
        $cap->bil_rtrn_to=$req->rtrn_date;
        $cap->progracive_expendture=2883777;
        $cap->balance_fund_avlbl=662788383;
        $cap->progracive_ex_prcnt=83.22;
        $cap->balance_fund_avlbl_prcnt=29.22;
        $cap->remarks=$req->remark;
        $cap->save();
        return redirect('/');
    }

}
