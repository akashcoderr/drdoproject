<?php

namespace App\Http\Controllers;
use App\Models\Tra2021;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TrainingController extends Controller
{
     //
     function index(){ 
        $data=DB::select("select * from tra2021");
        return view('training',['lists'=>$data]);
    }
    function addNew(Request $req){
        $tra= new Tra2021;
        $tra->bill_number=$req->bill_no;
        $tra->bill_date=$req->bill_date;
        $tra->so_number=$req->so_number;
        $tra->so_date=$req->so_date;
        $tra->vender=$req->vender;
        $tra->bill_amount=$req->bill_amount;
        $tra->bill_head=$req->bil_head;
        $tra->fund_status=$req->fund_avl;
        $tra->bill_rcvt_from=$req->rcd_date;
        $tra->bil_rtrn_to=$req->rtrn_date;
        $tra->progracive_expendture=2883777;
        $tra->balance_fund_avlbl=662788383;
        $tra->progracive_ex_prcnt=83.22;
        $tra->balance_fund_avlbl_prcnt=29.22;
        $tra->remarks=$req->remark;
        $tra->save();
        return redirect('/');
    }
}
