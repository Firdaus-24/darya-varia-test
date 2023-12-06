<div class="container">


    <div class="row">
        <div class="col-lg-12 mt-3 mb-3">
            <h3>DASHBOARD</h3>
        </div>
    </div>
    <div class="row">


        <?php

        $ck = array();
        foreach ($data['karyawan'] as $row) {
            array_push($ck,  array('Batch' => $row['batch'], 'Nilai' =>  $row['nilai']),);
        }
        // var_dump($ck);
        // Fungsi untuk membuat pie chart
        function createPieChart($ck)
        {
            echo '
            <div class="col-sm-6  text-center" >
                <div class="" style="height:34vh;width:50vw;">
                    <canvas id="myPieChart" width="200" height="200"></canvas>
                </div>
            </div>
            ';
            echo '<script>
            var ctx = document.getElementById("myPieChart").getContext("2d");
            var data = ' . json_encode($ck['karyawan']) . ';
            // Fungsi untuk menghitung jumlah kategori
            function countCategories(data) {
                var counts = {"Merah": 0, "Kuning": 0, "Hijau": 0};
                data.forEach(function(item) {
                    if (item.nilai <= 70) {
                        counts["Merah"]++;
                    } else if (item.nilai < 90) {
                        counts["Kuning"]++;
                    } else {
                        counts["Hijau"]++;
                    }
                });
                return counts;
            }

            // Fungsi untuk membuat pie chart
            function createChart(data) {
                var counts = countCategories(data);
                var myPieChart = new Chart(ctx, {
                    type: "pie",
                    data: {
                        labels: ["Merah (<= 70)", "Kuning (70 > x < 90)", "Hijau (>= 90)"],
                        datasets: [{
                            data: [counts.Merah, counts.Kuning, counts.Hijau],
                            backgroundColor: ["red", "yellow", "green"]
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: "Pie Chart - Distribusi Nilai"
                        }
                    }
                    });
            }

            createChart(data);
          </script>';
        }

        // Fungsi untuk menampilkan tabel detail
        function displayDetailTable($ck, $batchFilter = null)
        {
            echo '
            <div class="col-sm-6">
                <table class="table table-bordered" >
                <tr>
                    <th>Batch</th>
                    <th>Nilai</th>
                </tr>
            
            ';

            foreach ($ck['karyawan'] as $row) {
                // var_dump($row);
                // Filter berdasarkan batch jika diberikan
                if ($batchFilter === null || $row['Batch'] === $batchFilter) {
                    echo '<tr>';
                    echo '<td>' . $row['batch'] . '</td>';
                    echo '<td>' . $row['nilai'] . '</td>';
                    echo '</tr>';
                }
            }

            echo '</table></div>';
        }

        //  penggunaan
        $batchFilter = isset($_GET['batch']) ? $_GET['batch'] : null;
        displayDetailTable($data, $batchFilter);
        createPieChart($data);
        ?>
    </div>
</div>