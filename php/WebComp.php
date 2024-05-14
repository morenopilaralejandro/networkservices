<?php
class webComp {
    private bool $isIndex;
    private string $path;

    //functions
    function getHeader(): string {
        $path = $this->path;
        $inner = "
        <a href='{$path}index.php'>Network Services</a>";
        return $inner;
    }

    public function getFooter(): string {
        $path = $this->path;
        $inner = "
        <p class='text-center'>2024</p>";
        return $inner;
    }

    //constructor
    public function __construct(bool $isIndex) {
        $this->isIndex = $isIndex; 

        if($isIndex){
            $this->path = "./";
        } else {
            $this->path = "../";
        }
    }

    //setter getter
    public function setIsIndex(bool $isIndex) { 
        $this->isIndex = $isIndex; 
    }
    public function getIsIndex(): bool { 
        return $this->isIndex; 
    }    

    public function setPath(string $path) { 
        $this->path = $path; 
    }
    public function getPath(): string { 
        return $this->path; 
    }    
} 
?>
