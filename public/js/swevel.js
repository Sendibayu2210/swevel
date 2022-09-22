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


