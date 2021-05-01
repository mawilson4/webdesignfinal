<style type="text/css">

* {
  padding: 0;
  margin: 0;
  border: 0;
  font-family: 'Montserrat', sans-serif;
  box-sizing: border-box;
}

body {
  background: aliceblue;
  margin-bottom: 20px;
}

header {
    text-align: center;
    width: 100%;
    z-index: 99;
}

.menu {
    margin: 0 auto;
    max-width: 75%;
}

.menu ul {
  list-style: none;
}

.menu > ul > li {
    display: inline-block;
    width: 25%;
    margin: 10px 5px;
    padding: 15px;
    position: relative;
    vertical-align: top;
    font-size: 36px;
    transition: .4s;
}

.menu > ul > li:hover {
    background-color: black;
    color: white;
    transition: .4s;
}

</style>

  <header>
    <nav  class="menu">
      <ul>
        <li a href="index.html" class="menu-item">Home</a></li>
        <li a href="about.html" class="menu-item">About</a></li>
        <li a href="contact.html" class="menu-item">Contact</a></li>
      </ul>
    </nav>
  </header>

<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
