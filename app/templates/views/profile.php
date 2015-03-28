<div class="profile-wrap">
	<div class="profile-photo">
		<img src="/assets/img/warren_03.jpg" alt="Warren Wilansky">
	</div>
	<div class="profile-info">
		<div class="profile-text-content">
			<h1>Warren Wilansky</h1>
			<span class="game-attended">Games Attended</span>
			<span class="game-attended-num"><?= $this->stats['games']; ?></span>
		</div>
	</div>
</div>

<div class="row-four-square-wrap">
	<div class="square dark">
		<div class="square-text">
			<h2>Home Runs</h2>
			<span class="sub">Home Runs witnessed</span>
			<span class="regular-digits"><?= $this->stats['homeruns']; ?></span>
		</div>
	</div>

	<div class="square medium">
		<div class="square-text">
			<h2>Triples</h2>
			<span class="sub">Triples witnessed</span>
			<span class="regular-digits"><?= $this->stats['triples']; ?></span>
		</div>
	</div>

	<div class="square dark">
		<div class="square-text">
			<h2>Doubles</h2>
			<span class="sub">Doubles witnessed</span>
			<span class="regular-digits"><?= $this->stats['doubles']; ?></span>
		</div>
	</div>

	<div class="square medium">
		<div class="square-text">
			<h2>Singles</h2>
			<span class="sub">Singles witnessed</span>
			<span class="regular-digits"><?= $this->stats['singles']; ?></span>
		</div>
	</div>
</div>

<div class="big-square-row row">
	<div class="big-square left light">
		<div class="big-square-content">
			<h1 class="big-heading">Grand Slam</h1>
			<span class="sub">Grand slam witnessed aka the Big Smalami</span>
			<span class="big-digits">05</span>
		</div>
	</div>
	<div class="big-square dark right-dark-big-square stolen">
		<div class="big-square-content ">
			<h1 class="big-heading"> Stolen bases</h1>
			<span class="sub">Number of stolen bases witnessed</span>
			<span class="big-digits"><?= $this->stats['stolenbases']; ?></span>
		</div>
	</div>

</div>

<div class="last-row row">
	<div class='recto-square-wrap'>
		<div class="square dark">
			<div class="square-text">
				<h2>Fast ball</h2>
				<span class="sub">Speedies witnessed</span>
				<span class="regular-digits">210</span>
			</div>
		</div>

		<div class="square light-box last">
			<div class="square-text">
				<h2>Strike outs</h2>
				<span class="sub">Strike outs witnessed</span>
				<span class="regular-digits"><?= $this->stats['strikeouts']; ?></span>
			</div>
		</div>

		<div class="square dark">
			<div class="square-text">
				<h2>Double play</h2>
				<span class="sub">Double plays witnessed</span>
				<span class="regular-digits"><?= $this->stats['doubleplays']; ?></span>
			</div>
		</div>

		<div class="square light-box last">
			<div class="square-text">
				<h2>triple play</h2>
				<span class="sub">triple plays witnessed</span>
				<span class="regular-digits"><?= $this->stats['tripleplays']; ?></span>
			</div>
		</div>

		<div class="highest-score">
			<div class="highest-score-content">
				<div class="square-text">
					<h2>Highest Score</h2>
					<span class="sub">Highest score witnessed</span>
					<span class="regular-digits"><?= $this->stats['hsbt']; ?></span>
				</div>
			</div>
		</div>
	</div>

	<div class="recto perfect-game">
		<div class="perfect-game-content">
			<h1 class="big-heading"> Perfect game</h1>
			<span class="sub">Perfect game witnessed</span>
			<p>A perfect game is defined by Major League Baseball as a game in which a pitcher (or combination of pitchers) pitches a victory that lasts a minimum of nine innings and in which no opposing player reaches base</p>
			<span class="big-digits">ZERO</span>
		</div>
	</div>
</div>

<?php /*
<div id="card">
	<div class="games">
		<h4>Games Attended</h4>
		<span><?= $this->stats['games']; ?></span>
	</div>
	<div class="hsbt">
		<h4>Most Runs By Team</h6>
		<span><?= $this->stats['hsbt']; ?></span>
	</div>
	<div class="singles">
		<h4>Singles</h4>
		<span><?= $this->stats['singles']; ?></span>
	</div>
	<div class="doubles">
		<h4>Doubles</h4>
		<span><?= $this->stats['doubles']; ?></span>
	</div>
	<div class="triples">
		<h4>Triples</h4>
		<span><?= $this->stats['triples']; ?></span>
	</div>
	<div class="homeruns">
		<h4>Home Runs</h4>
		<span><?= $this->stats['homeruns']; ?></span>
	</div>
	<div class="stolenbases">
		<h4>Bases Stolen</h4>
		<span><?= $this->stats['stolenbases']; ?></span>
	</div>
	<div class="strikeouts">
		<h4>Strikeouts</h4>
		<span><?= $this->stats['strikeouts']; ?></span>
	</div>
	<div class="doubleplays">
		<h4>Double Plays</h4>
		<span><?= $this->stats['doubleplays']; ?></span>
	</div>
	<div class="tripleplays">
		<h4>Triple Plays</h4>
		<span><?= $this->stats['tripleplays']; ?></span>
	</div>
</div>
*/ ?>
