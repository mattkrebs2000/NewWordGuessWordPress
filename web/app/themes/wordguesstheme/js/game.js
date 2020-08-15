




var games = [0];
var wins = [0];
var losses = [];
var percentage = [0]
var newImage = "";


function myFunction() {
    victory = 0;

    var teamNames = ["bears", "bengals", "bills", "broncos", "browns", "buccaneers", "cardinals", "chargers", "chiefs", "colts", "cowboys", "dolphins", "eagles", "falcons", "fortyniners", "giants", "jaguars", "jets", "lions", "packers", "panthers", "patriots", "raiders", "rams", "ravens", "redskins", "saints", "seahawks", "steelers", "texans", "titans", "vikings"];
    var teamNameAssignment = teamNames[Math.floor(Math.random() *
        teamNames.length)];
    var blankSpaces = [];

    for (var i = 0; i < teamNameAssignment.length; i++) {
        blankSpaces[i] = "*";
    }
    var el = document.getElementById('teamContainer');
    el.innerHTML = blankSpaces.join(" ");


    var newImage2 = document.body;
    newImage2.style.backgroundImage = "url('./images/NFLLogo2.png')";

    var listOfGuesses = [];
    // var eleme = document.getElementById('wrong');
    //      eleme.innerHTML=listOfGuesses;

    var listOfWrongGuesses = [];

    var wrongGuesses = 5;
    var ele = document.getElementById('missedAttemtsLeft');
    ele.innerHTML = wrongGuesses;



    document.onkeyup = function (event) {



        var userGuess = event.key;


        var doubles = listOfGuesses.includes(userGuess);
        if (doubles === true) {
            alert("That letter has already been guessed. TRY AGAIN");
            return false;
        }

        console.log(doubles)
        // el.innerHTML=blankSpaces.join(" ");


        for (var i = 0; i < teamNameAssignment.length; i++) {

            if (teamNameAssignment[i] === userGuess && doubles=== false) {
                blankSpaces[i] = userGuess;
                victory++
                listOfGuesses.push(userGuess);
                console.log(listOfGuesses)



            }
        }

        if (teamNameAssignment.indexOf(userGuess) == -1) {
            listOfWrongGuesses.push(" " + userGuess);
            wrongGuesses--;
            var wg = document.getElementById('firstGuess');
            wg.innerHTML = listOfWrongGuesses;

        }



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

            var newImage = document.body;
            newImage.style.backgroundImage = "url('./images/" + teamNameAssignment + ".png')";



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

            var newImage = document.body;
            newImage.style.backgroundImage = "url('./images/" + teamNameAssignment + ".png')";



            document.getElementById("button").innerHTML = "Click Here To Play Again";


        }


        var el = document.getElementById('teamContainer');
        el.innerHTML = blankSpaces.join(" ");

        var ele = document.getElementById('missedAttemtsLeft');
        ele.innerHTML = " " + wrongGuesses;


    }




    var elem = document.getElementById("Prompt");
    var pos = -100;
    var id = setInterval(frame, 1);
    var x = document.getElementById("Directions");
    var z = document.getElementById("missedAttemtsLeft");
    var a = document.getElementById("winTotal");
    var b = document.getElementById("lossTotal");
    var c = document.getElementById("winningPercentage");
    var d = document.getElementById("teamContainer");
    var e = document.getElementById("title");
    var f = document.getElementById("scoreBoard");
    var g = document.getElementById("firstGuess");
    var h = document.getElementById("secondGuess");
    var i = document.getElementById("thirdGuess");
    var j = document.getElementById("button");


    function frame() {

        if (pos == 601) {
            clearInterval(id);
        } else {
            pos++;
            elem.style.top = pos + 'px';
        }




        if (pos > -10) {

            e.style.textShadow = "5px 5px 7px #000000";

        }
        if (pos > 15) {

            e.style.textShadow = "2px 2px 4px #000000";
        }

        if (pos > 80) {

            f.style.textShadow = "1px 1px 1px #000000";

        }
        if (pos > 105) {

            f.style.textShadow = "0px 0px 0px #000000";
        }

        if (pos > 180)
            if (pos > 155) {

                d.style.textShadow = "1px 1px 1px #000000";

            }
        if (pos > 205) {

            d.style.textShadow = "0px 0px 0px #000000";
        }

        if (pos > 245) {
            document.getElementById("firstGuess").innerHTML = "";
        }
        if (pos > 220) {

            g.style.textShadow = "1px 1px 1px #000000";

        }
        if (pos > 245) {

            g.style.textShadow = "0px 0px 0px #000000";
        }





        if (pos > 305) {
            document.getElementById("missedAttemtsLeft").innerHTML = " 5";
        }
        if (pos > 280) {

            z.style.textShadow = "1px 1px 1px #000000";

        }
        if (pos > 330) {

            z.style.textShadow = "0px 0px 0px #000000";
        }


        if (pos > 325) {

            a.style.textShadow = "1px 1px 1px #000000";
        }

        if (pos > 375) {

            a.style.textShadow = "0px 0px 0px #000000";
        }



        if (pos > 370) {

            b.style.textShadow = "1px 1px 1px #000000";
        }

        if (pos > 420) {

            b.style.textShadow = "0px 0px 0px #000000";
        }






        if (pos > 415) {

            c.style.textShadow = "1px 1px 1px #000000";
        }

        if (pos > 465) {

            c.style.textShadow = "0px 0px 0px #000000";

        }


        if (pos > 50) {

            x.style.textShadow = "3px 3px 3px #000000";

        }
        if (pos > 75) {

            x.style.textShadow = "1px 1px 1px #000000";

        }


        if (pos > 470) {

            j.style.transform = "translateY(-7px)";
        }

        if (pos > 492) {

            j.style.transform = "translateY(0px)";
            document.getElementById("button").innerHTML = "Begin Choosing Letters";

        }


    }


}
