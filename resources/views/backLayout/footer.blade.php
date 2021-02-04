<!-- footer content -->
        <footer>
          {{-- <div class="pull-right">
            © NYC Services 2018
          </div>
          <div class="clearfix"></div> --}}
          @php
              $layout = \App\Model\Layout::find(1);
          @endphp
          <div class="container">
            <div class="footer-menu bg-primary-color">
              <div class="row">
                  <div class="col-md-8 ">
                      <h3 class="feedback-title m-0">{{$layout->contact_text}}</h3>
                  </div>
                  <div class="col-md-4 feedback-btn text-right">
                      <a href="{{$layout->contact_btn_link}}" target="_blank" class="btn btn-raised btn-lg btn_darkblack">{{$layout->contact_btn_label}}</a>
                  </div>
              </div>
          </div>
          <div class="footer-content text-white">
              {!! $layout->footer !!}
              <!-- 	<div class="row">
                  <div class="col-sm-12 col-md-7 col-lg-7">
                      <p>CONSUL, 2019&nbsp; |&nbsp; <a href="#"> Privacy Policy </a>&nbsp; | &nbsp;<a href="#"> Terms and conditions of use </a>&nbsp; | &nbsp;<a href="#"> Accessibility &nbsp;</a></p>
                  </div>
                  <div class="col-sm-12 col-md-5 col-lg-5 text-right">
                      <p>2019  @Copyright All Reserved</p>
                  </div>
              </div> -->
          </div>
      </div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ URL::asset('/backend/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::asset('/backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ URL::asset('/backend/vendors/switchery/dist/switchery.min.js')}}"></script>

    <script src="{{ URL::asset('/backend/vendors/select2/dist/js/select2.full.min.js')}}"></script>

    <script src="{{ URL::asset('/backend/summernote/js/summernote.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ URL::asset('/backend/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ URL::asset('/backend/vendors/nprogress/nprogress.js') }}"></script>

    <script src="{{ URL::asset('/backend/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ URL::asset('/backend/vendors/iCheck/icheck.min.js') }}"></script>

    <!-- datatables -->
    <script src="{{ URL::asset('/backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>

    <script src="{{ URL::asset('/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/validator/validator.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ URL::asset('/backend/build/js/custom.min.js ') }}"></script>
    <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css">
  <script  src="/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript">
      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
    </script>
    <!-- jQuery Smart Wizard -->
    <script>
      $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-warning');
      });
    </script>
    <!-- /jQuery Smart Wizard -->
    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
    }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    @yield('scripts')
  </body>
</html>
