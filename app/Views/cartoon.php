<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-dark-scale-1 page-header-md " >
        <div class="container-fluid">
            <div class="row align-items-center">



                <div class="col">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <div class="overflow-hidden pb-2">
                                <h1 class="text-light font-weight-bold text-9 appear-animation" style="margin-top: 40px" data-appear-animation="maskUp" data-appear-animation-delay="100">
                                    Generating cartoons with LSTM neural networks
                                </h1>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <div class="container pt-2 pb-4">

        <div class="row pb-4 mb-2">
            <div class="col-md-6 mt-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">

                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                    <div>
                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                            <img src="<?= base_url()?>layout/img/specific/cartoon2.gif" class="img-fluid border-radius-0" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                            <img src="<?= base_url()?>layout/img/specific/c3.jpg" class="img-fluid border-radius-0" alt="">
                        </div>
                    </div>


                </div>

                <div class="overflow-hidden mt-4">
                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1000">Project <strong class="font-weight-extra-bold">Details</strong></h2>
                </div>
                <ul class="list list-icons list-primary list-borders text-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> June 2020</li>
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong>
                        <div  class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">IMAGE PROCESSING</div>
                        <div class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">DEEP LEARNING</div>
                        <div class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">PYTHON</div>
                        <div class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">TENSORFLOW</div>
                        <div class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">OPENPOSE</div>
                        <div class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">YOLOV2</div>
                        <div class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">NUMPY</div>
                        <div class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">PANDAS</div>
                    </li>

                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Project URL:</strong>
                        <a href="https://github.com/cheresioana/pi" target="_blank" class="text-dark">https://github.com/cheresioana/pi</a></li>
                </ul>


            </div>
            <div class="col-md-6">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">Project <strong class="font-weight-extra-bold">Description</strong></h2>
                </div>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    The aim of this project is to generate short animation clips with the help of a neural network.
                    I created a small dataset for Tom and jerry using yoloAnnotationTool. I trained Yolov2 classification model on the custom dataset.
                    After the Yolo model was trained I started to process the images. I grayscaled, binarized ,applied a median blur filter then perform an erosion to get the character outline as clear as possible from the image.
                    For unifying the contour used a dilation then created a mask with all the pixels from inside the contour in order to get only the character pixels.

                </p>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    For the neural network I used a LSTM layer combined with a fully connected layer with 6 outputs that represent the x and y coordinates of Tom, along with the png, and the x and y coordinates of Jerry with their corresponding png saved before.
                    I took a random number with the corresponding train data. From that data, the model predicted 20 frames forward.
                </p>



            </div>
        </div>
        <hr class="solid my-5">

    </div>