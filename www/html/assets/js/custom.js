var audio = {};
	audio["alarm"] = new Audio();
	audio["alarm"].src = "/assets/sounds/alarm3.mp3"
	audio["alarm"].addEventListener('load', function() {
	audio["alarm"].play();
});

var colSite1 = setInterval(pingHostsSite1, 5000);
function pingHostsSite1 () {
	//Site 1
	$('#11').load('host.php?ip=8.8.8.8&name=Google%20DNS');
	$('#12').load('host.php?ip=#&name=#');
	$('#13').load('host.php?ip=#&name=#');
	$('#14').load('host.php?ip=#&name=#');
}

var colSite2 = setInterval(pingHostsSite2, 5000);
function pingHostsSite2 () {
	//Site 2
	$('#21').load('host.php?ip=8.8.4.4&name=Google%20DNS');
	$('#22').load('host.php?ip=#&name=#');
	$('#23').load('host.php?ip=#&name=#');
	$('#24').load('host.php?ip=#&name=#');
}

var colSite3 = setInterval(pingHostsSite3, 5000);
function pingHostsSite3 () {
	//Site 3
	$('#31').load('host.php?ip=#&name=#');
	$('#32').load('host.php?ip=#&name=#');
	$('#33').load('host.php?ip=#&name=#');
	$('#34').load('host.php?ip=#&name=#');
}

var colSite4 = setInterval(pingHostsSite4, 5000);
function pingHostsSite4 () {
	//Site 4
	$('#41').load('host.php?ip=#&name=#');
	$('#42').load('host.php?ip=#&name=#');
	$('#43').load('host.php?ip=#&name=#');
	$('#44').load('host.php?ip=#&name=#');
}

var colSite5 = setInterval(pingHostsSite5, 5000);
function pingHostsSite5 () {
	//Site 5 (large)

	//col 1
	$('#51a').load('host.php?ip=#&name=#');
	$('#52a').load('host.php?ip=#&name=#');
	$('#53a').load('host.php?ip=#&name=#');
	$('#54a').load('host.php?ip=#&name=#');
	$('#55a').load('host.php?ip=#&name=#');

	//col2
	$('#51b').load('host.php?ip=#&name=#');
	$('#52b').load('host.php?ip=#&name=#');
	$('#53b').load('host.php?ip=#&name=#');
	$('#54b').load('host.php?ip=#&name=#');
	$('#55b').load('host.php?ip=#&name=#');

	//col 3
	$('#51c').load('host.php?ip=#&name=#');
	$('#52c').load('host.php?ip=#&name=#');
	$('#53c').load('host.php?ip=#&name=#');
	$('#54c').load('host.php?ip=#&name=#');
	$('#55c').load('host.php?ip=#&name=#');

	//col 4
	$('#51d').load('host.php?ip=#&name=#');
	$('#52d').load('host.php?ip=#&name=#');
	$('#53d').load('host.php?ip=#&name=#');
	$('#54d').load('host.php?ip=#&name=#');
	$('#55d').load('host.php?ip=#&name=#');

}

var timeout = setInterval(checkState, 15000);
function checkState () {
	if ($('.error').length > 0) {
        $("#topbar").removeClass("green").addClass("red");
        $("#alert").css("visibility", "visible");
        $(".error").animate({backgroundColor: "#303030"});
        audio["alarm"].play();
	$.get("pcbeep.php");
    } else {
        $("#topbar").removeClass("red").addClass("green");
                $("#alert").css("visibility", "hidden")

    }
}
