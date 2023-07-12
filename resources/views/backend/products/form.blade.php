<div class="box-body row">

    <div class="form-group col-md-4">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ @$product->name }}">
    </div>
    <div class="form-group col-md-4">
        <label for="name">Part Number</label>
        <input type="text" name="part_number" class="form-control" placeholder="Enter part number" value="{{ @$product->part_number }}">
    </div>
    <div class="form-group col-md-4">
        <label for="name">Part Type</label>
        <input type="text" name="part_type" class="form-control" placeholder="Enter part type" value="{{ @$product->part_type }}">
    </div>
    <div class="form-group col-md-12">
        <label for="name">Description</label>
        <textarea name="description" class="form-control" placeholder="Enter description">{{ @$product->description }}</textarea>
    </div>

</div>


