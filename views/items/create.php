<h1>Create Item</h1>

<form action="/items/store" method="POST" class="w-50 mt-5">

    <div class="input-group mb-3 ">
        <span class="input-group-text" for="item_name">Item Name</span>
        <input type="text" class="form-control" id="item_name" name="item_name" required>
    </div>

    <div class="input-group mb-3 ">
        <span class="input-group-text" for="selling_price">Selling Price</span>
        <input type="number" class="form-control" id="selling_price" name="selling_price" step="any" required>
        <span class="input-group-text">JOD</span>
    </div>

    <div class="input-group mb-3 ">
        <span class="input-group-text" for="cost_price">Cost Price</span>
        <input type="number" class="form-control" id="cost_price" name="cost_price" step="any" required>
        <span class="input-group-text">JOD</span>
    </div>

    <div class="input-group mb-3 ">
        <span class="input-group-text" for="quantity">Quantity</span>
        <input type="number" class="form-control" id="quantity" name="quantity" required>
    </div>



    <button type="submit" class="btn btn-success mt-4">Create</button>
</form>