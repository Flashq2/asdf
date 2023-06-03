<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>

<body>
    <div class="wrapper">
        @include('layouts.side_left')

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>


            </nav>

            <main class="content">

               
                        


                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                    <?php
                                       if(!empty($_GET['code'])) 
                                       {
                                         $header=App\Models\PermissionModel::select('*')->where('code', $_GET['code'])->first();
                                         $textitle='Edit Permission Code:'.$_GET['code'];
                                         $class_btn_save='btn_edit';
                                         $title_btn_save='Save Edit';
                                       }
                                        ?>
                                         
                                         {{$textitle??'Add new User Role';}}
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-2">
                                             <div class="title">
                                                Code
                                             </div>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="code" name="code"  placeholder="Code" value="{{$header->code??'';}}">
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
                                            <input type="text" class="form-control" id="description" name="description"  placeholder="Description" value="{{$header->description??'';}}">
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
                                            <input type="text" class="form-control" id="description2" name="description2" placeholder="Description_2" value="{{$header->description_2??'';}}">
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
                                                <option value="{{$header->inactived??'';}}">{{$header->inactived??'';}}</option>
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
                </div>
                <div class="row">
                    <h1>User Role</h1>
                    <hr>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">User Role</button>

                                    </div>

                                </div>
                            </div>
                            <div class="col-6">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <table id="user_role" class="table" style="width:100%">
                        <thead>
                            <th></th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Description 2</th>
                            <th>Inactived</th>

                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </main>

        </div>
    </div>
</body>
@include('script')
<script>
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
        });
    $(document).ready(function() {
        
        $(function() {
            datatable = $('#user_role').DataTable({
                processing: true,
                serverSide: true,
                rowReorder: true,
                ajax: " {{ route('userrole.list') }}",
                columns: [{
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'code',
                        name: 'code'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'description_2',
                        name: 'description_2'
                    },
                    {
                        data: 'inactived',
                        name: 'inactived'
                    },

                ],
                dom: "Blfrtip",
                buttons: [

                    {
                        extend: 'copy',
                        exportOptions: {
                            modifier: {
                                page: 'all',
                                search: 'none'
                            }
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            modifier: {
                                page: 'all',
                                search: 'none'
                            }
                        }
                    },
                    {
                        extend: 'csv',
                        exportOptions: {
                            modifier: {
                                page: 'all',
                                search: 'none'
                            }
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            modifier: {
                                page: 'all',
                                search: 'none'
                            }
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            modifier: {
                                page: 'all',
                                search: 'none'
                            }
                        }
                    },



                ],
            });

        })
        staticBackdrop
        $('#inactived').select2({
        dropdownParent: $('#staticBackdrop')
    });
    //====================Add New Permission=========================// 
    $(document).on('click','#btn_save',function(){
        let code=$('#code').val()
        let des=$('#description').val()
        let des2=$('#description2').val()
        let inactived=$('#inactived').val()
         var data={
            'code':code,
            'description2':des2,
            'description':des,
            'inactived':inactived
         };
         $.ajax({
                url:'addnewpermission',
                type:'POST',
                data:data,
                success:function(){
                    datatable.ajax.reload(null, false);
                    toastr.success('New Permission has Been add To Your Project');
                   
                    window.history.replaceState(null, null,'/permission/permission');
                    $('#staticBackdrop').modal('hide');
                }
            })
    })
//==================Show Data Edit========================/
$(document).on('click','.edit',function(){
    let data_edit=$(this).data('edit');
    
    // window.history.replaceState(null, null,"?code="+data_edit+"");
    window.history.pushState('object or string', 'title', '?code=3');
    $('#staticBackdrop').modal('show');
})
$(document).on('click','#btn_edit',function(){
    let code=$('#code').val()
        let des=$('#description').val()
        let des2=$('#description2').val()
        let inactived=$('#inactived').val()
         var data={
            'code':code,
            'description2':des2,
            'description':des,
            'inactived':inactived
         };
         $.ajax({
                url:`editpermission`,
                data:data,
                success:function(){
                    datatable.ajax.reload(null, false);
                    toastr.success(`Permission Code ${code} has been update`);
                    $('#staticBackdrop').modal('hide');
                    window.history.replaceState(null, null,'/permission/permission');
                }
            })
})
$(document).on('click','.actiondelete',function(){
    
        let code_to_delete=$(this).data('delete')
         var data={
          'code_to_delete':code_to_delete
         };
         $.ajax({
                url:`deletepermission`,
                data:data,
                success:function(){
                    datatable.ajax.reload(null, false);
                    toastr.warning('Permission Has Been delete from your System');
                }
            })
})

    });
</script>


</html>
