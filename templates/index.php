<h1>Benziger Thinking Styles Assessment</h1>

<p class="lead">This is a tool to find your preffered thinking process according to the <a href="https://www.businessballs.com/self-awareness/personality-theories-and-types/#-katherine-benzigers-personality-and-brain-type-theory">Katherine Benziger's Personality and Brain-Type Theory</a>. You can find more details about the model <a href="https://www.businessballs.com/self-awareness/benziger-personality-assessment/">here</a>.</p>

<p>Take a look at all the discriptions below. Give each description a mark out of 5</p>

<p>5 means the description fits you very well - 0 means its not like you at all; in fact you would probably avoid thinking that way!</p>

<p><strong>Don't use any number more than 6 times</strong> in total on the whole page.</p>

<p>After you have scored items, we'll give you the total scores for each quadrant.</p>

<form action="save.php" method="post">
<input type="input" placeholder="Your Name..." id="name" name="name" value="<?php echo (isset($name) ? $name : ''); ?>" />

<ul id="counter">
	<li><strong>0</strong> shows up <strong id="count-0" class="over count">24</strong> times</li>
	<li><strong>1</strong> shows up <strong id="count-1" class="count">0</strong> times</li>
	<li><strong>2</strong> shows up <strong id="count-2" class="count">0</strong> times</li>
	<li><strong>3</strong> shows up <strong id="count-3" class="count">0</strong> times</li>
	<li><strong>4</strong> shows up <strong id="count-4" class="count">0</strong> times</li>
	<li><strong>5</strong> shows up <strong id="count-5" class="count">0</strong> times</li>
</ul>

<div id="form">

<div class="flex-area">
<?php foreach ($quads as $q_name => $questions) { ?>
<div class="quadrant">
<h3><?php echo $q_name ?></h3>

<dl>
	<?php foreach($questions as $q) { ?>
		<dt><?php echo $q['question'] ?></dt>
		<dd><input type="number" id="score_<?php echo $q['id'] ?>" name="score[<?php echo $q['id'] ?>]" 
			class="score question-score question-<?php echo strtolower($q_name); ?>" min="0" max="5" size="2" 
			value="<?php echo (!empty($answers[$q['id']])) ? $answers[$q['id']] : '0'; ?>" /></dd>
	<?php } ?>

	<dt class="total">Total</dt>
	<dd><input type="number" id="score-<?php echo strtolower($q_name); ?>" class="score total-score" min="0" readonly size="2" value="0" /></dd>
</dl>
</div>
<?php } ?>
</div>
<br />
<input type="submit" name="action" value="Save" class="btn btn-primary" />
</div>
</form>

<br />