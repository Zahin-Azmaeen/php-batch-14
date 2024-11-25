<?php


namespace App\classes;



class Series
{
    public $startingNumber, $endingNumber, $result, $result2, $i;

    public function __construct($post)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];
        $this->choice = $post['choice'];
    }

    public function index()
    {
        switch ($this->choice) {
            case 'odd':
                if ($this->startingNumber >= $this->endingNumber) {
                    for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--) {
                        if ($this->i % 2 != 0) {
                            $this->result .= $this->i . ' ';
                        }
                    }

                } else {
                    for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
                        if ($this->i % 2 != 0) {
                            $this->result .= $this->i . ' ';
                        }
                    }
                }
                break;
            case 'even':
                if ($this->startingNumber >= $this->endingNumber) {
                    for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--) {
                        if ($this->i % 2 == 0) {
                            $this->result .= $this->i . ' ';
                        }
                    }

                } else {
                    for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
                        if ($this->i % 2 == 0) {
                            $this->result .= $this->i . ' ';
                        }
                    }
                }
                break;
            case 'none':
                if ($this->startingNumber >= $this->endingNumber) {
                    for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--) {
                        $this->result .= $this->i . ' ';
                    }

                } else {
                    for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
                        $this->result .= $this->i . ' ';
                    }
                }
                break;

        }


        header("Location: route.php?page=portfolio&&result=$this->result");
    }
}