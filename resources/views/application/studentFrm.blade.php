@extends('layouts.console')
@section('innercontent')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<br><br>
    <h4> Student Form  </h4>
    <small style="color: green; float: right;"> 23-07-2022 </small>
    <h6 style="color: gray;">Laravel + Ajax CRUD With Live Search</h6>
<hr>


<?php 
    // echo'<pre>';print_r($arrTakeActionData);exit;
    /* $arrTakeActionData = json_decode(json_encode($arrTakeActionData), TRUE);
    // echo'<pre>';print_r($arrTakeActionData);exit;
    if (!empty($arrTakeActionData)) {
        foreach ($arrTakeActionData as $valueTakeAction) {
            $arrParam = [];
            $arrParam = $valueTakeAction['intId'];
            // echo  $arrParam;exit;
            $strParam = encrypt(json_encode($arrParam));
            // echo $strParam;exit;
            $strENC = str_replace('=','',$strParam);
            // echo $strENC;exit;
        }
    } */
?>
    <!-- FORM -->
    <form method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-sm-6">
              <label for="stuFirstName" class="form-label">First name</label>
              <input type="text" class="form-control" name="stuFirstName" id="stuFirstName" placeholder="Enter Your first Name" value="" >
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="stuLastName" class="form-label"> Last name </label>
              <input type="text" class="form-control" name="stuLastName" id="stuLastName" placeholder="Enter Your last Name" value="" >
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="mob" class="form-label"> Mobile <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" name="mob" id="mob" placeholder="Ex - 9861698616" maxlength="10">
            </div>

            <div class="col-12">
              <label for="address" class="form-label"> Address </label>
              <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" >
            </div>

            <!-- <hr class="my-4"> -->
            <!-- <button type="submit" class="w-100 btn btn-success btn-lg" > Submit Your Form </button> -->
            <div class="d-grid gap-2 col-8 mx-auto"><br>
                <button type="submit" class="btn btn-primary" > Submit Your Form </button>
            </div>
            <hr class="my-5">
        </div>
    </form>
    <!-- FORM -->
    <!-- table -->
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">

                        <div class="col-md-4">
                            <form action="" method="post">
                                <label for="search" class="form-label"><b>Search By: </b></label>
                                <input type="text" class="form-control form-control-sm" name="search" id="search" onkeyup="return getStuData(this.value)" placeholder="Name / Address Search..">
                            </form>
                        </div><br>
                    <table class="table table table-striped table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col"> Sl </th>
                                <th scope="col"> Full Name </th>
                                <th scope="col"> Mobile </th>
                                <th scope="col"> Address </th>
                                <th scope="col"> Action </th>
                            </tr>
                        </thead>
                        <tbody id="content">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- table -->

        </div>
    </div>
</div>

<script>
$(document).ready( function () {
    getStuData ();
});


function getStuData (key = '') { 
    // alert(111);
    $.ajax({
        type:"POST",
        url:"{{url('Ajax/studentData') }}",
        data:{_token:'{{ csrf_token() }}', 'key':key},
        dataType: "JSON",
        success: function (response) {
            
            if (response.status == 200) {
                let result = response.message;
                // console.log(result);
                if (result != null) {
                    let count = 1;
                    let htm = '';
                    $(result).each(function (i,val) {
                        // console.log(val);
                         htm += `
                            <tr>
                                <td> ${count++} </td>
                                <td> ${val.vch_FirstName} ${val.vch_LastName} </td>
                                <td> ${val.vch_Mob} </td>
                                <td> ${val.vch_addrs} </td>
                                <td>
                                    <a class="btn btn-dark rounder" href="#" > <i class="fa-solid fa-user-pen"></i> <b> Take Action </b>  </a>
                                </td>
                            </tr>
                        `;
                        // console.log(htm);
                    });
                    $('#content').html(htm);
                }
            }
        }
    })
}

function takeAction() {  
    alert(111);
}

</script>
@endsection