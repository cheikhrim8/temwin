<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">{{('template.copyright')}} &copy; {{now()->year}}
            <a class="text-bold-800 grey darken-2" href="https://www.dcs-sarl.com" target="_blank">
                <img src="{{env('APP_LOGO')}}" width="50" alt="">
            </a>
        </span>
        <span class="float-md-right d-none d-lg-block">{{__('template.Hand-crafted & Made with')}}
            <i class="ft-heart pink"></i>
            <span id="scroll-top"></span>
        </span>
    </p>
</footer>
