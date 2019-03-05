<?php

namespace App\Nova;

use Froala\NovaFroalaField\Froala;
use Laraning\NovaTimeField\TimeField;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Calendar extends Resource
{
    
    public static $category = "Content";
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\Calendar';
    
    /**
     * The single value that should be used to represent the resource when
     * being displayed.
     *
     * @var string
     */
    public static $title = 'topic';
    
    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search
        = [
            'id',
            'place',
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
        return [
            ID::make()->sortable(),
            
            Text::make('Topic')
                ->sortable()
                ->rules('required', 'max:255'),
            
            Text::make('Place')
                ->sortable()
                ->rules('required', 'max:255'),
            
            Froala::make('Detail')
                  ->rules('required')
                  ->hideFromIndex()
                  ->options([
                      'height' => 600,
                  ])->withFiles('public'),
            
            Date::make('Date Start', 'date_start')
                ->sortable()
                ->rules('required'),
            
            Date::make('Date End', 'date_end')
                ->sortable()
                ->rules('required'),
            
            TimeField::make('Time Start')
                     ->sortable()
                     ->rules('required'),
            
            TimeField::make('Time End')
                     ->sortable()
                     ->rules('required'),
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
