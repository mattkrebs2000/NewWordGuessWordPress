<div>
    <?php get_header(); ?>

    <p id="title">Team Guessing Game</p>
    <p id="Prompt"> "It's Game Time -Let's Go!"</p>


    <p id="Directions"> Show Directions</p>



    <ul id="DirectionsShown">
        <li>Press the button below for a Game reset.</li>
        <li>Once the "Name of Team" has been set (or reset) select letters which you think might be included in the
            spelling
            of the team name.</li>
        <li>If you are playing on a phone or tablet you may be able to bring up a keyboard by clicking on the black
            space at
            the bottom of the screen.</li>
        <li>You are allowed 5 missed attempts.</li>
        <li> If you are able to complete the spelling of the team name correctly -You Win! </li>
        <li>If your "Missed Attempts Remaining" reaches zero before spelling the team name -You Lose!</li>
        <li>This game does not work on some android phones. </li>

    </ul>

    <h3 id="scoreBoard">Score Board</h3>

    <div id="nameOfTeam"> Name<span id="colon">: </span> <span id="nameOfTeamTwo"> of Team: </span><span><strong
                id="teamContainer">(TBD) </strong></span></div>

    <div id="missedAttempts">Missed Attempts: <strong id="firstGuess"></strong>
    </div>

    <div id="missedAttemptsRemaining">Missed Attempts Remaining: <strong id="missedAttemtsLeft">5</strong></div>


    <div id="totalWins">Total Wins: <strong id="winTotal"> 0</strong></div>


    <div id="totalLosses">Total Losses: <strong id="lossTotal"> 0</strong></div>


    <div id="winningPercent">Winning Percentage: <strong id="winningPercentage"> 0</strong>%</div>

    <br>

    <p id="begin">
        <button id="button" onclick="myFunction()">Press Here to Begin</button>
    </p>

    <br>
    <p id="audio">
        <audio controls src="./images/media.io_NFL.mp3" id="myAudio" loop="loop" autoplay="autoplay"></audio></p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <input id="input" type="text">
    <?php get_footer(); ?>
</div>