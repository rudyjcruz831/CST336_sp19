var randomNumber = Math.floor(Math.random() * 99) +1;
console.log(randomNumber); 

// document.getElementById("numberToGuess").innerHTML = randomNumber;

// var guesses = document.querySelector('#guesses');
// var guesses = $('#guesses');
 // $(guesses).click(checkGuess());

var lastResult = document.querySelector('#lastResult');
var lowOrHi = document.querySelector('#lowOrHi');
var displayGuess = document.querySelector('#displayGuess');
var won = document.querySelector('#won');
var lost = document.querySelector('#lost');

var wonGames = 0;
var lostGames = 0;

// var guessSubmit = document.querySelector('.guessSubmit');
// var guessSubmit = $('.guessSubmit');
var guessField = document.querySelector('.guessField');

var guessCount = 1;
var resetButton = document.querySelector('#reset');
resetButton.style.display = 'none';
// var resetButton
guessField.focus();

function checkGuess()
{
	var userGuess = Number(guessField.value)
	if(guessCount === 1)
	{
		guesses.innerHTML = "Previous guesses: ";
		 // guesses.html("Previous guesses: ");
	}
	guesses.innerHTML += userGuess + ' ';

	if(userGuess === randomNumber)
	{
		lastResult.innerHTML = 'Congratulations! You got it right!';
		lastResult.style.backgroundColor = 'green';
		lowOrHi.innerHTML = '';
		wonGames++;
		setGameOver();
	}
	else if(guessCount  === 7)
	{
		lastResult.innerHTML = 'Sorry, you lost!';
		lostGames++;
		setGameOver();
	}
	else if( userGuess > 99 || userGuess !== Number(guessField.value))
	{
		lowOrHi.innerHTML = 'Last guess is Incorrect input!';
		return;
	}
	else
	{
		lastResult.innerHTML = 'Wrong!';
		lastResult.style.backgroundColor = "red";
		if(userGuess < randomNumber)
		{
			lowOrHi.innerHTML = 'Last guess was to low!';
		}
		else if(userGuess > randomNumber)
		{
			lowOrHi.innerHTML = "Last guess was to high!";
		}
	}

	guessCount++;
	guessField.value = '';
	guessField.focus();
}


// guessSubmit.addEventListener('click', checkGuess);
$("#guesses").click(checkGuess());


guesses.style.backgroundColor = 'yellow';
guesses.style.fontSize = '200%';
guesses.style.padding = '10px';
guesses.style.boxShadow = '3px 3px 6px black';

won.style.backgroundColor = 'blue';
won.style.fontSize = '150%';
won.style.padding = '10px';

lost.style.backgroundColor = 'blue';
lost.style.fontSize = '150%';
lost.style.padding = '10px';

function setGameOver()
{
	guessField.disabled = true;
	guessSubmit.disabled = true;
	resetButton.style.display = 'inline';
	resetButton.addEventListener('click', resetGame);
}

function resetGame()
{
	guessCount = 1;

	var resetParas = document.querySelectorAll('.resultParas p');
	for(var i = 0; i < resetParas.length; i++)
	{
		resetParas[i].textContent = '';
	}

	resetButton.style.display = 'none';

	guessField.disabled = false;
	guessSubmit.disabled = false;
	guessField.value = '';
	guessField.focus();

	won.innerHTML = 'Games Won: ' + wonGames + ' ';
	lost.innerHTML = 'Games Lost: ' + lostGames + ' ';

	lastResult.style.backgroundColor = 'white';

	randomNumber = Math.floor(Math.random() * 99) +1;
}
