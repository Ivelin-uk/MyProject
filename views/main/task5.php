<div id="task5">
<table id="mounths">
        <tr>
            <th>Месец</th>
            <th>10-те клиента със най-голяма заплатена сума за месец</th>
        </tr>
        <tr v-for="(value,key) in phpData5">
            <td>{{key}}</td>
            <td>
                <table id="currentMounth">
                    <tr>
                        <th>Идентификатор на клиента</th>
                        <th>Платена сума за поръчката в лв</th>
                    </tr>
                    <tr v-for="mounth in value">
                        <td>{{ mounth.client_id}}</td>
                        <td>{{ mounth.paid }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>