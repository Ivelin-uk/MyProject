<div id="task4">
<table id="mounths">
        <tr>
            <th>Месец</th>
            <th>10-те клиента със най-много закупени артикули за месец</th>
        </tr>
        <tr v-for="(value,key) in phpData4">
            <td>{{key}}</td>
            <td>
                <table id="currentMounth">
                    <tr>
                        <th>Идентификатор на клиента</th>
                        <th>Артикули</th>
                    </tr>
                    <tr v-for="mounth in value">
                        <td>{{ mounth.client_id}}</td>
                        <td>{{ mounth.items }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>