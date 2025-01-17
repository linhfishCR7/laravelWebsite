@extends('backend.layouts.master')

@section('title')
FAQs
@endsection

@section('feature-title')
FAQs
@endsection

@section('feature-description')
FAQs
@endsection

@section('custom-css')

@endsection
@section('content')


<div class="row">
    <div class="col-12">
        <div class="text-center">
            <i class="h1 mdi mdi-comment-multiple-outline text-muted"></i>
            <h3 class="mb-3">Frequently Asked Questions</h3>
            <p class="text-muted"> Nisi praesentium similique totam odio obcaecati, reprehenderit,
                dignissimos rem temporibus ea inventore alias!<br> Beatae animi nemo ea
                tempora, temporibus laborum facilis ut!</p>

            <button type="button" class="btn btn-success waves-effect waves-light mt-2 mr-1"><i class="mdi mdi-email-outline mr-1"></i> Email us your question</button>
            <button type="button" class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-twitter mr-1"></i> Send us a tweet</button>

        </div>
    </div><!-- end col -->
</div><!-- end row -->


<div class="row mt-4">
    <div class="col-12">
        <div class="card-box">
            <ul class="nav nav-pills navtab-bg">
                <li class="nav-item">
                    <a href="#general-q-tab" data-toggle="tab" aria-expanded="false" class="nav-link px-3 py-2 active">
                        <span class="d-inline-block d-sm-none"><i class="ti-help-alt"></i></span>
                        <span class="d-none d-sm-inline-block"><i class="ti-help-alt mr-1"></i> General Questions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#privacy-p-tab" data-toggle="tab" aria-expanded="true" class="nav-link px-3 py-2">
                        <span class="d-inline-block d-sm-none"><i class="ti-shield"></i></span>
                        <span class="d-none d-sm-inline-block"><i class="ti-shield mr-1"></i> Privacy Policy</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#support-tab" data-toggle="tab" aria-expanded="false" class="nav-link px-3 py-2">
                        <span class="d-inline-block d-sm-none"><i class="ti-headphone-alt"></i></span>
                        <span class="d-none d-sm-inline-block"><i class="ti-headphone-alt mr-1"></i> Support</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="general-q-tab">
                    <div class="row pt-2">
                        <div class="col-lg-6">
                            <div class="p-lg-2">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question" data-wow-delay=".1s">What is Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Why use Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">How many variations exist?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                        </div>
                        <!--/col-md-5 -->

                        <div class="col-lg-6">
                            <div class="p-lg-2">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Is safe use Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">When can be used?</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">License &amp; Copyright</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                        </div>
                        <!--/col-md-5-->
                    </div>
                    <!-- end row -->

                </div>
                <div class="tab-pane fade" id="privacy-p-tab">
                    <div class="row pt-2">
                        <div class="col-lg-6">
                            <div class="p-lg-2">

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Why use Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question" data-wow-delay=".1s">What is Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">How many variations exist?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                        </div>
                        <!--/col-md-5 -->

                        <div class="col-lg-6">
                            <div class="p-lg-2">

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">When can be used?</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Is safe use Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">License &amp; Copyright</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                        </div>
                        <!--/col-md-5-->
                    </div>
                    <!-- end row -->
                </div>
                <div class="tab-pane fade" id="support-tab">
                    <div class="row pt-2">
                        <div class="col-lg-6">
                            <div class="p-lg-2">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">How many variations exist?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question" data-wow-delay=".1s">What is Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Why use Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>

                            </div>
                        </div>
                        <!--/col-md-5 -->

                        <div class="col-lg-6">
                            <div class="p-lg-2">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">License &amp; Copyright</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Is safe use Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>

                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">When can be used?</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>

                            </div>
                        </div>
                        <!--/col-md-5-->
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom-scripts')
@endsection
