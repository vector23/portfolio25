<!DOCTYPE html>
<style>
    body{
        background-color: antiquewhite;
    }
</style>
<html>
    <head>
        <title>Scythe - tabulka</title>
        <link rel="stylesheet" href="" type="text/css"> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!--    Hlavicka    -->
        <header>
            Scythe - tabuľky</h2>
        </header>
        <!--    Prva cast - welcome text  -->
        <datalist id="mena">
            <option value="Palo">
            <option value="Juro">
            <option value="Tobiáš">
            <option value="Samo">
            <option value="Matúš">
            <option value="Mišo">
          </datalist>
          <datalist id="mat">
            <option value="1">
            <option value="2">
            <option value="2A">
            <option value="3">
            <option value="3A">
            <option value="4">
            <option value="5">
          </datalist>
        <div class="paragraf_uno">
            <div id="nazov"></div>
            <button id="authorize_button" onclick="handleAuthClick()">Authorize</button>
            <button id="signout_button" onclick="handleSignoutClick()">Sign Out</button>

            <pre id="content" style="white-space: pre-wrap;"></pre>
            <form>
                <input type="date" id="date" onclick="checkDate()">
                <table>
                    <tr>
                        <td>Frakcia</td>
                        <td>Meno</td>
                        <td>Mat</td>
                        <td>Hviezdy</td>
                        <td>Hexy</td>
                        <td>Suroviny</td>
                        <td>Bonus</td>
                        <td>Mince</td>
                        <td>Spolu</td>
                        <td>Poradie</td>
                    </tr>
                    <tr style="background-color:white;">
                        <td>Polania</td>
                        <td><input id="pol_meno" list="mena" onchange="detectName('pol')"></td>
                        <td><input id="pol_mat" list="mat" hidden="true"></td>
                        <td><input id="pol_hviez" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('pol')"></td>
                        <td><input id="pol_hex" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('pol')"></td>
                        <td><input id="pol_sur" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('pol')"></td>
                        <td><input id="pol_bonus" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('pol')"></td>
                        <td><input id="pol_minc" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('pol')"></td>
                        <td><div id="pol_sum"></div></td>
                        <td><input id="pol_por" placeholder="0" type="number" hidden=true min="1" max="7"></td>
                    </tr>
                    <tr style="background-color:green;">
                        <td style="color: white;">Albion</td>
                        <td><input id="alb_meno" list="mena" onchange="detectName('alb')"></td>
                        <td><input id="alb_mat" list="mat" hidden="true"></td>
                        <td><input id="alb_hviez" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('alb')"></td>
                        <td><input id="alb_hex" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('alb')"></td>
                        <td><input id="alb_sur" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('alb')"></td>
                        <td><input id="alb_bonus" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('alb')"></td>
                        <td><input id="alb_minc" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('alb')"></td>
                        <td><div id="alb_sum" style="color: white;"></div></td>
                        <td><input id="alb_por" placeholder="0" type="number" hidden=true min="1" max="7"></td>
                    </tr>
                    <tr style="background-color:blue;">
                        <td style="color: white;">Nordic</td>
                        <td><input id="nor_meno" list="mena" onchange="detectName('nor')"></td>
                        <td><input id="nor_mat" list="mat" hidden="true"></td>
                        <td><input id="nor_hviez" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('nor')"></td>
                        <td><input id="nor_hex" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('nor')"></td>
                        <td><input id="nor_sur" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('nor')"></td>
                        <td><input id="nor_bonus" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('nor')"></td>
                        <td><input id="nor_minc" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('nor')"></td>
                        <td><div id="nor_sum" style="color: white;"></div></td>
                        <td><input id="nor_por" placeholder="0" type="number" hidden=true min="1" max="7"></td>
                    </tr>
                    <tr style="background-color:red;">
                        <td style="color: white;">Rusviet</td>
                        <td><input id="rus_meno" list="mena" onchange="detectName('rus')"></td>
                        <td><input id="rus_mat" list="mat" hidden="true"></td>
                        <td><input id="rus_hviez" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('rus')"></td>
                        <td><input id="rus_hex" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('rus')"></td>
                        <td><input id="rus_sur" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('rus')"></td>
                        <td><input id="rus_bonus" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('rus')"></td>
                        <td><input id="rus_minc" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('rus')"></td>
                        <td><div id="rus_sum" style="color: white;"></div></td>
                        <td><input id="rus_por" placeholder="0" type="number" hidden=true min="1" max="7"></td>
                    </tr>
                    <tr style="background-color:purple;">
                        <td style="color: white;">Togawa</td>
                        <td><input id="tog_meno" list="mena" onchange="detectName('tog')"></td>
                        <td><input id="tog_mat" list="mat" hidden="true"></td>
                        <td><input id="tog_hviez" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('tog')"></td>
                        <td><input id="tog_hex" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('tog')"></td>
                        <td><input id="tog_sur" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('tog')"></td>
                        <td><input id="tog_bonus" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('tog')"></td>
                        <td><input id="tog_minc" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('tog')"></td>
                        <td><div id="tog_sum" style="color: white;"></div></td>
                        <td><input id="tog_por" placeholder="0" type="number" hidden=true min="1" max="7"></td>
                    </tr>
                    <tr style="background-color:yellow;">
                        <td>Crimea</td>
                        <td><input id="cri_meno" list="mena" onchange="detectName('cri')"></td>
                        <td><input id="cri_mat" list="mat" hidden="true"></td>
                        <td><input id="cri_hviez" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('cri')"></td>
                        <td><input id="cri_hex" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('cri')"></td>
                        <td><input id="cri_sur" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('cri')"></td>
                        <td><input id="cri_bonus" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('cri')"></td>
                        <td><input id="cri_minc" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('cri')"></td>
                        <td><div id="cri_sum"></div></td>
                        <td><input id="cri_por" placeholder="0" type="number" hidden=true min="1" max="7"></td>
                    </tr>
                    <tr style="background-color:black;">
                        <td style="color: white;">Saxony</td>
                        <td><input id="sax_meno" list="mena" onchange="detectName('sax')"></td>
                        <td><input id="sax_mat" list="mat" hidden="true"></td>
                        <td><input id="sax_hviez" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('sax')"></td>
                        <td><input id="sax_hex" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('sax')"></td>
                        <td><input id="sax_sur" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('sax')"></td>
                        <td><input id="sax_bonus" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('sax')"></td>
                        <td><input id="sax_minc" hidden="true" placeholder="0" type="number" min="0" onchange="updateFrakcia('sax')"></td>
                        <td><div id="sax_sum" style="color: white;"></div></td>
                        <td><input id="sax_por" placeholder="0" type="number" hidden=true min="1" max="7">4</td>
                    </tr>
                </table>
                <textarea placeholder="Poznámka" id="note" style="width: 30%;"></textarea>
                <br>
                <button id="uploadButton" onclick="upload()" type='button'>Upload</button>
                <div id="error" style="color: red;"></div>
            </form>
                <script>
                        var dateChecked=false
                        function checkDate() {
                            dateChecked=true
                        }
                        function updateFrakcia(frakcia) {
                                calculatePoints(frakcia);
                                update_poradie();
                            }
                        function detectName(frakcia) {
                            if (document.getElementById(frakcia+'_meno').value.length>0) {
                                document.getElementById(frakcia+'_mat').hidden=false;
                                document.getElementById(frakcia+'_hviez').hidden=false;
                                document.getElementById(frakcia+'_hex').hidden=false;
                                document.getElementById(frakcia+'_sur').hidden=false;
                                document.getElementById(frakcia+'_bonus').hidden=false;
                                document.getElementById(frakcia+'_minc').hidden=false;
                                document.getElementById(frakcia+'_sum').hidden=false;
                                document.getElementById(frakcia+'_por').hidden=false;
                            } else {
                                document.getElementById(frakcia+'_mat').hidden=true;
                                document.getElementById(frakcia+'_hviez').hidden=true;
                                document.getElementById(frakcia+'_hex').hidden=true;
                                document.getElementById(frakcia+'_sur').hidden=true;
                                document.getElementById(frakcia+'_bonus').hidden=true;
                                document.getElementById(frakcia+'_minc').hidden=true;
                                document.getElementById(frakcia+'_sum').hidden=true;
                                document.getElementById(frakcia+'_por').hidden=true;

                                document.getElementById(frakcia+'_mat').value="";
                                document.getElementById(frakcia+'_hviez').value="";
                                document.getElementById(frakcia+'_hex').value="";
                                document.getElementById(frakcia+'_sur').value="";
                                document.getElementById(frakcia+'_bonus').value="";
                                document.getElementById(frakcia+'_minc').value="";
                                document.getElementById(frakcia+'_sum').innerHTML="";
                                document.getElementById(frakcia+'_por').value="";

                                updateFrakcia("pol");
                                updateFrakcia("alb");
                                updateFrakcia("nor");
                                updateFrakcia("rus");
                                updateFrakcia("tog");
                                updateFrakcia("cri");
                                updateFrakcia("sax");
                            }
                        }

                        function calculatePoints(frakcia) {
                            var one = 0
                            var two = 0
                            var three = 0
                            var four = 0
                            var five = 0
                            if (document.getElementById(frakcia+'_hviez').value.length >0) {
                                one = parseInt(document.getElementById(frakcia+'_hviez').value);
                            }
                            if (document.getElementById(frakcia+'_hex').value.length >0) {
                                two = parseInt(document.getElementById(frakcia+'_hex').value);
                            }
                            if (document.getElementById(frakcia+'_sur').value.length >0) {
                                three = parseInt(document.getElementById(frakcia+'_sur').value);
                            }
                            if (document.getElementById(frakcia+'_bonus').value.length >0) {
                                four = parseInt(document.getElementById(frakcia+'_bonus').value);
                            }
                            if (document.getElementById(frakcia+'_minc').value.length >0) {
                                five = parseInt(document.getElementById(frakcia+'_minc').value);
                            }
                            var sum = one + two + three + four + five;
                            document.getElementById(frakcia+'_sum').innerHTML=sum;
                            return [one, two, three, four, five, sum].flat();
                        }

                    function update_poradie() {
                        var sumy = [
                            calculatePoints("pol").slice(-1),
                            calculatePoints("alb").slice(-1),
                            calculatePoints("nor").slice(-1),
                            calculatePoints("rus").slice(-1),
                            calculatePoints("tog").slice(-1),
                            calculatePoints("cri").slice(-1),
                            calculatePoints("sax").slice(-1)
                        ].flat();
                        var frakcie = [
                            "pol_por",
                            "alb_por",
                            "nor_por",
                            "rus_por",
                            "tog_por",
                            "cri_por",
                            "sax_por"
                        ];
                        for (let i = 0; i < 7; i++) {
                            let bigger = 1;
                            for (let j = 0; j < 7; j++) {
                                if (sumy[j] > sumy[i]) {
                                    bigger++;
                                }
                            }
                            document.getElementById(frakcie[i]).value=bigger;
                        }
                    }
                    function resetTable() {
                        document.getElementById("error").style.color="red";
                        document.getElementById("error").innerHTML="";
                        document.getElementById("uploadButton").innerHTML="Upload";
                        document.getElementById("uploadButton").setAttribute('onclick','upload()');

                        var frakcie = ["pol", "alb", "nor", "rus", "tog", "cri", "sax"]
                        var suffix_value = ["_meno", "_mat", "_hviez", "_hex", "_sur", "_bonus", "_minc", "_por"]
                        for (let i = 0; i < frakcie.length; i++) {
                            for (let j = 0; j < suffix_value.length; j ++) {
                                document.getElementById(frakcie[i]+suffix_value[j]).value = "";
                            }
                            detectName(frakcie[i]);
                        }
                        document.getElementById("note").value = "";
                        document.getElementById("date").value = "";
                        dateChecked = false;
                    }
                    var loggedIn=false;
                    function upload() {
                        if ((!checkTable()) || (!loggedIn)) {
                            //return false;
                            if (!loggedIn) {
                                printError(6,"");
                            }
                            console.log("Nenahrali sa dáta!");
                        } else {
                            var data = [
                            Date.now(),
                            document.getElementById('date').value,
                            document.getElementById('note').value,
                            document.getElementById('pol_meno').value,
                            document.getElementById('pol_mat').value,
                            calculatePoints("pol"),
                            parseInt(document.getElementById('pol_por').value),
                            document.getElementById('alb_meno').value,
                            document.getElementById('alb_mat').value,
                            calculatePoints("alb"),
                            parseInt(document.getElementById('alb_por').value),
                            document.getElementById('nor_meno').value,
                            document.getElementById('nor_mat').value,
                            calculatePoints("nor"),
                            parseInt(document.getElementById('nor_por').value),
                            document.getElementById('rus_meno').value,
                            document.getElementById('rus_mat').value,
                            calculatePoints("rus"),
                            parseInt(document.getElementById('rus_por').value),
                            document.getElementById('tog_meno').value,
                            document.getElementById('tog_mat').value,
                            calculatePoints("tog"),
                            parseInt(document.getElementById('tog_por').value),
                            document.getElementById('cri_meno').value,
                            document.getElementById('cri_mat').value,
                            calculatePoints("cri"),
                            parseInt(document.getElementById('cri_por').value),
                            document.getElementById('sax_meno').value,
                            document.getElementById('sax_mat').value,
                            calculatePoints("sax"),
                            parseInt(document.getElementById('sax_por').value)
                        ].flat();
                        if (appendValues(SPREADSHEET_ID, data)) {
                            document.getElementById("error").style.color="green";
                            document.getElementById("error").innerHTML="Dáta sa úspešne odoslali!";
                            console.log("Úspešné nahodenie dát!");
                            document.getElementById("uploadButton").innerHTML="Reset table";
                            document.getElementById("uploadButton").setAttribute('onclick','resetTable()');
                        } else {
                            document.getElementById("error").innerHTML="Dáta sa nepodarilo odoslať! Skúste skontrolovať pripojenie na internet";
                            console.log("Error! Dáta sa nepodarilo nahodiť!");
                        }
                        //return false;
                        }
                        
                    }
                    function checkTable() {
                        document.getElementById("error").innerHTML="";
                        var numPlayers = 0;
                        var submitForm = true;
                        var allValuesAreFilled=true;
                        var temp1 = document.getElementById('pol_meno').value;
                        var temp2 = document.getElementById('alb_meno').value;
                        var temp3 = document.getElementById('nor_meno').value;
                        var temp4 = document.getElementById('rus_meno').value;
                        var temp5 = document.getElementById('tog_meno').value;
                        var temp6 = document.getElementById('cri_meno').value;
                        var temp7 = document.getElementById('sax_meno').value;

                        var temp12 = document.getElementById('pol_mat').value;
                        var temp22 = document.getElementById('alb_mat').value;
                        var temp32 = document.getElementById('nor_mat').value;
                        var temp42 = document.getElementById('rus_mat').value;
                        var temp52 = document.getElementById('tog_mat').value;
                        var temp62 = document.getElementById('cri_mat').value;
                        var temp72 = document.getElementById('sax_mat').value;

                        var tempArray = [temp1,temp2,temp3,temp4,temp5,temp6,temp7];
                        var tempArray2 = [temp12,temp22,temp32,temp42,temp52,temp62,temp72];
                        var break2=false;
                        //kontrola na rovnake mena
                        for (let i = 0; i < tempArray.length; i++) {
                            for (let j = 0; j < tempArray.length; j++) {
                                if (tempArray[i] != "" && i != j) {
                                    if (tempArray[i] == tempArray[j]) {
                                        printError(7,"");
                                        submitForm = false;
                                        break2=true;
                                        break;
                                    }
                                }
                            }
                            if (break2) {
                                break;
                            }
                        }
                        break2=false;
                        //kontrola na rovnake maty
                        for (let i = 0; i < tempArray2.length; i++) {
                            for (let j = 0; j < tempArray2.length; j++) {
                                if (tempArray2[i] != ""  && i != j) {
                                    if (tempArray2[i]==tempArray2[j]) {
                                        printError(8,"");
                                        submitForm = false;
                                        break2=true;
                                        break;
                                    }
                                }
                            }
                            if (break2) {
                                break;
                            }
                        }

                        //prvy a treti error
                        if (temp1.length > 0) {
                            numPlayers++;
                            if (!checkMat(document.getElementById("pol_mat").value)) {
                                printError(5,"");
                                submitForm = false;
                            }
                            if (!checkPlayerFilled("pol")) {
                                printError(3,"Polania");
                                submitForm = false;
                            }
                            
                        } 
                        if (temp2.length > 0) {
                            numPlayers++;
                            if (!checkMat(document.getElementById("alb_mat").value)) {
                                printError(5,"");
                                submitForm = false;
                            }
                            if (!checkPlayerFilled("alb")) {
                                printError(3,"Albion");
                                submitForm = false;
                            }
                            
                        } 
                        if (temp3.length > 0) {
                            numPlayers++;
                            if (!checkMat(document.getElementById("nor_mat").value)) {
                                printError(5,"");
                                submitForm = false;
                            }
                            if (!checkPlayerFilled("nor")) {
                                printError(3,"Nordic");
                                submitForm = false;
                            }
                            
                        } 
                        if (temp4.length > 0) {
                            numPlayers++;
                            if (!checkMat(document.getElementById("rus_mat").value)) {
                                printError(5,"");
                                submitForm = false;
                            }
                            if (!checkPlayerFilled("rus")) {
                                printError(3,"Rusviet");
                                submitForm = false;
                            }
                            
                        } 
                        if (temp5.length > 0) {
                            numPlayers++;
                            if (!checkMat(document.getElementById("tog_mat").value)) {
                                printError(5,"");
                                submitForm = false;
                            }
                            if (!checkPlayerFilled("tog")) {
                                printError(3,"Togawa");
                                submitForm = false;
                            }
                            
                        } 
                        if (temp6.length > 0) {
                            numPlayers++;
                            if (!checkMat(document.getElementById("cri_mat").value)) {
                                printError(5,"");
                                submitForm = false;
                            }
                            if (!checkPlayerFilled("cri")) {
                                printError(3,"Crimea");
                                submitForm = false;
                            }
                            
                        } 
                        if (temp7.length > 0) {
                            numPlayers++;
                            if (!checkMat(document.getElementById("sax_mat").value)) {
                                printError(5,"");
                                submitForm = false;
                            }
                            if (!checkPlayerFilled("sax")) {
                                printError(3,"Saxony");
                                submitForm = false;
                            }
                            
                        }
                        if (numPlayers<2) {
                            printError(1,numPlayers);
                            submitForm = false;
                        } else {
                            //stvrty error
                            if (!checkOrder()) {
                                submitForm = false;
                            }
                            
                        }

                        //druhy error
                        if (!dateChecked) {
                            printError(2,"");
                            submitForm = false;
                        }

                        return submitForm;
                        
                    }

                    function printError(num,vklad) {
                        switch (num) {
                            case 1:
                            document.getElementById("error").innerHTML=document.getElementById("error").innerHTML+"Zle zadaný počet hráčov! Treba minimálne dva a nastavil si " + vklad +"<br>";
                            break;
                            case 2:
                            document.getElementById("error").innerHTML=document.getElementById("error").innerHTML+"Neskontroloval si dátum! Prosím, najprv naňho klikni aby to bolo potvrdené.<br>";
                            break;
                            case 3:
                            document.getElementById("error").innerHTML=document.getElementById("error").innerHTML+vklad+" nemá správne hodnoty alebo všetky polia vyplnené.<br>";
                            break;
                            case 4:
                            document.getElementById("error").innerHTML=document.getElementById("error").innerHTML+"Poradie hráčov je nesprávne.<br>";
                            break;
                            case 5:
                            document.getElementById("error").innerHTML=document.getElementById("error").innerHTML+"Zlé označenie matu.<br>";
                            break;
                            case 6:
                            document.getElementById("error").innerHTML=document.getElementById("error").innerHTML+"Nemôžeš nahadzovať dáta lebo nie si prihlásený! Najprv sa autorizuj.<br>";
                            break;
                            case 7:
                            document.getElementById("error").innerHTML=document.getElementById("error").innerHTML+"Nesmú byť rovnaké mená hráčov.<br>";
                            break;
                            case 8:
                            document.getElementById("error").innerHTML=document.getElementById("error").innerHTML+"Nesmú byť rovnaké maty.<br>";
                            break;
                            default:
                            document.getElementById("error").innerHTML=document.getElementById("error").innerHTML;
                        }
                    }
                    function checkOrder() {
                        var frakcie = ["pol", "alb", "nor", "rus", "tog", "cri", "sax"];
                        for (let i = 0;i < frakcie.length; i++) {
                            for (let j = 0; j < frakcie.length; j++) {
                                let firstOrder = document.getElementById(frakcie[i] + "_por").value;
                                let secondOrder = document.getElementById(frakcie[j] + "_por").value;
                                let firstSum = document.getElementById(frakcie[i] + "_sum").value;
                                let secondSum = document.getElementById(frakcie[j] + "_sum").value;
                                if (firstOrder != "" && secondOrder != "" && firstOrder < secondOrder && firstSum < secondSum) {
                                    printError(4,"");
                                    return false;
                                }
                            }
                        }
                        var poradieHracov = [];
                        var hraci = []; // [1, 2, 3, 4... pocethracov]
                        for (let i = 0; i < frakcie.length; i++) {
                            if (document.getElementById(frakcie[i] + "_meno").value != "") {
                                poradieHracov.push(parseInt(document.getElementById(frakcie[i] + "_por").value));
                                hraci.push(hraci.length+1);
                            }
                        }
                        poradieHracov.sort();
                        if (poradieHracov.toString() != hraci.toString()) {
                            printError(4,"");
                            return false;
                        }
                        return true;
                    }
                    function isNumeric(value) {
                        return /^\d+$/.test(value);
                    }
                    function checkPlayerFilled(frakcia) {
                        return ((isNumeric(document.getElementById(frakcia+'_hviez').value)) &&                         (document.getElementById(frakcia+'_hviez').value.length > 0) &&                         (isNumeric(document.getElementById(frakcia+'_hex').value)) &&                         (document.getElementById(frakcia+'_hex').value.length > 0) &&                         (isNumeric(document.getElementById(frakcia+'_sur').value)) &&                         (document.getElementById(frakcia+'_sur').value.length > 0) &&                         (isNumeric(document.getElementById(frakcia+'_bonus').value)) &&                         (document.getElementById(frakcia+'_bonus').value.length > 0) &&                         (isNumeric(document.getElementById(frakcia+'_minc').value)) &&                         (document.getElementById(frakcia+'_minc').value.length > 0) &&                         (isNumeric(document.getElementById(frakcia+'_por').value)) &&                         (document.getElementById(frakcia+'_por').value.length > 0))
                    }
                    function checkMat(x) {
                        if (x != "1" && x!= "2" && x!= "2A" && x != "3" && x != "3A" && x != "4" && x != "5") {
                            return false;
                        } else {
                            return true;
                        }
                    }
                </script>







    <script type="text/javascript">
        /* exported gapiLoaded */
        /* exported gisLoaded */
        /* exported handleAuthClick */
        /* exported handleSignoutClick */
  
        // TODO(developer): Set to client ID and API key from the Developer Console
        const CLIENT_ID = '491619781879-cjbgos0j1li5n55sgv881thih6c15838.apps.googleusercontent.com';
        const API_KEY = 'AIzaSyASA-GMfn-CcrlfSqo5yBit0yOmInt-Lx4';
        const SPREADSHEET_ID = '1umEc-_W1vaLLsxu3X6jn9mllrUhtNueLt0KatCq6jTU';
  
        // Discovery doc URL for APIs used by the quickstart
        const DISCOVERY_DOC = 'https://sheets.googleapis.com/$discovery/rest?version=v4';
  
        // Authorization scopes required by the API; multiple scopes can be
        // included, separated by spaces.
        const SCOPES = 'https://www.googleapis.com/auth/spreadsheets';
  
        let tokenClient;
        let gapiInited = false;
        let gisInited = false;
  
        document.getElementById('authorize_button').style.visibility = 'hidden';
        document.getElementById('signout_button').style.visibility = 'hidden';
  
        /**
         * Callback after api.js is loaded.
         */
        function gapiLoaded() {
          gapi.load('client', initializeGapiClient);
        }
  
        /**
         * Callback after the API client is loaded. Loads the
         * discovery doc to initialize the API.
         */
        async function initializeGapiClient() {
          await gapi.client.init({
            apiKey: API_KEY,
            discoveryDocs: [DISCOVERY_DOC],
          });
          gapiInited = true;
          maybeEnableButtons();
        }
  
        /**
         * Callback after Google Identity Services are loaded.
         */
        function gisLoaded() {
          tokenClient = google.accounts.oauth2.initTokenClient({
            client_id: CLIENT_ID,
            scope: SCOPES,
            callback: '', // defined later
          });
          gisInited = true;
          maybeEnableButtons();
        }
  
        /**
         * Enables user interaction after all libraries are loaded.
         */
        function maybeEnableButtons() {
          if (gapiInited && gisInited) {
            document.getElementById('authorize_button').style.visibility = 'visible';
          }
        }
  
        /**
         *  Sign in the user upon button click.
         */
        function handleAuthClick() {
          tokenClient.callback = async (resp) => {
            if (resp.error !== undefined) {
              throw (resp);
            }
            loggedIn=true;
            document.getElementById('signout_button').style.visibility = 'visible';
            document.getElementById('authorize_button').innerText = 'Refresh';
            //appendValues(SPREADSHEET_ID);
          };
  
          if (gapi.client.getToken() === null) {
            // Prompt the user to select a Google Account and ask for consent to share their data
            // when establishing a new session.
            tokenClient.requestAccessToken({prompt: 'consent'});
          } else {
            // Skip display of account chooser and consent dialog for an existing session.
            tokenClient.requestAccessToken({prompt: ''});
          }
        }
  
        /**
         *  Sign out the user upon button click.
         */
        function handleSignoutClick() {
          const token = gapi.client.getToken();
          if (token !== null) {
            google.accounts.oauth2.revoke(token.access_token);
            gapi.client.setToken('');
            loggedIn=false;
            document.getElementById('content').innerText = '';
            document.getElementById('authorize_button').innerText = 'Authorize';
            document.getElementById('signout_button').style.visibility = 'hidden';
          }
        }
  
        /**
         * Print the names and majors of students in a sample spreadsheet:
         * https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
         
        async function listMajors() {
          let response;
          try {
            // Fetch first 10 files
            // response = await gapi.client.sheets.spreadsheets.values.get({
            //  spreadsheetId: '1umEc-_W1vaLLsxu3X6jn9mllrUhtNueLt0KatCq6jTU',
            //  range: 'A2:C10',
            // });
            response = await gapi.client.sheets.spreadsheets.values.get({
              spreadsheetId: '1umEc-_W1vaLLsxu3X6jn9mllrUhtNueLt0KatCq6jTU',
              range: 'Hárok1!A1:D',
            });
            console.log("aloha")
            
          } catch (err) {
            document.getElementById('content').innerText = err.message;
            return;
          }
          const range = response.result;
          if (!range || !range.values || range.values.length == 0) {
            document.getElementById('content').innerText = 'No values found.';
            return;
          }
          // Flatten to string to display
          const output = range.values.reduce(
              (str, row) => `${str}${row[0]}, ${row[4]}\n`,
              'Name, Major:\n');
          document.getElementById('content').innerText = output;
        }*/
  
        function appendValues(spreadsheetId, data) { //, range, valueInputOption, _values, callback
          let values = [
              data,
              // Additional rows ...
          ];
          const body = {
              values: values,
          };
          try {
              gapi.client.sheets.spreadsheets.values.append({
              spreadsheetId: spreadsheetId,
              range: "A1",
              valueInputOption: "RAW",
              resource: body,
              }).then((response) => {

              const result = response.result;
              console.log(`${result.updates.updatedCells} cells appended.`);
              // if (callback) callback(response);
              //vlastna addition return true
              });
          } catch (err) {
            console.log(err.message);
              document.getElementById('error').innerText = err.message;
              //return ;
              //vlastna addition return false
              return false;
          }
          return true;
          }
        
      </script>
      <script async defer src="https://apis.google.com/js/api.js" onload="gapiLoaded()"></script>
      <script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script>


            
        </div>
        <div id="apka_dole">
            <div class="center_text_parag">
                <div class="tmava_tema_text" style="font-size: 18px;">All media and data on this webpage and domain belongs to the pukanec band.</div>
            </div>
        </div>
        <!--    Spodok  -->
        <footer>
            <div id="spodok">© 2022 kebis.space | All Rights Reserved |  <a href="privacy.php">Privacy Policy</a>
            </div>
        </footer>
    </body>
</html>