<?php 

//MySQLi

// // connect to database

// $conn = mysqli_connect("localhost", "jason", "y2756089", "ninja_pizza");

// //check connection

// if(!$conn){
// 	echo "Connection error: " . mysqli_connect_error();
// }

//use the db_connect.php here
include("config/db_connect.php");

// write query for all pizzas
//$sql = "SELECT title, ingredients, id FROM pizzas";

//order the data
$sql = "SELECT title, ingredients, id FROM pizzas ORDER BY created_at";

// make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

//close the coonection
mysqli_close($conn);

//print_r($pizzas);

//test if it work to turn the string into array
//explode(",", $pizzas[0]["ingredients"])



?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<h4 class="center grey_text">Pizzas!</h4>

	<div class="container">
		<div class="row">

			<?php foreach($pizzas as $pizza): ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="imgPizza"><img src="img/pizza.png" class="pizza" alt=""></div>
						
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza["title"])?></h6>
							<!-- <div><?php echo htmlspecialchars($pizza["ingredients"])?></div> -->
							<ul>
							<?php foreach(explode(",", $pizza["ingredients"]) as $ing): ?>
								<li><?php echo htmlspecialchars($ing) ?></li>
							<?php endforeach; ?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $pizza['id']?>">more info</a>
						</div>
					</div>
				</div>


			<?php endforeach; ?>

			<!-- unclear syntax -->
			<!-- <?php if (count($pizzas) >= 3){ ?>
				<p>there are 3 or more pizzas</p>
			<?php } else { ?>
				<p>there are lesss than 3 pizzas</p>
			<?php } ?> -->

			<!-- clear syntax -->
			<!-- <?php if (count($pizzas) >= 3): ?>
				<p>there are 3 or more pizzas</p>
			<?php else: ?>
				<p>there are lesss than 3 pizzas</p>
			<?php endif; ?> -->



		</div>
	</div>

	<?php include('templates/footer.php'); ?>

</html>