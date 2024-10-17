<?php

$nilaimhs = [
    ["nama" => "Ahmad Dani", "tugas" => 85, "uts" => 80, "uas" => 75],
    ["nama" => "Raffi Ahmad", "tugas" => 70, "uts" => 90, "uas" => 80],
    ["nama" => "Rika", "tugas" => 85, "uts" => 90, "uas" => 95]
];
?>
<table border ="1">
        <tr>
            <th>Nama Mahasiswa</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
        </tr>

        <?php
        
        foreach ($nilaimhs as $nilaimhs) {
            ?>
            <tr>
                <?php
                foreach($nilaimhs as $key => $value){
                    ?>
                    <td><?= $value;?></td>
                    <?php
                }
                ?>
                </tr>
                <?php        
            }
            
        ?>
  </table>