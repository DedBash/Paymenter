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

    'accepted' => 'Bitte akzeptieren Sie das Feld ":attribute".',
        'accepted_if' => 'Bitte akzeptieren Sie das Feld ":attribute", wenn :other den Wert :value hat.',
        'active_url' => 'Bitte geben Sie eine gültige URL im Feld ":attribute" ein.',
        'after' => 'Das Datum im Feld ":attribute" muss nach dem :date liegen.',
        'after_or_equal' => 'Das Datum im Feld ":attribute" muss nach oder gleich dem :date liegen.',
        'alpha' => 'Das Feld ":attribute" darf nur Buchstaben enthalten.',
        'alpha_dash' => 'Das Feld ":attribute" darf nur Buchstaben, Zahlen,Bindestriche und Unterstriche enthalten.',
        'alpha_num' => 'Das Feld ":attribute" darf nur Buchstaben und Zahlen enthalten.',
        'array' => 'Das Feld ":attribute" muss ein Array sein.',
        'ascii' => 'Das Feld ":attribute" darf nur einzelne Byte-alphanumerische Zeichen und Symbole enthalten.',
        'before' => 'Das Datum im Feld ":attribute" muss vor dem :date liegen.',
        'before_or_equal' => 'Das Datum im Feld ":attribute" muss vor oder gleich dem :date liegen.',
        'between' => [
            'array' => 'Das Feld ":attribute" muss zwischen :min und :max Elementen enthalten.',
            'file' => 'Die Datei im Feld ":attribute" muss zwischen :min und :max Kilobyte groß sein.',
            'numeric' => 'Der Wert im Feld ":attribute" muss zwischen :min und :max liegen.',
            'string' => 'Der Text im Feld ":attribute" muss zwischen :min und :max Zeichen lang sein.',
        ],
        'boolean' => 'Das Feld ":attribute" muss entweder "true" oder "false" sein.',
        'can' => 'Der Wert im Feld ":attribute" ist nicht autorisiert.',
        'confirmed' => 'Die Bestätigung für das Feld ":attribute" stimmt nicht überein.',
        'current_password' => 'Das eingegebene Passwort ist falsch.',
        'date' => 'Bitte geben Sie ein gültiges Datum im Feld ":attribute" ein.',
        'date_equals' => 'Das Datum im Feld ":attribute" muss gleich :date sein.',
        'date_format' => 'Das Datum im Feld ":attribute" muss dem Format :format entsprechen.',
        'decimal' => 'Das Feld ":attribute" muss :decimal Nachkommastellen haben.',
        'declined' => 'Das Feld ":attribute" muss abgelehnt werden.',
        'declined_if' => 'Das Feld ":attribute" muss abgelehnt werden, wenn :other den Wert :value hat.',
        'different' => 'Das Feld ":attribute" und :other müssen unterschiedlich sein.',
        'digits' => 'Das Feld ":attribute" muss :digits Ziffern enthalten.',
        'digits_between' => 'Das Feld ":attribute" muss zwischen :min und :max Ziffern enthalten.',
        'dimensions' => 'Das Bild im Feld ":attribute" hat ungültige Abmessungen.',
        'distinct' => 'Das Feld ":attribute" enthält einen doppelten Wert.',
        'doesnt_end_with' => 'Das Feld ":attribute" darf nicht mit einem der folgenden Werte enden: :values.',
        'doesnt_start_with' => 'Das Feld ":attribute" darf nicht mit einem der folgenden Werte beginnen: :values.',
        'email' => 'Bitte geben Sie eine gültige E-Mail-Adresse im Feld ":attribute" ein.',
        'ends_with' => 'Das Feld ":attribute" muss mit einem der folgenden Werte enden: :values.',
        'enum' => 'Der ausgewählte Wert für ":attribute" ist ungültig.',
        'exists' => 'Der ausgewählte Wert für ":attribute" ist ungültig.',
        'extensions' => 'Das Feld ":attribute" muss eine Datei mit einer der folgenden Endungen haben: :values.',
        'file' => 'Das Feld ":attribute" muss eine Datei sein.',
        'filled' => 'Das Feld ":attribute" muss ausgefüllt werden.',
        'gt' => [
            'array' => 'Das Feld ":attribute" muss mehr als :value Elemente enthalten.',
            'file' => 'Die Datei im Feld ":attribute" muss größer als :value Kilobyte sein.',
            'numeric' => 'Der Wert im Feld ":attribute" muss größer als :value sein.',
            'string' => 'Der Text im Feld ":attribute" muss länger als :value Zeichen sein.',
        ],
        'gte' => [
            'array' => 'Das Feld ":attribute" muss mindestens :value Elemente enthalten.',
            'file' => 'Die Datei im Feld ":attribute" muss mindestens :value Kilobyte groß sein.',
            'numeric' => 'Der Wert im Feld ":attribute" muss mindestens :value betragen.',
            'string' => 'Der Text im Feld ":attribute" muss mindestens :value Zeichen lang sein.',
        ],
        'hex_color' => 'Bitte geben Sie eine gültige Hexadezimalfarbe im Feld ":attribute" ein.',
        'image' => 'Das Feld ":attribute" muss ein Bild sein.',
        'in' => 'Der ausgewählte Wert für ":attribute" ist ungültig.',
        'in_array' => 'Der Wert im Feld ":attribute" muss in :other enthalten sein.',
        'integer' => 'Das Feld ":attribute" muss eine ganze Zahl sein.',
        'ip' => 'Bitte geben Sie eine gültige IP-Adresse im Feld ":attribute" ein.',
        'ipv4' => 'Bitte geben Sie eine gültige IPv4-Adresse im Feld ":attribute" ein.',
        'ipv6' => 'Bitte geben Sie eine gültige IPv6-Adresse im Feld ":attribute" ein.',
        'json' => 'Das Feld ":attribute" muss ein gültiger JSON-String sein.',
        'list' => 'Das Feld ":attribute" muss eine Liste sein.',
        'lowercase' => 'Das Feld ":attribute" muss nur Kleinbuchstaben enthalten.',
        'lt' => [
            'array' => 'Das Feld ":attribute" darf weniger als :value Elemente enthalten.',
            'file' => 'Die Datei im Feld ":attribute" darf kleiner als :value Kilobyte sein.',
            'numeric' => 'Der Wert im Feld ":attribute" darf kleiner als :value sein.',
            'string' => 'Der Text im Feld ":attribute" darf kürzer als :value Zeichen sein.',
        ],
        'lte' => [
            'array' => 'Das Feld ":attribute" darf höchstens :value Elemente enthalten.',
            'file' => 'Die Datei im Feld ":attribute" darf höchstens :value Kilobyte groß sein.',
            'numeric' => 'Der Wert im Feld ":attribute" darf höchstens :value betragen.',
            'string' => 'Der Text im Feld ":attribute" darf höchstens :value Zeichen lang sein.',
        ],
        'mac_address' => 'Bitte geben Sie eine gültige MAC-Adresse im Feld ":attribute" ein.',
        'max' => [
            'array' => 'Das Feld ":attribute" darf höchstens :max Elemente enthalten.',
            'file' => 'Die Datei im Feld ":attribute" darf höchstens :max Kilobyte groß sein.',
            'numeric' => 'Der Wert im Feld ":attribute" darf höchstens :max betragen.',
            'string' => 'Der Text im Feld ":attribute" darf höchstens :max Zeichen lang sein.',
        ],
        'max_digits' => 'Das Feld ":attribute" darf höchstens :max Ziffern enthalten.',
        'mimes' => 'Das Feld ":attribute" muss eine Datei vom Typ :values sein.',
        'mimetypes' => 'Das Feld ":attribute" muss eine Datei vom Typ :values sein.',
        'min' => [
            'array' => 'Das Feld ":attribute" muss mindestens :min Elemente enthalten.',
            'file' => 'Die Datei im Feld ":attribute" muss mindestens :min Kilobyte groß sein.',
            'numeric' => 'Der Wert im Feld ":attribute" muss mindestens :min betragen.',
            'string' => 'Der Text im Feld ":attribute" muss mindestens :min Zeichen lang sein.',
        ],
        'min_digits' => 'Das Feld ":attribute" muss mindestens :min Ziffern enthalten.',
        'missing' => 'Das Feld ":attribute" darf nicht ausgefüllt werden.',
    'missing_if' => 'Das Feld ":attribute" darf nicht ausgefüllt sein, wenn :other den Wert :value hat.',
    'missing_unless' => 'Das Feld ":attribute" darf nur ausgefüllt sein, wenn :other nicht den Wert :value hat.',
    'missing_with' => 'Das Feld ":attribute" darf nicht ausgefüllt sein, wenn :values ausgefüllt ist.',
    'missing_with_all' => 'Das Feld ":attribute" darf nicht ausgefüllt sein, wenn alle Felder :values ausgefüllt sind.',
    'multiple_of' => 'Der Wert im Feld ":attribute" muss ein Vielfaches von :value sein.',
    'not_in' => 'Der ausgewählte Wert für ":attribute" ist ungültig.',
    'not_regex' => 'Das Format des Feldes ":attribute" ist ungültig.',
    'numeric' => 'Das Feld ":attribute" muss eine Zahl sein.',
    'password' => [
        'letters' => 'Das Passwort muss mindestens einen Buchstaben enthalten.',
        'mixed' => 'Das Passwort muss mindestens einen Groß- und einen Kleinbuchstaben enthalten.',
        'numbers' => 'Das Passwort muss mindestens eine Zahl enthalten.',
        'symbols' => 'Das Passwort muss mindestens ein Symbol enthalten.',
        'uncompromised' => 'Das eingegebene Passwort wurde in einem Datenleck gefunden. Bitte wählen Sie ein anderes Passwort.',
    ],
    'present' => 'Das Feld ":attribute" muss ausgefüllt sein.',
    'present_if' => 'Das Feld ":attribute" muss ausgefüllt sein, wenn :other den Wert :value hat.',
    'present_unless' => 'Das Feld ":attribute" muss ausgefüllt sein, es sei denn, :other hat den Wert :value.',
    'present_with' => 'Das Feld ":attribute" muss ausgefüllt sein, wenn :values ausgefüllt ist.',
    'present_with_all' => 'Das Feld ":attribute" muss ausgefüllt sein, wenn alle Felder :values ausgefüllt sind.',
    'prohibited' => 'Das Feld ":attribute" ist nicht erlaubt.',
    'prohibited_if' => 'Das Feld ":attribute" ist nicht erlaubt, wenn :other den Wert :value hat.',
    'prohibited_unless' => 'Das Feld ":attribute" ist nicht erlaubt, es sei denn, :other hat einen der Werte :values.',
    'prohibits' => 'Das Feld ":attribute" verhindert, dass :other ausgefüllt wird.',
    'regex' => 'Das Format des Feldes ":attribute" ist ungültig.',
    'required' => 'Das Feld ":attribute" ist erforderlich.',
    'required_array_keys' => 'Das Feld ":attribute" muss Einträge ür folgende Werte enthalten: :values.',
    'required_if' => 'Das Feld ":attribute" ist erforderlich, wenn :other den Wert :value hat.',
    'required_if_accepted' => 'Das Feld ":attribute" ist erforderlich, wenn :other akzeptiert wurde.',
    'required_unless' => 'Das Feld ":attribute" ist erforderlich, es sei denn, :other hat einen der Werte :values.',
    'required_with' => 'Das Feld ":attribute" ist erforderlich, wenn :values ausgefüllt ist.',
    'required_with_all' => 'Das Feld ":attribute" ist erforderlich, wenn alle Felder :values ausgefüllt sind.',
    'required_without' => 'Das Feld ":attribute" ist erforderlich, wenn :values nicht ausgefüllt ist.',
    'required_without_all' => 'Das Feld ":attribute" ist erforderlich, wenn keines der Felder :values ausgefüllt ist.',
    'same' => 'Das Feld ":attribute" muss mit :other übereinstimmen.',
    'size' => [
        'array' => 'Das Feld ":attribute" muss :size Elemente enthalten.',
        'file' => 'Die Datei im Feld ":attribute" muss :size Kilobyte groß sein.',
        'numeric' => 'Der Wert im Feld ":attribute" muss :size betragen.',
        'string' => 'Der Text im Feld ":attribute" muss :size Zeichen lang sein.',
    ],
    'starts_with' => 'Das Feld ":attribute" muss mit einem der folgenden Werte beginnen: :values.',
    'string' => 'Das Feld ":attribute" muss ein Textfeld sein.',
    'timezone' => 'Bitte geben Sie eine gültige Zeitzone im Feld ":attribute" ein.',
    'unique' => 'Der Wert im Feld ":attribute" wurde bereits vergeben.',
    'uploaded' => 'Der Upload der Datei im Feld ":attribute" ist fehlgeschlagen.',
    'uppercase' => 'Das Feld ":attribute" muss nur Großbuchstaben enthalten.',
    'url' => 'Bitte geben Sie eine gültige URL im Feld ":attribute" ein.',
    'ulid' => 'Das Feld ":attribute" muss eine gültige ULID sein.',
    'uuid' => 'Das Feld ":attribute" muss eine gültige UUID sein.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
