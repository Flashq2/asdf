<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>
<style>
    .spantime{
        width: 10px;
        height: 10px;
        border-radius: 3px;
        background-color: cadetblue;
        cursor: pointer;
        display: inline;
        padding: 5px;
        color: white;
        
    }
</style>
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
                                    <div class="col-2 add">
                                      
                                    <button> Action </button>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                {{-- <div class="row">
                    <table id="user" class="table" style="width:100%">
                        <thead>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Sale_Persion</th>
                            <th>Gender</th>
                            <th>Phone_No</th>
                            <th>Permision_Code</th>
                            <th>User Role Code</th>
                            <th>Address</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div> --}}
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <input type="text" class="form-control datetimes" name="datetimes" id="01" ><span class="spantime" onclick="erpUI.datatimefiler('01')">Click</span>
                            <input type="text" class="form-control datetimes" name="datetimes"  id="02"><span class="spantime" onclick="erpUI.datatimefiler('02')">Click</span>
                            <input type="text" class="form-control datetimes" name="datetimes" id="03"><span class="spantime"  onclick="erpUI.datatimefiler('03')">Click</span>
                             
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
</body>
@include('script');
<script>
    $(function() {
   
    });
    </script>
 <script>
    $(document).ready(function () {
        
       

        
       
        // $(document).on('click','.add',function(){
        //     let field="datetime";
        // let value=$('.textvalue').val()
        //   $.ajax({
        //     type: "GET",
        //     url:`returnvalue/${field}/${value}`,
        //     success: function (response) {
        //             console.log(response);
        //     }
        // });  
        // })
        
    });
 
 </script>
</html>
