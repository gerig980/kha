<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>KHA Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Klea Huta Academy" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Klea Huta Academy" />
      
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"-->
    <!--    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
     <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
    />
    <link
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
  integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
/>
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/styles.css') }}" />
    

    <style>

        .music-button{
            background-color:transparent !important;
            border:transparent;

        }
        .icon-1 {
            outline: none transparent !important;
        }
    .logo-desktop{
        display:block;
    }
    .logo-mobile{
        display:none;
    }
    .svg-desktop{
    display:flex;
    }
    .svg-mobile{
        display:none;
    }
    .fa-cart-desktop{
        display:flex;
    }
    .fa-cart-mobile{
        display:none;
    }
    /*.header-navbar .header {*/
    /*  width: 92%;*/
    /*  margin: auto;*/
    /*}*/

    /*.footer {*/
    /*  background: #181818;*/
    /*}*/

    /*.footer-last-line .last-line {*/
    /*  width: 92%;*/
    /*  margin: auto;*/
    /*}*/
  /*      .footer .footer-third-col{*/
  /*     justify-content:end;*/
  /*     align-items:center;*/
  /*}*/
  .dropdown-item.active, .dropdown-item:active {    
   
      background-color: transparent !important;
      }
@media only screen and (max-width: 700px) {
.header-navbar{
    background-color:black;
}
      /*.header-navbar .dropdown-menu { */
      /* width: 80% !important;*/
      /*}*/
      .logo-desktop{
            display:none;
        }
        .logo-mobile{
            display:block;
        }
        .svg-desktop{
          display:none;
     }
    .svg-mobile{
        display:flex;
    }
    .fa-cart-desktop{
        display:none;
    }
    .fa-cart-mobile{
        display:flex;
    }
    }

</style>
    @stack('css')
</head>

</html>