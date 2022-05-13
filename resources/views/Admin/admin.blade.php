@extends('layouts.Adcon')
@section('title','Admin Control')
@section('content')

<div class="container" style="font-family: Arial, Helvetica, sans-serif ; position: relative;">
                        <div class="jumbotron" style="padding: 12px;text-align: center;">
                            <h1> <b>اختيار المطلوب التحكم به  </b> </h1>  
                            <!--services-->
                            <!-- Page Content -->
                            <div class="container">
                            <!-- Page Heading -->
                            <div class="row">
                                <div class="col-lg-3 mb-2">
                                    <div  >
                                        <a href="/newproduct" ><img class="img-thumbnail" src="/images/3.png" ></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="/newproduct">إضافة منجات جديدة</a>
                                            </h4>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div  >
                                        <a href="" ><img class="img-thumbnail" src="/images/3.png"  ></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="/social">تغير روابط  السوشال ميديا </a>
                                            </h4>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div  >
                                        <a href="/slider" target="_blank"><img class="img-thumbnail" src="/images/3.png" ></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="/slider">تغيير الصور في الواجهة </a>
                                            </h4>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-2">
                                    <div  >
                                        <a href="/addnewabout" target="_blank"><img class="img-thumbnail" src="/images/3.png"></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="/addnewabout">تغيير  من نحن  </a>
                                            </h4>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </div>
                          
                             
                             
                            </div>
                        </div>
                    </div> 
                </div>

@endsection