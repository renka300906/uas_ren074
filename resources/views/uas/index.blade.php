<!DOCTYPE html>
<html>

<head>
	<title>KEDAI MAKANAN</title>
</head>

<frameset rows="85,*,40">
	<frame src="{{ route('uas.header') }}" name="Header">
		<frameset cols="15%,75%">
			<frame src="{{ route('uas.menu') }}" name="menu">
				<frame src="{{ route('uas.beranda') }}" name="konten">
		</frameset>
</frameset>

</html>
