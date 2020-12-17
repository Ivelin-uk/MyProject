<div id="task7"> 
    <table id="customers">
        <tr>
            <th>Номер на седмицата</th>
            <th>Идентификатор на артикула</th>
            <th>Продажби на артикул</th>
        </tr>
        <tr v-for="(week,key) in phpData7">
            <td>{{ key }}</td>
            <td>{{ week.item_id}}</td>
            <td>{{ week.count }}</td>
        </tr>   
    </table>
</div>