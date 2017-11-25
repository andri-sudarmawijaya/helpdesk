<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    
    'accepted'             => ':attribute harus diterima.',
    'active_url'           => ':attribute bukan URL yang valid.',
    'after'                => ':attribute Harus setelah tanggal :date.',
    'after_or_equal'       => ':attribute harus tanggal setelah atau sama dengan :date.',
    'alpha'                => ':attribute hanya boleh berisi huruf.',
    'alpha_dash'           => ':attribute hanya boleh berisi huruf, angka, dan tanda hubung.',
    'alpha_num'            => ':attribute hanya berisi huruf dan angka.',
    'array'                => ':attribute harus berupa array.',
    'before'               => ':attribute Harus sebelum tanggal :date.',
    'before_or_equal'      => ':attribute harus tanggal sebelum atau sama dengan :date.',
    'between'              => [
        'numeric' => ':attribute harus diantara :min dan :max.',
        'file'    => ':attribute harus diantara :min dan :max kilobyte.',
        'string'  => ':attribute harus diantara :min dan :max karakter.',
        'array'   => ':attribute harus ada diantara :min dan :max item.',
    ],
    'boolean'              => ':attribute  harus benar atau salah.',
    'confirmed'            => ':attribute konfirmasi tidak cocok.',
    'date'                 => ':attribute bukan tanggal yang valid.',
    'date_format'          => ':attribute tidak cocok dengan format :format.',
    'different'            => ':attribute dan :other harus berbeda.',
    'digits'               => ':attribute harus :digits digit.',
    'digits_between'       => ':attribute harus antara :min dan :max digit.',
    'dimensions'           => ':attribute ukuran gambar yang tidak valid.',
    'distinct'             => ':attribute  memiliki nilai duplikat.',
    'email'                => ':attribute Harus alamat e-mail yang valid.',
    'exists'               => ':attribute terpilih tidak cocok.',
    'file'                 => ':attribute harus sebuah file.',
    'filled'               => ':attribute  wajid diisi.',
    'image'                => ':attribute harus gambar.',
    'in'                   => ':attribute terpilih tidak cocok.',
    'in_array'             => ':attribute  tidak ada :other.',
    'integer'              => ':attribute harus sebuah integer.',
    'ip'                   => ':attribute harus alamat IP yang valid.',
    'json'                 => ':attribute harus berupa string JSON yang valid.',
    'max'                  => [
        'numeric' => ':attribute tidak lebih besar dari :max.',
        'file'    => ':attribute tidak lebih besar dari :max kilobyte.',
        'string'  => ':attribute tidak lebih besar dari :max karakter.',
        'array'   => ':attribute tidak lebih besar dari :max item.',
    ],
    'mimes'                => ':attribute harus berupa file type: :values.',
    'mimetypes'            => ':attribute harus berupa file type: :values.',
    'min'                  => [
        'numeric' => ':attribute setidak-tidaknya :min.',
        'file'    => ':attribute setidak-tidaknya :min kilobyte.',
        'string'  => ':attribute setidak-tidaknya :min karakter.',
        'array'   => ':attribute setidak-tidaknya :min item.',
    ],
    'not_in'               => ':attribute terpilih tidak cocok.',
    'numeric'              => ':attribute harus berupa nomor.',
    'present'              => ':attribute  harus ada.',
    'regex'                => ':attribute format salah.',
    'required'             => ':attribute  wajib diisi.',
    'required_if'          => ':attribute  wajib diisi ketika :other adalah :value.',
    'required_unless'      => ':attribute  diperlukan kecuali :other masuk :values.',
    'required_with'        => ':attribute  wajib diisi ketika :values ada.',
    'required_with_all'    => ':attribute  wajib diisi ketika :values ada.',
    'required_without'     => ':attribute  wajib diisi ketika :values tidak ada.',
    'required_without_all' => ':attribute  wajib diisi ketika tidak ada :values yang tersimpan.',
    'same'                 => ':attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => ':attribute harusnya :size.',
        'file'    => ':attribute harusnya :size kilobyte.',
        'string'  => ':attribute harusnya :size karakter.',
        'array'   => ':attribute harus berisi :size item.',
    ],
    'string'               => ':attribute harus berupa string.',
    'timezone'             => ':attribute harus zona yang benar.',
    'unique'               => ':attribute telah diambil.',
    'uploaded'             => ':attribute gagal mengunggah.',
    'url'                  => ':attribute format salah.',

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
        'g-recaptcha-response'          => [
            'required' => 'reCaptcha wajib diceklis.',
            ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
