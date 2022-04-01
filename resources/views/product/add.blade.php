<div class="col">
  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">Add Data Product</div>
  </div>
  <form action="{{ route('product.create') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
    </div>
    <div class="form-group">
      <label for="trans_date">Trans Date</label>
      <input type="datetime-local" class="form-control" id="trans_date" name="trans_date" placeholder="Trans Date" required>
    </div>
    <div class="form-group">
      <label for="volume">Volume</label>
      <input type="number" class="form-control" id="volume" name="volume" placeholder="Volume" required>
    </div>
    <div class="row justify-content-end p-2">
      <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </div>
  </form>
</div>