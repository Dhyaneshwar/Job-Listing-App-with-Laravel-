<?php

    namespace App\Models;

    class Listing {
        public static function all() {
            $all_listings = [[
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                ],[
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra nam libero justo laoreet sit amet cursus. Proin sed libero enim sed. Commodo ullamcorper a lacus vestibulum sed arcu non.',
                ]];
            return $all_listings;
        }

        public static function find($id){
            $allListings = self::all();
            foreach($allListings as $listing){
                if ($listing['id'] == $id){
                    return $listing;
                } 
            }

            return [];
        }
    }