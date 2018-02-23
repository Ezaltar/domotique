
function heure() {
    setInterval(function () {
        //affiche l'heure
        $.ajax({url: 'informations.php',
            type: 'post',
            data: {info: 'getTime'},
            // info est défini dans information.php, c'est une variable qui va chercher ce que l'ajax doit afficher,
            // ici la fonction getTime coté serveur
            success: function (output) { //les 2 mots dans les parenthèses doit être les mêmes.
                $(".heure").html(output);
                // .heure est le nom de la class <p> où s'affiche l'heure       
            }

        });

        //affiche le la mémoire
        $.ajax({url: 'informations.php',
            type: 'post',
            data: {info: 'getHDD'},
            success: function (output) {
                $(".disk").html(output);
            }
        });

        //affiche le processeur
        $.ajax({url: 'informations.php',
            type: 'post',
            data: {info: 'getProc'},
            success: function (output) {
                $(".proc").html(output);
            }
        });

        $.ajax({url: 'informations.php',
            type: 'post',
            data: {info: 'getRAM'},
            success: function (output) {
                $(".RAM").html(output);
            }
        });

        $.ajax({url: 'informations.php',
            type: 'post',
            data: {info: 'getOS'},
            success: function (output) {
                $(".OS").html(output);
            }
        });
        
        $.ajax({url: 'informations.php',
            type: 'post',
            data: {info: 'getFiles'},
            success: function (output) {
                $(".files").html(output);
            }
        });
    }, 1000);
}


// $.ajax({url: 'informations.php',
// type: 'post',
// data: { info: 'nepasmapeller'},
// success: function (output) {
//     $(".mappellepas").html(output);
//}
//});


