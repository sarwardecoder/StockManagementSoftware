@extends('master')

@section('content')

<!-- creating table  -->
<p class="h1 text-center bg-info text-dark p-3">Welcome to your Dashboard</p>



<div class="container">
    <div class="row pt-5">
        <div class="col-md-12">

            <h3 class="text-success fw-bold text-center py-5">PRODUCTS</h3>

            <table class="table table-light table-responsive table-hover table-dark">
                <thead class="">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Discount price</th>
                    <th>Image</th>
                    <th>Stock</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>{{ $product->discount_price }}</td>
                            <td><img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="50"></td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection