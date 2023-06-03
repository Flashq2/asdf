<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>
<style>
     
    body {
        font-family: battambong;
        box-sizing: border-box;
    }

    .filter_statistice {

        padding: 5px;
    }
    .hidden-xs{
        color: white;
    }

    .cart_box {
        /* background: linear-gradient(to right,rgb(91, 91, 182),rgb(150, 54, 150)); */
        background-color: white;
        height: 100px;
        border-radius: 10px !important;
        padding: 5px;
        border: 1px solid rgba(180, 208, 224, 0.5);
        box-shadow: 3px 4px 23px #edecec;
        width: 93%;
        float: right;
    }

    .cart_box .style_img {
        width: 50px;
        height: 50px;
        border-radius: 50% 50% !important;
        background-color: rgb(245, 245, 245);
        float: right !important;
        overflow: hidden;
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .cart_box .style_img img {
        width: 50%;
        height: 50%;
        object-fit: contain;

    }
    .cart_box_heightx2{
          /* background: linear-gradient(to right,rgb(91, 91, 182),rgb(150, 54, 150)); */
        background-color: white;
        height: 200px;
        border-radius: 10px !important;
        padding: 5px;
        border: 1px solid rgba(180, 208, 224, 0.5);
        box-shadow: 3px 4px 23px #edecec;
        width: 93%;
        float: right;
    }

    span {
        color: gray;
    }

    .titile_box {
        margin-left: 10px;
         
    }

    .main_title {
        width: 100%;
        font-size: 18px;
        color: #334257;
        font-weight: 600;

    }

    .data_quantity {
        width: 100%;
        font-size: 24px;
        color: gray;
        font-weight: 600;
    }

    .top_cart_title {
        padding: 10px;
        font-size: 22px;
        margin-bottom: 10px;
    }

    .filter_statistice {
        background-color: #ffff;
        border-radius: 10px !important;
        width: 97%;
        margin: 0 auto;
        margin-top: 10px;
    }
    .form_subdata{
        
     
    }
    .sub_data{
        
       background-color: rgba(110, 137, 175, 0.0509803922);
        border-radius: 10px !important;
         float:right;
       padding: 20px;
       width: 93%;
    }
    .sub_title_data{
        text-align: right;
        font-size: 20px;
        font-weight: 600;
        color: rgba(0, 0, 255, 0.688)
    }
    .sub_title_img img{
        width: 20px;
        height: 20px;
        object-fit: contain;
    }
    .sub_title_title{
        font-size: 18px;
    }
    .cart_space_bottom{
        margin-bottom: 9px;
        /* margin-left: 5px; */
    }
    .cart_space_bottom:last-child{
        margin-bottom: 30px;
    }
    .sub_data:hover{
        /* transform: scale(1.05); */
         transition: 0.2s ease;
        box-shadow: 2px 2px 15px rgba(7, 59, 116, 0.15);
        cursor: pointer;
    }
    .dashboard-content-container{
        background-color: #ffe1e100 !important;
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
                    <div class="filter_statistice">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="top_cart_title">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <span>Business Analytics</span>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="row">
                                                <input type="date" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="cart_box">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="titile_box">
                                                <span class="main_title">Today Sale</span><br>
                                                <span class="data_quantity">89.00$</span><br>
                                                <span class="data_remark">+2% since last month</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="style_img">
                                                <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="cart_box">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="titile_box">
                                                <span class="main_title">Today Sale</span><br>
                                                <span class="data_quantity">89.00$</span><br>
                                                <span class="data_remark">+2% since last month</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="style_img">
                                                <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="cart_box">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="titile_box">
                                                <span class="main_title">Today Sale</span><br>
                                                <span class="data_quantity">89.00$</span><br>
                                                <span class="data_remark">+2% since last month</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="style_img">
                                                <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="cart_box">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="titile_box">
                                                <span class="main_title">Today Sale</span><br>
                                                <span class="data_quantity">89.00$</span><br>
                                                <span class="data_remark">+2% since last month</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="style_img">
                                                <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
<hr>
                        <div class="row ">

                            <div class="form_subdata">
                                <div class="row">

                                
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 cart_space_bottom  ">
                                    <div class="sub_data">
                                        <div class="col-lg-1 col-xs-1">
                                            <div class="sub_title_img">
                                                    <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4">
                                            <div class="sub_title_title">
                                                <span>Order</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-xs-7">
                                            <div class="sub_title_data">
                                                 <span>90</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 cart_space_bottom">
                                    <div class="sub_data">
                                        <div class="col-lg-1 col-xs-1">
                                            <div class="sub_title_img">
                                                    <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4">
                                            <div class="sub_title_title">
                                                <span>Order</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-xs-7">
                                            <div class="sub_title_data">
                                                 <span style="color:#0052ea;">90</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 cart_space_bottom">
                                    <div class="sub_data">
                                        <div class="col-lg-1 col-xs-1">
                                            <div class="sub_title_img">
                                                    <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4">
                                            <div class="sub_title_title">
                                                <span>Order</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-xs-7">
                                            <div class="sub_title_data">
                                                 <span>90</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 cart_space_bottom">
                                    <div class="sub_data">
                                        <div class="col-lg-1 col-xs-1">
                                            <div class="sub_title_img">
                                                    <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4">
                                            <div class="sub_title_title">
                                                <span>Order</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-xs-7">
                                            <div class="sub_title_data">
                                                 <span>90</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 cart_space_bottom">
                                    <div class="sub_data">
                                        <div class="col-lg-1 col-xs-1">
                                            <div class="sub_title_img">
                                                    <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4">
                                            <div class="sub_title_title">
                                                <span>Order</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-xs-7">
                                            <div class="sub_title_data">
                                                 <span>90</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 cart_space_bottom">
                                    <div class="sub_data">
                                        <div class="col-lg-1 col-xs-1">
                                            <div class="sub_title_img">
                                                    <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4">
                                            <div class="sub_title_title">
                                                <span>Order</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-xs-7">
                                            <div class="sub_title_data">
                                                 <span>90</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 cart_space_bottom">
                                    <div class="sub_data">
                                        <div class="col-lg-1 col-xs-1">
                                            <div class="sub_title_img">
                                                    <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4">
                                            <div class="sub_title_title">
                                                <span>Order</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-xs-7">
                                            <div class="sub_title_data">
                                                 <span>90</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 cart_space_bottom">
                                    <div class="sub_data">
                                        <div class="col-lg-1 col-xs-1">
                                            <div class="sub_title_img">
                                                    <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4">
                                            <div class="sub_title_title">
                                                <span>Order</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-xs-7">
                                            <div class="sub_title_data">
                                                 <span>90</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="filter_statistice">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top_cart_title">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <span>Wallet</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row">
                                            <input type="date" class="form-control">
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="cart_box_heightx2">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <div class="titile_box">
                                            <span class="main_title">Today Sale</span><br>
                                            <span class="data_quantity">89.00$</span><br>
                                            <span class="data_remark">+2% since last month</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="style_img">
                                            <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="row">
                                <div class="col-xl-6"><div class="cart_box">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="titile_box">
                                                <span class="main_title">Today Sale</span><br>
                                                <span class="data_quantity">89.00$</span><br>
                                                <span class="data_remark">+2% since last month</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="style_img">
                                                <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                                <div class="col-xl-6"><div class="cart_box">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <div class="titile_box">
                                            <span class="main_title">Today Sale</span><br>
                                            <span class="data_quantity">89.00$</span><br>
                                            <span class="data_remark">+2% since last month</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="style_img">
                                            <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                             </div></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><div class="cart_box">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="titile_box">
                                                <span class="main_title">Today Sale</span><br>
                                                <span class="data_quantity">89.00$</span><br>
                                                <span class="data_remark">+2% since last month</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="style_img">
                                                <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                                <div class="col-xl-6"><div class="cart_box">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <div class="titile_box">
                                            <span class="main_title">Today Sale</span><br>
                                            <span class="data_quantity">89.00$</span><br>
                                            <span class="data_remark">+2% since last month</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="style_img">
                                            <img src="{{ asset('/img/shopcon.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                             </div></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="filter_statistice">
                    <div class="row">
                        <div class="col-xl-12">
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            </main>

        </div>
    </div>
</body>
<script src="https://cdnjs.com/libraries/Chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
      var options = {
          series: [{
          name: 'Net Profit',
          data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
          name: 'Revenue',
          data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, {
          name: 'Free Cash Flow',
          data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        },
        yaxis: {
          title: {
            text: '$ (thousands)'
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>
@include('script');
 
</html>
