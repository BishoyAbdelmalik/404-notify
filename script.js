window.addEventListener('error', function (e) {
    
    var target = e.target.outerHTML;
    
    var url = "https://freebottle.org/emailError.php?t='"+target+"'"+"&u="+window.location.href;
    $.ajax( url);
}, true);
