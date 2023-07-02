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
             
                <div class="row">
                    <h1>User</h1>
                    <hr>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">

                                        <a href="{{ url('user/newrecord') }}"> <button class="action"> Action
                                            </button></a>
                                    </div>
                                    
                                    
                                      
                                
                                @if (isset($_GET['code']))
                                    <?php
                                      $url='user/updateuser';
                                      $header=App\Models\UserModel::select('*')->where('id', $_GET['code'])->first();
                                       ?>
                                @else
                                <?php
                                $url='user/adduser';
                                ?>
                                @endif
                                </div>
                            </div>
                            <div class="col-6">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <form action="{{url($url)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2">
                             <div class="title">
                                Name
                             </div>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="name" id="name" value="{{$header->name??'';}}"> 
                            <input type="hidden" class="form-control" name="id" id="id" value="{{$header->id??'';}}"> 
                        </div> 
                            </div>
                           
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2">
                             <div class="title">
                                Email
                             </div>
                        </div>
                        <div class="col-8">
                            <input type="email" class="form-control" name="email" id="email" value="{{$header->email??'';}}">
                        </div> 
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2">
                             <div class="title">
                                Password
                             </div>
                        </div>
                        <div class="col-8">
                            <input type="password" class="form-control" id="password" name="password">
                        </div> 
                            </div>
                           
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2">
                             <div class="title">
                                SaleCode
                             </div>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" id="salecode" name="salecode" value="{{$header->salesperson_code??'';}}" >
                        </div> 
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2">
                             <div class="title">
                                Gender
                             </div>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" id="gender" name="gender" value="{{$header->gender??'';}}">
                        </div> 
                            </div>
                           
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2">
                             <div class="title">
                                Address
                             </div>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" id="address" name="address" value="{{$header->address??'';}}">
                        </div> 
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2">
                             <div class="title">
                                DOB
                             </div>
                        </div>
                        <div class="col-8">
                            <input type="date" class="form-control" id="dob" name="dob" value="{{$header->date_of_birht??'';}}">
                        </div> 
                            </div>
                           
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2">
                             <div class="title">
                                Phone
                             </div>
                        </div>
                        <div class="col-8">
                            <input type="number" class="form-control" id="phone" name="phone" value="{{$header->phone_no??'';}}">
                        </div> 
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2">
                             <div class="title">
                                User Role
                             </div>
                        </div>
                        <div class="col-8">
                             <select name="userrole" id="userrole" class="form-control">
                                 <option value="{{$header->user_role_code??'';}}">{{$header->user_role_code??'';}}</option>
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>
                             </select>
                        </div> 
                            </div>
                           
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2">
                             <div class="title">
                                Permission
                             </div>
                        </div>
                        <div class="col-8">
                            <select name="permission" id="permission" class="form-control">
                                <option value="{{$header->permission_code??'';}}">{{$header->permission_code??'';}}</option>\
                                <?php 
                             $permission=App\Models\PermissionModel::select('*')->where('inactived','yes')->get();
                                ?>
                                @foreach ($permission as $permissions)
                                <option value="{{$permissions->code}}">{{$permissions->code}}</option>
                                @endforeach
                             </select>
                        </div> 
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2">
                             <div class="title">
                                status
                             </div>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" id="status" id="status" value="{{$header->status??'';}}">
                        </div> 
                            </div>
                           
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2">
                             <div class="title">
                                Inactived
                             </div>
                        </div>
                        <div class="col-8">
                            <select name="inactived" id="inactived" class="form-control" id="inactive" name="inactive">
                                <option value="">{{$header->inactived??'';}}</option>
                                <option value="">Yes</option>
                                <option value="">No</option>
                             </select>
                        </div> 
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            
                        </div>
                        <div class="col-2">
                            <button type="submit">Save</button>
                            <button type="submit">Save&New</button>
                        </div>
                    </div>
                   

                </form>

            </main>

        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        
        $('#userrole').select2();
        $('#permission').select2();
        $('#inactived').select2();
        $('document').on('submit',function(e){
            e.preventDefault();
        })
    });
</script>
</html>
