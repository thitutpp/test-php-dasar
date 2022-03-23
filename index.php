<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</head>

<body>
    <!-- Bagian 1 : PHP Dasar -->
    <div>
        <div class="jumbotron jumbotron-fluid text-center">
            <div class="container">
                <h1 class="display-4">Bagian 1 : PHP Dasar</h1>
            </div>
        </div>


        <div class="container">

            <div class="card m-4">
                <div class="card-header bg-success d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight text-white">
                        <h2><span class="badge bg-white text-success">1</span></h2>
                    </div>
                    <div class="p-2 bd-highlight text-white">Nilai ujian sebuah kelas tersimpan dalam sebuah string
                        berikut
                        :
                        $nilai = “72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86”;
                        Buatlah sebuah PHP script untuk menentukan (1) nilai rata-rata, (2) 7 nilai tertinggi, (3) 7
                        nilai
                        terendah dari nilai-nilai di atas.</div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jawaban :</h5>
                    <p class="card-text">
                        <?php 
    
                    //Data Master
                    $nilai = array(72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86);
                    echo "Data Nilai Siswa = ";
                    foreach($nilai as $value){
                        echo $value , "," ;
                    }
                    
                    //Mencari Nilai Rata-rata
                    $average = array_sum($nilai) / count($nilai);
                    echo "<br>";
                    echo " Nilai rata-rata = $average";
                    
                    //Menampilkan Nilai Tertinggi
                    echo "<br>";
                    $sort_highest_data= rsort($nilai);
                    $unique_highest_value= array_unique($nilai);
                    $limit_highest_value=array_splice($unique_highest_value, 0, 7);
                    echo "7 Nilai Tertinggi = ";
                    foreach ($limit_highest_value as $data ) {
                        echo $data . ",";
                    }
                    //Menampilkan Nilai Tertinggi
                    
                    //Menampilkan Nilai Terendah
                    echo "<br>";
                    $sort_lowest_data= sort($nilai);
                    $unique_lowest_value= array_unique($nilai);
                    $limit_lowest_value=array_splice($unique_lowest_value, 0, 7);
                    echo "7 Nilai Terendah = ";
                    foreach ($limit_lowest_value as $data ) {
                        echo $data . ",";
                    }
                    //Menampilkan Nilai Terendah
    
    
    
        
                ?>
                    </p>
                </div>
            </div>


            <div class="card m-4">
                <div class="card-header bg-success d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight text-white">
                        <h2><span class="badge bg-white text-success">2</span></h2>
                    </div>
                    <div class="p-2 bd-highlight text-white">Buatlah sebuah fungsi dalam PHP untuk menentukan jumlah
                        huruf
                        kecil dalam sebuah string.
                        Contoh : bila fungsi diberikan input “TranSISI” maka akan menghasilkan output : “TranSISI”
                        mengandung 3 buah huruf kecil.</div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jawaban :</h5>
                    <p class="card-text">
                        <form name="form" action="" method="post">
                            <input type="text" name="subject" id="subject">
                            <button type="submit" name="submit" class="btn btn-primary m-2 ">Jalankan</button>
                            <!-- <button type="reset" class="btn btn-primary m-2">Reset</button> -->

                        </form>


                        <?php 
                    if(isset($_POST['submit'])){
                        



                        }
                    ?>


                    </p>
                </div>
            </div>


            <div class="card m-4">
                <div class="card-header bg-success d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight text-white">
                        <h2><span class="badge bg-white text-success">3</span></h2>
                    </div>
                    <div class="p-2 bd-highlight text-white">Buatlah sebuah fungsi dalam PHP untuk membentuk unigram,
                        bigram, trigram dari sebuah string.
                        Contoh : bila fungsi diberikan input “Jakarta adalah ibukota negara Republik Indonesia”, maka
                        akan menghasilkan output :
                        <ul>
                            <li>Unigram : jakarta, adalah, ibukota, negara, republik, indonesia</li>
                            <li>Bigram : jakarta adalah, ibukota negara, republik indonesia</li>
                            <li>Trigram : jakarta adalah ibukota, negara republik indonesia</li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jawaban :</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Bagian 1 : PHP Dasar -->

    <!-- Bagian 1 : PHP Dasar (2) -->
    <div>
        <div class="jumbotron jumbotron-fluid text-center">
            <div class="container">
                <h1 class="display-4">Bagian 1 : PHP Dasar (2)</h1>
            </div>
        </div>

        <div class="container">
            <div class="card m-4">
                <div class="card-header bg-success">
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="p-2 bd-highlight text-white">
                            <h2><span class="badge bg-white text-success">1</span></h2>
                        </div>
                        <div class="p-2 bd-highlight text-white">Buatlah sebuah fungsi dalam PHP, yang apabila dipanggil
                            akan menampilkan tabel berikut :

                        </div>
                    </div>
                    <div class="media">
                        <img src="assets/image/1.png" class="mr-3" alt="...">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jawaban :</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            <div class="card m-4">
                <div class="card-header bg-success d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight text-white">
                        <h2><span class="badge bg-white text-success">2</span></h2>
                    </div>
                    <div class="p-2 bd-highlight text-white">Buatlah sebuah fungsi “enkripsi”, yang apabila diberikan
                        input DFHKNQ akan memberikan output EDKGSK</div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jawaban :</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Bagian 1 : PHP Dasar (2) -->

    <!-- Bagian 1 : PHP Dasar (3) -->
    <div>
        <div class="jumbotron jumbotron-fluid text-center">
            <div class="container">
                <h1 class="display-4">Bagian 1 : PHP Dasar (3)</h1>
            </div>
        </div>

        <div class="container">
            <div class="card m-4">
                <div class="card-header bg-success d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight text-white">
                        <h2><span class="badge bg-white text-success">1</span></h2>
                    </div>
                    <div class="p-2 bd-highlight text-white">
                        <span>Diketahui sebuah array berikut :</span>
                        <p>$arr = [
                            ['f', 'g', 'h', 'i'],
                            ['j', 'k', 'p', 'q'],
                            ['r', 's', 't', 'u']
                            ];</p>
                        <p>Buatlah sebuah fungsi dalam PHP untuk melakukan pencarian kata dalam array di atas.
                            (perhatikan contoh di bawah ini)</p>

                        <ul>
                            <li>cari($arr, 'fghi'); // true</li>
                            <li>cari($arr, 'fghp'); // true</li>
                            <li>cari($arr, 'fjrstp'); // true</li>
                            <li>cari($arr, 'fghq'); // false</li>
                            <li>cari($arr, 'fst'); // false</li>
                            <li>cari($arr, 'pqr'); // false</li>
                            <li>cari($arr, 'fghh'); // false</li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jawaban :</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- Bagian 1 : PHP Dasar (3) -->



</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
</script>

</html>