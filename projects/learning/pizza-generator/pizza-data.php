
	<?php

		function pizzaGenerator($crust, $sauce, $topping1, $topping2) {
			$pizza = [
				"crust" => $crust,
				"sauce" => $sauce,
				"topping1" => $topping1,
				"topping2" => $topping2,
			];

			return $pizza;
		}

		$mondaySpecial = pizzaGenerator("cheese-stuffed", "tomato","cheetos", "bacon");
		$tuesdaySpecial = pizzaGenerator("thin", "tomato","olive", "mushroom");
		$wednesdaySpecial = pizzaGenerator("thin", "white","spinach", "mushroom");
		$thursdaySpecial = pizzaGenerator("thick", "tomato","olive", "mushroom");
		$fridaySpecial = pizzaGenerator("thin", "buffalo","bacon", "anchovies");

		$pizzas = [$mondaySpecial, $tuesdaySpecial, $wednesdaySpecial, $thursdaySpecial, $fridaySpecial];

	?>