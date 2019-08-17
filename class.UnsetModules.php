<?php
class UnsetModulesPlugin extends Gdn_Plugin {
public function pageController_render_before($sender) {
     $panel = &$sender->Assets['Panel'];

    unset($panel['NewDiscussionModule'], $panel['BookmarkedModule'], $panel['DiscussionsModule'], $panel['RecentActivityModule']);
}
}
