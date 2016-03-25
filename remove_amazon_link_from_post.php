<?php
/*
Plugin Name: Link remover for affiliate
Plugin URI: 
Description: リンク削除用プラグイン
Version: 0.1.1
Author: daisuke ikeda
Author URI: https://github.com/ohayou-ikechan/remove_links_for_wordpress
License: GPL2
*/
/*  Copyright 2016 daisuke ikeda(email: ohayou.ikechan@gmail.com)
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
     published by the Free Software Foundation.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
    function remove_amazon_link($content) {
    	$content = preg_replace('#<a.[^>]+?amazon.co.jp[^>]+?>(.+?)</a>#i', '$1', $content);
    	$content = preg_replace('#<a.[^>]+?amzn.to[^>]+?>(.+?)</a>#i', '$1', $content);
        return $content;
    }
    add_filter('the_content','remove_amazon_link');
?>