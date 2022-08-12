<script src="{{asset('assets/js/pwa.js')}}"></script>

<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

<!-- CORE JS FRAMEWORK - START -->
<script src="{{ asset('modules/jquery/jquery-2.2.4.min.js')}}"></script>
<script src="{{ asset('modules/materialize/materialize.js')}}"></script>
<script src="{{ asset('modules/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('assets/js/variables.js')}}"></script>
<!-- CORE JS FRAMEWORK - END -->


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{ asset('assets/js/common.js')}}"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


<!-- CORE TEMPLATE JS - START -->
<script src="{{ asset('modules/app/init.js')}}"></script>
<script src="{{ asset('modules/app/settings.js')}}"></script>

<script src="{{ asset('modules/app/scripts.js')}}"></script>

<!-- END CORE TEMPLATE JS - END -->


<script src="{{ asset('assets/js/preloader.js')}}"></script>



<script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js', {
            scope: '.'
        }).then(function (registration) {
            // Registration was successful
            console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            // registration failed :(
            console.log('Laravel PWA: ServiceWorker registration failed: ', err);
        });
    }
</script>