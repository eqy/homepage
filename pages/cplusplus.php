<!DOCTYPE html>

<html>
<head>
<title>C++</title>
</head>
<body>
<h2>For the things that are easiest to forget</h2>
<h6>This page created on August 28, 2012</h6>

<h3><tt>getline()</tt> and <tt> cin.ignore()</tt></h3>
<p>
Use <tt>getline()</tt> to read string input: <br />
<tt>
string foo; <br />
getline(cin, foo);
</tt>
</p>

<p>
Use <tt>cin.ignore()</tt> to remove the newline character after input when getline is not used: <br />
<tt>
int bar; <br />
cin >> bar; <br />
cin.ignore(10000, '\n');
</tt>
</p>


</body>

</html>
