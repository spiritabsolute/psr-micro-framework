<?php
/**
 * @var \Framework\Template\PhpRenderer $this
 */

$this->extend("layout/default");
?>

<?php $this->beginBlock("title"); ?>
Psr framework - home
<?php $this->endBlock(); ?>

<?php $this->beginBlock("meta"); ?>
<meta name="description" content="Home page description">
<meta name="author" content="spiritabsolute">
<?php $this->endBlock(); ?>

<?php $this->beginBlock("navbar"); ?>
<div class="inner">
	<h3 class="masthead-brand">Psr framework</h3>
	<nav class="nav nav-masthead">
		<a class="nav-link active" href="/">Home</a>
		<a class="nav-link" href="/about">About</a>
		<a class="nav-link" href="/cabinet">Cabinet</a>
	</nav>
</div>
<?php $this->endBlock(); ?>

<?php $this->beginBlock("content"); ?>
<h3>What is Lorem Ipsum?</h3>
<p>
	Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
	printer took a galley of type and scrambled it to make a type specimen book. It has survived
	not only five centuries, but also the leap into electronic typesetting, remaining essentially
	unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
	passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
	Lorem Ipsum.
</p>
<?php $this->endBlock(); ?>