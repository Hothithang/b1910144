<?php $this->layout("layouts/default", ["title" => 'C1999 | Discover women"s fashion']) ?>

<?php $this->start("page") ?>

<main>
    <div class="container-fluid main-index">
        <!-- Banner -->
        <div class="banner-container row">
            <div class="col-2 p-0 bg-dark text-white d-flex flex-column justify-content-center align-items-center">
                <div class="hide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </div>
                <div class="show">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg>
                </div>
            </div>

            <div class="banner col-10 p-4">
                <div class="row mt-3">
                    <div class="col-12 col-lg-6 mb-3">
                        <p><b>FIRST ITEM OF YOUR CHOICE AND GET</b></p>
                        <p><sup>US</sup><span> $10 OFF</span></p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="ms-4">FREE SHIPPING</p>
                    </div>
                </div>
                <a href="/products/view" class="btn btn-dark mt-4 float-end fs-4" >SHOP NOW</a>
            </div>
        </div>

        <!-- Home content -->
        <div class="row">
            <a href="/" class="col-md-6">
                <video src="/images/home/home1.mp4" alt="" width="100%" autoplay playsinline loop muted></video>
                <div class="row main-index-tittle d-flex justify-content-between align-items-center">
                    <div class="col new-anm">NEW</div>
                    <div class="col d-flex justify-content-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                        </svg>
                    </div>
                </div>    
            </a>

            <a href="/" class="col-md-6">
                <img src="/images/home/home2.jpg" width="100%" alt="">
                <div class="row main-index-tittle d-flex justify-content-between align-items-center">
                    <div class="col">BEST SELLERS</div>
                    <div class="col d-flex justify-content-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                        </svg>
                    </div>
                </div>
            </a>
        </div>

        <div class="row">
            <a href="/" class="col">
                <img src="/images/home/home3.jpg" alt="" width="100%">
                <div class="row main-index-tittle d-flex justify-content-between align-items-center">
                    <div class="col">NEW ARRIVALS</div>
                    <div class="col d-flex justify-content-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                        </svg>
                    </div>
                </div>
            </a>
        </div>     

        <div class="row">
            <a href="" class="col">
                <video src="/images/home/home4.mp4" alt="" width="100%" autoplay playsinline loop muted></video>
            </a>
        </div>     
    </div>
</main>
<?php $this->stop() ?>

<?php $this->start("page_specific_js"); ?>

    <script>
        $(document).ready(function(){
            $(".banner-container .hide").click(function(){
                $(".banner-container").css({"width": "5%", "background-color":"#292828"});
                $(".banner").hide("slow");
            });
            $(".show").click(function(){
                $(".banner-container").css({"width": "30%","background-color":"#fff"});
                $(".banner").show("slow");
            });
        });
    </script>
<?php $this->stop() ?>
