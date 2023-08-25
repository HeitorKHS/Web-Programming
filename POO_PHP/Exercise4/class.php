<?php

    class Date
    {
        private $day;
        private $month;
        private $year;

        public function __construct($day = 0, $month = 0, $year = 0)
        {
                $this->day = $day;
                $this->month = $month;
                $this->year = $year;

        }

        public function setDay($day)
        {
            $this->day = $day;
        }

        public function getDay()
        {
            return $this->day;
        }

        public function setMonth($month)
        {
            $this->month = $month;
        }

        public function getMonth()
        {
            return $this->month;
        }

        public function setYear($year)
        {
            $this->year = $year;
        }

        public function getYear()
        {
            return $this->year;
        }

        public function incrementDay()
        {
            $this->day += 1;
        }

        public function decrementDay()
        {
            $this->day -= 1;
        }

        public function returnDate()
        {
            $date = new DateTime("$this->year-$this->month-$this->day");
            return $date->format('d/m/Y');
        }

        public function leapYear()
        {
            $year = $this->year;
            if(($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) "it's leap year";
            else "it's not a leap year";
        }

        public function differenceYears($date)
        {
            $date1 = new DateTime("$this->year-$this->month-$this->day");
            $date2 = new DateTime($date);

            $interval = $date1->diff($date2);

            return $interval->days;
        }

        public function checkYears($date)
        {
            $date1 = new DateTime("$this->year-$this->month-$this->day");
            $date2 = new DateTime($date);

            if ($date1 == $date2) return 0;
            else if ($date1 > $date2) return 1;
            else return -1;
        }

    }

?>