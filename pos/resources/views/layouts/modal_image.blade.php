<style>
    .control_image{
        width: 100%;
        height: 300px;
        border-radius: 20px;
        border: none;

    }
    .control_image img{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title fs-5" id="exampleModalLabel">Preview Image</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="control_image">
            <img src="{{asset('/img/loadi')}}" class="pre_img" alt="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary clear" style="background-color:red">Clear</button>
        </div>
      </div>
    </div>
  </div>