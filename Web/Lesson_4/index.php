<?php
	$data = [
		'name' => ['Магнитогорская фабрика обуви', 'НП ГК АСМ, Екатеринбург'],
		'period' => ['Апрель 2008 – Январь 2009', 'Январь 2011 – июнь 2013'],
		'description' => ['Мониторинг рынка детской обуви Екатеринбурга.Проведение исследования рынка и
		                   потребителей', 'Комплексный анализ рынка, анализ деятельности подразделений.
						   Достижения: участие в создании отдела маркетинга и рекламы с нуля, отладка
						   бизнес-процессов в службе маркетинга, рост продаж и обеспечение стабильности в
						   фирменных магазинах в России, повышение узнаваемости бренда']
						 ]
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body>
        <div>
            <i style="margin-left: 15px; margin-bottom: 5px" class="bi bi-wallet-fill"><span
                style="font-size: 20px;padding-left: 15px; font-style: normal">Опыт работы</span></i>
            <div class="timeline">
                <div class="item">
                    <i class="bi bi-check-circle-fill"></i>
                    <div style="position:relative;display: inline-flex; font-weight: bold; width:100%">
                        <div>
                        <?php echo $data['name'][0]; ?>
                        </div>
                        <div style="position: absolute; right: 0">
                        <?php echo $data['period'][0]; ?>
                        </div>
                    </div>
                    <div>
                        <?php echo $data['description'][0]; ?>
                    </div>
                </div>
            <div class="item">
                <i class="bi bi-check-circle-fill"></i>
                <div style="position:relative;display: inline-flex; font-weight: bold;width: 100%">
                    <div>
                        <?php echo $data['name'][1]; ?>
                    </div>
                    <div style="position: absolute; right: 0">
                           <?php echo $data['period'][1]; ?>
                    </div>
                </div>
                <div>
                       <?php echo $data['description'][1]; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>