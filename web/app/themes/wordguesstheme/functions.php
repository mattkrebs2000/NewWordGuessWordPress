<?php
function add_js_functions(){
?>
<script>
var games = [0];
var wins = [0];
var losses = [];
var percentage = [0];
var newImage = "";
var userGuess = "";
var teamNameAssignment;
var listOfGuesses;
var blankSpaces;
var wrongGuesses;
var el = document.getElementById('teamContainer');









function myFunction() {








    victory = 0;
    listOfGuesses = [];
    blankSpaces = [];



    var teamNames = ["bears", "bengals", "bills", "broncos", "browns", "buccaneers", "cardinals", "chargers",
        "chiefs",
        "colts", "cowboys", "dolphins", "eagles", "falcons", "fortyniners", "giants", "jaguars", "jets",
        "lions",
        "packers", "panthers", "patriots", "raiders", "rams", "ravens", "redskins", "saints", "seahawks",
        "steelers", "texans", "titans", "vikings"
    ];
    teamNameAssignment = teamNames[Math.floor(Math.random() *
        teamNames.length)];

    console.log(teamNameAssignment);



    for (var i = 0; i < teamNameAssignment.length; i++) {
        blankSpaces[i] = "*";
    }
    var el = document.getElementById('teamContainer');
    el.innerHTML = blankSpaces.join(" ");





    // var eleme = document.getElementById('wrong');
    //      eleme.innerHTML=listOfGuesses;

    var wrongGuesses = 5;
    var ele = document.getElementById('missedAttemtsLeft');
    ele.innerHTML = wrongGuesses;









    if (victory === teamNameAssignment.length) {


        alert("Congratulations, You Won! Click the button below to play again.");
        games++;
        wins++;
        var elem = document.getElementById('winTotal');
        elem.innerHTML = wins;

        var percentage = (wins / games) * 100;
        var roundedPercentage = Math.round(10 * percentage) / 10;

        var eleme = document.getElementById('winningPercentage');
        eleme.innerHTML = roundedPercentage;



        document.getElementById("button").innerHTML = "Click Here To Play Again";



    }

    if (wrongGuesses === 0) {
        alert("You lost, click the button below to try again!");
        games++;
        losses++;
        var elem = document.getElementById('lossTotal');
        elem.innerHTML = " " + losses;

        var percentage = (wins / games) * 100;
        var roundedPercentage = Math.round(10 * percentage) / 10;

        var eleme = document.getElementById('winningPercentage');
        eleme.innerHTML = roundedPercentage;





        document.getElementById("button").innerHTML = "Click Here To Play Again";
    }

    el.innerHTML = blankSpaces.join(" ");

    var ele = document.getElementById('missedAttemtsLeft');
    ele.innerHTML = " " + wrongGuesses;

    jQuery(document).ready(function($) {
        $("body").css("backgroundImage", "./images/NFLLogo2.png");

        console.log("d", blankSpaces);
    });

}
document.onkeyup = function(event) {
    var newImage = document.body;
    document.body.style.backgroundImage = "url('./images/NFLLogo2.png')";

    userGuess = event.key;
    console.log(userGuess);

    var el = document.getElementById('teamContainer');
    el.innerHTML = blankSpaces.join(" ");

    if (teamNameAssignment.indexOf(userGuess) == -1) {
        listOfGuesses.push(" " + userGuess);
        wrongGuesses--;
        var wg = document.getElementById('firstGuess');
        wg.innerHTML = listOfGuesses;

    }







    // el.innerHTML=blankSpaces.join(" ");


    for (var i = 0; i < teamNameAssignment.length; i++) {

        if (teamNameAssignment[i] === userGuess) {
            blankSpaces[i] = userGuess;

            updatedList = listOfGuesses.push(userGuess);

        }

        for (var n = 0; n < listOfGuesses.length; n++) {

            if (listOfGuesses[n] != userGuess && teamNameAssignment[i] === userGuess);

            victory++


        }



        console.log(victory)
    }
    console.log("a", teamNameAssignment);
    console.log("b", listOfGuesses);
    console.log("c", blankSpaces);
    console.log();
    console.log();
    console
        .log();
    console.log();
    console.log();
    console.log();

    jQuery(document).ready(function($) {

        var el = document.getElementById('teamContainer');
        el.innerHTML = blankSpaces.join(" ");

        var ele = document.getElementById('missedAttemtsLeft');
        ele.innerHTML = " " + wrongGuesses;

        console.log("f", blankSpaces);
    });


}
</script>
<?php
}



add_action('wp_head','add_js_functions');