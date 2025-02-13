<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add Item</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container mt-5">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h4>Add New Item</h4>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="itemCategory" class="form-label">Category</label>
              <select class="form-control" id="itemCategory" required>
                <option value="">Select a category</option>
                <option value="Electronics">Electronics</option>
                <option value="Clothing">Clothing</option>
                <option value="Furniture">Furniture</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="itemName" class="form-label">Item Name</label>
              <input
                type="text"
                class="form-control"
                id="itemName"
                placeholder="Enter item name"
                required
              />
            </div>
            <div class="mb-3">
              <label for="itemPrice" class="form-label">Price</label>
              <input
                type="number"
                class="form-control"
                id="itemPrice"
                placeholder="Enter item price"
                required
              />
            </div>
            <div class="mb-3">
              <label for="itemQuantity" class="form-label">Quantity</label>
              <input
                type="number"
                class="form-control"
                id="itemQuantity"
                placeholder="Enter quantity"
                required
              />
            </div>
            <button type="submit" class="btn btn-success">Add Item</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
