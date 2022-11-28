var tabValue = $(".nav-tabs .nav-item .nav-link .active > a").attr("href");
    var url = $("#EditLink").attr("href");
    $("#EditLink").attr("href", AppendToUrl(url, "tab", tabValue));

    function AppendToUrl(url, key, value) {
        alert("pressed");
        var regex = /\?/i;
        if (regex.test(url)) {
            return url + "&" + key + "=" + value;
        } else {
            return url + "?" + key + "=" + value;
        }
        
    }

    alert("pressed");