<?php
class StringFormat{
    public $SubString1;
    public $SubString2;
	public $InputString;
	public $StringArray;
	protected $ConcString;
    public $check_pattern;
	public function Uppercase($string){
		$this->InputString = strtoupper($string);
		return $this->InputString;
	}
	public function Lowercase($string){
		$this->InputString = strtolower($string);
		return $this->InputString;
	}
	public function Concatenate($string = array()){
		$this->StringArray = $string;
		foreach ($this->StringArray as $input => $value){
			$this->ConcString .= $value.' ';
		}
		return $this->ConcString;
	}
    public function QuoteString($string){
        $this->InputString = "{$string}";
    }
   /* public function PasswordCheck($string){
		$this->check_pattern = strlen($string);
        if ($this->check_pattern < 6){
            return "error";
        }
        else{
            return $string;
        }
	}*/
    public function AutoUsername($string = array()){
        $this->ConcString = NULL;
        $this->ConcString1 = substr($string['other_names'],0,1);
        $this->ConcString2 = $string['surname'];
        $this->Concstring = $this->ConcString1 . $this->ConcString2;
        return $this->Concstring;
    }
}
?>