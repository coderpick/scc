 <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy;{{date('Y')}} saifulcommunitycenter  </small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->

    <script src="{{asset('public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->  
    <script src="{{asset('public/admin/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('public/admin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/admin/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('public/admin/js/sb-admin-datatables.min.js')}}"></script>
    {{-- <script src="{{asset('public/admin/js/tinymce.min.js')}}"></script> --}}
     <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=bl182cv0ud67yxrbs9uor8xfscrz38s7bb5swlqoo5y4v7o6"></script>
  
    <script>
      tinymce.init({ selector:'textarea' });
    </script>
  
</body>

</html>
