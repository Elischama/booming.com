@if(session('success'))
    <script>
        toastr.success({{ session('success') }})
    </script>
@elseif(session('warning'))
    <script>
        toastr.warning({{ session('warning') }})
    </script>
@elseif(session('danger'))
    <script>
        toastr.error({{ session('error') }})
    </script>
@elseif(session('info'))
    <script>
        toastr.info({{ session('info') }})
    </script>
@endif