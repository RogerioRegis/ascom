    <!-- GLOBAL SCRIPTS -->
    <script src="/js/app.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- CUSTOM JQUERY UI FOR FULL CALENDAR -->
    <script src="/js/plugins/fullcalendar/jquery-ui.custom.min.js"></script>
    <script src="/js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
    <script src="/js/plugins/popupoverlay/defaults.js"></script>
 


        <!-- Logout Notification Box -->
        <div id="logout">
            <div class="logout-message">
                <img class="img img-logout" src="/img/logo_PMBV.png" alt="pmbv">
                <h3>
                    <i class="fa fa-sign-out text-green"></i> Pronto para ir?
                </h3>
                <p>Selecione "Sair" abaixo se você está pronto<br> para encerrar sua sessão atual.</p>
                <ul class="list-inline">
                    <li>

                        <a href="{{ url('/logout') }}" class="btn btn-green" 
                           onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                            <strong>Sair Agora</strong>
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </li>
                    <li>
                        <button class="logout_close btn btn-green">Cancelar</button>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /#logout -->


    
    <!-- Logout Notification jQuery -->
    <script src="/js/plugins/popupoverlay/logout.js"></script>
    <!-- HISRC Retina Images -->
    <script src="/js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <script src="/js/plugins/fullcalendar/fullcalendar.min.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <script src="/js/plugins/daterangepicker/moment.js"></script>
    <script src="/js/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    
    <!-- Moment.js -->
    <script src="/js/plugins/moment/moment.min.js"></script>

    <script src="/js/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/js/plugins/datatables/datatables-bs3.js"></script>

    <!-- THEME SCRIPTS -->
    <script src="/js/flex.js"></script>
    <script src="/js/demo/calendar-demo.js"></script>
    <script src="/js/demo/dashboard-demo.js"></script>
    <script src="/js/demo/advanced-tables-demo.js"></script>
