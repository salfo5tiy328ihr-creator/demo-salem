<h1>All Products</h1>
<a href="{{ route('products.create') }}">Create New Product</a>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>Description</th>
            <th>Category Name</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->category->name ?? 'N/A' }}</td>
            <td>
                <a href="{{ route('products.show', $product->id) }}">View</a>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>