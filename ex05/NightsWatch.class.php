<?php
class NightsWatch implements IFighter
{
	private $fight;

	public function recruit ($fighter) {
		if ($fighter instanceof IFighter) {
			$fight = $fight.$fighter->fight();
		}
	}

	public function fight() {
		print($fight);
	}
}
?>