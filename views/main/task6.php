<div id="task6"> 
    <div id="selectOpp">
        <select v-model="selected">
            <option disabled value="">{{message}}</option>
            <option v-for="n in 55" >{{ n }}<option>
        </select>
        <button v-on:click="show">Пакажи</button>
    </div>
    <table id="customers">
        <tr>
            <th>Идентификатор на артикула</th>
            <th>Максимална цена</th>
            <th>Минимална цена</th>
            <th>Средната цена</th>
        </tr>
        <tr v-for="element in phpData6" :key="element">
            <td>{{ element.item_id }}</td>
            <td>{{ element.maxPrice }}</td>
            <td>{{ element.minPrice }}</td>
            <td>{{ element.avgPrice }}</td>
        </tr>
    </table>

</div>