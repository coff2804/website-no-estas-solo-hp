<?php

    class Notice{

        public $id;
        public $title;
        public $content;
        public $dateNotice;
        public $autor;
        public $tag;
        public $imageRute;

        function __construct($titleP,$contentP, $dateNoticeP, $autorP,$tagP,$imageRuteP)
        {
            $this->title = $titleP;
            $this->content = $contentP;
            $this->dateNotice = $dateNoticeP;
            $this->autor = $autorP;
            $this->tag = $tagP;
            $this->imageRute = $imageRuteP;
        }
        
    }

?>