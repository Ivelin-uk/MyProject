<div id="task9">
<table id="mounths">
        {{phpData8}}
        <tr>
            <th>Закупени артикули</th>
            <th>Броя на клиентите за месец</th>
        </tr>
        <tr v-for="(value,key) in phpData9">
            <td>{{key}}</td>
            <td>
                <table id="currentMounth">
                    <tr>
                        <th>Брой клиенти</th>
                        <th>Месец</th>
                    </tr>
                    <tr v-for="mounth in value">
                        <td>{{ mounth.countClient}}</td>
                        <td>{{ mounth.month }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>