
@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6"> 
            <form action="/traadd" method="post">
            @csrf
            <div class="form-group">
                <label for="">BilL Number</label>
                <input type="text" name="bill_no" required  class="form-control" id="" aria-describedby="" placeholder="Enter Bill Number">
            </div>
            <div class="form-group">
                <label for="">Bill Date</label>
                <input type="date" name="bill_date" required class="form-control" id="" aria-describedby="" placeholder="">
            </div>
            <div class="form-group">
                <label for="">SO Number</label>
                <input type="text" name="so_number" required class="form-control" id="" aria-describedby="" placeholder="Enter SO Number">
            </div>
            <div class="form-group">
                <label for="">SO Date</label>
                <input type="date" name="so_date" required class="form-control" id="" aria-describedby="" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Vender</label>
                <input type="text" name="vender" required class="form-control" id="" aria-describedby="" placeholder="Enter Vender Detais">
            </div>
            <div class="form-group">
                <label for="">Bill Amount</label>
                <input type="Number" name="bill_amount" required class="form-control" id="" aria-describedby="" placeholder="Enter Bill Amount">
            </div>

            <div class="form-group">
                <label for="">BilL Head</label>
                <input type="text" name="bil_head"  required class="form-control" id="" aria-describedby="" placeholder="Bill Head">
            </div>
            <div class="form-group">
                <label for="">Fund Avilablity</label>
                <input type="text" name="fund_avl" required class="form-control" id="" aria-describedby="" placeholder="">
            </div>
            <div class="form-group">
                <label for="">BilL Recived From mmg/finance</label>
                <input type="date" name="rcd_date" required class="form-control" id="" aria-describedby="" placeholder="">
            </div>
            <div class="form-group">
                <label for="">BilL Return To mmg/finance</label>
                <input type="date" name="rtrn_date" required class="form-control" id="" aria-describedby="" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Remarks</label>
                <input type="text" name="remark"required  class="form-control" id="" aria-describedby="" placeholder="Remarks">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection