<!DOCTYPE html>
<html>
<head>
<title>Git Notes</title>
</head>

<body>
<h2>Adventures in Git</h2>
<h6>This page created on August 29, 2012</h6>
<p>
Git is a package present in the default Ubuntu repositories.
<br />
Initialize an empty repository with:
</p>
<pre>
git init --bare
</pre>

<h3>Creating and accessing a git repo</h3>
<h4>In Windows, with PuTTY</h4>
<p>Generate a key with PuTTY key generator and configure the git repository accordingly.
</p>
<h5>I give up for now (incomplete)</h5>
<h4>In GNU/Linux</h4>
<p>
Follow the guide on <a href="https://help.github.com/articles/generating-ssh-keys">github</a> to generate ssh keys.
Use</p> <pre>
ssh keygen -t rsa -C "youremail@youremail.com"
</pre>
<p>Then add the key to github and use</p>
<pre>
ssh-add /path/to/key
</pre>
<p>to associate the key correctly on the local end.</p>

<h4>Examples of git usage</h4>
<p>
Adding a remote repository:<p>
<pre>
git remote add [name] https://github.com/username/name.git
</pre>
<p>Comitting:<p>
<pre>
<p>git commit -m 'message/comment'</p>
</pre>
<p>Pushing:</p>
<pre>
git push [repo] [branch]
</pre>
<p>Pulling:</p>
<pre>
git [options] [repo] [branch]
</pre>



</body>
</html>
