jQuery.noConflict();
(function ($) {
    var styleid = '';
    var childid = '';
    function Oxi_Tabs_Admin_Create(functionname, rawdata, styleid, childid, callback) {
        if (functionname !== "") {
            $.ajax({
                url: oxi_tabs_editor.ajaxurl,
                type: "post",
                data: {
                    action: "oxi_tabs_data",
                    _wpnonce: oxi_tabs_editor.nonce,
                    functionname: functionname,
                    styleid: styleid,
                    childid: childid,
                    rawdata: rawdata
                },
                success: function (response) {
                    callback(response);
                }
            });
        }
    }
    jQuery(".shortcode-addons-template-import").submit(function (e) {
        e.preventDefault();
        var rawdata = $(this).serialize();
        var functionname = "shortcode_active";
        $(this).prepend('<span class="spinner sa-spinner-open-left"></span>');
        Oxi_Tabs_Admin_Create(functionname, rawdata, styleid, childid, function (callback) {
            console.log(callback);
            setTimeout(function () {
                document.location.href = callback;
            }, 1000);
        });
        return false;
    });
    jQuery(".shortcode-addons-template-pro-only").submit(function (e) {
        e.preventDefault();
        return false;
    });

})(jQuery)