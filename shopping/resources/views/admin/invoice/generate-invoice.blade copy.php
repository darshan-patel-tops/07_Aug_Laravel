<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice #{{$order->id}}</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Thunder Shopping </h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Invoice Id: #{{$order->id}}</span> <br>
                    <span>Date: {{$order->created_at->format('Y-m-d')}}</span> <br>
                    <span>Zip code : {{$order->zipcode}}</span> <br>
                    <span>Address: {{$order->address}}</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Order Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Order Id:</td>
                <td>{{$order->id}}</td>

                <td>Full Name:</td>
                <td>{{$order->fullname}}</td>
            </tr>
            <tr>
                <td>Tracking Id/No.:</td>
                <td>{{$order->tracking_no}}</td>

                <td>Email Id:</td>
                <td>{{$order->email}}</td>
            </tr>
            <tr>
                <td>Ordered Date:</td>
                <td>{{$order->created_at->format('Y-m-d')}}</td>

                <td>Phone:</td>
                <td>{{$order->phone}}</td>
            </tr>
            <tr>
                <td>Payment Mode:</td>
                <td>{{$order->payment_mode}}</td>

                <td>Address:</td>
                <td>{{$order->address}}</td>
            </tr>
            <tr>
                <td>Order Status:</td>
                <td>{{$order->status_message}}</td>

                <td>Zip code:</td>
                <td>{{$order->zipcode}}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Order Items
                </th>
            </tr>
            <tr class="bg-blue">
                <th>Item ID</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $amount = 0;
            @endphp
            <!-- Table body -->
              @foreach ($order->orderitem as $orders)
              <tr>
                <td>
                    <div class="btn btn-sm btn-red">
                        {{$orders->product->id}}
                    </div>
                </td>
                <td class="align-middle border-top-0 w-0">
                @if ($orders->product->productimage)
  
                <div class="col-3 col-md-2">
                 <img  width="100px" src="/{{$orders->product->productimage[0]->image}}" alt="Ecommerce"
                    class="icon-shape icon-xl">
                  </div>
                  @else
                  <div class="col-3 col-md-2">
                    <img src="/" alt="Ecommerce"
                      class="icon-shape icon-xl">
                    </div>
                    
                @endif
            </td>
            <td widht="100%"  class="align-middle border-top-0">
                <div class="btn btn-sm btn-dark">
                    {{$orders->product->name}}
                </div>
            </td>
            <td widht="100%" class="align-middle border-top-0">
                <div class="btn btn-sm btn-primary">
                    ${{$orders->price}}
                </div>
            </td>
                <td widht="100%" class="align-middle border-top-0">
                    <div class="btn btn-sm btn-primary">
                        {{$orders->quantity}}
                    </div>
                  </td>
                <td widht="100%" class="align-middle border-top-0">
                    <div class="btn btn-sm btn-primary">
                        ${{$orders->quantity * $orders->price }}
                    </div>
                </td>
                @php
                    $amount += $orders->quantity * $orders->price;
                @endphp
              </tr>
                    @endforeach
              <div class="d-flex justify-content-center">

                  <tr>
                      <td  class="text-center"colspan="6">
                          <div class="btn btn-primary col-md-8">
                              Total Amount : {{$amount}}
                            </div>
                        </td>
                    </tr>
                </div>
            </tbody>
    </table>

    <br>
    <p class="text-center">
        Thank your for shopping with Thunder Shopping Center
    </p>

</body>
</html>