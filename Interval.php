<?php
require_once 'Date.php';

	class Interval extends Date
	{
        private $date1;
        private $date2;

		public function __construct(Date $date1, Date $date2)
		{
		$this->date1 = $date1;
        $this->date2 = $date2;
		}
		
		public function toDays()
		{
			// вернет разницу в днях
            return $this->interval_date($this->date1, $this->date2, $p='a') . ' дней';

		}
		
		public function toMonths()
		{
			// вернет разницу в месяцах
            return $this->interval_date($this->date1, $this->date2, $p='m') . ' месяцев';
		}
		
		public function toYears()
		{
			// вернет разницу в годах
            return $this->interval_date($this->date1, $this->date2, $p='y') . ' год';
		}

        private function interval_date($date1, $date2, $p) {
        $datetime1 = date_create($this->date1);
        $datetime2 = date_create($this->date2);
        $interval = date_diff($datetime1, $datetime2);
        echo ($p === 'm') ? $interval->$p + 12 * $interval->y : $interval->format("%$p");
        }
	}
?>

<?php
	$date1 = new Date('2022-01-01');
	$date2 = new Date('2023-02-01');
	
	$interval = new Interval($date1, $date2);
	
	echo $interval->toDays() . '<br>';   // выведет разницу в днях
	echo $interval->toMonths() . '<br>'; // выведет разницу в месяцах
	echo $interval->toYears() . '<br>';  // выведет разницу в годах
?>