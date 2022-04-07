;(function ($) {
    $(document).ready(function () {
        $(".vxnotice-option .notice-dismiss").on("click", function (e) {
           setCookie('vx_notice_cookie', '1', '1');
        });

    });
})(jQuery);

function setCookie(cName, cValue, expDays) {
    let date = new Date();
    date.setTime(date.getTime() + (expDays));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}
