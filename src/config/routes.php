<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.2.18 (22:24)
 */

return array(
    'new' => 'noteNew/index',
    'edit/([0-9]+)' => 'noteEdit/index/$1',
    'note/([0-9]+)' => 'noteShow/view/$1',
    'note/all' => 'noteShow/indexAll',
    'note' => 'noteShow/index',
);