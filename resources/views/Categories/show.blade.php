<h1>All Categories</h1>
<table>
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>Description</th>
        <th>action</th>
    </tr>
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
        <td>
            <a href="{{ route('categories.index') }}">Back</a>
            <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
</table>

<h2>All Category Products</h2>
<table>
    <tr>
        <th>Id</th>
        <th>Product name</th>
        <th>Product Description</th>
        <th>action</th>
    </tr>
    @foreach($category->products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>
            <a href="{{ route('products.show', $product->id) }}">Back</a>
            <a href="{{ route('products.edit', $product->id) }}">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>