<?php

// complete all "todo"s to build a blackjack game

// create an array for suits
$suits = ['C', 'H', 'S', 'D'];

// create an array for cards
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function buildDeck($suits, $cards) {
	$deck = array();
	foreach ($suits as $suit) {
		foreach ($cards as $number) {
			$deck[] = $number . ' ' . $suit;
		}
	}
	shuffle($deck);
	return $deck;
}

// determine if a card is an ace
// return true for ace, false for anything else
function cardIsAce($card) {
  // todo
	if (substr($card, 0, 1) === 'A') {
		return TRUE;
	} else {
		return FALSE;
	}
}

// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value
function getCardValue($card) {
	if (substr($card, 0, 1) == 'A') {
		$value = 11;
	} elseif (substr($card, 0, 1) == 'K' || substr($card, 0, 1) == 'Q' || substr($card, 0, 1) == 'J') {
		$value = 10;
	} else {
		$value = substr($card, 0, 1);
	}
	return $value;
}

// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand) {
 	$handTotal = 0;
 	foreach ($hand as $key => $card) {
 		$handTotal += getCardValue($card);
 		if (cardIsAce($card) && $handTotal > 21) {
 			$handTotal -= 10;
 		}
 	}
	return $handTotal;
}

// draw a card from the deck into a hand
// pass by reference (both hand and deck passed in are modified)
function drawCard(&$hand, &$deck) {
  $hand[] = array_pop($deck);
}

// print out a hand of cards
// name is the name of the player
// hidden is to initially show only first card of hand (for dealer)
// output should look like this:
// Dealer: [4 C] [???] Total: ???
// or:
// Player: [J D] [2 D] Total: 12
function echoHand($hand, $name, $hidden = FALSE) {
  $echoHand = "$name ";
  if ($hidden) {
  	$echoHand .= "[$hand[0]] [???] Total: ???" . PHP_EOL;
  	return $echoHand;
  } else {
  	foreach ($hand as $key => $card) {
  		$echoHand .= "[$card] ";
  	}
  	$echoHand .= "Total: " . getHandTotal($hand) . PHP_EOL;
  	return $echoHand;
  }

}
// build the deck of cards
$deck = buildDeck($suits, $cards);

// initialize a dealer and player hand
$dealer = [];
$player = [];

// dealer and player each draw two cards
echo "DEAL THEM CARDS, YO" . PHP_EOL;
drawCard($dealer, $deck);
drawCard($player, $deck);
drawCard($dealer, $deck);
drawCard($player, $deck);

// echo the dealer hand, only showing the first card
echo echoHand($dealer, "DEALER", TRUE);

// echo the player hand
echo echoHand($player, "PLAYER");

// allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
while (getHandTotal($player) < 21) {
  echo "(H)it or (S)tay?" . PHP_EOL;
  $hitOrStay = strtoupper(trim(fgets(STDIN)));
  if ($hitOrStay == 'H') {
  	drawCard($player, $deck);
  } elseif ($hitOrStay == 'S') {
  	echo "STAY";
  	break;
  }
  echo echoHand($player, "PLAYER");
}

// show the dealer's hand (all cards)
echo echoHand($dealer, "DEALER");

// todo (all comments below)

// at this point, if the player has more than 21, tell them they busted
// otherwise, if they have 21, tell them they won (regardless of dealer hand)
$playerFinal = getHandTotal($player);
$dealerFinal = getHandTotal($dealer);
$playerBusted = FALSE;
$dealerBusted = FALSE;

if ($playerFinal > 21) {
	echo "BUSTED!" . PHP_EOL;
	$playerBusted = TRUE;
} elseif ($playerFinal == 21) {
	echo "21 21 21 21 21" . PHP_EOL;
	// if neither of the above are true, then the dealer needs to draw more cards
	// dealer draws until their hand has a value of at least 17
	// show the dealer hand each time they draw a card
} else {
	while ($dealerFinal < 17) {
		echo "Dumb dealer draws again..." . PHP_EOL;
		drawCard($dealer, $deck);
		echo echoHand($dealer, "DEALER");
		$dealerFinal = getHandTotal($dealer);
	}
	if ($dealerFinal > 21) {
		echo "BUSTED!" . PHP_EOL;
		$dealerBusted = TRUE;
	}
}



// finally, we can check and see who won
// by this point, if dealer has busted, then player automatically wins
// if player and dealer tie, it is a "push"
// if dealer has more than player, dealer wins, otherwise, player wins
if ($playerBusted == TRUE || $playerFinal < $dealerFinal) {
	echo "DEALER WINS!" . PHP_EOL;
} elseif ($dealerBusted == TRUE || $playerFinal > $dealerFinal) {
	echo "PLAYER WINS!" . PHP_EOL;
} else {
	echo "PUSHHHHHHHHH" . PHP_EOL;
}


?>