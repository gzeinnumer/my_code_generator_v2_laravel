<div class="col">
  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">Detail Data Product</div>
  </div>
    <input type="hidden" class="form-control" id="id" name="id" placeholder="ID" @if(!empty($find)) value="{{$find->id}}" @endif required readonly>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" @if(!empty($find)) value="{{$find->name}}" @endif required readonly>
    </div>
    <div class="form-group">
      <label for="trans_date">Trans Date</label>
      <input type="datetime-local" class="form-control" id="trans_date" name="trans_date" placeholder="Trans Date" @if(!empty($find)) value="{{ date('Y-m-d\TH:i', strtotime($find->trans_date)) }}"  @endif required readonly>
    </div>
    <div class="form-group">
      <label for="volume">Volume</label>
      <input type="number" class="form-control" id="volume" name="volume" placeholder="Volume" @if(!empty($find)) value="{{$find->volume}}" @endif required readonly>
    </div>
  <div class="row justify-content-end p-2">
    <a type="button" href="{{ route('product.index') }}" class="btn btn-info btn-sm" @if(!empty($find)) @else style="pointer-events: none; display: inline-block;" @endif>Reset</a>
  </div>
</div>