<?php
	class Date
	{
        private $date;

		public function __construct($date = null)
		{
			// если дата не передана - пусть берется текущая
            if($date == null) {
                $this->date = date();
            } else {
                $this->date = $date;
            }
		}
		
		public function getDay()
		{
			return date('d', strtotime($this->date));
		}
		
		public function getMonth($lang = null)
		{
            $arrRu = ['янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дес'];
            $arrEn = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
			// возвращает месяц
            if($lang == null) {
                return date('n', strtotime($this->date));
            } elseif($lang == 'ru') {
                return $arrRu[date('n', strtotime($this->date))];
            } elseif($lang == 'en') {
                return $arrEn[date('n', strtotime($this->date))];
            }
			// переменная $lang может принимать значение ru или en
			// если эта не пуста - пусть месяц будет словом на заданном языке
		}
		
		public function getYear()
		{
			return date('Y', strtotime($this->date));
		}
		
		public function getWeekDay($lang = null)
		{
			// возвращает день недели
			$arrRu = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт','сб'];
            $arrEn = ['sun', 'mon', 'tue', 'wed', 'thur', 'frid', 'sat'];
			// возвращает месяц
            if($lang == null) {
                return date('w', strtotime($this->date));
            } elseif($lang == 'ru') {
                return $arrRu[date('w', strtotime($this->date))];
            } elseif($lang == 'en') {
                return $arrEn[date('w', strtotime($this->date))];
            }
			// переменная $lang может принимать значение ru или en
			// если эта не пуста - пусть день будет словом на заданном языке
		}
		
		public function addDay($value)
		{
			// добавляет значение $value к дню
           $d = date_create($this->date);
           date_modify($d, "$value day"); 
          $this->date = date_format($d, 'Y-m-d');
          return $this;
          }
		
		public function subDay($value)
		{
			// отнимает значение $value от дня
            $d = date_create($this->date);
            date_modify($d, "-$value day"); 
           $this->date = date_format($d, 'Y-m-d');
           return $this;
		}
		
		public function addMonth($value)
		{
			// добавляет значение $value к месяцу
            $m = date_create($this->date);
            date_modify($m, "$value month"); 
            $this->date = date_format($m, 'Y-m-d');
            return $this;
		}
		
		public function subMonth($value)
		{
			// отнимает значение $value от месяца
            $m = date_create($this->date);
            date_modify($m, "-$value month"); 
            $this->date = date_format($m, 'Y-m-d');
            return $this;
		}
		
		public function addYear($value)
		{
			// добавляет значение $value к году
            $y = date_create($this->date);
            date_modify($y, "$value year"); 
            $this->date = date_format($y, 'Y-m-d');
            return $this;
		}
		
		public function subYear($value)
		{
			// отнимает значение $value от года
            $y = date_create($this->date);
            date_modify($y, "-$value year"); 
            $this->date = date_format($y, 'Y-m-d');
            return $this;
		}
		
		public function format($format="Y-m-d")
		{
			// выведет дату в указанном формате
			// формат пусть будет такой же, как в функции date
          return  date("$format", strtotime($this->date)); 
           
		}
		
		public function __toString()
		{
			// выведет дату в формате 'год-месяц-день'
           return $this->date;
        
		}
	}
?>
<?php
	// $date1 = new Date('2022-06-15');
	// $date2 = new Date('2022-08-15');
	// echo $date->getYear() . '<br>';
	// echo $date->getMonth('ru') . '<br>'; 
	// echo $date->getDay() . '<br>'; 
	
	// echo $date->getWeekDay()  . '<br>';
	// echo $date->getWeekDay('ru')  . '<br>';
	// echo $date->getWeekDay('en')  . '<br>';
?>
<br>
<?php
    // echo $date . '<br>';    
    // echo '<br>';
    // echo '<br>';
    // echo $date . '<br>';
    // echo $date->getWeekDay('ru');
    // echo '<br>';
    // echo '<br>';

    // $date->addDay(2);
    // echo $date->format('d:m:Y') . '<br>';

    // echo (new Date('2025-12-31'))->addDay(1) . '<br>'; 
	// echo (new Date('2025-12-31'))->subDay(16)->subMonth(6)->subYear(3) . '<br>';; 

    // echo $date . '<br>';
?>