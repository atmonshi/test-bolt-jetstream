<?php

return [
    /**
     * set the default domain.
     */
    'domain' => null,

    /**
     * set the default path for the blog homepage.
     */
    'prefix' => 'bolt',

    /**
     * the middleware you want to apply on all the blog routes
     * for example if you want to make your blog for users only, add the middleware 'auth'.
     */
    'middleware' => ['web'],

    /**
     * you can overwrite any model and use your own
     * you can also configure the model per panel in your panel provider using:
     * ->skyModels([ ... ])
     */
    'models' => [
        'Category' => \App\Models\Zeus\Category::class,
        'Collection' => \App\Models\Zeus\Collection::class,
        'Field' => \App\Models\Zeus\Field::class,
        'FieldResponse' => \App\Models\Zeus\FieldResponse::class,
        'Form' => \App\Models\Zeus\Form::class,
        'FormsStatus' => \LaraZeus\Bolt\Models\FormsStatus::class,
        'Response' => \App\Models\Zeus\Response::class,
        'Section' => \App\Models\Zeus\Section::class,
    ],

    'defaultMailable' => \LaraZeus\Bolt\Mail\FormSubmission::class,

    'uploadDisk' => 'public',

    'uploadDirectory' => 'forms',

    'show_presets' => false,

    'allow_design' => false,
];
