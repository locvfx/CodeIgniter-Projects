</div>
</div>
</div>
</div>
<?php if ($this->session->userdata('logged_in')) { ?>
    <footer>Powered by <a href="http://eccfze.ae">ECCFZE</a></footer>
<?php } ?>
</div>
<script src="<?= base_url('assets/bootstrap-select-1.9.4/js/bootstrap-select.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script>
    if ($(window).width() > 767) {
        var left_side_width = $('.left-side').width();
        $("#brand").css("width", left_side_width - 1);
    }
    $(window).resize(function () {
        if ($(window).width() > 767) {
            var left_side_width = $('.left-side').width();
            $("#brand").css("width", left_side_width - 1);
        }
    });
    $(document).ready(function () {
        $("i.fa.fa-cogs").click(function () {
            $(".settings").toggle("slow", function () {
                $("i.fa.fa-cogs").addClass('fa-spin');
                if ($(this).is(':visible')) {
                    $("i.fa.fa-cogs").addClass('fa-spin');
                } else {
                    $("i.fa.fa-cogs").removeClass('fa-spin');
                }
            });
        });
    });
    function changePass() {
        var new_pass = $('[name="new_pass"]').val();
        if (jQuery.trim(new_pass).length > 3) {
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/changePass') ?>",
                data: {new_pass: new_pass}
            }).done(function (data) {
                if (data == '1') {
                    $("#pass_result").fadeIn(500).delay(2000).fadeOut(500);
                } else {
                    alert('Password cant change!');
                }
            });
        } else {
            alert('Too short pass!');
        }
    }
</script>
</body>
</html>