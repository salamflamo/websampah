@extends('NiceAdmin.master')
@section('title', 'Dashboard')
@section('dashboard')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="fa fa-laptop"></i>Dashboard</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box blue-bg">
                    <i class="fa fa-cloud-download"></i>
                    <div class="count">6.674</div>
                    <div class="title">Download</div>
                </div><!--/.info-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box brown-bg">
                    <i class="fa fa-shopping-cart"></i>
                    <div class="count">7.538</div>
                    <div class="title">Purchased</div>
                </div><!--/.info-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box dark-bg">
                    <i class="fa fa-thumbs-o-up"></i>
                    <div class="count">4.362</div>
                    <div class="title">Order</div>
                </div><!--/.info-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box green-bg">
                    <i class="fa fa-cubes"></i>
                    <div class="count">1.426</div>
                    <div class="title">Stock</div>
                </div><!--/.info-box-->
            </div><!--/.col-->

        </div><!--/.row-->

        <!-- project team & activity start -->
        <div class="row">
            <div class="col-md-12 portlets">
                <!-- Widget -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">Message</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                            <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="panel-body">
                        <!-- Widget content -->
                        <div class="padd sscroll">

                            <ul class="chats">

                                <!-- Chat by us. Use the class "by-me". -->
                                <li class="by-me">
                                    <!-- Use the class "pull-left" in avatar -->
                                    <div class="avatar pull-left">
                                        <img src="{{URL::asset('nice-assets/img/user.jpg')}}" alt=""/>
                                    </div>

                                    <div class="chat-content">
                                        <!-- In meta area, first include "name" and then "time" -->
                                        <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                                        Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                                        <div class="clearfix"></div>
                                    </div>
                                </li>

                                <!-- Chat by other. Use the class "by-other". -->
                                <li class="by-other">
                                    <!-- Use the class "pull-right" in avatar -->
                                    <div class="avatar pull-right">
                                        <img src="{{URL::asset('nice-assets/img/user22.png')}}" alt=""/>
                                    </div>

                                    <div class="chat-content">
                                        <!-- In the chat meta, first include "time" then "name" -->
                                        <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                                        Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                                        <div class="clearfix"></div>
                                        <button class="btn btn-info">Reply</button>
                                    </div>
                                </li>

                                <li class="by-me">
                                    <div class="avatar pull-left">
                                        <img src="{{URL::asset('nice-assets/img/user.jpg')}}" alt=""/>
                                    </div>

                                    <div class="chat-content">
                                        <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                                        Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                                        <div class="clearfix"></div>
                                    </div>
                                </li>

                                <li class="by-other">
                                    <!-- Use the class "pull-right" in avatar -->
                                    <div class="avatar pull-right">
                                        <img src="{{URL::asset('nice-assets/img/user22.png')}}" alt=""/>
                                    </div>

                                    <div class="chat-content">
                                        <!-- In the chat meta, first include "time" then "name" -->
                                        <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                                        Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                                        <div class="clearfix"></div>
                                    </div>
                                </li>

                            </ul>

                        </div>
                        <!-- Widget footer -->
                        <div class="widget-foot">

                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Type your message here...">
                                </div>
                                <button type="submit" class="btn btn-info">Send</button>
                            </form>


                        </div>
                    </div>


                </div>
            </div>

        </div><br><br>

        <div class="row">
            <div class="col-md-6 portlets">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">Quick Post</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                            <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="padd">

                            <div class="form quick-post">
                                <!-- Edit profile form (not working)-->
                                <form class="form-horizontal">
                                    <!-- Title -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="title">Title</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="title">
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="content">Content</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="content"></textarea>
                                        </div>
                                    </div>
                                    <!-- Cateogry -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2">Category</label>
                                        <div class="col-lg-10">
                                            <select class="form-control">
                                                <option value="">- Choose Cateogry -</option>
                                                <option value="1">General</option>
                                                <option value="2">News</option>
                                                <option value="3">Media</option>
                                                <option value="4">Funny</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Tags -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="tags">Tags</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="tags">
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="form-group">
                                        <!-- Buttons -->
                                        <div class="col-lg-offset-2 col-lg-9">
                                            <button type="submit" class="btn btn-primary">Publish</button>
                                            <button type="submit" class="btn btn-danger">Save Draft</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                        <div class="widget-foot">
                            <!-- Footer goes here -->
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- project team & activity end -->

    </section>
    @endsection