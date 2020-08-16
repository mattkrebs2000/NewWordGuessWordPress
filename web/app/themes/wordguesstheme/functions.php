<?php
function add_js_functions(){
?>
<script>
let games = [0];
let wins = [0];
let losses = [];
let percentage = [0];
let roundedPercentage;
let victory = 0;
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



    listOfGuesses = [];
    listOfWrongGuesses = [];
    wrongGuesses = 5;
    ele = document.getElementById(
        "missedAttemtsLeft");
    ele.innerHTML = wrongGuesses;

    document.getElementById("myAudio").pause();



};
addNFL();
newLetter();


function addNFL() {

    if (!victory === (teamNameAssignment.length - 1)) {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("nfl");
    }
}


function ImagesOfTeams() {

    jQuery("#try").removeClass();


    console.log("teamname " +
        teamNameAssignment + victory + teamNameAssignment.length);


    if (victory === (teamNameAssignment.length - 1) &&
        teamNameAssignment === "bears") {
        jQuery("#try").addClass("bears")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "browns") {
        jQuery("#try").addClass("browns")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "bengals") {
        jQuery("#try").addClass("bengals")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "bills") {
        jQuery("#try").addClass("bills")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "broncos") {
        jQuery("#try").addClass("broncos")
    };


    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "buccaneers") {
        jQuery("#try").addClass("buccaneers")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "cardinals") {
        jQuery("#try").addClass("cardinals")
    };

    else if (victory === teamNameAssignment.length && teamNameAssignment === "chargers") {
        jQuery("#try").addClass("chargers")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "chiefs") {
        jQuery("#try").addClass("chiefs")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "colts") {
        jQuery("#try").addClass("colts")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "cowboys") {
        jQuery("#try").addClass("cowboys")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "dolphins") {
        jQuery("#try").addClass("dolphins")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "eagles") {
        jQuery("#try").addClass("eagles")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "falcons") {
        jQuery("#try").addClass("falcons")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "fortyniners") {
        jQuery("#try").addClass("fortyniners")
    };


    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "giants") {
        jQuery("#try").addClass("giants")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "jaguars") {
        jQuery("#try").addClass("jaguars")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "jets") {
        jQuery("#try").addClass("jets")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "lions") {
        jQuery("#try").addClass("lions")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "packers") {
        jQuery("#try").addClass("packers")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "panthers") {
        jQuery("#try").addClass("panthers")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "patriots") {
        jQuery("#try").addClass("patriots")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "raiders") {
        jQuery("#try").addClass("raiders")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "rams") {
        jQuery("#try").addClass("rams")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "ravens") {
        jQuery("#try").addClass("ravens")
    };


    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "redskins") {
        jQuery("#try").addClass("redskins")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "saints") {
        jQuery("#try").addClass("saints")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "seahawks") {
        jQuery("#try").addClass("seahawks")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "steelers") {
        jQuery("#try").addClass("steelers")
    };

    else if (victory === teamNameAssignment.length && teamNameAssignment === "texans") {
        jQuery("#try").addClass("texans")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "titans") {
        jQuery("#try").addClass("titans")
    };

    else if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "vikings") {
        jQuery("#try").addClass("vikings")

    };
    else {
        jQuery("#try").addClass("nfl")
    };

}

ImagesOfTeams();

function newLetter() {
    document.onkeyup = function(event) {
        if (event.keyCode >= 65 && event.keyCode <= 90) {
            userGuess = event.key.toLowerCase();

            ImagesOfTeams()
            addNFL()

            let doubles = listOfGuesses.includes(userGuess);



            if (doubles === true) {
                alert("That letter has already been guessed. TRY AGAIN");
                return false;
            }

            for (var i = 0; i < teamNameAssignment.length; i++) {
                if (teamNameAssignment[i] === userGuess && doubles === false) {
                    blankSpaces[i] = userGuess;
                    victory++;
                    listOfGuesses.push(userGuess);

                }
            }
            if (teamNameAssignment.indexOf(userGuess) == -1 && !listOfWrongGuesses.includes(" " + userGuess)) {
                listOfWrongGuesses.push(" " + userGuess);
                wrongGuesses--;
                wg = document.getElementById("firstGuess");
                wg.innerHTML = listOfWrongGuesses;

                ("wrong guesses", listOfWrongGuesses);
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