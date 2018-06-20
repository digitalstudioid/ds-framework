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

    'accepted'             => ':attribute harus diterima.',
    'active_url'           => ':attribute bukan URL yang valid.',
    'after'                => ':attribute harus tanggal setelah :date.',
    'after_or_equal'       => ':attribute harus tanggal setelah atau sama dengan :date.',
    'alpha'                => ':attribute hanya boleh berisi huruf.',
    'alpha_dash'           => ':attribute hanya boleh berisi huruf, angka, dan tanda hubung.',
    'alpha_num'            => ':attribute hanya boleh berisi huruf dan angka.',
    'array'                => ':attribute harus berupa susunan.',
    'before'               => ':attribute harus tanggal sebelum :date.',
    'before_or_equal'      => ':attribute harus tanggal sebelum atau sama dengan :date.',
    'between'              => [
        'numeric' => ':attribute harus berada di antara :min dan :max.',
        'file'    => ':attribute harus berada di antara :min dan :max kilobyte.',
        'string'  => ':attribute harus berada di antara :min dan :max karakter.',
        'array'   => ':attribute harus berada di antara :min dan :max item.',
    ],
    'boolean'              => ':attribute harus benar atau salah.',
    'confirmed'            => ':attribute konfirmasi tidak cocok.',
    'date'                 => ':attribute bukan tanggal yang valid.',
    'date_format'          => ':attribute tidak sesuai dengan format :format.',
    'different'            => ':attribute dan :other harus berbeda.',
    'digits'               => ':attribute harus :digits digit.',
    'digits_between'       => ':attribute harus berada di antara :min dan :max digit.',
    'dimensions'           => ':attribute memiliki dimensi gambar yang tidak valid.',
    'distinct'             => ':attribute memiliki nilai duplikat.',
    'email'                => ':attribute harus alamat e-mail yang valid.',
    'exists'               => ':attribute yang dipilih tidak valid.',
    'file'                 => ':attribute must be a file.',
    'filled'               => ':attribute field must have a value.',
    'gt'                   => [
        'numeric' => ':attribute must be greater than :value.',
        'file'    => ':attribute must be greater than :value kilobytes.',
        'string'  => ':attribute must be greater than :value characters.',
        'array'   => ':attribute must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => ':attribute must be greater than or equal :value.',
        'file'    => ':attribute must be greater than or equal :value kilobytes.',
        'string'  => ':attribute must be greater than or equal :value characters.',
        'array'   => ':attribute must have :value items or more.',
    ],
    'image'                => ':attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => ':attribute field does not exist in :other.',
    'integer'              => ':attribute must be an integer.',
    'ip'                   => ':attribute must be a valid IP address.',
    'ipv4'                 => ':attribute must be a valid IPv4 address.',
    'ipv6'                 => ':attribute must be a valid IPv6 address.',
    'json'                 => ':attribute must be a valid JSON string.',
    'lt'                   => [
        'numeric' => ':attribute must be less than :value.',
        'file'    => ':attribute must be less than :value kilobytes.',
        'string'  => ':attribute must be less than :value characters.',
        'array'   => ':attribute must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => ':attribute must be less than or equal :value.',
        'file'    => ':attribute must be less than or equal :value kilobytes.',
        'string'  => ':attribute must be less than or equal :value characters.',
        'array'   => ':attribute must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => ':attribute may not be greater than :max.',
        'file'    => ':attribute may not be greater than :max kilobytes.',
        'string'  => ':attribute may not be greater than :max characters.',
        'array'   => ':attribute may not have more than :max items.',
    ],
    'mimes'                => ':attribute must be a file of type: :values.',
    'mimetypes'            => ':attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute must be at least :min.',
        'file'    => ':attribute must be at least :min kilobytes.',
        'string'  => ':attribute must be at least :min characters.',
        'array'   => ':attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'not_regex'            => ':attribute format is invalid.',
    'numeric'              => ':attribute must be a number.',
    'present'              => ':attribute field must be present.',
    'regex'                => ':attribute format is invalid.',
    'required'             => ':attribute field is required.',
    'required_if'          => ':attribute field is required when :other is :value.',
    'required_unless'      => ':attribute field is required unless :other is in :values.',
    'required_with'        => ':attribute field is required when :values is present.',
    'required_with_all'    => ':attribute field is required when :values is present.',
    'required_without'     => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same'                 => ':attribute and :other must match.',
    'size'                 => [
        'numeric' => ':attribute must be :size.',
        'file'    => ':attribute must be :size kilobytes.',
        'string'  => ':attribute must be :size characters.',
        'array'   => ':attribute must contain :size items.',
    ],
    'string'               => ':attribute must be a string.',
    'timezone'             => ':attribute must be a valid zone.',
    'unique'               => ':attribute has already been taken.',
    'uploaded'             => ':attribute failed to upload.',
    'url'                  => ':attribute format is invalid.',

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
            'rule-name' => 'custom-message',
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
