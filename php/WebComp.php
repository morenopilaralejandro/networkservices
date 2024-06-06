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
        <div>
            <span class='text-center'>Alejandro Moreno Pilar 2024</span>
            <div class='sns-container'>
                <a href='https://github.com/morenopilaralejandro/networkservices'>
                    <img src='{$path}img/svg/github-white.svg' alt='gh'></a>
                <a href='https://www.youtube.com/channel/UCDc9fmXM_TDexYI7jXv9wug'>
                    <img src='{$path}img/svg/youtube-white.svg' alt='yt'>
                </a>
            </div>
        </div>";
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
