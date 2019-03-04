<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Illuminate\Support\Facades\Auth;

class SubCategory extends Resource
{
    
    public static $category = "Menu";
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\SubCategory';
    
    /**
     * The single value that should be used to represent the resource when
     * being displayed.
     *
     * @var string
     */
    public static $title = 'sub_category_name';
    
    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search
        = [
            'id',
            'sub_category_name',
        ];
    
    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function fields(Request $request)
    {
        $categories = [];
        foreach (\App\Models\Category::all() as $category) {
            array_merge($categories,
                [$category->id => $category->category_name]);
        }
        
        return [
            ID::make()->sortable(),
            
            Text::make('Create by User ID', 'user_id')
                ->withMeta(['value' => Auth::user()->id])
                ->withMeta([
                    'extraAttributes' => [
                        'readonly' => true,
                    ],
                ])->hideFromIndex(),
            
            BelongsTo::make('Category')
                     ->rules('required'),
            
            Text::make('Sub Category Name')
                ->sortable()
                ->rules('required', 'max:255'),
            
            Text::make('Link Page')
                ->rules('max:255'),
            
            Boolean::make('New Tab'),
        ];
    }
    
    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }
    
    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }
    
    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }
    
    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
