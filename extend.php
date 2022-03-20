<?php namespace ECNUForum\Search;

use Flarum\Extend;
use ECNUForum\Search\Gambit\SearchGambit;
use Flarum\Discussion\Search\DiscussionSearcher;
use Flarum\Frontend\Document;

return [
    (new Extend\SimpleFlarumSearch(DiscussionSearcher::class))
        ->setFullTextGambit(SearchGambit::class)
    ,
    (new Extend\Frontend('forum'))
    ->content(function (Document $document) {
        $document->foot[] = <<<HTML
<script type="module">
flarum.core.compat['common/components/Search'].MIN_SEARCH_LEN = 2;
</script>
HTML;
    })
];