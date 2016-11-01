                    <!-- begin DASHBOARD CIRCLE TILES -->
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="circle-tile">
                                <a href="{{ url('/clippingradiotv/create') }}">
                                    <div class="circle-tile-heading dark-blue">
                                        <i class="fa fa-television fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content dark-blue">
                                    <div class="circle-tile-number text-faded">
                                        Rádio e TV
                                        <span id="sparklineA"></span>
                                    </div>
                                    <a href="{{ url('/clippingradiotv') }}" class="circle-tile-footer">Mais Informações <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="circle-tile">
                                <a href="{{ url('/clippingjornal/create') }}">
                                    <div class="circle-tile-heading green">
                                        <i class="fa fa-newspaper-o fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content green">
                                    <div class="circle-tile-number text-faded">
                                        Jornal Impresso
                                    </div>
                                    <a href="{{ url('/clippingjornal') }}" class="circle-tile-footer">Mais Informações <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="circle-tile">
                                <a href="{{ url('/clippingweb/create') }}">
                                    <div class="circle-tile-heading orange">
                                        <i class="fa fa-at fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content orange">
                                    <div class="circle-tile-number text-faded">
                                        Web e Blogs
                                    </div>
                                    <a href="{{ url('/clippingweb') }}" class="circle-tile-footer">Mais Informações <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end DASHBOARD CIRCLE TILES -->