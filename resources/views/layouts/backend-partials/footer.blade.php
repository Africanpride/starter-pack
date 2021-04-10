  <!-- Footer -->
  <footer class="footer">
    All Rights Reserved. © {{ now()->year }} <a href="{{ env('DEV_WEBSITE') }}"> - {{ ENV('APP_DEVELOPER') }} </a>
 </footer>
 <!-- End Footer -->
</div>
<!-- End wrapper -->

<!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
<script src= "{{ asset('backend/assets/js/jquery.min.js') }}"></script>
<script src = " {{ asset('backend/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src = " {{ asset('backend/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src= "{{ asset('backend/assets/js/script.js') }}"></script>
<!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->

<!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
<script src = "  {{ asset('backend/assets/plugins/apex/apexcharts.min.js') }}"></script>
<script src = "  {{ asset('backend/assets/plugins/apex/custom-apexcharts.js') }}"></script>
<!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
@stack('modals')

@livewireScripts

@stack('scripts')
</body>

</html>
