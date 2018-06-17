<?php

	/*function add(){
		//var_dump(func_get_args());
		return array_sum(func_get_args());
	}*/


//add(1,2,3,4);

//array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) }

//echo add(1,2,3,4);

//10


	class Item
	{

		protected $cost;

		public function setCost($cost)
		{

			$this->cost = $cost;

			return $this;

		}

		public function getCost()
		{
			return $this->cost;
		}

	}




	class Cart
	{
		protected $items = [];

		public function add(Item $item)
		{
			$this->items[] = $item;

			return $this;
		}

		public function total()
		{
			/*$total = 0;

			foreach($this->items as item)
			{
				$total += $item->getCost();

			}

			return $total;*/

			//return array_sum($this->items);



			return array_sum(array_map(function($item){

				return $item->getCost();


			},$this->items));
		}

	}


	$item1 = (new Item)->setCost(10);
	$item2 = (new Item)->setCost(20);

//var_dump($item1);

	$cart = (new Cart)->add($item1)->add($item2);

	echo $cart->total();