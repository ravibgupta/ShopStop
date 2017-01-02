<link rel="stylesheet" type="text/css" href="css/jquery.floating-social-share.css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.floating-social-share.js"></script>
<script>
	var url=window.location.href;
    $("body").floatingSocialShare({
        buttons: ["facebook", "google-plus", "twitter","linkedin"],
        twitter_counter: true,
        text: "share with: ",
        url: url,
		description:"This is master website"
    });
</script>
