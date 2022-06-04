<?php
class Password{
    protected $charLen;
    protected $charSet;
    protected $str = '';
    const MIN_PASS_LEN = 8;
    const DEFAULT_CASE = 'U';

    public function setCharLen($charLen){
        $this->charLen = $charLen;
        return $this;
    }

    public function setCharSet($charSet){
        $this->charSet = $charSet;
        return $this;
    }

    public function generate(){
        if (!$this->charLen){
            $this->charLen = self::MIN_PASS_LEN;
        }elseif (!$this->charSet) {
            $this->charSet = self::DEFAULT_CASE;
        }

        for ($i=0; $i<$this->charLen; $i++){
            $this->str = $this->str . chr(mt_rand(65,90));
        }

        return match ($this->charSet) {
            'D' | 'd' => rand(10**($this->charLen -1), 10**($this->charLen)-1),
            'L' | 'l' => strtolower($this->str),
            default => strtoupper($this->str)
        };
        
    }
}