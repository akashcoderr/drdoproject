@extends('master')
@section("content")

<div class="container">
<div class="">
            <form action="/addcap" method="get">
            <button type="submit" class="btn btn-primary">Add New</button>
            </form>
</div>
    <div class="row">
        <div class="col-sm-10">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">S. NO.</th>
                <th scope="col">Bill NO.</th>
                <th scope="col">Bill Date</th>
                <th scope="col">SO No.</th>
                <th scope="col">SO. Date</th>
                <th scope="col">Vender</th>
                <th scope="col">Bill Ammount</th>
                <th scope="col">Bill Head</th>
                <th scope="col">Fund Avilablity</th>
                <th scope="col">Bill Recived From mmg/fin</th>
                <th scope="col">Bill Returned To mmg/fin</th>
                <th scope="col">Progracive Ependture</th>
                <th scope="col">Balance Fund Avilabe</th>
                <th scope="col">Prograsive Expend. %</th>
                <th scope="col">Balane Fund Avil. %</th>
                <th scope="col">Remarks</th>
                </tr>
            </thead>
            <tbody>
            @foreach($lists as $list)
                <tr>
                    <td>{{$list->id}}</td>
                    <td>{{$list->bill_number}}</td>
                    <td>{{$list->bill_date}}</td>
                    <td>{{$list->so_number}}</td>
                    <td>{{$list->so_date}}</td>
                    <td>{{$list->vender}}</td>
                    <td>{{$list->bill_amount}}</td>
                    <td>{{$list->bill_head}}</td>
                    <td>{{$list->fund_status}}</td>
                    <td>{{$list->bill_rcvt_from}}</td>
                    <td>{{$list->bil_rtrn_to}}</td>
                    <td>{{$list->progracive_expendture}}</td>
                    <td>{{$list->balance_fund_avlbl}}</td>
                    <td>{{$list->progracive_ex_prcnt}}</td>
                    <td>{{$list->balance_fund_avlbl_prcnt}}</td>
                    <td>{{$list->remarks}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
</div>

</div>
@endsection

<!--div class="col-sm-2">
            <form action="/addrev" method="post">
            <button type="button" class="btn btn-primary">Add New</button>
            </form>
</div-->