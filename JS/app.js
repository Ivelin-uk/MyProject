var nav = new Vue({
    el: '#nav',
    data: {
        infoSite: 'Статистика на поръчки за 2020',
        selectedData: '',
    },
    methods: {
        getSelectedData() {
            let selectedOp = window.location.href[window.location.href.length - 1];
            if (selectedOp == 6) {
                this.selectedData = 6
            } else {
                this.selectedData = selectedOp;
            }
        },

    },
    created: function() {
        this.getSelectedData();
    },
});

var task1 = new Vue({
    el: '#task1',
    data: {
        phpData: '',
    },
    methods: {
        fetchAllData: function() {
            axios.get('http://localhost/MyProject/Data.txt').then(function(response) {
                task1.phpData = response.data;
            });
        },
    },
    created: function() {
        this.fetchAllData();
    },
});

var task2 = new Vue({
    el: '#task2',
    data: {
        phpData2: '',
    },
    methods: {
        fetchAllData: function() {
            axios.get('http://localhost/MyProject/Data.txt').then(function(response) {
                task2.phpData2 = response.data;
            });
        },
    },
    created: function() {
        this.fetchAllData();
    },
});

var task3 = new Vue({
    el: '#task3',
    data: {
        phpData3: '',
    },
    methods: {
        fetchAllData: function() {
            axios.get('http://localhost/MyProject/Data.txt').then(function(response) {
                task3.phpData3 = response.data;
            });
        },
    },
    created: function() {
        this.fetchAllData();
    },
});

var task4 = new Vue({
    el: '#task4',
    data: {
        phpData4: '',
    },
    methods: {
        fetchAllData: function() {
            axios.get('http://localhost/MyProject/Data.txt').then(function(response) {
                task4.phpData4 = response.data;
            });
        },
    },
    created: function() {
        this.fetchAllData();
    },
});

var task5 = new Vue({
    el: '#task5',
    data: {
        phpData5: '',
    },
    methods: {
        fetchAllData: function() {
            axios.get('http://localhost/MyProject/Data.txt').then(function(response) {
                task5.phpData5 = response.data;
            });
        },
    },
    created: function() {
        this.fetchAllData();
    },
});

var task6 = new Vue({
    el: '#task6',
    data: {
        phpData6: '',
        url: "http://localhost/MyProject/StatisticController/task6",
        selected: '',
        message: 'Please select week!'
    },
    methods: {
        fetchAllData: function() {
            axios.get('http://localhost/MyProject/Data.txt').then(function(response) {
                task6.phpData6 = response.data;
            });
        },
        show: function() {
            window.location.href = this.url + "/" + this.selected;
        },
    },
    created: function() {
        this.fetchAllData();
    },
});

var task7 = new Vue({
    el: '#task7',
    data: {
        phpData7: '',
    },
    methods: {
        fetchAllData: function() {
            axios.get('http://localhost/MyProject/Data.txt').then(function(response) {
                task7.phpData7 = response.data;
            });
        },
    },
    created: function() {
        this.fetchAllData();
    },
});

var task8 = new Vue({
    el: '#task8',
    data: {
        phpData8: '',
    },
    methods: {
        fetchAllData: function() {
            axios.get('http://localhost/MyProject/Data.txt').then(function(response) {
                task8.phpData8 = response.data;
            });
        },
    },
    created: function() {
        this.fetchAllData();
    },
});

var task9 = new Vue({
    el: '#task9',
    data: {
        phpData9: '',
    },
    methods: {
        fetchAllData: function() {
            axios.get('http://localhost/MyProject/Data.txt').then(function(response) {
                task9.phpData9 = response.data;
            });
        },
    },
    created: function() {
        this.fetchAllData();
    },
});