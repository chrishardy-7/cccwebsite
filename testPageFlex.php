<?php


$nameOfThisPage = "testPageFlex";

include_once("php/cccWebFunctions.php");
include_once("head.php");

?>

<div class="logo">
<?php logo("alert('Test Logo')"); ?> //function to conveniently create svg logo
</div>

<div class="menu">
<?php menuIcon("alert('Test Menu')"); ?>
</div>


<div style="padding:20px;" >
<p class="headings">Welcome</p>
</br>
<p>Our multi-ethnicity here at Castlemilk Community Church means it’s easy for everyone to relax and fit in. We have a warm and welcoming atmosphere which allows people to build friendships whilst exploring the Christian faith. This is a place where no matter what your background or age you will feel valued and included. Gone are the pews and hymn books, in there place you will find a contemporary cafe culture, with lively worship. Come and visit & enjoy a tea or coffee with us. Service Times: 11am every Sunday.</p>
</div>

<button onclick="window.print()">Print this page</button>

<?php


/*
?>

<div style="display:flex; flex-direction:column; height: 850px; width: 1200px; background-color: #8080AA;">


	<div id="a" style="height:150px; width:1200px; background-color:#FF0000;" onclick="document.getElementById('a').style.height='150px';">
	</div>

	<div id="b" style="flex-grow:1; height:150px; width:1200px; background-color:#00FF00; font-size: 24px">
		Once when a lion, the king of the jungle, was asleep, a little mouse began running up and down on him. This soon awakened the lion, who placed his huge paw on the mouse, and opened his big jaws to swallow him."Pardon, O King!" cried the little mouse. "Forgive me this time. I shall never repeat it and I shall never forget your kindness. And who knows, I may be able to do you a good turn one of these days!” The lion was so tickled by the idea of the mouse being able to help him that he lifted his paw and let him go.Once when a lion, the king of the jungle, was asleep, a little mouse began running up and down on him. This soon awakened the lion, who placed his huge paw on the mouse, and opened his big jaws to swallow him."Pardon, O King!" cried the little mouse. "Forgive me this time. I shall never repeat it and I shall never forget your kindness. And who knows, I may be able to do you a good turn one of these days!” The lion was so tickled by the idea of the mouse being able to help him that he lifted his paw and let him go.Once when a lion, the king of the jungle, was asleep, a little mouse began running up and down on him. This soon awakened the lion, who placed his huge paw on the mouse, and opened his big jaws to swallow him."Pardon, O King!" cried the little mouse. "Forgive me this time. I shall never repeat it and I shall never forget your kindness. And who knows, I may be able to do you a good turn one of these days!” The lion was so tickled by the idea of the mouse being able to help him that he lifted his paw and let him go.Once when a lion, the king of the jungle, was asleep, a little mouse began running up and down on him.
	</div>

	<div id="c" style=" height:150px; width:1200px; background-color:#0000FF;" onclick="document.getElementById('a').style.height='200px';">
	</div>
	


</div>
<?php
*/
include_once("tail.php");
?>
