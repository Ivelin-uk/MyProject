<?php
    spl_autoload_register();
    class Repository{
        public $db;

        public function __construct(PDO $db){
            $this->db = $db;
        }

        public function task1(){
            $query = "SELECT DATE_FORMAT(created ,'%Y-%m-%d') AS `date` , SUM(paid) AS `sales` 
            FROM orders 
            GROUP BY day( created )
            ORDER BY created";
            
            $statement = $this->db->prepare($query);
            $statement->execute();
            $data = array();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }

            $myfile = fopen("Data.txt", "w") or die("Unable to open file!");
            $json = json_encode($data);
            fwrite($myfile, $json);
            
        }

        public function task2(){
            $query = "SELECT DATE_FORMAT(created ,'%Y-%m-%d') AS `date` ,item_id, SUM(paid) AS `sales`
            FROM orders 
            GROUP BY day( created ), item_id
            ORDER BY created";

            $statement = $this->db->prepare($query);
            $statement->execute();
            $data = array();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }

            $myfile = fopen("Data.txt", "w") or die("Unable to open file!");
            $json = json_encode($data);
            fwrite($myfile, $json);
        }

        public function task3(){
            $allData = [];  
            $allData["January"] = $this->currentMonthTask3(1);
            $allData["February "] = $this->currentMonthTask3(2);
            $allData["March"] = $this->currentMonthTask3(3);
            $allData["April"] = $this->currentMonthTask3(4);
            $allData["May"] = $this->currentMonthTask3(5);
            $allData["June "] = $this->currentMonthTask3(6);
            $allData["July"] = $this->currentMonthTask3(7);
            $allData["August"] = $this->currentMonthTask3(8);
            
            $myfile = fopen("Data.txt", "w") or die("Unable to open file!");
            $json = json_encode($allData);
            fwrite($myfile, $json);
        }

        public function currentMonthTask3(int $month): array{
            $query = "SELECT 
            DATE_FORMAT(created ,'%Y-%m-%d') AS `date`,
            client_id,
            COUNT(client_id) AS `orders`
            FROM orders
            WHERE MONTH(created) = ?
            GROUP BY client_id
            ORDER BY COUNT(client_id) DESC
            LIMIT 10";

            $statement = $this->db->prepare($query);
            $statement->execute([$month]);
            $currentMonth = array();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $currentMonth[] = $row;
            }

            return $currentMonth;
        }

        public function task4(){
            $allData = [];  
            $allData["January"] = $this->currentMonthTask4(1);
            $allData["February "] = $this->currentMonthTask4(2);
            $allData["March"] = $this->currentMonthTask4(3);
            $allData["April"] = $this->currentMonthTask4(4);
            $allData["May"] = $this->currentMonthTask4(5);
            $allData["June "] = $this->currentMonthTask4(6);
            $allData["July"] = $this->currentMonthTask4(7);
            $allData["August"] = $this->currentMonthTask4(8);
            
            $myfile = fopen("Data.txt", "w") or die("Unable to open file!");
            $json = json_encode($allData);
            fwrite($myfile, $json);
        }

        public function currentMonthTask4(int $month): array{
            $query = "SELECT 
            client_id, 
            SUM(items) AS `items`
            FROM orders
            WHERE MONTH(created) = ?
            GROUP BY client_id
            ORDER BY SUM(items) DESC
            LIMIT 10";

            $statement = $this->db->prepare($query);
            $statement->execute([$month]);
            $currentMonth = array();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $currentMonth[] = $row;
            }

            return $currentMonth;
        }

        public function task5(){
            $allData = [];  
            $allData["January"] = $this->currentMonthTask5(1);
            $allData["February "] = $this->currentMonthTask5(2);
            $allData["March"] = $this->currentMonthTask5(3);
            $allData["April"] = $this->currentMonthTask5(4);
            $allData["May"] = $this->currentMonthTask5(5);
            $allData["June "] = $this->currentMonthTask5(6);
            $allData["July"] = $this->currentMonthTask5(7);
            $allData["August"] = $this->currentMonthTask5(8);
            
            $myfile = fopen("Data.txt", "w") or die("Unable to open file!");
            $json = json_encode($allData);
            fwrite($myfile, $json);
        }

        public function currentMonthTask5(int $month): array{
            $query = "SELECT 
            client_id, 
            SUM(paid) AS `paid`,
            created
            FROM orders
            WHERE MONTH(created) = ?
            GROUP BY client_id
            ORDER BY SUM(paid) DESC
            LIMIT 10";

            $statement = $this->db->prepare($query);
            $statement->execute([$month]);
            $currentMonth = array();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $currentMonth[] = $row;
            }

            return $currentMonth;
        }

        public function task6(int $week){
            $query = "SELECT 
            item_id, 
            MAX(price) AS maxPrice,
            MIN(price) AS minPrice,
            AVG(price) AS avgPrice,
            DATE_FORMAT(created ,'%Y-%m-%d') AS `date`
            FROM orders 
            WHERE WEEK(created) = ?
            GROUP BY item_id, WEEK(created)";

            $statement = $this->db->prepare($query);
            $statement->execute([$week]);
            $data = array();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            
            $myfile = fopen("Data.txt", "w") or die("Unable to open file!");
            $json = json_encode($data);
            fwrite($myfile, $json);
        }

        public function task7(){
            $query = "SELECT item_id, COUNT(item_id) AS `count` FROM orders
            GROUP BY WEEK(created)";

            $statement = $this->db->prepare($query);
            $statement->execute();
            $data = array();

            $counter = 1;
            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $data[$counter] = $row;
                $counter++;
            }

            $myfile = fopen("Data.txt", "w") or die("Unable to open file!");
            $json = json_encode($data);
            fwrite($myfile, $json);
        }

        public function task8(){
            $allData = [];  
            $allData["1 to 5"] = $this->currentMonthTask8_1(1,5);
            $allData["6 to 10"] = $this->currentMonthTask8_1(6,10);
            $allData["11 to 15"] = $this->currentMonthTask8_1(11,15);
            $allData["over 15"] = $this->currentMonthTask8_2(15);
            
            $myfile = fopen("Data.txt", "w") or die("Unable to open file!");
            $json = json_encode($allData);
            fwrite($myfile, $json);
        }

        public function currentMonthTask8_1(int $start, int $end): array{
            $query = "SELECT 
            count(created) AS `countClient` , 
            DATE_FORMAT(created ,'%m') AS `month`
            FROM orders
            WHERE items BETWEEN ? AND ?
            GROUP BY month(created)";

            $statement = $this->db->prepare($query);
            $statement->execute([$start,$end]);
            $currentMonth = array();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $currentMonth[] = $row;
            }

            return $currentMonth;
        }

        public function currentMonthTask8_2(int $from): array{
            $query = "SELECT 
            count(created) AS `countClient` , 
            DATE_FORMAT(created ,'%m') AS `month`
            FROM orders
            WHERE items > ?
            GROUP BY month(created)";

            $statement = $this->db->prepare($query);
            $statement->execute([$from]);
            $currentMonth = array();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $currentMonth[] = $row;
            }

            return $currentMonth;
        }

        public function task9(){
         
            $allData = [];  
            $allData["под 10 лв"] = $this->currentMonthTask9_1(10);
            $allData["10.01 до 100 лв"] = $this->currentMonthTask9_2(10.01,10000);
            $allData["100.01 до 1000 лв"] = $this->currentMonthTask9_2(100.01,1000);
            $allData["1000.01 до 10 000 лв"] = $this->currentMonthTask9_2(1000.01,10000);
            $allData["над 10 000 лв"] = $this->currentMonthTask9_3(10000);

            $myfile = fopen("Data.txt", "w") or die("Unable to open file!");
            $json = json_encode($allData);
            fwrite($myfile, $json);
        }

        public function currentMonthTask9_1($to): array{
            $query = "SELECT 
            count(created) AS `countClient` , 
            created AS `month`
            FROM orders
            WHERE paid < ?
            GROUP BY month(created)";

            $statement = $this->db->prepare($query);
            $statement->execute([$to]);
            $currentMonth = array();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $currentMonth[] = $row;
            }

            return $currentMonth;
        }

        public function currentMonthTask9_2($from,$to): array{
            $query = "SELECT 
            count(created) AS `countClient` , 
            DATE_FORMAT(created ,'%m') AS `month`
            FROM orders
            WHERE paid  BETWEEN ? AND ?
            GROUP BY month(created)";

            $statement = $this->db->prepare($query);
            $statement->execute([$from, $to]);
            $currentMonth = array();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $currentMonth[] = $row;
            }

            return $currentMonth;
        }
        
        public function currentMonthTask9_3($over): array{
            $query = "SELECT 
            count(created) AS `countClient` , 
            DATE_FORMAT(created ,'%m') AS `month`
            FROM orders
            WHERE paid > ?
            GROUP BY month(created)";

            $statement = $this->db->prepare($query);
            $statement->execute([$over]);
            $currentMonth = array();

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $currentMonth[] = $row;
            }

            return $currentMonth;
        }
    }
?>