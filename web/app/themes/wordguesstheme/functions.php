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
let teamNameAssignment;
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


    document.body.style.backgroundImage = "url('./images/NFLLogo2.png')";
    listOfGuesses = [];
    listOfWrongGuesses = [];
    wrongGuesses = 5;
    ele = document.getElementById("missedAttemtsLeft");
    ele.innerHTML = wrongGuesses;

    document.getElementById("myAudio").pause();

}

newLetter();

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
                victorysong();

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


                document.body.style.backgroundImage =
                    "url('./images/" + teamNameAssignment + ".png')";

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

                document.body.style.backgroundImage =
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
}
</script>
<?php
}



add_action('wp_head','add_js_functions');