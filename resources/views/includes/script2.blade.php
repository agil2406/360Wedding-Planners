<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

 <!-- Javascript -->          
    <script src="{{url('frontend/assets/plugins/popper.min.js')}}"></script>
    <script src="{{url('frontend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>  

    <!-- Charts JS -->
    <script src="{{url('frontend/assets/plugins/chart.js/chart.min.js')}}"></script> 
    <script src="{{url('frontend/assets/js/index-charts.js')}}"></script> 
    
    <!-- Page Specific JS -->
    <script src="{{url('frontend/assets/js/app.js')}}"></script> 



<script>
    $(document).ready(function() {
        $('#datatables').DataTable();
    });
</script>