<nav class="fix_topscroll logo_on_fixed  topbar navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="{{ route('dashboard')}}" class=" brand-logo " >The Designer</a>    
        
        <a href="#" data-target="" class="waves-effect waves-circle navicon back-button htmlmode show-on-large "><i class="mdi mdi-arrow-left" data-page=""></i></a>
      
      
      {{-- <a href="#" data-target="slide-nav" class="waves-effect waves-circle navicon sidenav-trigger show-on-large"><i class="app-icon-menu1"></i></a> --}}
  
      <a id="nav" data-target="slide-settings" class="waves-effect waves-circle navicon right sidenav-trigger show-on-large"><i class="app-icon-menu1"></i></a>
  
     {{-- <a href="#" data-target="" class="waves-effect waves-circle navicon right nav-site-mode show-on-large"><i class="app-icon-contrast"></i></a> --}}
      <!-- <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
    </div>
  </nav>





 





  {{-- <ul id="slide-nav" class="sidenav sidemenu">
    <li class="user-wrap">
      <div class="user-view row">
       
              <div class="col s3 imgarea">
          <a href="#user" class="status available"><img class="circle" src="assets/images/menu-user.jpg" alt="menu user"></a>
        </div>
              <div class="col s9 infoarea">
          <a href="ui-app-profile.html"><span class="name">Emma Bailey</span></a>
          <a href="ui-app-profile.html"><span class="email">emma.bailey@gmail.com</span></a>
        </div>
      </div>
      


      
          
  
  
    </li>
  
  
    <li class="menulinks">
      <ul class="collapsible">
        <!-- Menu Data Start-->
      <li class="sh-wrap"><div class="subheader">Explore</div></li>
                          <li class="lvl1 ">
                          <div class=" waves-effect   ui-app-chat-rooms " >
                              <a href="sub-home.html">
                              <i class="mdi mdi-home-outline"></i>
                              <span class="title">Home Pages</span><div class='lvl1-tag'>App home screens versions</div><span class="badge">11</span></a>
                              </div>
                          </li>
                          <li class="lvl1 ">
                          <div class=" waves-effect   ui-app-chat-rooms " >
                              <a href="sub-screens.html">
                              <i class="mdi mdi-script"></i>
                              <span class="title">App Screens</span><div class='lvl1-tag'>Commonly used App Screens</div></a>
                              </div>
                          </li>
                          <li class="lvl1 ">
                          <div class=" waves-effect  active ui-app-chat-rooms " >
                              <a href="sub-account.html">
                              <i class="mdi mdi-account-search-outline"></i>
                              <span class="title">User Account</span><div class='lvl1-tag'>User dependent personal screens</div><span class="badge">4</span></a>
                              </div>
                          </li>
                          <li class="lvl1 ">
                          <div class=" waves-effect   ui-app-chat-rooms " >
                              <a href="sub-userinterface.html">
                              <i class="mdi mdi-flask-outline"></i>
                              <span class="title">User Interface</span><div class='lvl1-tag'>Styled App UI elements</div></a>
                              </div>
                          </li>
                          <li class="lvl1 ">
                          <div class=" waves-effect   ui-app-chat-rooms " >
                              <a href="sub-elements.html">
                              <i class="mdi mdi-clipboard-outline"></i>
                              <span class="title">Elements</span><div class='lvl1-tag'>Usable App ready sections</div></a>
                              </div>
                          </li>
                          <li class="lvl1 ">
                          <div class=" waves-effect   ui-app-chat-rooms " >
                              <a href="sub-components.html">
                              <i class="mdi mdi-cellphone-settings"></i>
                              <span class="title">Components</span><div class='lvl1-tag'>App inbuilt UX components </div></a>
                              </div>
                          </li>
                          <li class="lvl1 ">
                          <div class=" waves-effect   ui-app-chat-rooms " >
                              <a href="sub-apps-ecommerce.html">
                              <i class="mdi mdi-cart-outline"></i>
                              <span class="title">Shop</span><div class='lvl1-tag'>Ecommerce and shopping platform</div><span class="badge">7</span></a>
                              </div>
                          </li>
                      <li class="lvl1 ">
                      <div class="waves-effect "><a href="#" data-target="slide-settings" class="sidenav-trigger"><i class="mdi mdi-settings-outline"></i><span class="title">Settings</span><div class='lvl1-tag'>Custom App branding settings</div>  </a>
                          </div></li>    <!-- Menu Data End-->
  
  
  </ul>
  </li>
  
  
        <li class="sep-wrap"><div class="divider"></div></li>
      <li class="sh-wrap"><div class="subheader">Recent Chats</div></li>
      <li class="menu-users">
          
  --}}
  
  
 
  
   {{-- </li>
  
  
  <li class="copy-spacer"></li>
  <li class="copy-wrap">
    <div class="copyright">&copy; Copyright @ themepassion</div>
  
    </ul> --}}

<div  id="nav_details"  
style="background-color: transparent; z-index:2; display: none; width: 200px; position: absolute; top: 40px; right: 100px;">

@auth
<ul class="collection friends contacts  z-depth-1 " >
   
  <li class="collection-item avatar  " style="min-height: 10px">

   
      <a href="{{ route('profile')}}">
         
          <h6>   Profile <i class="mdi mdi mdi-settings z-depth-1"></i>  </h6>
      </a>
    
              
  </li>

      <li class="collection-item avatar  " style="height: 10px">

          <a href="{{ route('logout')}}">
             
           <h6> Log out  <i class="mdi mdi-run z-depth-1"></i>  </h6>
          </a>
           
          </li>

     

</ul>
@endauth
  @guest
  <ul class="collection friends contacts  z-depth-1 " >
   
    <li class="collection-item avatar  " style="min-height: 10px">
  
     
        <a href="{{ route('register')}}">
           
            <h6>   Sign Up <i class="mdi mdi mdi-settings z-depth-1"></i>  </h6>
        </a>
      
                
    </li>

        <li class="collection-item avatar  " style="height: 10px">
  
            <a href="{{ route('login')}}">
               
             <h6> Log in  <i class="mdi mdi-run z-depth-1"></i>  </h6>
            </a>
             
            </li>
  
       
  
  </ul>
  @endguest

    
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

$("#nav").click(function(){
  // alert('working');
  $("#nav_details").toggle(1000);
});


    </script>