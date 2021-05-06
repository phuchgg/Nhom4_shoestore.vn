<script>
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preimg')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
        if (input.files1 && input.files1[0]) {
            var reader1 = new FileReader();

            reader1.onload = function (e) {
                $('#preimg1')
                    .attr('src', e.target.result);
            };

            reader1.readAsDataURL(input.files1[0]);
        }
        if (input.files2 && input.files2[0]) {
            var reader2 = new FileReader();

            reader2.onload = function (e) {
                $('#preimg2')
                    .attr('src', e.target.result);
            };

            reader2.readAsDataURL(input.files2[0]);
        }
        if (input.files3 && input.files3[0]) {
            var reader3 = new FileReader();

            reader3.onload = function (e) {
                $('#preimg3')
                    .attr('src', e.target.result);
            };

            reader3.readAsDataURL(input.files3[0]);
        }
    }
</script>