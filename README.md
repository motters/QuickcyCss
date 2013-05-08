QuickcyCss
==========
(STILL IN DEVELOPMENT)

##QuickcyCss makes drafting websites quick and easy! 

Some times like today at work, I get asked to knock up websites with just unrealistic time scales. I tell them its impossable to make something proffession in that time scale but I get told "Make it look good! The code does not matter, We dont care if the code does not mean standard X, Y and Z"

##That why i created QuickcyCss!

Baiscally when rushing and taking time in making websites, you often throw in paddings, margins, font-sizes that are individual to that specific div or span etc

So why do this 

	<div id="text">some text</div>

AND Then to do this in the style sheet

	#text{

		padding-top:10px;

		padding-bottom:20px;

		width:100%

	}

When you could do this

	<div class="padding-bottom-20 padding-top-10 width-per-100">some text</div>

It saves me time and its easier to play around with as i can just quickly alter the class
	
	<div class="padding-bottom-24 padding-top-12 width-per-50">some text</div>

##How to use
Simple you can grab the default generated css files in the git repo or make you own custom onces throughts the php generation files.

Inlcude the style sheet in your html page

Then simply use it here are some examples

	<div class="width-200">This is a 200px width div</div>
	<div class="width-per-50">This is a 50% width div</div>
	<div class="padding-bottom-24">Div with 24px padding bottom</div>
	<div class="padding-bottom-per-20">Div with 20% padding bottom</div>
	<div class="clear">The usual clearfix</div>
	<div class="font-size-20">font size 20 in this div</div>
	<div class="width-200 font-size-18 padding-bottom-10">200px div, font size 18px, 10px padding bottom/div>

##Proffessional Disclaimer
This was not made for proffesion web design and development but for them occasions where you have no time and the quality of code does not matter!

