<?php 

// promenlivi se definiraat so $promenliva
// false ne pechati, za true pechati 1

// <. >, <=, >=, ==, ===, !=, !==   operatori za sporedba

// if($g == $h){    //sporedba samo na vrednosti
// if($g === $h){    //sporedba i na vrednostite i na tipovite

// Isto e dali kje se napishe ednoto ili drugoto
// if($vistina) 
// if($vistina == true)

// strlen - vrakja kolku e dolzhinata na string-ot (pr. broi karakteri vo zbor)
// count - broi elementi vo niza

// ''      kako e, taka go pechati
// ""      mozhe da stavame promenlivi vo string

// pechatenje na niza 
// print_r
// var_dump

 
// text postaven vo string mozhe da se razdeli kako niza so explode
// pr. $zborovi = explode(' ', $text);
// 	   $rechenici = explode ('. ', $text);

// ++$broj    -   go zima brojot pa go zgolemuva
// $broj++	  -   go zgolemuva brojot pa pravi promena


// funkcija is_numeric

// 3 OPERATORI:
// 1 operator - unaren (i++)
// 2 operatora - binarni (+, -, /, *)
// 3 operatori - ternaren

// (uslov) ? tochno : netochno;
// pr. ($broj % 2 == 0) ? 'Paren' : 'Neparen';



// NIZI:

// $niza = array();   //prazna niza
// $niza2 = [];	   //prazna niza


// $niza3 = array('a', 'b', 'c', 'd');		//niza so vrednosti
// $niza4 = ['e', 'f', 'g', 'h'];			//niza so vrednosti



// $niza[0] = 'i';		//dodavanje na elementi so index
// $niza[1] = 'j';
// $niza[2] = 'k';
// $niza[3] = 'l';



// $niza2[] = 'm';		//dodavanje na elementi bez index
// $niza2[] = 'n';
// $niza2[] = 'o';
// $niza2[] = 'p';


// Indeksirana niza:
//   $ocenki[0]		
//			[1]		
//			[2]		
//			[3]		

// Asocijativni nizi - mesto da ime index, ima kluch koj asocira na vrednosta
// $ocenki = (
// 0 => 8,
// 1 => 9,
// 2 => 7,
// 3 => 10
// )



// PHP vo HTML so PHP ekstenzija
// za pechatenje vrednost
// <?= ?>


foreach ni e ciklus i celo vreme vrti, so nego vleguvame vo sekoj element vo nizata

// niza vo niza
// pr. foreach($studenti as $student){
	$student['ime'];
	$student['prezime'];
}
// ako nizata e
// $student = array(
	[
		'ime' = 'Irina',
		'prezime' = 'Dobrohotova'
	],
	[
		'ime' = 'Bla',
		'prezime' = 'Blaablaaova'
	]
)
// so foreach-ot tuka vleguvame vo sekoj element vo nizata(shto e nova niza), vo ovoj sluchaj se vleguva vo nizata student i vo sekoj student posebno



// Globalni promenlivi: $_GET, $_POST


// $_GET 
// sekogash array
// vo URL pristapuvame so ? 
// kontrola na prikaz na page-ovi
// mozhe copy/paste - se gleda vo url
// asocijativna niza so key => value


// include - ako ne go najde file-ot kje dade warning i kje prodolzhi
// require - ako ne go najde file-ot kje dade error i nema da prodolzhi


// $_POST  
// sekogash array
// e za bezbedna komunikacija
// ne se gleda vo URL



// index.php sekogash ja otvara kako default strana

// empty - proveruva dali array-ot e prazen, no vrakja false ako e poln
// isset - proveruva dali neshto e setirano, dali postoi, dali se popolneti polinjata pr
// $_GET sekogash postoi, duri i da e prazna
// trim trga prazni mesta

// <form> (vo html) ima 2 vazhni definirani atributi 
//    - method - dali e get ili post
	  - action - kade da nosi


// vo <input> mora da se definira name atribut
// kazhuva na formata deka site polinja so name treba da se prepratat pri submit


// testiranje na funkcii
// za da mozhe da se testira:
//  - mora da bide staveno vo funkcija
//  - i da ima vlezni parametri (promenlivi)




// strpos   - koga barash dali vo string-ot ima # ili sl
// isset($_GET) - sekogash postoi




// fopen
// fread
// fclose
// fwrite
// unlink
// filesize
// rewind


// za upload 
// Vo form dodavame atributi
// method = "post"
// enctype = "multipart/form-data"


// za multiple file upload
// vo input dodavame multiple i vo name = "m[]"

// $_FILES
// [size] - prikazhuva vo bytes

// move_uploaded_file

// mora zashtita!!!!





// zadachi:

// if/else

For this PHP exercise, you will use the same format as the previous exercise, requesting input in the first part, and responding in the second, through the magic of PHP's if-else statement. In the first section, give the user an input field and request that they enter a day of the week.
For the second section, you'll need the following poem:
Laugh on Monday, laugh for danger. 
Laugh on Tuesday, kiss a stranger. 
Laugh on Wednesday, laugh for a letter.
Laugh on Thursday, something better.
Laugh on Friday, laugh for sorrow.
Laugh on Saturday, joy tomorrow.
Using the else-elseif-else construction, set each line to output in response to the day the user inputs, with a general response for any input that is not in the poem.

// switch

You probably noticed that the if-elseif-else construction was repetitive and cumbersome in the last exercise. It works best with only one or two choices. A more appropriate construction for this exercise is the switch statement, combined with a select field in the form for the days of the week. So your assignment in this PHP exercise is to rewrite the previous exercise using a select field for the user input and the switch statement to process the response.
Once again, here's the poem:
Laugh on Monday, laugh for danger. 
Laugh on Tuesday, kiss a stranger. 
Laugh on Wednesday, laugh for a letter.
Laugh on Thursday, something better.
Laugh on Friday, laugh for sorrow.
Laugh on Saturday, joy tomorrow.
Remember to include a general response for any input that is not in the poem. To make things a little more interesting, include a 'Back' button on the response so that the user can go back and try different days.

// associative arrays

In this PHP exercise, you will again use the list of cities in Arrays Exercise #2. Here's the list, this time including countries as well as cities:
Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.
This time, create an associative array, using the countries as keys, the cities as values. Create a form for the user, with the instructions Please choose a city:
Follow this request with a select field for the 10 cities, with the options created by looping through the array. When the user clicks the submit button, return the statement $city is in $country., where $city is the value chosen by the user, and $country is its key.



// This PHP exercise has two parts. In the first, you will take the large cities array from Arrays Ex. #5 and transform it into a multi-dimensional array. That will become the data in a table.
Rewrite the large cities array into a multi-dimensional array called $multiCity. The first sub-array will be completely new and include the labels, City, Country, Continent. (These will become the keys in the second half of this exercise.) Each of the succeeding sub-arrays should include those three items, one for each of the cities, for a total of 11 sub-arrays.
Here's the content for your array: City, Country, Continent; Tokyo, Japan, Asia; Mexico City, Mexico, North America; New York City, USA, North America; Mumbai, India, Asia; Seoul, Korea, Asia; Shanghai, China, Asia; Lagos, Nigeria, Africa; Buenos Aires, Argentina, South America; Cairo, Egypt, Africa; London, UK, Europe.
In the HTML, use the array in a table. The first row should be a header row and contain the entries in the first sub-array. Call these items without using a loop. For the succeeding rows, use a for loop with a foreach loop nested inside to populate the table with the remaining contents of the array. Use the count() function so that your for loop will function properly even if you increment or decrement the array.
Add a simple style sheet in the head section of your HTML. You can take on this challenge yourself or simply cut and paste the following between the <head></head> tags.
<style type="text/css">
td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
th {text-align:center;}
table {border-collapse: collapse; border: 1px solid black;}
</style>

// for
// while
// foreach (raboti samo so nizi)
// function

?>