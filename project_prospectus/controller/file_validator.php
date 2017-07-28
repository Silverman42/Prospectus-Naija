<?php
/**
 * Auth::Nkeze Sylvester
 * Desc::File validator
 */
class FileValidate
{
    public $fileTempName;
    public $fileName;
    public $fileSize;
    public $status;
    public $directory;
    public $ErrMessage;
    public function ByName()
    {
        if(file_exists($this->directory.$this->fileName)){
            $this->fileName = pathinfo($this->fileName, PATHINFO_FILENAME).rand(00000,99999).'.'.pathinfo($this->fileName, PATHINFO_EXTENSION);
        }
    }
    public function ByType()
    {
        if(pathinfo($this->fileName,PATHINFO_EXTENSION) == "jpg" || pathinfo($this->fileName,PATHINFO_EXTENSION) == "jpeg")
        {
            $this->status = 1;
        }
        else{
            $this->status = 0;
            $this->ErrMessage = "1";
            return $this->ErrMessage;
        }
    }
    public function BySize()
    {
        if($this->fileSize > 15000 ){
            $this->status = 0;
            $this->ErrMessage = "2";
            return $this->ErrMessage;
        }
        else{
            $this->status = 1;
        }
    }
    public function Success()
    {
        move_uploaded_file($this->fileTempName,$this->directory.$this->fileName);
    }
}

?>