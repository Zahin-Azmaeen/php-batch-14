<?php


namespace App\classes;


class HelloWorld
{
    public $message, $firstName, $products = [], $student = [], $students = [], $lastName,  $data = [], $fullName, $firstNumber, $secondNumber, $thirdNumber;

    public function __construct()
    {
        $this->message = "Hello World";
    }

    public function index()
    {
        $this->products = [
            0 => [
                'name'          => 'T Shirt',
                'price'         => '1400',
                'description'   => 'Good T Shirt'
            ],
            1 => [
                'name'          => 'Mobile Phone',
                'price'         => '45000',
                'description'   => 'Good Mobile Phone'
            ],
            2 => [
                'name'          => 'New Sharee',
                'price'         => '4500',
                'description'   => 'Good New Sharee'
            ],
        ];


        $this->students = [
            0 => [
                'name'      => 'Zahin',
                'email'     => 'zahin@gmail.com',
                'mobile'    => [
                    'personal'  => '124578',
                    'parent'    => '22222'
                ],
                'blood_group' => 'A+',
            ],
            1 => [
                'name'      => 'Saiful Islam',
                'email'     => 'saiful@gmail.com',
                'mobile'    => [
                    'personal'  => '898998',
                    'parent'    => [
                        'father' => '99999',
                        'mother' => '6666',
                    ]
                ],
                'blood_group' => 'A-',
            ],
            2 => [
                'name'      => 'Rubina',
                'email'     => 'rubina@gmail.com',
                'mobile'    => [
                    'personal'  => '00000',
                    'parent'    => [
                        'father' => '99999',
                        'mother' => '6666',
                    ]
                ],
                'blood_group' => 'B+',
            ],
        ];
        foreach ($this->students as $student) //
        {
            foreach ($student as $item) //
            {
                if (is_array($item))
                {
                    foreach ($item as $value)
                    {
                        if (is_array($value))
                        {
                            foreach ($value as $datum)
                            {
                                echo $datum.' ';
                            }
                        }
                        else
                        {
                            echo $value.' ';
                        }
                    }
                }
                else
                {
                    echo $item.' ';
                }
            }
            echo '<br/>';
            //echo $student['name'].' '.$student['email'].' '.$student['mobile'].'<br/>';
        }



        //echo $this->students[2]['email'];


//        $this->students[0]['name'] = 'Zahin';
//        $this->students[0]['email'] = 'Zahin@gmail.com';
//        $this->students[0]['mobile'] = '342423';
//
//        $this->students[1]['name'] = 'dfgsdfg';
//        $this->students[1]['email'] = 'Zahdsfgsdfgin@gmail.com';
//        $this->students[1]['mobile'] = 'dg546464';
//
//        $this->students[2]['name'] = 'dfgsdfg';
//        $this->students[2]['email'] = 'Zahdsfgsdfgin@gmail.com';
//        $this->students[2]['mobile'] = 'dg546464';



        // 10 20 30
        // associative array
//        $this->student = [
//            'name'      => 'Zahin',
//            'email'     => 'zahin@gmail.com',
//            'mobile'    => '124578'
//        ];
//
//
//        foreach ($this->student as $item)
//        {
//            echo $item.' ';
//        }
        //echo $this->student['mobile'];

         // numeric array
//        $this->data = [10, 20, 30, 'BITM', 'Zahin', 'Adnan', 12.25, true];
//        foreach ($this->data as $key => $item)
//        {
//            echo $item.' ';
//        }
        //echo $this->data[9];


//        $this->firstNumber = 10;
//        $this->firstNumber = 20;
//        $this->firstNumber = 30;
//
//        echo $this->firstNumber;

//        $this->firstNumber = 10;
//        do
//        {
//          echo "PHP";
//          $this->firstNumber++;
//        }
//        while ($this->firstNumber < 15);


//        while ($this->firstNumber < 15)
//        {
//            echo "BITM";
//            $this->firstNumber++;
//        }



//        for ($this->firstNumber = 20; $this->firstNumber >= 10; $this->firstNumber--)
//        {
//            echo $this->firstNumber." ";
//        }

        //echo "Hello world";

//        $this->firstNumber  = 10;
//        $this->secondNumber = 20;
//        $this->thirdNumber  = 30;
//
//        switch ($this->firstNumber)
//        {
//            case 10:
//                echo "Hello World";
//                break;
//            case 20:
//                echo "Hello Bangladesh";
//                break;
//            case 50:
//                echo "Hello Dhaka";
//                break;
//            default:
//                echo "Hello BITM";
//        }


//        if ($this->firstNumber > $this->secondNumber)
//        {
//            echo "Hello World";
//        }
//        else if ($this->secondNumber < $this->thirdNumber)
//        {
//            echo "Bangladesh";
//        }
//        else if ($this->thirdNumber > $this->firstNumber)
//        {
//            echo "Hello Dhaka";
//        }
//        else
//        {
//            echo "Hello BITM";
//        }



//        if ($this->firstNumber > $this->secondNumber)
//        {
//            echo "Hello World";
//        }
//        else
//        {
//            echo "Bangladesh";
//        }


//        if ($this->firstNumber > $this->secondNumber)
//        {
//            echo "Hello World";
//        }

//        if ($this->firstNumber > $this->secondNumber)
//        {
//            echo "Hello World";
//        }

//        $this->firstNumber  = false;
//        echo !$this->firstNumber;
//        $this->secondNumber = 20;
//        $this->thirdNumber  = 30;
//
//        echo '<br/>';
//        echo "T T : " . (($this->firstNumber < $this->secondNumber) || ($this->secondNumber < $this->thirdNumber));
//        echo '<br/>';
//        echo "F F : " . (($this->firstNumber > $this->secondNumber) || ($this->secondNumber > $this->thirdNumber));
//        echo '<br/>';
//        echo "T F : " .(($this->firstNumber < $this->secondNumber) || ($this->secondNumber > $this->thirdNumber));
//        echo '<br/>';
//        echo "F T : " . (($this->firstNumber > $this->secondNumber) || ($this->secondNumber < $this->thirdNumber));


//        echo '<br/>';
//        echo $this->firstNumber += $this->secondNumber; // 30
//        echo '<br/>';
//        echo $this->firstNumber -= $this->secondNumber; // 10
//        echo '<br/>';
//        echo $this->firstNumber *= $this->secondNumber; // 200
//        echo '<br/>';
//        echo $this->firstNumber /= $this->secondNumber; // 10
//        echo '<br/>';
//        echo $this->firstNumber %= $this->secondNumber; // 10
//        echo '<br/>';
//        echo $this->firstNumber .= $this->secondNumber; // 1020

        //echo - $this->firstNumber;

//        echo '<br/>';
//        echo ++$this->firstNumber; // 11
//        echo '<br/>';
//        echo ++$this->firstNumber; // 12
//        echo '<br/>';
//        echo $this->firstNumber++; // 12
//        echo '<br/>';
//        echo ++$this->firstNumber; // 14
//        echo '<br/>';
//        echo $this->firstNumber++; // 14
//        echo '<br/>';
//        echo $this->firstNumber; // 15
//        echo '<br/>';
//        echo $this->firstNumber + $this->secondNumber; // 30
//        echo '<br/>';
//        echo $this->firstNumber - $this->secondNumber; // -10
//        echo '<br/>';
//        echo $this->firstNumber * $this->secondNumber; // 200
//        echo '<br/>';
//        echo $this->firstNumber / $this->secondNumber; // 0.5
//        echo '<br/>';
//        echo $this->firstNumber % $this->secondNumber; // 10

//        $this->firstName    = "zahid";
//        $this->lastName     = "BITM";
//        $this->fullName     = $this->firstName.' '.$this->lastName;
//        echo $this->fullName;

        //echo gettype($this->firstName);
        // string, integer, double, boolean
        //echo $this->firstName . '  '. $this->lastName;
    }
}