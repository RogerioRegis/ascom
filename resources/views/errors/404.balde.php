 @extends('layouts.app')

@section('content')

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>
                                404 Error
                                <small>Page Not Found</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                                </li>
                                <li class="active">404 Error</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <h1 class="error-title">404</h1>
                        <h4 class="error-msg"><i class="fa fa-warning text-red"></i> Page Not Found</h4>
                        <p class="lead">The page you've requested could not be found on the server. Please contact your webmaster, or use the back button in your browser to navigate back to your most recent active page.</p>
                        <div class="well">
                            <div class="input-group">
                                <input type="text" placeholder="Search Flex Admin..." class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i> Search</button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                        <ul class="list-inline">
                            <li>
                                <a class="btn btn-default" href="index.html">Back to Dashboard</a>
                            </li>
                            <li>
                                <a class="logout_open btn btn-red" href="#logout">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->

                @endsection