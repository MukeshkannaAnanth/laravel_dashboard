@include('navbar');



<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<div class = "shadow-lg p-3 mb-5 bg-white rounded" style="margin-top:300px;width:1200px;margin-left:400px;height:200px;">
    <p class="h2 text-center">Water Can</p>
  <div class="container" style="display: flex;">
    <div class="" style="margin-left:10px;">
        <label for="">Today Sales</label>
        @php
        $currentdate = date('Y-m-d');
             $can_count = DB::table('billing_cans')->where(DB::raw("(STR_TO_DATE(created_at,'%Y-%m-%d'))"), $currentdate)->count();
        @endphp
     <input type="text" name="" id="" value="{{$can_count}}" class="form-control">  
    </div>
    <div class="" style="margin-left:10px;">
        <label for="">Date</label>
     <input type="date" name="date" id="date" class="form-control">  
    </div>
    <div class=""style="margin-left:10px;width:180px;">
        <label for="">Type</label>
        <select name="type" id="type" class="form-control">
           <option value="Select">Select</option> 
           <option value="Local">Local</option> 
           <option value="Vehicle">Vehicle</option> 
           <option value="bulk">Bulk</option> 
        </select>  
    </div>
    <div class=""style="margin-left:10px;">
        <label for="">Product</label>
        <input type="text" name="product" id="product" value="can" class="form-control">  
    </div>
    <div class=""style="margin-left:10px;">
        <label for="">Quantity</label>
        <input type="text" name="qty" id="qty" class="form-control">  
    </div>
    <div class=""style="margin-left:10px;">
      <label for="">Rate</label>
      <input type="text" name="rate" id="rate" class="form-control">  
  </div>
    <div class=""style="margin-left:10px;">
        <label for="">Discount</label>
        <input type="text" name="dis" id="dis" class="form-control">  
    </div>
    <div class=""style="margin-left:10px;">
        <label for="">Total</label>
        <input type="text" name="total" id="total" class="form-control">  
        <div class="addbtn float-end" style="margin-top:10px;">
            <button type="button" id="savecan" class="btn btn-primary">Primary</button>
        
        </div>
    </div>
  </div>
 </div>
 <style>
  * Table Styles */

.table-wrapper{
    
    width: 900px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 60%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
    margin-left:450px;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid black;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid black;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid black;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
    element.style {
    display: none;
}
}
 </style>
 <div class="table-wrapper">
  <table class="fl-table" style="border:1px solid black;">
      <thead>
      <tr>
          <th>S.No</th>
          <th>Product</th>
          <th>Quantity</th>
          <th>Amount</th>
          <th>Total</th>
      </tr>
      </thead>
      <tbody style="border:1px solid black;">
        @foreach ($candetails as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->can}}</td>
          <td>{{$item->qty}}</td>
          <td>{{$item->rate}}</td>
          <td>{{$item->total}}</td>
      </tr>
        @endforeach
     
     
      <tbody>
  </table>
  
</div>
<div class="pagination" style="margin-left:450px;margin-top:25px;">
  {{$candetails->links('pagination::bootstrap-4')}}
</div>
<script>
    $(document).on('click','#savecan',function(){
        var token = $('input[name="_token"]').val();
        var date = $('#date').val();
        var type = $('#type').val();
        var product = $('#product').val();
        var qty = $('#qty').val();
        var dis = $('#dis').val();
        var total = $('#total').val();
        var rate = $('#rate').val();
        $.ajax({
            headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
            url : "{{route('addcansdata')}}",
            type: "POST",
            data: {token,date,type,product,qty,dis,total,rate},
            success:function(res){
                
               console.log(res);
              if(res.errors.length > 0){

                var blkstr = [];
                $.each(res.errors, function(idx2,val2) {                    
                  var str =  val2;
                  blkstr.push(str);
                });
              console.log(blkstr.join(",\n "));
               alert(blkstr.join(",\n "));
              }else{
                location.reload();

              }
            }
        })
    })
</script>


  @include('footer')