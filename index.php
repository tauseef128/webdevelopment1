<!-- Header start -->

<?php require_once('header.php'); ?>

<!-- Header end -->

<!-- Login form page start-->

 <!-- <?php require_once('action_page.php'); ?>   -->
<!-- Login form page end-->


<!-- slider start -->

<?php require_once('slider.php');  ?>
<!-- slider End -->

<!-- Footer start -->

<?php require_once('footer.php');  ?>

<script type="text/javascript">
// var a = 10;
// var name = "Test User 1";
// var obj = {'id':1,'name':'test user 2'};
// console.log(a);
// console.log(name);
// console.log(obj);

/* Variable operators */
var a = 10;
var b = 12; 
var c = 25;
var result1 = a+b+c;
var result2 = a-b-c;
var result3 = a*b*c;
var result4 = a/b;
console.log(result1);
console.log(result2);
console.log(result3);
document.write(result3);

document.write(result4);

/* string concatenation */

var fname = "test";
var lname = "User";

// var name = fname+' '+lname;

var name = `${fname} ${lname}`;

console.log(name);

var marks = 60;

if (marks >= 33){

console.log("pass");
}
else
{
console.log("fail");

}




</script>

	</body>
</html>