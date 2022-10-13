<div id="user-sidebar">

</div>

<script>
    $(document).ready(function() {
        $('.accordion-button-primary').click(function() {
            $('.accordion-button-primary').removeClass('bg-purple text-white active')
            $(this).removeClass("bg-white text-dark").addClass('active')

        })
    })
</script>