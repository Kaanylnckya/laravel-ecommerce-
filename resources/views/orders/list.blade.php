

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">user_id</th>
        <th scope="col">ferisoft_barcode_id</th>
        <th scope="col">marketplace_type</th>
        <th scope="col">package_status</th>
        <th scope="col">order_date</th>
        <th scope="col">shipment_full_address</th>
        <th scope="col">shipment_full_name</th>
        <th scope="col">invoice_full_address</th>
        <th scope="col">invoice_full_name</th>
        <th scope="col">order_number</th>


      </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
      <tr>
        <th scope="row">1</th>
        <td>{{$order -> user_id}}</td>
        <td>{{$order -> ferisoft_barcode_id}}</td>
        <td>{{$order -> marketplace_type}}</td>
        <td>{{$order -> package_status}}</td>
        <td>{{$order -> order_date}}</td>
        <td>{{$order -> shipment_full_address}}</td>
        <td>{{$order -> shipment_full_name}}</td>
        <td>{{$order -> invoice_full_address}}</td>
        <td>{{$order -> invoice_full_name}}</td>
        <td>{{$order -> order_number}}</td>


      </tr>
    </tbody>
    @endforeach
  </table>
