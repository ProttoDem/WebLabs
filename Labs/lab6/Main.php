<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
	<title>Document</title>
	<script>
		$( function() {
    var availableTags = [
      "Погано",
      "Відстій",
      "Зрада",
      "Нормік"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
		$( function() {                           ///// TIP LAB 6
    		$( document ).tooltip();
  		} );

		var flag=0;
		function newimage()
		{
		if(flag==0)
		{
		document.i1.src="cat.jpg"
		flag=1;
		}
		else
		{
			document.i1.src="cat2.jpg"
		flag=0;
		}

	}
		function js_style() {
document.getElementById("text1").style.fontSize = "14pt";
}

function js_style2() {

document.getElementById("text1").style.fontSize = "12pt";
}
function js_stylet() {

document.getElementById("text2").style.fontSize = "14pt";
}

function js_stylet2() {

document.getElementById("text2").style.fontSize = "12pt";
}
      function counter() {
		let num = localStorage.getItem("counter");
      document.getElementById("num").textContent = ++num;
      localStorage.setItem("counter", document.getElementById("num").textContent);

    }

		</script>
</head>

<body>
	<header>
		<a href="Main.html"><img src="logo.png" width="400px" alt=""></a>
	</header>
	<main>
		<nav>
			<ul>
				<li><a href="Politics.html" class="h_btn btn1">Політика</a></li>
                <li><a href="Sport.html" class="h_btn btn1">Спорт</a></li>
                <li><a href="Show.html" class="h_btn btn1">Шоу</a></li>
			</ul>
		</nav>
		<div class="news">
			<ul>
				<li id="top-li">
					<img src="kpi.jpg" alt="">
					<table id="news_table">
						<thead >
							<th colspan="2">Термінова важлива таблиця з новинами</th>
						</thead>
						<tbody>
							<tr>
								<td>Витрачено грошей: 5 тисяч</td>
								<td>Куплено грошей: 2 копійки</td>
							</tr>
							<tr>
								<td colspan="2">Борги грошей: 4 тисяч 58 копійок</td>
							</tr>							
						</tbody>
						
					</table>
					<p id="text1" onmouseover="js_style()" onmouseout="js_style2()">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto odio iste soluta ratione illum dignissimos in modi autem eum quaerat esse nobis recusandae tempore, excepturi maiores harum repudiandae eius? Placeat.</p>
        </li>
        <li>
			<img src="kpi.jpg" alt="">
          <p id="text2" onmouseover="js_stylet()" onmouseout="js_stylet2()">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, sapiente suscipit harum sed id unde dignissimos aspernatur. In repudiandae ad error maxime quisquam quasi omnis velit, hic iusto eum ducimus?</p></li>
			</ul>
		</div>
		
	</main>
	<form action="Main.php" style="margin-bottom: 20px;" method="POST">
		<div class="ui-widget">
	  <p style="padding-bottom: 20px;"><label for="tags">Введіть ваш коментар:</label><input id="tags" name="tags" title="Напишіть коментар, якщо Вам, звісно, є, що сказати"></p>
	  <p><input type="submit"></p></div>
	</form>
	<div>
		<?php if(isset($_POST["tags"])){
		 $message = htmlentities($_POST['tags']); 
			echo '<h2>Ви написали:</h2> ';
			echo $message;
			echo '<br>';
			echo 'Дата та час обробки повідомлення: <br>';
			echo date('Y-m-d H:i:s');
			echo '<br>';
		}; ?> 
	</div>
	<button class = "button" onclick = "counter()" style="height: 20px; width: 200px">Add 1 using js</button>
    <p id="num"></p>
	<div>
		<a href="javascript:newimage();void(0);">
			<img name="i1" src="cat.jpg" style="width: 300px;"> </a>
	</div>


	<style>
		* {
			padding: 0;
			margin: 0;
		}
	
		header { /*Заголовок*/
			width: 100%;
			display: flex;
			justify-content: center;
		}

		nav > ul { /*Список у головному меню*/
			list-style: none;
			display: flex;
			justify-content: flex-start;
			padding-left: 30px;
		}

		nav li {/* Кожен окремий елемент у списку в головному меню */
			margin-right: 20px;
			color: blue;
			background-color: yellow;

		}

		main { /*Глобальний стиль для головної частини*/
			width: 100%;
			display: flex;
			flex-direction: column;
		}

		.news {/*Глобальний стиль для блоку новин*/
			padding: 30px 20px;
		}

		.news ul {/*Стиль для списку новин*/
			list-style: none;
		} 

		.news li {/*Стиль для кожного окремого елемента у списку новин*/
			display: flex;
		}

		.news li img {/*Стиль для зображень у списку новин*/
			margin-right: 50px;
		}
		
		#top-li {
			margin-bottom: 25px;
		}
		
		img[src="kpi.jpg"]{
			width: 400px;
			float: left;
		}
		h5, h6{
			color: red;
		}
		h5 ~ h6 {
			background-color: aqua;
		}
		p {
			text-indent: 10px;
		}
		
		#news_table {
			width: 100%;
			border: none;
			margin-bottom: 20px;
			border-collapse: separate;
		}
		#news_table thead th {
			font-weight: bold;
			text-align: left;
			border: none;
			padding: 10px 15px;
			background: #EDEDED;
			font-size: 14px;
			border-top: 1px solid #ddd;
		}
		#news_table tr th:first-child, .table tr td:first-child {
			border-left: 1px solid #ddd;
		}
		#news_table tr th:last-child, .table tr td:last-child {
			border-right: 1px solid #ddd;
		}
		#news_table thead tr th:first-child {
			border-radius: 20px 0 0 0;
		}
		#news_table thead tr th:last-child {
			border-radius: 0 20px 0 0;
		}
		#news_table tbody td {
			text-align: left;
			border: none;
			padding: 10px 15px;
			font-size: 14px;
			vertical-align: top;
		}
		#news_table tbody tr:nth-child(even) {
			background: #F8F8F8;
		}
		#news_table tbody tr:last-child td{
			border-bottom: 1px solid #ddd;
		}
		#news_table tbody tr:last-child td:first-child {
			border-radius: 0 0 0 20px;
		}
		#news_table tbody tr:last-child td:last-child {
			border-radius: 0 0 20px 0;
		}

	</style>
	
</body>

</html>
