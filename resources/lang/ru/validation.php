<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute должен быть принят.',
    'active_url'           => ':attribute не являеться допустимым URL-адресом.',
    'after'                => ':attribute может быть датой которая идет после :date.',
    'alpha'                => ':attribute может содержать только буквы.',
    'alpha_dash'           => ':attribute может содержать только буквы, числа, и тирэ.',
    'alpha_num'            => ':attribute может содержать только буквы и числа.',
    'array'                => ':attribute может быть только массивом.',
    'before'               => ':attribute может быть датой которая идёт до :date.',
    'between'              => [
        'numeric' => ':attribute может быть в пределах от :min и до :max.',
        'file'    => ':attribute может быть в пределах от :min и до :max килобоайт.',
        'string'  => ':attribute может быть в пределах от :min и до :max символов.',
        'array'   => ':attribute может содержать от :min и до :max элементов.',
    ],
    'boolean'              => ':attribute может быть либо true, либо false.',
    'confirmed'            => ':attribute не совпадает с полем потверждения.',
    'date'                 => ':attribute является недопустимой датой.',
    'date_format'          => ':attribute не соответсвует формату :format.',
    'different'            => ':attribute и :other должны отличаться.',
    'digits'               => ':attribute должен быть :digits десятычным.',
    'digits_between'       => ':attribute может быть в пределах от :min и до :max.',
    'email'                => ':attribute должен быть действительным email-адресом.',
    'filled'               => ':attribute должен быть обязательно.',
    'exists'               => ':attribute является недействительным.',
    'image'                => ':attribute должен быть изображением.',
    'in'                   => ':attribute является недействительным.',
    'integer'              => ':attribute должен быть целым числом.',
    'ip'                   => ':attribute должен иметь формат IP адреса.',
    'max'                  => [
        'numeric' => ':attribute не может состоять больше чем из :max.',
        'file'    => ':attribute не может состоять больше чем из :max килобайт.',
        'string'  => ':attribute не может состоять больше чем из :max символов.',
        'array'   => ':attribute не может состоять больше чем из :max элементов.',
    ],
    'mimes'                => 'The :attribute долженть быть файлом типа: :values.',
    'min'                  => [
        'numeric' => ':attribute должен состоять по крайней мере из :min цифр.',
        'file'    => ':attribute должен иметь вес хотя бы :min килобайт.',
        'string'  => ':attribute должен состоять по крайней мере из :min символов.',
        'array'   => ':attribute должен состоять по крайней мере из :min элементов.',
    ],
    'not_in'               => ':attribute является недействительным.',
    'numeric'              => ':attribute должен быть числом.',
    'regex'                => ':attribute имеет недопустимый формат.',
    'required'             => ':attribute обязателен для заполнения.',
    'required_if'          => ':attribute поле обязательно для заполения если :other is :value.',
    'required_with'        => ':attribute поле обязательно для заполения если :values присутсвует.',
    'required_with_all'    => ':attribute поле обязательно для заполения если :values присутсвует.',
    'required_without'     => ':attribute поле обязательно для заполения если :values отсутсвует.',
    'required_without_all' => ':attribute поле обязательно для заполения если не присутсвует ни одно из значений :values.',
    'same'                 => ':attribute и :other должны соотвествовать.',
    'size'                 => [
        'numeric' => ':attribute должен состоять из :size цифр.',
        'file'    => ':attribute должен быть :size килобайт.',
        'string'  => ':attribute должен состоять из :size символов.',
        'array'   => ':attribute должен состоять из :size элементов.',
    ],
    'unique'               => ':attribute уже используется.',
    'url'                  => ':attribute имеет недопустимый формат.',
    'timezone'             => ':attribute должен иметь фомат часового пояса.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Настраиваемое сообщение',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
