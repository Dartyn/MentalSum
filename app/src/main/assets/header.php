

<div data-role="header" data-position="fixed" data-tap-toggle="false">
    <h2>Mental Sums</h2>
    <a href="" data-rel="back" id="back"rel="external" class="ui-btn ui-btn-inline ui-mini ui-shadow ui-corner-all ui-alt-icon ui-nodisc-icon ui-icon-back ui-btn-icon-notext">Back</a>
</div>

<script>
    $(document).on("pageshow", function () {
        $("[data-role='header']").toolbar({
            theme: "a"
        });
    
    if ($.mobile.activePage.attr('id') === 'page_main')
    {
        $("#back").hide();
    } else
    {
        $("#back").show();
    }
    });
</script>
