<?php

// fonction variable pour afficher soit getTime soit GetHDD. A mettre dans data.
$info = $_POST['info'];
$info();

// Fonction pour avoir l'heure
function getTime() {
    $time = date("H:i:s");
    echo "Heure: " .$time. "</br>";
}

//Fonction pour afficher la place restante et total de l'ordinateur.
function getHDD() {
    $df = disk_free_space("/");
    $total = $df/1024/1024/1024;
    echo "Il reste " . round($total,0) . " GO disponible sur ce serveur" . "<br/>";
    $ds = disk_total_space("/");
    $total1 = $ds/1024/1024/1024;
    echo "Ce serveur contient  " . round($total1,0) . " GO" . "<br/>";
}

//Fonction pour afficher les caractéristiques du proc 
function getProc() {
    $proc = sys_getloadavg();
    print_r($proc);
}

//Fonction pour afficher la RAM
function getRAM() {
    $free = shell_exec('free');
    $free = (string) trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    $memory_usage = $mem[2] / $mem[1] * 100;
    echo "Le pourcentage de mémoire vive utilisé est de " . round($memory_usage,0) . " %" . "<br/>";
    $total2 = $mem[1]/1024/1024;
    echo "Il y a au total " . round($total2,0) . " GO de mémoire vive" . "<br/>";
}

function getOS() {
    echo PHP_OS;
}

function getFiles() {
    $output = shell_exec("ls /var/www");
     echo "<pre>$output</pre>" . "<br/>";
     
   // $dir = '/var/www';
   // $files1 = scandir($dir);

    //print_r($files1);
   
}

/*
  function nepasmapeller() {
  echo "Ne pas m'utiliser";
  }
 */
?>