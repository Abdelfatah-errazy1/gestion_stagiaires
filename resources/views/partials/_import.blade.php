<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 d-flex justify-content-center" id="staticBackdropLabel">format d'excel</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
       
      </div>
      <div class="modal-footer">
        <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="file" name="file">
          <button type="submit">Import Excel</button>
      </form>
        
        
      </div>
    </div>
  </div>
</div>
