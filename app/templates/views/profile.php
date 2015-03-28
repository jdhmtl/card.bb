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
