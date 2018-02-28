var image1=new Image();
image1.src="Images/adams.jpg";
var image2=new Image();
image2.src="Images/beah.jpg";
var image3=new Image();
image3.src="Images/girl-on-beach.jpg";
var image4=new Image();
image4.src="Images/tril.jpg";
var image5=new Image();
image5.src="Images/backview.jpg";

//variable that will increment through the images
var step1=1;

function slideit(){
//if browser does not support the image object, exit.
if (!document.images)
return;

document.images.main.src=eval("image"+step1+".src");



if (step1<5)
step1++;
else
step1=1;
//call function "slideit()" every 2.5 seconds
setTimeout("slideit()",5000);
}