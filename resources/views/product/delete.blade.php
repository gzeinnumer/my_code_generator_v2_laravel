<div class="col">
  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">Delete Data Product</div>
  </div>
  <form action="{{ route('product.delete') }}" method="POST">
    @csrf
    <input type="hidden" class="form-control" id="id" name="id" @if(!empty($delete)) value="{{$delete->id}}" @endif placeholder="ID" readonly required>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" @if(!empty($delete)) value="{{$delete->name}}" @endif placeholder="Name" readonly required>
    </div>
    <div class="form-group">
      <label for="trans_date">Trans Date</label>
      <input type="datetime-local" class="form-control" id="trans_date" name="trans_date" placeholder="Trans Date" @if(!empty($delete)) value="{{ date('Y-m-d\TH:i', strtotime($delete->trans_date)) }}"  @endif required readonly>
    </div>
    <div class="form-group">
      <label for="volume">Volume</label>
      <input type="number" class="form-control" id="volume" name="volume" @if(!empty($delete)) value="{{$delete->volume}}" @endif placeholder="Volume" readonly required>
    </div>
    <div class="row justify-content-end p-2">
      <button type="submit" class="btn btn-danger btn-sm" @if(!empty($delete)) @else disabled @endif>Delete</button>
    </div>
  </form>
</div>