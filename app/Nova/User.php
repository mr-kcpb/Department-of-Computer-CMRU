<?php

namespace App\Nova;

use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\Password;

class User extends Resource
{
    
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\User';
    
    /**
     * The single value that should be used to represent the resource when
     * being displayed.
     *
     * @var string
     */
    public static $title = 'name';
    
    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search
        = [
            'id',
            'first_name',
            'last_name',
            'email',
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
            
            Image::make('Image', 'id')->resolveUsing(function () {
                return 'personnel/' . $this->id . '.jpg';
            }),
            
            Select::make('Prefix')->displayUsing(function () {
                return $this->prefix->prefix_name;
            })->hideFromIndex(),
            
            Text::make('First Name')
                ->sortable()
                ->rules('required', 'max:255'),
            
            Text::make('Last Name')
                ->sortable()
                ->rules('required', 'max:255'),
            
            Text::make('Room')
                ->sortable()
                ->rules('required', 'max:255'),
            
            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),
            
            Password::make('Password')
                    ->onlyOnForms()
                    ->creationRules('required', 'string', 'min:6')
                    ->updateRules('nullable', 'string', 'min:6'),
            
            Boolean::make('Edit Content')
                   ->canSee(function ($request) {
                       return $request->user()->root_status == 1;
                }),
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
