
<?php
if(isset($_GET['function'])){
	switch($_GET['function']){
		case 'additem':
		doowop_menuAddItem();
		break;
		case 'edititem':
		doowop_menuEditItem();
		break;
		case 'overview':
		doowop_menuOverview();
		break;
		case 'readme':
		doowop_menuReadMe();
		break;
	}
}
else {
	loaddoowop_menuBackendHome();
}
function loaddoowop_menuBackendHome() {
	?>
	Welcome to the Doo Wop Menu! <a href="<?php echo selfURL(); ?>&function=additem">Add Item</a> <br />
	<a href="<?php echo selfURL(); ?>&function=edititem">Edit</a> <br />
	<a href="<?php echo selfURL(); ?>&function=overview">Add overview</a> <br />
	<a href="<?php echo selfURL(); ?>&function=readme">Readme</a> <br />
	<?php
}
function doowop_menuAddItem() {
	?>
	Add The Add Item Section Here<a href="<?php echo selfURL(); ?>&function=additem">Add Item</a> <br />
	<a href="<?php echo selfURL(); ?>&function=edititem">Edit</a> <br />
	<a href="<?php echo selfURL(); ?>&function=overview">Add overview</a> <br />
	<a href="<?php echo selfURL(); ?>&function=readme">Readme</a> <br />
	<?php
}
function doowop_menuEditItem() {
	?>
	Add the DooWop Edit Here.<a href="<?php echo selfURL(); ?>&function=additem">Add Item</a> <br />
	<a href="<?php echo selfURL(); ?>&function=edititem">Edit</a> <br />
	<a href="<?php echo selfURL(); ?>&function=overview">Add overview</a> <br />
	<a href="<?php echo selfURL(); ?>&function=readme">Readme</a> <br />
	<?php
}
function doowop_menuOverview() {
	?>
	Here's for the overview of items<a href="<?php echo selfURL(); ?>&function=additem">Add Item</a> <br />
	<a href="<?php echo selfURL(); ?>&function=edititem">Edit</a> <br />
	<a href="<?php echo selfURL(); ?>&function=overview">Add overview</a> <br />
	<a href="<?php echo selfURL(); ?>&function=readme">Readme</a> <br />
	<?php
}
function doowop_menuReadMe() {
	?>
	And Here we'll throw in a readme<a href="<?php echo selfURL(); ?>&function=additem">Add Item</a> <br />
	<a href="<?php echo selfURL(); ?>&function=edititem">Edit</a> <br />
	<a href="<?php echo selfURL(); ?>&function=overview">Add overview</a> <br />
	<a href="<?php echo selfURL(); ?>&function=readme">Readme</a> <br />
	<?php
}