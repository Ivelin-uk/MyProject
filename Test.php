<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Demo vue</title>
    <script src="JS/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <h1>Task 1</h1>
    <div id="app">
        <table id="customers">
            <tr>
                <th>Day</th>
                <th>Sales</th>
            </tr>
            <tr v-for="item in phpData" :key="item">
                 <td>{{ item.day }}</td>
                 <td>{{ item.sales }}</td>
            </tr>
        </table>
    </div>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                phpData: '',
            },
            methods: {
                fetchAllData: function(){
                    axios.get('http://localhost/MyProject/Data.txt',{
                        action: 'fatchAll',
                    }).then(function(response){
                        app.phpData = response.data;
                    });
                }
            },
            created: function(){
                this.fetchAllData();
            }
        });
    </script>

</body>

</html>