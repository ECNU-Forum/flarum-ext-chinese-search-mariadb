<?php namespace ECNUForum\Search;

use Flarum\Extend;
use ECNUForum\Search\Gambit\SearchGambit;
use Flarum\Discussion\Search\DiscussionSearcher;

return [
    (new Extend\SimpleFlarumSearch(DiscussionSearcher::class))
        ->setFullTextGambit(SearchGambit::class)
    ,
];