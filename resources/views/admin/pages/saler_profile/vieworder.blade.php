@extends('admin.layouts.app')
@section('content')

<!-- /.card-header -->
<div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                   @foreach($orderdetails as $gadgetdetailss)
                        <tr>
                          <td>{{$gadgetdetailss->gadget_name}}</td>
                          <td>{{$gadgetdetailss->gadget_price}}</td>
                          <td>{{$gadgetdetailss->qty}}</td>
                          <td>Rs.{{$gadgetdetailss->total}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  
                  <th>Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                  </tr>
                  </tfoot>
                </table>
              </div>

             
              <!-- /.card-body -->




               
             

              
@endsection()