<div id="task2">
    <table id="customers">
        <tr>
            <th>Идентификатор на артикула</th>
            <th>Дата</th>
            <th>Прихода </th>
        </tr>
        <tr v-for="element in phpData2" :key="element">
            <td>{{ element.item_id }}</td>
            <td>{{ element.date}}</td>
            <td>{{ element.sales }}</td>
        </tr>
    </table>
</div>