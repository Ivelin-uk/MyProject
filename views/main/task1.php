<div id="task1">
    <table id="customers">
        <tr>
            <th>Дата</th>
            <th>Прихода от продажби </th>
        </tr>
        <tr v-for="element in phpData" :key="element">
            <td>{{ element.date }}</td>
            <td>{{ element.sales }}</td>
        </tr>
    </table>
</div>

