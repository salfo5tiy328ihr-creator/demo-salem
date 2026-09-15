<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Tables</title>

    <style>
        body {
            font-family: Arial;
            padding: 30px;
        }

        h1 {
            text-align: center;
        }

        h2 {
            margin-top: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        th {
            background: #eee;
        }
    </style>
</head>

<body>

<h1>All Tables</h1>

<h2>Categories</h2>

<table>
    <tr>
        @if($categories->count())
            @foreach($categories->first()->getAttributes() as $key => $value)
                <th>{{ $key }}</th>
            @endforeach
        @endif
    </tr>

    @foreach($categories as $category)
        <tr>
            @foreach($category->getAttributes() as $value)
                <td>{{ $value }}</td>
            @endforeach
        </tr>
    @endforeach
</table>


<h2>Orders</h2>

<table>
    <tr>
        @if($orders->count())
            @foreach($orders->first()->getAttributes() as $key => $value)
                <th>{{ $key }}</th>
            @endforeach
        @endif
    </tr>

    @foreach($orders as $order)
        <tr>
            @foreach($order->getAttributes() as $value)
                <td>{{ $value }}</td>
            @endforeach
        </tr>
    @endforeach
</table>


<h2>Order Items</h2>

<table>
    <tr>
        @if($orderItems->count())
            @foreach($orderItems->first()->getAttributes() as $key => $value)
                <th>{{ $key }}</th>
            @endforeach
        @endif
    </tr>

    @foreach($orderItems as $item)
        <tr>
            @foreach($item->getAttributes() as $value)
                <td>{{ $value }}</td>
            @endforeach
        </tr>
    @endforeach
</table>


<h2>Products</h2>

<table>
    <tr>
        @if($products->count())
            @foreach($products->first()->getAttributes() as $key => $value)
                <th>{{ $key }}</th>
            @endforeach
        @endif
    </tr>

    @foreach($products as $product)
        <tr>
            @foreach($product->getAttributes() as $value)
                <td>{{ $value }}</td>
            @endforeach
        </tr>
    @endforeach
</table>


<h2>Users</h2>

<table>
    <tr>
        @if($users->count())
            @foreach($users->first()->getAttributes() as $key => $value)
                <th>{{ $key }}</th>
            @endforeach
        @endif
    </tr>

    @foreach($users as $user)
        <tr>
            @foreach($user->getAttributes() as $value)
                <td>{{ $value }}</td>
            @endforeach
        </tr>
    @endforeach
</table>

</body>
</html>