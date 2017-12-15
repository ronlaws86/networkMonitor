

var audio = {};
audio["alarm"] = new Audio();
audio["alarm"].src = "/assets/sounds/alarm3.mp3"
audio["alarm"].addEventListener('load', function() {
audio["alarm"].play();
});
  // audio["alarm"].play();

var timeout = setInterval(pingHosts, 5000);
function pingHosts () {
	//Site 1
	$('#11').load('host.php?ip=8.8.8.8&name=Google%20DNS');
	$('#12').load('host.php?ip=#&name=#');
	$('#13').load('host.php?ip=#&name=#');
	$('#14').load('host.php?ip=#&name=#');

	//Site 2
	$('#21').load('host.php?ip=8.8.4.4&name=Google%20DNS');
	$('#22').load('host.php?ip=#&name=#');
	$('#23').load('host.php?ip=#&name=#');
	$('#24').load('host.php?ip=#&name=#');

	//Site 3
	$('#31').load('host.php?ip=#&name=#');
	$('#32').load('host.php?ip=#&name=#');
	$('#33').load('host.php?ip=#&name=#');

	//Site 4
	$('#41').load('host.php?ip=#&name=#');
	$('#42').load('host.php?ip=#&name=#');
	$('#43').load('host.php?ip=#&name=#');;

	//Site 5 (large)

	//col 1
	$('#51a').load('host.php?ip=#&name=#');;
	$('#52a').load('host.php?ip=#&name=#');
	$('#53a').load('host.php?ip=#&name=#');
	$('#54a').load('host.php?ip=#&name=#');

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
	$('#56c').load('host.php?ip=#&name=#');

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

