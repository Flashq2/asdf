<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Log In</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        body {
            background-color: #ffffff;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='1' y2='0'%3E%3Cstop offset='0' stop-color='%230FF'/%3E%3Cstop offset='1' stop-color='%23CF6'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%23F00'/%3E%3Cstop offset='1' stop-color='%23FC0'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23FFF' fill-opacity='0' stroke-miterlimit='10'%3E%3Cg stroke='url(%23a)' stroke-width='2'%3E%3Cpath transform='translate(0 0)' d='M1409 581 1450.35 511 1490 581z'/%3E%3Ccircle stroke-width='4' transform='rotate(0 800 450)' cx='500' cy='100' r='40'/%3E%3Cpath transform='translate(0 0)' d='M400.86 735.5h-83.73c0-23.12 18.74-41.87 41.87-41.87S400.86 712.38 400.86 735.5z'/%3E%3C/g%3E%3Cg stroke='url(%23b)' stroke-width='4'%3E%3Cpath transform='translate(0 0)' d='M149.8 345.2 118.4 389.8 149.8 434.4 181.2 389.8z'/%3E%3Crect stroke-width='8' transform='rotate(0 1089 759)' x='1039' y='709' width='100' height='100'/%3E%3Cpath transform='rotate(0 1400 132)' d='M1426.8 132.4 1405.7 168.8 1363.7 168.8 1342.7 132.4 1363.7 96 1405.7 96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }

        body.antialiased {
            font-family: 'Nunito', sans-serif;
            background-color: #e2e8f0 !important
        }
        
        .center {
            border-radius: 10px;
            background: #e0e0e0;
            
            padding: 60px;
            padding: 30px;
            position: absolute;
            margin-top: 60px;
            left: 50%;
            top: 40%;
            width: 300px;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 9999;

        }

        .center button a {
            color: white;
            padding: 10px;
            font-weight: 600
        }

        button {
            border-radius: .25rem;
            text-transform: uppercase;
            font-style: normal;
            font-weight: 400;
            padding-left: 25px;
            padding-right: 25px;
            color: #fff;
            -webkit-clip-path: polygon(0 0, 0 0, 100% 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0 100%);
            clip-path: polygon(0 0, 0 0, 100% 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0 100%);
            height: 40px;
            font-size: 0.7rem;
            line-height: 14px;
            letter-spacing: 1.2px;
            transition: .2s .1s;
            background-image: linear-gradient(90deg, #1c1c1c, #fb2020);
            border: 0 solid;
            overflow: hidden;
            margin: 30px;
        }

        button:hover {
            cursor: pointer;
            transition: all .3s ease-in;
            padding-right: 30px;
            padding-left: 30px;
        }
        body {
  font-family: 'Josefin Sans', sans-serif;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
.container-fluid{
  height: 100%;
  margin: 0;
  padding: 0;
  width: 100%;
  background: #FFF;
}
/* ============= Animation background ========= */
.background {
  background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
  background-size: 400% 400%;
  animation: Gradient 15s ease infinite;
  position: relative;
  height: 100vh;
  width: 100%;
  overflow: hidden;
  padding:0;
  margin:0px;
}
.cube {
  position: absolute;
  top: 80vh;
  left: 45vw;
  width: 10px;
  height: 10px;
  border: solid 1px #D7D4E4;
  transform-origin: top left;
  transform: scale(0) rotate(0deg) translate(-50%, -50%);
  animation: cube 12s ease-in forwards infinite;
}
.cube:nth-child(2n) {
  border-color: #FFF ;
}
.cube:nth-child(2) {
  animation-delay: 2s;
  left: 25vw;
  top: 40vh;
}
.cube:nth-child(3) {
  animation-delay: 4s;
  left: 75vw;
  top: 50vh;
}
.cube:nth-child(4) {
  animation-delay: 6s;
  left: 90vw;
  top: 10vh;
}
.cube:nth-child(5) {
  animation-delay: 8s;
  left: 10vw;
  top: 85vh;
}
.cube:nth-child(6) {
  animation-delay: 10s;
  left: 50vw;
  top: 10vh;
}
/* ================= Header ============ */
header{
  position: absolute;
  top:0%;
  left: 0%;
  width:100%;
  margin: 0;
  padding: 0;
}
/* navbar */
nav{
  color: #FFF;
  float: right;
  margin:30px 90px;
}
nav ul{
  list-style: none;
}
nav ul li {
  float: left;
  transition: .3s;
}
nav ul li a{
  text-decoration: none;
  color: #EFEEF5;
  transition: .5;
  font-size: 15px;
  margin-left:16px;
}
nav ul li:hover a{
  text-decoration: none;
  color: #591BC5;;
}
nav ul li:hover{
  height: 45px;
  padding-top: 30px;
  margin-top: -30px;
 background: #EFEEF5;
  text-decoration: none;
  transform: skew(15deg);
}
/* Logo */
.logo{
  width: 35px;
  height: 35px;
  background: #EFEEF5;
  margin: 40px 63px;
  float: left;
  transform: rotate(-30deg);
}
.logo span{
  color: #591BC5;
  font-size: 2em;
  line-height: 1.4;
  padding-left: 5px;
  font-weight: bold;
}
/* Header content & title & button*/
.header-content{
  margin-top:25%;
  text-align: center;
  color:  #EFEEF5;
}
.header-content h1{
  text-transform: uppercase;
  font-size: 3em;
  letter-spacing: 1px;
}
.header-content p {
  font-size: 20px;
  line-height: 1.5;
  margin: 20px auto;
}
.header-content button{
  width: 140px;
  margin:20px 10px;
  color: #591BC5;
  font-size: 17px;
  border:1px solid #EFEEF5;
  font-weight: 500;
  background: #EFEEF5;
  border-radius: 20px;
  padding: 10px;
  cursor:pointer;
  transition: .3s;
}
.header-content button:hover{
  border-radius: 0;
}
/* Animate Background*/
@keyframes Gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes cube {
  from {
    transform: scale(0) rotate(0deg) translate(-50%, -50%);
    opacity: 1;
  }
  to {
    transform: scale(20) rotate(960deg) translate(-50%, -50%);
    opacity: 0;
  }
}

    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 center">
        <h1> Login</h1>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <button> <a href="{{ url('/dashboard') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></button>
                @else
                    <button><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                            in</a></button>
                @endauth
            </div>
        @endif
        

    </div>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

        <!-- Background & animion & navbar & title -->
          <div class="container-fluid">
        <!-- Background animtion-->
            <div class="background">
               <div class="cube"></div>
               <div class="cube"></div>
               <div class="cube"></div>
               <div class="cube"></div>
              <div class="cube"></div>
            </div>
        <!-- header -->
           <header>
        <!-- navbar -->
          
        <!-- logo -->
              <div class="logo"><span>N</span></div>
        <!-- title & content -->
             
          </header>
</body>

</html>