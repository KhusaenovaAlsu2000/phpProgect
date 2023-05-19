<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Татарские народные музыкальные инструменты</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1 class="title" style="text-align: center;  text-transform: none;"><a href="#">Татарские народные музыкальные инструменты</a></h1>
				<p style="text-align: center;">История музыкальных инструментов</p>
			</div>
			<div id="social">

				<ul class="contact">
					<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
					<li><a href="#" class="icon icon-facebook"><span></span></a></li>
					<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
					<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
					<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
				</ul>
			</div>
		</div>
		<div id="menu" class="container">
			<ul>
				<li class="current_page_item"><a href="#" accesskey="1" title="">Главная</a></li>
				<li><a href="services" accesskey="1" title="">Татарские народные инструменты</a></li>
				<li><a href="third" accesskey="2" title="">История татарских музыкальных инструментов</a></li>
			</ul>
		</div>
	</div>
	<div id="page" class="container">
		<div class="column1">
			<div class="title">

			</div>
			<p class="box center-text">Татары – народ с многовековой историей и богатейшей культурой. Одним из важнейших пластов любой этнокультуры является музыкальное искусство. Татарское музыкальное искусство имеет два направления – песенное и инструментальное.
				<p class="box center-text">Музыкальные национальные инструменты татар, прошли путь исторического формирования, который длился веками. Музыкальные традиции имеют множество общих черт с особенностями ритмики (ангемитонной пентатоники) тюркских и финно-угорских народов Поволжья, уходя корнями в эпоху музыкального этноса язычества.
					<p class="box center-text">Татарская народная музыка имеет в своей основе колорит восточных традиций, она созвучна с музыкой народов Дальнего Востока. А традиционные арабо-мусульманские музыкальные инструменты (например, сурнай - восточный музыкальный инструмент) гармонично вписались в творческое наследие татарского народа.
						<p class="box center-text">Сочетание, по крайней мере 4-х типов культурных взаимовлияний (тюркского, финно-угорского, болгарского, славяно-русского), а также 2-х религий (ислама и христианства) очень наглядно отразилось в разнообразном наборе татарских народных инструментов.</p>
			  </p>
		</div>
		<div class="music-instruments">
			<div class="column2">
				<div class="title">
					<h2>Существующие в наше время </h2>
				</div>
				<img src="images/картинк5.png" width="282" height="200" alt="" />
				<p>Курай, кубыз, домбра</p>
			</div>
			<div class="column3">
				<div class="title">
					<h2>Не использующиеся в наше время </h2>
				</div>
				<img src="images/rfhnbyrf 4.jpg" width="282" height="170" alt="" />
				<p>Сорнай, борго, думбурзяк, дунгур, награ, ятаган</p>
			</div>
			<div class="column4">
				<div class="title">
					<h2>Проникшие в быт в конце 19 века инструменты европейского происхождения </h2>
				</div>
				<img src="images/картинка 7.jpg" width="282" height="350" alt="" />
				<p>мандолина, скрипка, тальянка</p>
			</div>
		</div>
	</div>
    <div class="php_container">
        <?php
                $con = mysqli_connect("localhost", "root", "", "DB");
                mysqli_set_charset($con, "utf8");

                if ($con == false) {
                    echo ("Ошибка подключения: " . mysqli_connect_error());
                }
                else {
                    $sql = "SELECT id, name, image, description FROM data";
                    $result = mysqli_query($con, $sql);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach ($rows as $row) {
                        echo (
                                "<div class='php_block' style='margin-top: 100px;'>
                                <div class='title2'>
                                    <h2>{$row['name']} </h2>
                                </div>
                                <img src='{$row['image']}' width='282' height='350' alt='' />
                                <p>{$row['description']}</p>
                            </div>"
                        );
                    }
                }
            ?>
    </div>
	
</div>
</body>
</html>
