<?php

declare(strict_types=1);

return [
    'accepted'               => ':Attribute måste accepteras.',
    'accepted_if'            => ':Attribute måste accepteras när :other är :value.',
    'active_url'             => ':Attribute är inte en giltig webbadress.',
    'after'                  => ':Attribute måste vara ett datum efter :date.',
    'after_or_equal'         => ':Attribute måste vara ett datum senare eller samma dag som :date.',
    'alpha'                  => ':Attribute får endast innehålla bokstäver.',
    'alpha_dash'             => ':Attribute får endast innehålla bokstäver, siffror och bindestreck.',
    'alpha_num'              => ':Attribute får endast innehålla bokstäver och siffror.',
    'any_of'                 => 'Det :attribute fältet är ogiltigt.',
    'array'                  => ':Attribute måste vara en array.',
    'ascii'                  => ':Attribute:an får bara innehålla enbyte alfanumeriska tecken och symboler.',
    'before'                 => ':Attribute måste vara ett datum innan :date.',
    'before_or_equal'        => ':Attribute måste vara ett datum före eller samma dag som :date.',
    'between'                => [
        'array'   => ':Attribute måste innehålla mellan :min - :max objekt.',
        'file'    => ':Attribute måste vara mellan :min till :max kilobyte stor.',
        'numeric' => ':Attribute måste vara en siffra mellan :min och :max.',
        'string'  => ':Attribute måste innehålla :min till :max tecken.',
    ],
    'boolean'                => ':Attribute måste vara sant eller falskt.',
    'can'                    => 'Fältet :attribute innehåller ett obehörigt värde.',
    'confirmed'              => ':Attribute bekräftelsen matchar inte.',
    'contains'               => 'Fältet :attribute saknar ett obligatoriskt värde.',
    'current_password'       => 'Lösenordet är felaktigt.',
    'date'                   => ':Attribute är inte ett giltigt datum.',
    'date_equals'            => ':Attribute måste vara ett datum lika med :date.',
    'date_format'            => ':Attribute matchar inte formatet :format.',
    'decimal'                => 'De :attribute måste ha :decimal decimaler.',
    'declined'               => ':Attribute måste vara avaktiverat.',
    'declined_if'            => ':Attribute måste vara avaktiverat när :other är :value.',
    'different'              => ':Attribute och :other får inte vara lika.',
    'digits'                 => ':Attribute måste vara :digits tecken.',
    'digits_between'         => ':Attribute måste vara mellan :min och :max tecken.',
    'dimensions'             => ':Attribute har felaktiga bilddimensioner.',
    'distinct'               => ':Attribute innehåller fler än en repetition av samma element.',
    'doesnt_end_with'        => ':Attribute får inte sluta med det följande värden: :values.',
    'doesnt_start_with'      => ':Attribute får inte börja med följande värden: :values.',
    'email'                  => ':Attribute måste innehålla en korrekt e-postadress.',
    'ends_with'              => ':Attribute måste sluta med en av följande: :values.',
    'enum'                   => ':Attribute är ogiltigt.',
    'exists'                 => ':Attribute existerar ej i databasen och är därför ogiltigt.',
    'extensions'             => 'Fältet :attribute måste ha en av följande tillägg: :values.',
    'file'                   => ':Attribute måste vara en fil.',
    'filled'                 => ':Attribute är obligatoriskt.',
    'gt'                     => [
        'array'   => ':Attribute måste innehålla fler än :value objekt.',
        'file'    => ':Attribute måste vara större än :value kilobyte stor.',
        'numeric' => ':Attribute måste vara större än :value.',
        'string'  => ':Attribute måste vara längre än :value tecken.',
    ],
    'gte'                    => [
        'array'   => ':Attribute måste innehålla lika många eller fler än :value objekt.',
        'file'    => ':Attribute måste vara lika med eller större än :value kilobyte stor.',
        'numeric' => ':Attribute måste vara lika med eller större än :value.',
        'string'  => ':Attribute måste vara lika med eller längre än :value tecken.',
    ],
    'hex_color'              => 'Fältet :attribute måste vara en giltig hexadecimal färg.',
    'image'                  => ':Attribute måste vara en bild.',
    'in'                     => ':Attribute är ogiltigt.',
    'in_array'               => ':Attribute finns inte i :other.',
    'in_array_keys'          => 'Det tio fältet måste innehålla minst en av följande nycklar: :values.',
    'integer'                => ':Attribute måste vara en siffra.',
    'ip'                     => ':Attribute måste vara en giltig IP-adress.',
    'ipv4'                   => ':Attribute måste vara en giltig IPv4-adress.',
    'ipv6'                   => ':Attribute måste vara en giltig IPv6-adress.',
    'json'                   => ':Attribute måste vara en giltig JSON-sträng.',
    'list'                   => 'Fältet :attribute måste vara en lista.',
    'lowercase'              => ':Attribute måste vara i små bokstäver.',
    'lt'                     => [
        'array'   => ':Attribute måste innehålla färre än :value objekt.',
        'file'    => ':Attribute måste vara mindre än :value kilobyte stor.',
        'numeric' => ':Attribute måste vara mindre än :value.',
        'string'  => ':Attribute måste vara kortare än :value tecken.',
    ],
    'lte'                    => [
        'array'   => ':Attribute måste innehålla lika många eller färre än :value objekt.',
        'file'    => ':Attribute måste vara lika med eller mindre än :value kilobyte stor.',
        'numeric' => ':Attribute måste vara lika med eller mindre än :value.',
        'string'  => ':Attribute måste vara lika med eller kortare än :value tecken.',
    ],
    'mac_address'            => ':Attribute måste vara en giltig MAC adress.',
    'max'                    => [
        'array'   => ':Attribute får inte innehålla mer än :max objekt.',
        'file'    => ':Attribute får max vara :max kilobyte stor.',
        'numeric' => ':Attribute får inte vara större än :max.',
        'string'  => ':Attribute får max innehålla :max tecken.',
    ],
    'max_digits'             => ':Attribute får inte innehålla mer än :max siffror.',
    'mimes'                  => ':Attribute måste vara en fil av typen: :values.',
    'mimetypes'              => ':Attribute måste vara en fil av typen: :values.',
    'min'                    => [
        'array'   => ':Attribute måste innehålla minst :min objekt.',
        'file'    => ':Attribute måste vara minst :min kilobyte stor.',
        'numeric' => ':Attribute måste vara större än :min.',
        'string'  => ':Attribute måste innehålla minst :min tecken.',
    ],
    'min_digits'             => ':Attribute måste innehålla ett minimum av :min siffror.',
    'missing'                => ':Attribute-fältet måste saknas.',
    'missing_if'             => ':Attribute-fältet måste saknas när :other är :value.',
    'missing_unless'         => ':Attribute-fältet måste saknas om inte :other är :value.',
    'missing_with'           => ':Attribute-fältet måste saknas när :values finns.',
    'missing_with_all'       => ':Attribute-fältet måste saknas när :values finns.',
    'multiple_of'            => ':Attribute måste vara en multipel av :value',
    'not_in'                 => ':Attribute är ogiltigt.',
    'not_regex'              => 'Formatet för :attribute är ogiltigt.',
    'numeric'                => ':Attribute måste vara en siffra.',
    'password'               => [
        'letters'       => ':Attribute måste innehålla minst en bokstav.',
        'mixed'         => ':Attribute måste innehålla minst en lite och en stor bokstav.',
        'numbers'       => ':Attribute måste innehålla minst en siffra.',
        'symbols'       => ':Attribute måste innehålla minst en symbol.',
        'uncompromised' => 'Det angivna :attribute återfinns i läkta källor på internet. Byt :attribute så fort som möjligt.',
    ],
    'present'                => ':Attribute måste finnas med.',
    'present_if'             => 'Fältet :attribute måste finnas när :other är :value.',
    'present_unless'         => 'Fältet :attribute måste finnas om inte :other är :value.',
    'present_with'           => 'Fältet :attribute måste finnas när :values är närvarande.',
    'present_with_all'       => 'Fältet :attribute måste finnas när :values är närvarande.',
    'prohibited'             => 'Fältet :attribute är förbjudet.',
    'prohibited_if'          => ':Attribute är förbjudet när :other är :value.',
    'prohibited_if_accepted' => 'Det :attribute fältet är förbjudet när :other accepteras.',
    'prohibited_if_declined' => 'Det :attribute fältet är förbjudet när :other avvisas.',
    'prohibited_unless'      => ':Attribute är förbjudet om inte :other är :values.',
    'prohibits'              => ':Attribute fältet förhindrar :other att ha ett värde.',
    'regex'                  => ':Attribute har ogiltigt format.',
    'required'               => ':Attribute är obligatoriskt.',
    'required_array_keys'    => ':Attribute måste innehålla listnamn för :values.',
    'required_if'            => ':Attribute är obligatoriskt när :other är :value.',
    'required_if_accepted'   => 'Fältet :attribute är ett krav när fält :other är accepterat.',
    'required_if_declined'   => ':attribute-fältet krävs när :other avvisas.',
    'required_unless'        => ':Attribute är obligatoriskt när inte :other finns bland :values.',
    'required_with'          => ':Attribute är obligatoriskt när :values är ifyllt.',
    'required_with_all'      => ':Attribute är obligatoriskt när :values är ifyllt.',
    'required_without'       => ':Attribute är obligatoriskt när :values ej är ifyllt.',
    'required_without_all'   => ':Attribute är obligatoriskt när ingen av :values är ifyllt.',
    'same'                   => ':Attribute och :other måste vara lika.',
    'size'                   => [
        'array'   => ':Attribute måste innehålla :size objekt.',
        'file'    => ':Attribute får endast vara :size kilobyte stor.',
        'numeric' => ':Attribute måste vara :size.',
        'string'  => ':Attribute måste innehålla :size tecken.',
    ],
    'starts_with'            => ':Attribute måste börja med en av följande: :values',
    'string'                 => ':Attribute måste vara en sträng.',
    'timezone'               => ':Attribute måste vara en giltig tidszon.',
    'ulid'                   => ':Attribute:an måste vara ett giltigt ULID.',
    'unique'                 => ':Attribute används redan.',
    'uploaded'               => ':Attribute kunde inte laddas upp.',
    'uppercase'              => ':Attribute måste vara versaler.',
    'url'                    => ':Attribute har ett ogiltigt format.',
    'uuid'                   => ':Attribute måste vara ett giltigt UUID.',
    'attributes'             => [
        'address'                  => 'adress',
        'affiliate_url'            => 'affiliate URL',
        'age'                      => 'ålder',
        'amount'                   => 'belopp',
        'announcement'             => 'meddelande',
        'area'                     => 'område',
        'audience_prize'           => 'publikpris',
        'audience_winner'          => 'audience winner',
        'available'                => 'tillgängliga',
        'birthday'                 => 'födelsedag',
        'body'                     => 'kropp',
        'city'                     => 'stad',
        'company'                  => 'company',
        'compilation'              => 'kompilering',
        'concept'                  => 'begrepp',
        'conditions'               => 'betingelser',
        'content'                  => 'innehåll',
        'contest'                  => 'contest',
        'country'                  => 'Land',
        'cover'                    => 'omslag',
        'created_at'               => 'skapad vid',
        'creator'                  => 'skapare',
        'currency'                 => 'valuta',
        'current_password'         => 'nuvarande lösenord',
        'customer'                 => 'kund',
        'date'                     => 'datum',
        'date_of_birth'            => 'födelsedatum',
        'dates'                    => 'datum',
        'day'                      => 'dag',
        'deleted_at'               => 'raderas kl',
        'description'              => 'beskrivning',
        'display_type'             => 'Bildskärmstyp',
        'district'                 => 'distrikt',
        'duration'                 => 'varaktighet',
        'email'                    => 'e-post',
        'excerpt'                  => 'utdrag',
        'filter'                   => 'filtrera',
        'finished_at'              => 'slutade kl',
        'first_name'               => 'förnamn',
        'gender'                   => 'kön',
        'grand_prize'              => 'stora priset',
        'group'                    => 'grupp',
        'hour'                     => 'timme',
        'image'                    => 'bild',
        'image_desktop'            => 'skrivbordsbild',
        'image_main'               => 'huvudbild',
        'image_mobile'             => 'mobilbild',
        'images'                   => 'bilder',
        'is_audience_winner'       => 'är publikvinnare',
        'is_hidden'                => 'är gömd',
        'is_subscribed'            => 'är prenumererad',
        'is_visible'               => 'är synlig',
        'is_winner'                => 'är vinnare',
        'items'                    => 'föremål',
        'key'                      => 'nyckel',
        'last_name'                => 'efternamn',
        'lesson'                   => 'lektion',
        'line_address_1'           => 'linjeadress 1',
        'line_address_2'           => 'linjeadress 2',
        'login'                    => 'logga in',
        'message'                  => 'meddelande',
        'middle_name'              => 'mellannamn',
        'minute'                   => 'minut',
        'mobile'                   => 'mobil',
        'month'                    => 'månad',
        'name'                     => 'namn',
        'national_code'            => 'nationell kod',
        'number'                   => 'siffra',
        'password'                 => 'Lösenord',
        'password_confirmation'    => 'lösenordsbekräftelse',
        'phone'                    => 'telefon',
        'photo'                    => 'Foto',
        'portfolio'                => 'portfölj',
        'postal_code'              => 'postnummer',
        'preview'                  => 'förhandsvisning',
        'price'                    => 'pris',
        'product_id'               => 'Serienummer',
        'product_uid'              => 'produktens UID',
        'product_uuid'             => 'produkt UUID',
        'promo_code'               => 'rabattkod',
        'province'                 => 'provins',
        'quantity'                 => 'kvantitet',
        'reason'                   => 'anledning',
        'recaptcha_response_field' => 'recaptcha-svarsfält',
        'referee'                  => 'domare',
        'referees'                 => 'domare',
        'reject_reason'            => 'avvisa skäl',
        'remember'                 => 'kom ihåg',
        'restored_at'              => 'återställd kl',
        'result_text_under_image'  => 'resultattext under bild',
        'role'                     => 'roll',
        'rule'                     => 'regel',
        'rules'                    => 'regler',
        'second'                   => 'andra',
        'sex'                      => 'sex',
        'shipment'                 => 'sändning',
        'short_text'               => 'kort text',
        'size'                     => 'storlek',
        'skills'                   => 'Kompetens',
        'slug'                     => 'snigel',
        'specialization'           => 'specialisering',
        'started_at'               => 'började kl',
        'state'                    => 'stat',
        'status'                   => 'status',
        'street'                   => 'gata',
        'student'                  => 'studerande',
        'subject'                  => 'ämne',
        'tag'                      => 'märka',
        'tags'                     => 'taggar',
        'teacher'                  => 'lärare',
        'terms'                    => 'villkor',
        'test_description'         => 'Testbeskrivning',
        'test_locale'              => 'testa lokalen',
        'test_name'                => 'testnamn',
        'text'                     => 'text',
        'time'                     => 'tid',
        'title'                    => 'titel',
        'type'                     => 'typ',
        'updated_at'               => 'uppdaterad kl',
        'user'                     => 'användare',
        'username'                 => 'Användarnamn',
        'value'                    => 'värde',
        'winner'                   => 'winner',
        'work'                     => 'work',
        'year'                     => 'år',
    ],
];
