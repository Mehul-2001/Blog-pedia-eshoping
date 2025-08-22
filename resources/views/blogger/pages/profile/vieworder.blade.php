@extends('blogger.layouts.app')
@section('content')
<!-- /.card-header -->
<div class="card-body" style="width:80%; margin:auto; padding-top:50px;">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Generate Invoice</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                   @foreach($orderdetails as $gadgetdetailss)
                        <tr>
                          <td>{{$gadgetdetailss->gadget_name}}</td>
                          <td>{{$gadgetdetailss->gadget_price}}</td>
                          <td>{{$gadgetdetailss->qty}}</td>
                          <td>Rs.{{$gadgetdetailss->total}}</td>
                          <td><a href="{{route('view_invoice_detail_blogger',['id'=>$gadgetdetailss->id])}}" class="btn btn-success"><i class="fa fa-file"> invoice</i></td>
                        </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  
                  <th>Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>generate Invoice</th>
                  </tr>
                  </tfoot>
                </table>
              </div>

             
              <!-- /.card-body -->
              
@endsection()