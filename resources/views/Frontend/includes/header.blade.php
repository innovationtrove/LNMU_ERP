<style>
    
@media only screen and (max-width: 1200px) {
  .date {display:none;}
}

@media only screen and (min-width: 1200px) {
  #fontsize{
    font-size:30px;}
}

@media only screen and (max-width: 1000px) {
  #fontsize{
    font-size:25px;}
}

@media only screen and (max-width: 800px) {
  #fontsize{
    font-size:20px;}
}

@media only screen and (max-width: 600px) {
  #fontsize{
    font-size:18px;
}
}

@media only screen and (max-width: 500px) {
  #fontsize{
    font-size:16px;
}
}

@media only screen and (max-width: 400px) {
  #fontsize{
    font-size:14px;
}
}

</style>
<!-- Logo starts here -->
<nav id="yt_menuwrap" class="block">
    <div class="container">
        <div class="row" style="margin-top:5px;margin-bottom:10px ;">
            <!-- logo starts here -->


            <div id="yt_logo" class="col-md-2 col-sm-2">
                <a class="logo" href="#" title="LNMU">
                    <img data-placeholder="no" src="{{ asset('Frontend/images/icon/newlnmu.gif') }}" alt="LNMU"
                        style="width:100px" />
                </a>
            </div>
            {{-- <div id="yt_logo" class="col-md-2 col-sm-2">
                <div class="logo-wrapper menuzord-brand switchable-logo pull-left flip mt-0 pt-5 iitd-logo-section">
                    <div class="logo-animation-wrapper">
                        <img data-placeholder="no" src="{{ asset('Frontend/images/icon/logo.jpg') }}" alt="LNMU"
                        style="width:100px" />

                    </div>
                </div>
            </div> --}}

            {{-- <div id="yt_logo" class="col-md-7 col-sm-10 learnMore">
                <a class="logo" href="#" title="LNMU">
                    <img data-placeholder="no" src="{{ asset('Frontend/images/icon/lnmu-logo.jpg') }}"
                        alt="LNMU" style="height: 100px;width:950px;" />
                </a>
            </div> --}}

            <div id="yt_logo" class="col-md-7">
                <div class="logo-wrapper menuzord-brand switchable-logo pull-left flip mt-0 pt-5 iitd-logo-section">
                    <div class="logo-animation-wrapper">
                        <h3 id="fontsize">Lalit Narayan Mithila University, Darbhanga <br />
                            <span
                                style="font-size: 1vw;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Accredited with 'B' Grade by NAAC ( 2<sup>nd</sup> Cycle )
                            </span>
                        </h3>
                        <h3 id="fontsize">ललित नारायण मिथिला विश्वविद्यालय, दरभंगा</h3>

                        <h3 id="fontsize">للت نارائن متھلا یونیورسٹی' دربھنگہ</h3>
                        <h3 class="tirhuta" id="fontsize">𑒪𑒪𑒱𑒞 𑒢𑒰𑒩𑒰𑒨𑒝 𑒧𑒱𑒟𑒱𑒪𑒰 𑒫𑒱𑒬𑓂𑒫𑒫𑒱𑒠𑓂𑒨𑒰𑒪𑒨, 𑒠𑒩𑒦𑓀𑒑𑒰 </h3>
                    </div>
                    </a>
                </div>
            </div>


            <div id="yt_logo" class="col-md-3 hidden-sm">
                <div class="date">
                    <script language="JavaScript">
                        document.write(customDateString())
                    </script>
                </div>
            </div>


            {{-- <div id="yt_logo" class="col-md-2 col-sm-2">
                <a class="logo" href="#" title="LNMU">
                    <img data-placeholder="no" src="{{ asset('Frontend/images/icon/newlogo.jpg') }}"
                        alt="LNMU" style="width:100px" />
                </a>
            </div> --}}

        </div>
</nav>
<!-- logo ends here -->


<!-- navigation starts here -->
@include('Frontend.includes.menu')
<!-- navigation ends here -->
