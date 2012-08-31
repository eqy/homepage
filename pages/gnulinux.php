<!DOCTYPE html>
<html>

<head>
<title>GNU/Linux Notes</title>
</head>

<body>
	<h2>GNU/Linux Notes</h2>
		<h6>This page created on August 30, 2012</h6>
		<h6>Last updated August 30, 2012</h6>
	
	<h3>General</h3>
	
		<h4>DWM</h4>
			<h5>
			(Currently using version 6.0)
			</h5>
		<h6>Multiple Monitors</h6>
			<p>Using xrandr seems to work nicely:</p>
		<pre>xrandr --output [OutputOfMonitor] --[position]-of [OutputOfReferenceMonitor]</pre>
	
	<h3>Ubuntu</h3>
		<h4>Changing default file manager</h4>
		<p>This is important for issues such as nautilus being used in firefox when firefox is running in window manager that does not play nice with the idiotic feature of having to have a "desktop"
		<br />
		As root, edit <br />
		<tt>/usr/share/applications/defaults.list</tt> <br />
		and replace or modify the line
	
		<tt>inode/directory=[yourManager].desktop <br />
		     x-directory/normal=[yourManager.desktop
		</tt>
		
		</p>
		<h5>Untested method:</h5>
		<p>Use <br />
			<tt>
				exo-preferred-applications
			</tt>
		</p>

</body>



</html>
