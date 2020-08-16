<?php
function add_js_functions(){
?>
<script>
let games = [0];
let wins = [0];
let losses = [];
let percentage = [0];
let roundedPercentage;
let victory;
let teamNameAssignment = "";
let blankSpaces;
let el;
let listOfGuesses;
let listOfWrongGuesses;
let wrongGuesses;
let ele;
let elem;
let userGuess;
let eleme;
let wg;


function format() {


    victory = 0;

    const teamNames = [
        "bears",
        "bengals",
        "bills",
        "broncos",
        "browns",
        "buccaneers",
        "cardinals",
        "chargers",
        "chiefs",
        "colts",
        "cowboys",
        "dolphins",
        "eagles",
        "falcons",
        "fortyniners",
        "giants",
        "jaguars",
        "jets",
        "lions",
        "packers",
        "panthers",
        "patriots",
        "raiders",
        "rams",
        "ravens",
        "redskins",
        "saints",
        "seahawks",
        "steelers",
        "texans",
        "titans",
        "vikings",
    ];
    teamNameAssignment = teamNames[Math.floor(Math.random() * teamNames.length)];
    blankSpaces = [];
    listOfWrongGuesses = [];

    wg = document.getElementById("firstGuess");
    wg.innerHTML = listOfWrongGuesses;

    for (let i = 0; i < teamNameAssignment.length; i++) {
        blankSpaces[i] = "*";
    }
    el = document.getElementById("teamContainer");
    el.innerHTML = blankSpaces.join(" ");


    addNFL();
    listOfGuesses = [];
    listOfWrongGuesses = [];
    wrongGuesses = 5;
    ele = document.getElementById(
        "missedAttemtsLeft");
    ele.innerHTML = wrongGuesses;

    document.getElementById("myAudio").pause();



};

newLetter();


function addNFL() {

    if (!victory === teamNameAssignment.length) {
        jQuery("#try").addClass("nfl");
    }
}


function ImagesOfTeams() {

    console.log("number ", teamNameAssignment.length)

    jQuery("#try").removeClass();
    console.log("teamName ", teamNameAssignment)

    if (victory === teamNameAssignment.length && teamNameAssignment === "bears") {
        jQuery("#try").addClass("bears")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "browns") {
        jQuery("#try").addClass("browns")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "bengals") {
        jQuery("#try").addClass("bengals")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "bills") {
        jQuery("#try").addClass("bills")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "broncos") {
        jQuery("#try").addClass("broncos")
    };


    if (victory === teamNameAssignment.length && teamNameAssignment === "buccaneers") {
        jQuery("#try").addClass("buccaneers")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "cardinals") {
        jQuery("#try").addClass("cardinals")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "chargers") {
        jQuery("#try").addClass("chargers")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "chiefs") {
        jQuery("#try").addClass("chiefs")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "colts") {
        jQuery("#try").addClass("colts")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "cowboys") {
        jQuery("#try").addClass("cowboys")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "dolphins") {
        jQuery("#try").addClass("dolphins")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "eagles") {
        jQuery("#try").addClass("eagles")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "falcons") {
        jQuery("#try").addClass("falcons")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "fortyniners") {
        jQuery("#try").addClass("fortyniners")
    };


    if (victory === teamNameAssignment.length && teamNameAssignment === "giants") {
        jQuery("#try").addClass("giants")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "jaguars") {
        jQuery("#try").addClass("jaguars")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "jets") {
        jQuery("#try").addClass("jets")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "lions") {
        jQuery("#try").addClass("lions")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "packers") {
        jQuery("#try").addClass("packers")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "panthers") {
        jQuery("#try").addClass("panthers")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "patriots") {
        jQuery("#try").addClass("patriots")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "raiders") {
        jQuery("#try").addClass("raiders")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "rams") {
        jQuery("#try").addClass("rams")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "ravens") {
        jQuery("#try").addClass("ravens")
    };


    if (victory === teamNameAssignment.length && teamNameAssignment === "redskins") {
        jQuery("#try").addClass("redskins")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "saints") {
        jQuery("#try").addClass("saints")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "seahawks") {
        jQuery("#try").addClass("seahawks")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "steelers") {
        jQuery("#try").addClass("steelers")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "texans") {
        jQuery("#try").addClass("texans")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "titans") {
        jQuery("#try").addClass("titans")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "vikings") {
        jQuery("#try").addClass("vikings")

    };
}

ImagesOfTeams();

function newLetter() {
    document.onkeyup = function(event) {
        if (event.keyCode >= 65 && event.keyCode <= 90) {
            userGuess = event.key.toLowerCase();

            let doubles = listOfGuesses.includes(userGuess);

            console.log("here", doubles, userGuess, teamNameAssignment, victory);

            if (doubles === true) {
                alert("That letter has already been guessed. TRY AGAIN");
                return false;
            }

            for (var i = 0; i < teamNameAssignment.length; i++) {
                if (teamNameAssignment[i] === userGuess && doubles === false) {
                    blankSpaces[i] = userGuess;
                    victory++;
                    listOfGuesses.push(userGuess);
                    console.log(listOfGuesses);
                }
            }
            if (teamNameAssignment.indexOf(userGuess) == -1 && !listOfWrongGuesses.includes(" " + userGuess)) {
                listOfWrongGuesses.push(" " + userGuess);
                wrongGuesses--;
                wg = document.getElementById("firstGuess");
                wg.innerHTML = listOfWrongGuesses;

                console.log("wrong guesses", listOfWrongGuesses);
            }


            if (victory === teamNameAssignment.length) {



                alert(
                    "Congratulations, You Won! Click the button below to play again."
                );
                games++;
                wins++;
                elem = document.getElementById("winTotal");
                elem.innerHTML = wins;

                percentage = (wins / games) * 100;
                roundedPercentage = Math.round(10 * percentage) / 10;

                eleme = document.getElementById("winningPercentage");
                eleme.innerHTML = roundedPercentage;

                document.getElementById("button").innerHTML =
                    "Click Here To Play Again";

            }

            if (wrongGuesses === 0) {
                alert("You lost, click the button below to try again!");
                games++;
                losses++;
                elem = document.getElementById("lossTotal");
                elem.innerHTML = " " + losses;

                percentage = (wins / games) * 100;
                roundedPercentage = Math.round(10 * percentage) / 10;

                eleme = document.getElementById("winningPercentage");
                eleme.innerHTML = roundedPercentage;

                document.getElementById("try").style.backgroundImage =
                    "url('./images/" + teamNameAssignment + ".png')";

                document.getElementById("button").innerHTML =
                    "Click Here To Play Again";
            }

            el = document.getElementById("teamContainer");
            el.innerHTML = blankSpaces.join(" ");

            ele = document.getElementById("missedAttemtsLeft");
            ele.innerHTML = " " + wrongGuesses;

            return true;
        } else {
            alert("Please input alphabet characters only");
            return false;
        }
    };
};
</script>
<?php
}



add_action('wp_head','add_js_functions');