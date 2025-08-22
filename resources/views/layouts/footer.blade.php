@inject('helper', 'App\Helpers\Global_helper')


<!-- resources/views/includes/footer.blade.php -->
<footer style="position: fixed; bottom: -22px   ; left: 0; width: 100%; background-color: #f1f1f1; padding: 10px 0;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; {{ date('Y') }} Nerasoft. All rights reserved. Powered by <a href="https://nerasoft.in/"
                        target="_blank">Nerasoft</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/js/vendor.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/app.min.js') }}" type="text/javascript"></script>
<!--Datatable--->
<script src="{{ asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"
    type="text/javascript"></script>
<script src="{{ asset('assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"
    type="text/javascript"></script>
<script src="{{ asset('assets/js/demo/table-manage-default.demo.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
    CKEDITOR.replace('editor2');
</script>
<script>
    function ChangeStatus(table_name, id) {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        if ($("#flexSwitchCheckDefault" + id + "").is(':checked')) {
            var status = 1;
        } else {
            var status = 2;
        }

        $.ajax({
            url: "{{ route('change.status') }}",
            type: 'post',
            data: {
                _token: csrfToken,
                table_name: table_name,
                id: id,
                status: status
            },
            success: function(response) {
                console.log(response);
            }
        });
        return false;
    }
</script>
</body>

</html>
