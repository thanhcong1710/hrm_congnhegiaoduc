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

    'accepted' => 'يجب قبول السمة:.',
    'active_url' => 'السمة: ليست عنوان URL صالحًا.',
    'after' => 'يجب أن تكون السمة: تاريخًا بعد:date.',
    'after_or_equal' => 'يجب أن تكون السمة: تاريخًا بعد أو يساوي:date.',
    'alpha' => 'قد تحتوي السمة: على أحرف فقط.',
    'alpha_dash' => 'يجب أن تحتوي السمة: فقط على أحرف وأرقام وشرطات وشرطات سفلية.',
    'alpha_num' => 'يجب أن تحتوي السمة: على أحرف وأرقام فقط.',
    'array' => 'يجب أن تكون السمة: مصفوفة.',
    'before' => 'يجب أن تكون السمة: تاريخًا قبل:date.',
    'before_or_equal' => 'يجب أن تكون السمة: تاريخًا قبل أو يساوي:date..',
    'between' => [
        'numeric' => 'يجب أن تكون السمة: بين:min و:max.',
        'file' => 'يجب أن تكون السمة بين :min و:max كيلو بايت.',
        'string' => 'يجب أن تكون السمة: بين أحرف:min و:max.',
        'array' => 'يجب أن تحتوي السمة: على عناصر بين:min و:max.',
    ],
    'boolean' => 'يجب أن يكون حقل السمة: صحيحًا أو خطأ.',
    'confirmed' => 'تأكيد السمة: غير متطابق.',
    'date' => 'السمة: ليست تاريخًا صالحًا.',
    'date_equals' => 'يجب أن تكون السمة: تاريخًا مساويًا لـ:date.',
    'date_format' => 'السمة: لا تتطابق مع التنسيق:format.',
    'different' => 'يجب أن تكون السمة: و:other مختلفة.',
    'digits' => 'يجب أن تكون السمة: أرقام أرقام.',
    'digits_between' => 'يجب أن تكون السمة بين رقمين:min و:max.',
    'dimensions' => 'تحتوي السمة : على أبعاد صورة غير صالحة.',
    'distinct' => 'يحتوي الحقل :attribute على قيمة مكررة.',
    'email' => 'يجب أن تكون السمة عنوان بريد إلكتروني صالحًا.',
    'exists' => 'السمة المحددة غير صالحة.',
    'file' => 'يجب أن تكون السمة ملفًا.',
    'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',
    'gt' => [
        'numeric' => 'يجب أن تكون السمة: أكبر من القيمة:.',
        'file' => 'يجب أن تكون السمة أكبر من القيمة بالكيلوبايت.',
        'string' => 'يجب أن تكون السمة: أكبر من أحرف القيمة:.',
        'array' => 'يجب أن تحتوي السمة: على أكثر من عناصر القيمة:.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون السمة: أكبر من أو تساوي: القيمة.',
        'file' => 'يجب أن تكون السمة: أكبر من أو تساوي: القيمة بالكيلوبايت.',
        'string' => 'يجب أن تكون السمة أكبر من أو تساوي أحرف القيمة.',
        'array' => 'يجب أن تحتوي السمة: على عناصر قيمة أو أكثر.',
    ],
    'image' => 'يجب أن تكون السمة: صورة.',
    'in' => 'السمة المحددة غير صالحة.',
    'in_array' => 'حقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن تكون السمة: عددًا صحيحًا.',
    'ip' => 'يجب أن تكون السمة عنوان IP صالحًا.',
    'ipv4' => 'يجب أن تكون السمة: عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن تكون السمة: عنوان IPv6 صالحًا.',
    'json' => 'يجب أن تكون السمة: سلسلة JSON صالحة.',
    'lt' => [
        'numeric' => 'جب أن تكون السمة: أقل من القيمة:.',
        'file' => 'يجب أن تكون السمة: أقل من: القيمة بالكيلوبايت.',
        'string' => 'يجب أن تكون السمة: أقل من أحرف القيمة:.',
        'array' => 'يجب أن تحتوي السمة على عناصر أقل من :value.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون السمة: أقل من أو تساوي: القيمة.',
        'file' => 'يجب أن تكون السمة: أقل من أو تساوي: القيمة بالكيلوبايت.',
        'string' => 'يجب أن تكون السمة: أقل من أو تساوي أحرف القيمة.',
        'array' => 'يجب ألا تحتوي السمة: على أكثر من عناصر القيمة:.',
    ],
    'max' => [
        'numeric' => 'لا يجوز أن تكون السمة أكبر من :max.',
        'file' => 'لا يجوز أن تكون السمة أكبر من: الحد الأقصى للكيلوبايت.',
        'string' => 'لا يجوز أن تكون السمة أكبر من الحد الأقصى للأحرف.',
        'array' => 'لا يجوز أن تحتوي السمة: على أكثر من:max من العناصر.',
    ],
    'mimes' => 'يجب أن تكون السمة ملفًا من النوع: :values.',
    'mimetypes' => 'يجب أن تكون السمة ملفًا من النوع: :values.',
    'min' => [
        'numeric' => 'يجب أن تكون السمة: على الأقل:min.',
        'file' => 'يجب أن تكون السمة: على الأقل: دقيقة بالكيلو بايت.',
        'string' => 'يجب أن تكون السمة: على الأقل أحرف:min.',
        'array' => 'يجب أن تحتوي السمة على عناصر:min على الأقل.',
    ],
    'not_in' => 'السمة المحددة غير صالحة.',
    'not_regex' => 'تنسيق السمة: غير صالح.',
    'numeric' => 'يجب أن تكون السمة رقمًا.',
    'present' => 'يجب أن يكون حقل السمة موجودًا.',
    'regex' => 'تنسيق السمة: غير صالح.',
    'required' => 'حقل السمة مطلوب.',
    'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_unless' => 'الحقل :attribute مطلوب ما لم يكن :other موجودًا في :values.',
    'required_with' => 'حقل :attribute مطلوب عند وجود :values.',
    'required_with_all' => 'حقل :attribute مطلوب عند وجود :values.',
    'required_without' => 'حقل السمة مطلوب عندما لا تكون القيم موجودة.',
    'required_without_all' => 'حقل :attribute مطلوب في حالة عدم وجود أي من :values.',
    'same' => 'يجب أن تتطابق السمة: و:other.',
    'size' => [
        'numeric' => 'يجب أن تكون السمة :size.',
        'file' => 'يجب أن تكون السمة :size بالكيلوبايت.',
        'string' => 'يجب أن تكون السمة: أحرف الحجم.',
        'array' => 'يجب أن تحتوي السمة: على عناصر الحجم.',
    ],
    'starts_with' => 'يجب أن تبدأ السمة بإحدى القيم التالية::',
    'string' => 'يجب أن تكون السمة: سلسلة.',
    'timezone' => 'يجب أن تكون السمة منطقة صالحة.',
    'unique' => 'لقد تم بالفعل أخذ السمة:.',
    'uploaded' => 'فشل تحميل السمة:.',
    'url' => 'تنسيق السمة: غير صالح.',
    'uuid' => 'يجب أن تكون السمة: UUID صالحًا.',

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
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];