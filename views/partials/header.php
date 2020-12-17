

<!DOCTYPE html>
<html>
    <head>
        <title>Statistic</title>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="http://localhost/MyProject/css/table.css">
        <link rel="stylesheet" href="http://localhost/MyProject/css/style.css">
    </head>
    <body>
    
        <div id="nav">
            <div class="vertical-menu">
                <a href="http://localhost/MyProject/" class="active">{{infoSite}}</a>
                <a href="http://localhost/MyProject/StatisticController/task1">1. Сума на прихода от продажби по дни.</a>
                <a href="http://localhost/MyProject/StatisticController/task2">2. Сумата на прихода по дни и по артикули.</a>
                <a href="http://localhost/MyProject/StatisticController/task3">3. Десетте клиента с най-голям брой поръчки за всеки месец.</a>
                <a href="http://localhost/MyProject/StatisticController/task4">4. Десетте клиента с най-много закупени артикули за всеки месец.</a>
                <a href="http://localhost/MyProject/StatisticController/task5">5. Десетте клиента с най-голяма заплатена сума за всеки месец.</a>
                <a href="http://localhost/MyProject/StatisticController/task6">6. Средната, минималната и максималната продажна цена на всеки артикул по седмици. Цената варира според валутните курсове.</a>
                <a href="http://localhost/MyProject/StatisticController/task7">7. Най продавания артикул по седмици.</a>
                <a href="http://localhost/MyProject/StatisticController/task8">8. Броя на клиентите по месеци закупили .</a>
                <a href="http://localhost/MyProject/StatisticController/task9">9. Броя на клиентите по месеци закупили артикули на стойност .</a>
            </div>
            <h1>{{selectedData}}</h1>
        </div>
        