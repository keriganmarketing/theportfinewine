<footer class="sticky-footer bg-black">
    <div class="container footer-content">
        <div class="row">
            
            <div class="col-sm text-center">
                <div class="footer-content">
                    <h4>Open Hours</h4>
                    {!! nl2br(get_field('footer_hours', 'option')) !!}
                </div>
            </div>

            <div class="col-sm">
                <div class="text-center footer-logo">
                    <img src="/themes/wordplate/assets/images/footerlogo.png" alt="THe Port Fine Wine & Spirits" class="img-fluid">
                </div>
            </div>

            <div class="col-sm text-center text-lg-left">
                <div class="footer-content">
                    <h4 class="text-center">Quick Contacts</h4>
                    <p class="text-center"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        {!! nl2br(get_field('address', 'option')) !!}</p>
                    <p class="text-center"><a href="tel:{{ get_field('phone', 'option') }}"><i class="fa fa-phone" aria-hidden="true"></i> 
                        {{ get_field('phone', 'option') }}</a></p>
                    <p class="text-center contact-info"><a href="mailto:{{ get_field('email', 'option') }}"><i class="fa fa-envelope" aria-hidden="true"></i>
                        {{ get_field('email', 'option') }}</a></p>
                </div>
            </div>
            
        </div>
    </div>
    <p class="copyright text-center">&copy;{{ date('Y') }} {{ get_bloginfo() }}. All Rights&nbsp;Reserved. 
        <a style="text-decoration:underline;" href="/privacy-policy" >Privacy&nbsp;Policy</a> 
        <span class="siteby">
            <svg version="1.1" id="kma" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="14" width="20"
                viewBox="0 0 12.5 8.7" style="enable-background:new 0 0 12.5 8.7;"
                xml:space="preserve">
                    <path fill="#b4be35"
                d="M6.4,0.1c0,0,0.1,0.3,0.2,0.9c1,3,3,5.6,5.7,7.2l-0.1,0.5c0,0-0.4-0.2-1-0.4C7.7,7,3.7,7,0.2,8.5L0.1,8.1 c2.8-1.5,4.8-4.2,5.7-7.2C6,0.4,6.1,0.1,6.1,0.1H6.4L6.4,0.1z"></path>
            </svg> &nbsp;<a href="https://keriganmarketing.com">Site&nbsp;by&nbsp;KMA</a>.
        </span></p>
</footer>