<?php

namespace App\entity;

class Post {
    private int $id;
    private string $title;
    private string $content;
    private string $author_id;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle(string $title): void{
        $this->title = $title;
    }

    public function getContent(){
        return $this->content;
    }

    public function setContent(string $content): void{
        $this->content = $content;
    }

    public function getAuthorId(){
        return $this->author_id;
    }

    public function setAuthorId(string $author_id): void{
        $this->author_id = $author_id;
    }
}