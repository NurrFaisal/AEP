<!--TOP NAVIGATION-->
<header id="header">
    <div class="topnav" id="myTopnav">
        <a href="/"><img class="logo" style="width:150px" src="{{URL::to('/assets/images/aep-logo2.png')}}" alt=""></a>
        {{-- <a id="active">Carter-Machinery</a> --}}
        <a style="font-weight: 600; font-size: 17px" href="{{route('home')}}">Home</a>
        {{-- <a style="font-weight: 600; font-size: 17px" href="{{route('home')}}">Who we are</a> --}}
        <a style="font-weight: 600; font-size: 17px" href="{{route('brand')}}">Brands</a>
        <a style="font-weight: 600; font-size: 17px" href="{{route('about')}}">Who we are</a>
        <a style="font-weight: 600; font-size: 17px" href="{{route('contact')}}">Contact</a>
{{--        <a href="#about" style="float:right;padding: 24px 2px;"><i class="fas fa-search"></i></a>--}}
{{--        <a href="#about" style="float:right;padding: 24px 2px;"><i class="fa fa-user-circle-o"></i></a>--}}
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
    </div>
</header>

<script>
    //TOP NAVIGATION
    function NavBar() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("myTopnav").style.width = "100%";
            document.getElementById("myTopnav").style.backgroundColor = "rgba(6, 18, 33, 1)";
            document.getElementById("header").style.position = "fixed";
            document.getElementById("header").style.top = "0%";
        } else {
            document.getElementById("myTopnav").style.width = "80%";
            document.getElementById("myTopnav").style.backgroundColor = "rgba(6, 18, 33, 0.8)";
            document.getElementById("header").style.position = "fixed";
            document.getElementById("header").style.top = "2rem";
        }
    }


</script>
