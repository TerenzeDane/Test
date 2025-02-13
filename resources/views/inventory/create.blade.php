@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Add New Item</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('items.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="itemCategory" class="form-label">Category</label>
                    <select class="form-control" name="category" id="itemCategory" required>
                        <option value="">Select a category</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Clothing">Clothing</option>
                        <option value="Furniture">Furniture</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="itemName" class="form-label">Item Name</label>
                    <input type="text" class="form-control" name="name" id="itemName" required>
                </div>
                <div class="mb-3">
                    <label for="itemPrice" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="itemPrice" required>
                </div>
                <div class="mb-3">
                    <label for="itemQuantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity" id="itemQuantity" required>
                </div>
                <button type="submit" class="btn btn-success">Add Item</button>
            </form>
        </div>
    </div>
</div>
@endsection
