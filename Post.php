<?php
/**
 * Created by PhpStorm.
 * User: Stoorx
 * Date: 23.05.2019
 * Time: 11:59
 */

class Post
{
    public function __construct($id, $title, $content, $timestamp)
    {
        $this->Id = $id;
        $this->Title = $title;
        $this->Content = $content;
        $this->Timestamp = $timestamp;
    }

    public $Id = null;
    public $Title = null;
    public $Content = null;
    public $Timestamp = null;

    public function toHTML(): string
    {
        return <<<HTML
        <div class="post">
            <div class="post_header">
                <div class="post_id">#$this->Id</div>
                <div class="post_time">$this->Timestamp</div>
                <div class="post_title">$this->Title</div>
            </div>
            <div class="post_content">
                $this->Content
            </div>
        </div>
HTML;
    }
}