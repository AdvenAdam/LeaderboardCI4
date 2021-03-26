<?= $this->extend('layout/v_main.php'); ?>
<?= $this->section('content'); ?>
<div class="page-container">
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">About</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>About</a>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5><?= $isi; ?></h5>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.</p>
                            <hr>
                            <h5>Specialilty</h5>
                            <h5 class="m-t-20">
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">Sketch</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">Marvel</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">Photoshop</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">Illustrator</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">Web Design</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">Mobile App Design</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">User Interface</span>
                                <span class="badge badge-pill badge-default font-weight-normal m-r-10 m-b-10">User Experience</span>
                            </h5>
                            <hr>
                            <h5>Experices</h5>
                            <div class="m-t-20">
                                <div class="media m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="/enlink/assets/images/others/adobe-thumb.png" alt="">
                                    </div>
                                    <div class="media-body m-l-20">
                                        <h6 class="m-b-0">UI/UX Designer, Adobe Inc.</h6>
                                        <span class="font-size-13 text-gray">Jul 2018</span>
                                    </div>
                                </div>
                                <div class="media m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="/enlink/assets/images/others/amazon-thumb.png" alt="">
                                    </div>
                                    <div class="media-body m-l-20">
                                        <h6 class="m-b-0">Product Developer, Amazon.com Inc.</h6>
                                        <span class="font-size-13 text-gray">Jul-2017 - Jul 2018</span>
                                    </div>
                                </div>
                                <div class="media m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="/enlink/assets/images/others/nvidia-thumb.png" alt="">
                                    </div>
                                    <div class="media-body m-l-20">
                                        <h6 class="m-b-0">Interface Designer, Nvidia Corporation</h6>
                                        <span class="font-size-13 text-gray">Jul-2016 - Jul 2017</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Education</h5>
                            <div class="m-t-20">
                                <div class="media m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="/enlink/assets/images/others/cambridge-thumb.png" alt="">
                                    </div>
                                    <div class="media-body m-l-20">
                                        <h6 class="m-b-0">MSt in Social Innovation, Cambridge University</h6>
                                        <span class="font-size-13 text-gray">Jul-2012 - Jul 2016</span>
                                    </div>
                                </div>
                                <div class="media m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="/enlink/assets/images/others/phillips-academy-thumb.png" alt="">
                                    </div>
                                    <div class="media-body m-l-20">
                                        <h6 class="m-b-0">Phillips Academy</h6>
                                        <span class="font-size-13 text-gray">Jul-2005 - Jul 2011</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->


    <!-- Footer END -->

</div>
<?= $this->endsection(); ?>