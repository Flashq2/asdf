
<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>
<style>
    .titles::first-letter{
        text-transform: capitalize;
    }
    .control_img{
        height: 300px;
        margin-top: 30px;
        border-radius: 5px !important;
        /* border: 2px solid #ede3e3; */
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    .control_img  img{
        width: 70%;
        height: 80%;
        object-fit: contain;
        

         
    }
    .card {
  margin: 20px;
  padding: 20px;
  width: 300px;
  min-height: 200px;
  display: grid;
  grid-template-rows: 20px 50px 1fr 50px;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.2s;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}

.card__link,
.card__exit,
.card__icon {
  position: relative;
  text-decoration: none;
  color: rgba(19, 17, 17, 0.9);
  width: 100%;
  height: 100px;
  /* background: aqua; */
  border-radius: 20px;
}
.card__icon img{
    width: 100%;
    height: 100%;
    object-fit: contain;

}

.card__link::after {
  position: absolute;
  top: 25px;
  left: 0;
  content: "";
  width: 0%;
  height: 3px;
  background-color: rgba(255, 255, 255, 0.6);
  transition: all 0.5s;
}

.card__link:hover::after {
  width: 100%;
}

.text {
  color: rgb(187, 8, 8);
}

.card__exit {
  grid-row: 1/2;
  justify-self: end;
}

.card__icon {
  grid-row: 2/3;
  font-size: 30px;
}

.card__title {
  grid-row: 3/4;
  font-weight: 400;
  color: #c51818;
}

.card__apply {
  grid-row: 4/5;
  align-self: center;
}

.card-5 {
  /* background: radial-gradient(#f588d8, #c0a3e5); */
}

@media (max-width: 1600px) {
  .cards {
    justify-content: center;
  }
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
                    <h1>Items</h1>
                     
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-8">
                        <form action="">
                            <div class="row">

                                @foreach ($field as $item_field)
                                @if($item_field !='updated_at' && $item_field !='created_at' && $item_field !='deleted_at'  && $item_field !='picture' )
                            <div class="col-lg-6">
                                <label for="" style="padding:5px;" class="titles">{{str_replace('_',' ',$item_field)}}</label>
                               <input type="text" class="form-control" id="{{$item_field}}">
                           </div>
                           @endif
                            @endforeach
                            </div>
                            
                            
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="control_img">
                            <img src="https://cdn-icons-png.flaticon.com/512/3237/3237472.png" alt="">
                            <h4>Click on image ot upload</h4>
                        </div>
                    </div>
                    <div class="col-8">
                        <button>Submit</button>
                        <button style="background-color:red;">Reset</button><br>
                    </div>
                </div>
                <div class="row">
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
                </div>
                <div class="row">
                    <div class="col-lg-4 facebookapi">
                        {{-- <div class="card card-5">
                            <div class="card__icon">
                                <img src="https://cdn-icons-png.flaticon.com/512/4712/4712881.png" alt="">
                            </div>
                            <p class="card__exit">※</p>
                            <div class="text">Ut aliquip ex ea commodo consequat. Duis aute irure dolor</div>
                            <p class="card__apply">
                              <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
                            </p>
                          </div> --}}
                    </div>
                </div>
            </main>

        </div>
    </div>
   
{{-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0&appId=965855694586098&autoLogAppEvents=1" nonce="qR4jPgar"></script> --}}
</body>
@include('script');
{{-- <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId            :'',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v17.0'
      });
      console.log(" dd")
       FB.api('/ 115677174889737/feed','GET',{"fields":"full_picture,message,id,event,shares,target,likes,created_time,comments,reactions"},
       function(response) {
      console.log(response)
      console.log(" Note work")
  }
);
    };
   
  </script> --}}
  {{-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script> --}}
{{-- <script>
    $(document).ready(function() {
     $.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
        FB.init({
  appId     :'1735349403560652',
  xfbml     : true,
  cookie    : true,
  version   : 'v17.0'
});
// FB.api('/115677174889737/feed','GET',{"fields":"full_picture"},function(response) { console.log(response.error.message)}
// );
FB.api(
  '/1409249143241942/posts',
  'GET',
  {"pretty":"0","until":"1661173322","since":null,"__paging_token":"enc_AdCy8jF3ZBe6YmStxN6ag30mQdfWP1hSJiAgSsPixeUquZAMY6a3sDXGOCN2TzElsfXZCrXVhd37ggF5I8fW4aHbd7L1hQl1SeIc9jM6ydvx3FB9QZDZD","__previous":null},
  function(response) {
     console.log(response)
  }
);
    
     });
   });
   </script> --}}
   <script>
    $(document).ready(function () {
    
   $.ajaxSetup({ cache: true });
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  $.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
    FB.init({
      appId: '1735349403560652',
      version: 'v17.0',
    });     
    FB.api(
  '/115677174889737/feed',
  'GET',
  {'url':"https://graph.facebook.com/v17.0/115677174889737/feed?access_token=EAAYqSoTCqswBAOSCpKGfs0JlZB51m3ZCMKvDQG8KlNiGE3QGy8DWCUlUItJgmRzKVfJ79UhYIe7sWT4rGcb8nUuyuX4DWLiVCIjEUXuQxM7VLhvrTSaxFzHW1BOtQFiZCSIGMBShZBZBsqKiqEO06DTOFFWy2loDROHqJ6ggGnX0VLAznYsKlNDtQpDk5cOdZC2C2gKELphLZAfoaHGloKG"},
  function(response) {
     console.log(response)
  }
);
  });
 
    });
   </script>
</html>
