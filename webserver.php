<!DOCTYPE html>

<html>
<head>
<title>The Webserver</title>
</head>

<body>
<h2>The Webserver</h2>

<h6>This page created on: August 27, 2012</h6>
<p>
A nice way to start things off would be to document the creation of the webserver itself. It started off in August 2006 as an ambitious DIY build with modest funds. Originally packed with a blazing AMD Athlon 64 X2 4200+ (Windsor), 1GB of DDR 2 533 memory, and a powerful PNY Nvidia Geforce 7600GT, time has brought some changes to the system. The 7600GT was sold for a textbook and the integrated graphics (Geforce 6150) of the motherboad (ASUS M2NPV-VM) serve as the replacement. Unfortunately, due to the lack of onboard memory for integrated graphics, the switch brings total system memory down to ~930MB. 
</p>

<h3>The actual web-part</h3>

<p>
As of the last update to this page, this machine currently runs <tt>
3.2.0-24-generic #37-Ubuntu SMP Wed Apr 25 08:43:22 UTC 2012 x86_64 x86_64 x86_64 GNU/Linux</tt>. It is running a standard LAMP configuration installed with:
<br />
<tt>
sudo apt-get install taskel
<br />
sudo taskel install lamp-server
<br />
</tt>
With the exception of the listening port, the configuration of this site remains standard with:
<tt>
<br />
sudo cp /etc/apache2/sites-available/default /etc/apache2/sites-available/mynewsite
</tt>
</p>

<h4>Resources for LAMP/Ubuntu Server:</h4>
<a href=https://help.ubuntu.com/community/ApacheMySQLPHP>LAMP</a>
<br />
<a href=https://help.ubuntu.com/11.04/serverguide/httpd.html>Setup</a>
<h3>Other purposes</h3>
<p>
Among other things, this bad boy serves as an ad-hoc file server, irc idler, mpd music stream server, and ssh tunnel server.

Fortunately, all of these tasks require very very little hardware resources and are ideal for a headless server (given the low graphics horsepower available).
</p>


</body>


</html>
