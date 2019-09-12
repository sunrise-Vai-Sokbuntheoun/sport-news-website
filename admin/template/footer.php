</div>
<?php
get_footer();
?>
<div class="control-sidebar-bg"></div>
</div>

<?php get_script(); ?>

<script> CKEDITOR.replace('postdescription'); </script>
<script>
    $('#dt-less-columns').mdbEditor({
        modalEditor: true,
        headerLength: 5,
    });
    $('.dataTables_length').addClass('bs-select');
</script>
</body>

</html>