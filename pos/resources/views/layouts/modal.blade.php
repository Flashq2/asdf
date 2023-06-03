<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            
            <h1 class="modal-title fs-5" id="staticBackdropLabel">
                <?php
                   if(isset($_GET['code'])) 
                   {
                     $header=App\Models\PermissionModel::select('*')->where('code', $_GET['code'])->first();
                     $textitle='Edit Permission Code:'.$_GET['code'];
                     $class_btn_save='btn_edit';
                     $title_btn_save='Save Edit';
                   }
                    ?>
                     
                     {{$textitle??'Add New Permission';}}
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" class="form_data">

                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                         <div class="title">
                            Code
                         </div>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="code" name="code"  placeholder="Code" value="{{$data[0]->code??' ';}}" 
                        
                            @if (isset($data[0]->code))
                                readonly
                            @endif
                        >
                    </div> 
                        </div>
                       
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                         <div class="title">
                            Description
                         </div>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="description" name="description"  placeholder="Description" value="{{$data[0]->description??'';}}">
                    </div> 
                        </div>
                       
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                         <div class="title">
                            Description_2
                         </div>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="description2" name="description2" placeholder="Description_2" value="{{$data[0]->description_2??'';}}">
                    </div> 
                        </div>
                       
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                         <div class="title">
                            Inactived
                         </div>
                    </div>
                    <div class="col-8">
                        <select name="inactived" id="inactived" class="form-control" >
                            <option value="{{$header->inactived??'';}}">{{$data[0]->inactived??'';}}</option>
                           <option value="yes">Yes</option>
                           <option value="yes">No</option>
                           
                        </select>
                    </div> 
                        </div>
                       
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="{{$class_btn_save??'btn_save'}}">
                {{$title_btn_save??'Save Permission'}}
            </button>
        </div>
    </div>
</div>