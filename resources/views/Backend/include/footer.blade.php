</div>

<aside class="control-sidebar control-sidebar-dark">

    <!-- Control sidebar content goes here -->

    <div class="p-3">

      <h5>Title</h5>

      <p>Sidebar content</p>

    </div>

  </aside>

  <footer class="main-footer">

    <div class="float-right d-none d-sm-inline">

      Power By KHB Media

    </div>

    <strong>Copyright &copy; {{Date('Y')}} <a href="/">{{config('app.name')}}</a>.</strong> All rights reserved.

  </footer>

</div>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('dropzone/dist/dropzone.js')}}"></script>
@yield('customScript')

</body>



</html>