
<!DOCTYPE html>
<html lang="en" class=" ">

@include('includes.header')

<style type="text/css"> .notify{ z-index: 1000000; margin-top: 5%; } </style>






<body class=" menu-full header-image html"  data-header="light" data-footer="light"  data-header_align="app"  data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light" data-footer_menu="show" data-footer_menu_style="light"  >

    
    <div class="preloader-background">
      <div class="preloader-wrapper">
        <div class="configure-border-1">  
        </div>  
        <div class="configure-border-2">
        </div> 
      </div>
    </div>



@include('includes.nav')

  
<div class="content-area">

   
     
  

@yield('contents')
    

  
  </div>


  @include('sweetalert::alert')
</body>

@include('includes.footer')

@include('includes.scripts')



</html>