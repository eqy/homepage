<!DOCTYPE html>
<html>

<head>
<title>GNU/Linux Notes</title>
</head>

<body>
	<h2>GNU/Linux Notes</h2>
		<h6>This page created on August 30, 2012</h6>
		<h6>Last updated September 16, 2012</h6>
	
	<h3>General</h3>
	
		<h4>DWM</h4>
			<h5>
			(Currently using version 6.0)
			</h5>
		<h6>Multiple Monitors</h6>
			<p>Using xrandr seems to work nicely:</p>
		<tt>xrandr --output [OutputOfMonitor] --[position]-of [OutputOfReferenceMonitor]</tt>
		<h6>Changing Windows Betweeen Floating and Tiled States</h6>
		<tt>[MOD]-[Shift]-[Space]</tt>
		<h6>Changing Windows "To/From Master Area" (you'll see why this is useful in practice</h6>
		<tt>[MOD]-[Return/Enter]</tt>

		<h4>Xbindkeys and T420</h4>
		<p>This is just to get the volume buttons to work correctly:</p>
		<p>Install xbindkeys and write the following to ~/.xbindkeysrc</p>
		<pre># Increase volume
"amixer set Master playback 1+"
    m:0x0 + c:123
    XF86AudioRaiseVolume

# Decrease volume
"amixer set Master playback 1-"
    m:0x0 + c:122
    XF86AudioLowerVolume

# Toggle mute
"amixer set Master toggle"
    m:0x0 + c:121
    XF86AudioMute
		</pre>
		<!-- Ugly formatting here, we'll see how it shows up as a page lol -->	
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
		<h4>Getting icons in pcmanfm</h4>
		<p>Install an icon set, such as "oxygen" with
			<br /><tt>sudo apt-get install oxygen-icon-theme</tt> <br />
		Create a file at ~/.gtkrc-2.0 with the contents <br />
				<tt>gtk-icon-theme-name = "oxygen"</tt>
		</p>
		<h4>Installing deadbeef (ostensibly the best foobar2000 alternative)</h4>
		<p>You have to add another repo to install deadbeef... confused as to why this isn't in the official repositories.</p>
		<pre>sudo add-apt-repository ppa:alexey-smirnov/deadbeef
sudo apt-get update
sudo apt-get install deadbeef</pre>

		<h4>Configuration of .xinitrc (contains things as xsetroot for battery info, date, time, etc. as well)</h4>
<pf>#!/bin/sh

xbindkeys &
sh ~/.fehbg &
unclutter &
xscreensaver -nosplash  &
while true; do
	xsetroot -name "$(acpi -b) | $(date +"%A"), $(date +"%B") $(date +"%d") $(date +%Y) $(date +"%R")"
	sleep 1m
done &
exec dwm
</pf>
</body>



</html>
