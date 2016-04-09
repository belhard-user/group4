@if(session()->has('flash_message'))
    <script>
        swal(
                "{{ session('flash_message.title')}}",
                '{{ session('flash_message.message')}}',
                "{{ session('flash_message.type')}}"
        );
    </script>
@endif