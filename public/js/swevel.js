// Format Rupiah
var formatRupiah = function(num) {
    var str = num.toString().replace("", ""),
        parts = false,
        output = [],
        i = 1,
        formatted = null;
    if (str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
    }
    str = str.split("").reverse();
    for (var j = 0, len = str.length; j < len; j++) {
        if (str[j] != ",") {
            output.push(str[j]);
            if (i % 3 == 0 && j < (len - 1)) {
                output.push(".");
            }
            i++;
        }
    }
    formatted = output.reverse().join("");
    return ("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
};

// ================== Team =====================
$(".card-team").hover(function() {
    let heightCardTeam = $(this)[0].scrollHeight;
    $(this).removeClass('opacity-50').css({ 'transition': 'all .3s', 'box-shadow': '0px 1px 10px 10px #ddd', 'height': heightCardTeam + 20 });
    let heightImgPrimary = $(this).find('.card-body')[0].scrollHeight;
    $(this).find('.gradient').css({ 'display': 'block', 'height': heightImgPrimary + 2, 'position': 'absolute', "background": "rgb(255,255,255)", "background": "linear-gradient(22deg, rgba(255,255,255,0.6578803396358543) 19%, rgba(255,255,255,0) 72%)", 'bottom': '100px' })
});
$(".card-team").mouseleave(function() {
    let heightCardTeam = $(this)[0].scrollHeight;
    $(this).addClass('opacity-50').css({ "transition": "ease .3s", 'box-shadow': 'none', 'height': heightCardTeam - 20 });
    $(this).find('.gradient').css({ 'display': 'none' })
});

// Admin