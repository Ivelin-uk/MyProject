<div id="task3">
    <table id="mounths">
        <tr>
            <th>Месец</th>
            <th>10-те клиента със най-много поръчки за месец</th>
        </tr>
        <tr v-for="(value,key) in phpData3">
            <td>{{key}}</td>
            <td>
                <table id="currentMounth">
                    <tr>
                        <th>Идентификатор на клиента</th>
                        <th>Поръчки</th>
                    </tr>
                    <tr v-for="mounth in value">
                        <td>{{ mounth.client_id}}</td>
                        <td>{{ mounth.orders }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>