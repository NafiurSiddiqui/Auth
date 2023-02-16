<?php



class LoginController extends login
{
    private $name;
    private $pass;
    public $emptyInputs = "";
    public $emptyName = "";
    public $emptyPass = "";

    //construct
    public function __construct($name, $pass)
    {
        $this->name = $name;
        $this->pass = $pass;

    }

    //throw error

    public function loginUser()
    {
        
       // empty input
        if ($this->emptyInputs()) {

            
            $emptyInputs= " ⚠️ Please provide your name and pass ⚠️";
            header("location:../index.php?error=emptyinputs".urlencode($emptyInputs));
            exit();

        }

         //empty name
        if ($this->nameIsEmpty()) {

            header("location:../index.php?error=emptyName");
            
            // $this->emptyName = "⚠️ Please provide your name. ⚠️";
            exit();

        }
        //empty pass
        if ($this->loginPassIsEmpty()) {

            header("location:../index.php?error=emptyPass");
            
            $this->emptyPass= "⚠️ Password is required ⚠️";
            exit();

        }

        

        $this->getUser($this->name, $this->pass);

    }

    //validate for empty inputs
    protected function emptyInputs()
    {

        if (
            empty($this->name) ||
            empty($this->pass)

        ) {
            $emptyInputs = true;
        } else {
            $emptyInputs = false;
        }

        return $emptyInputs;
    }

    protected function nameIsEmpty(){

     return $nameIsEmpty = empty($this->name) ? true: false ;

   
    }

    protected function loginPassIsEmpty(){
     
        return $loginPassEmpty = empty($this->pass) ? true: false;
   
    }


}
