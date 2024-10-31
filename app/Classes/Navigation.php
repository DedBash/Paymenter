<?php

namespace App\Classes;

use App\Helpers\EventHelper;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class Navigation
{
    public static function get()
    {
        $categories = Category::whereNull('parent_id')->where(function ($query) {
            $query->whereHas('children')->orWhereHas('products');
        })->get();

        $routes = [
            [
                'name' => __('general.home'),
                'route' => 'home',
                'children' => [],
            ],
        ];

        if (Auth::user()) {
            $routes[] = [
                'name' => __('general.dashboard'),
                'route' => 'dashboard',
                'children' => [],
            ];
        }

        if (count($categories) > 0) {
            $routes[] = [
                'name' => __('general.shop'),,
                'children' => $categories->map(function ($category) {
                    return [
                        'name' => $category->name,
                        'route' => 'category.show',
                        'params' => ['category' => $category->slug],
                    ];
                })->toArray(),
            ];
        }

        $routes = EventHelper::itemEvent('navigation', $routes);

        // Check which one is active
        foreach ($routes as $key => $route) {
            if (isset($route['children'])) {
                foreach ($route['children'] as $child) {
                    if (request()->route()->getName() == $child['route']) {
                        $routes[$key]['active'] = true;
                    }
                }
            } else {
                if (request()->route()->getName() == $route['route']) {
                    $routes[$key]['active'] = true;
                }
            }
        }

        return $routes;
    }

    // Get authenticated user navigation
    public static function getAuth()
    {
        $routes = [
            [
                'name' => __('general.dashboard'),
                'route' => 'dashboard',
                'children' => [],
            ],
            [
                'name' => __('general.tickets'),
                'route' => 'tickets',
                'children' => [],
            ],
            [
                'name' => __('general.account'),
                'route' => 'account',
                'children' => [],
            ],
        ];

        if (Auth::user()->role_id) {
            $routes[] = [
                'name' => __('general.admin'),
                'route' => 'filament.admin.pages.dashboard',
                'spa' => false,
            ];
        }

        $routes = EventHelper::itemEvent('navigation.auth', $routes);

        // Check which one is active
        foreach ($routes as $key => $route) {
            if (isset($route['children'])) {
                foreach ($route['children'] as $child) {
                    if (request()->route()->getName() == $child['route']) {
                        $routes[$key]['active'] = true;
                    }
                }
            } else {
                if (request()->route()->getName() == $route['route']) {
                    $routes[$key]['active'] = true;
                }
            }
        }

        return $routes;
    }

    public static function getCurrent()
    {
        $route = request()->route()->getName();
        $admin = self::get();
        // Get current parnet of the route
        $parent = null;
        foreach ($admin as $item) {
            if ($item['route'] == $route) {
                $parent = $item;
                break;
            }
            if (isset($item['children'])) {
                foreach ($item['children'] as $child) {
                    if ($child['route'] == $route) {
                        $parent = $item;
                        break;
                    }
                }
            }
        }

        return $parent;
    }
}
