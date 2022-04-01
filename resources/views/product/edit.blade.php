<div class="col">
  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">Update Data Product</div>
  </div>
  <form name="dForm" action="{{ route('product.update') }}" method="POST">
    @csrf
    <input type="hidden" class="form-control" id="id" name="id" @if(!empty($update)) value="{{$update->id}}" @else @endif readonly required onchange="validate()">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" @if(!empty($update)) value="{{$update->name}}"  @else readonly @endif required onchange="validate()">
    </div>
    <div class="form-group">
      <label for="trans_date">Trans Date</label>
      <input type="datetime-local" class="form-control" id="trans_date" name="trans_date" placeholder="Trans Date" @if(!empty($update)) value="{{ date('Y-m-d\TH:i', strtotime($update->trans_date)) }}"  @else readonly @endif required onchange="validate()">
    </div>
    <div class="form-group">
      <label for="volume">Volume</label>
      <input type="number" class="form-control" id="volume" name="volume" placeholder="Volume" @if(!empty($update)) value="{{$update->volume}}"  @else readonly @endif required onchange="validate()">
    </div>

    <div class="row justify-content-end p-2">
      <button type="submit" name="submit" class="btn btn-warning btn-sm" @if(!empty($update)) @else disabled @endif>Edit</button>
    </div>
  </form>
</div>

<script>
    function validate() {
        let form = document.dForm;
        let resultValidate =
            form.id.value != "" &&
            form.name.value != "" &&
            form.trans_date.value != "" &&
            form.volume.value != "" ;

        if (resultValidate)
            form.submit.disabled = false
        else
            form.submit.disabled = true
    }
</script>