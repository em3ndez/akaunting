<?php

return [

    'company' => [
        'description'       => 'Változtassa meg a cég nevét, e-mail címét, címét, adószámát stb',
        'name'              => 'Név',
        'email'             => 'Email',
        'phone'             => 'Telefon',
        'address'           => 'Cím',
        'logo'              => 'Logó',
    ],

    'localisation' => [
        'description'       => '
Állítsa be a pénzügyi évet, az időzónát, a dátumformátumot és további helyieket',
        'financial_start'   => '
Pénzügyi év kezdete',
        'timezone'          => 'Időzóna',
        'date' => [
            'format'        => 'Dátumformátum',
            'separator'     => 'Dátum elválasztó',
            'dash'          => 'Kötőjel (-)',
            'dot'           => 'Pont (.)',
            'comma'         => 'Vessző (,)',
            'slash'         => 'Perjel (/)',
            'space'         => 'Szóköz ( )',
        ],
        'percent' => [
            'title'         => 'Százalék (%) pozíció',
            'before'        => 'Szám előtt',
            'after'         => 'Szám után',
        ],
        'discount_location' => [
            'name'          => '
Kedvezményes hely',
            'item'          => '
Sorban',
            'total'         => '
Összesen',
            'both'          => '
Vonal és teljes',
        ],
    ],

    'invoice' => [
        'description'       => 'A számla előtagjának, számának, kifejezéseinek, láblécének stb. Testreszabása',
        'prefix'            => 'Szám előtagja',
        'digit'             => 'Számjegy',
        'next'              => 'Következő szám',
        'logo'              => 'Logó',
        'custom'            => 'Egyéni',
        'item_name'         => 'Cikk neve',
        'item'              => 'Cikkek',
        'product'           => 'Termékek',
        'service'           => 'Szolgáltatások',
        'price_name'        => 'Ár név',
        'price'             => 'Ár',
        'rate'              => 'Mérték/kulcs',
        'quantity_name'     => 'Mennyiség neve',
        'quantity'          => 'Mennyiség',
        'payment_terms'     => 'Fizetési feltételek',
        'title'             => 'Cím',
        'subheading'        => '
Alcím',
        'due_receipt'       => '
Átvételkor esedékes',
        'due_days'          => '
Esedékesség: napokon belül',
        'choose_template'   => 'Válasszon másik sablont',
        'default'           => 'Alapértelmezett',
        'classic'           => 'Klasszikus',
        'modern'            => 'Modern',
    ],

    'default' => [
        'description'       => '
A vállalat alapértelmezett számlája, pénzneme, nyelve',
        'list_limit'        => 'Bejegyzések oldalanként',
        'use_gravatar'      => 'Gravatar használata',
    ],

    'email' => [
        'description'       => '
Módosítsa a küldési protokollt és az e-mail sablonokat',
        'protocol'          => 'Protokoll',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP kiszolgáló',
            'port'          => 'SMTP Port',
            'username'      => 'SMTP felhasználónév',
            'password'      => 'SMTP jelszó',
            'encryption'    => 'SMTP-biztonság',
            'none'          => 'Egyik sem',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail elérési útja',
        'log'               => 'Log emailek',

        'templates' => [
            'subject'                   => 'Tárgy',
            'body'                      => 'Törzs',
            'tags'                      => '
<strong> Elérhető címkék: </strong>: tag_list',
            'invoice_new_customer'      => '
Új számlasablon (elküldve az ügyfélnek)',
            'invoice_remind_customer'   => '
Új számlasablon (elküldve az ügyfélnek)',
            'invoice_remind_admin'      => '
Új számlasablon (elküldve az ügyfélnek)',
            'invoice_recur_customer'    => '
Új számlasablon (elküldve az ügyfélnek)',
            'invoice_recur_admin'       => '
Új számlasablon (elküldve az ügyfélnek)',
            'invoice_payment_customer'  => '
Új számlasablon (elküldve az ügyfélnek)',
            'invoice_payment_admin'     => '
Új számlasablon (elküldve az adminnak)',
            'bill_remind_admin'         => '
Új számlasablon (elküldve az adminnak)',
            'bill_recur_admin'          => '
Új számlasablon (elküldve az adminnak)',
        ],
    ],

    'scheduling' => [
        'name'              => 'Ütemzés',
        'description'       => '
Automatikus emlékeztetők és parancsok az ismétlődéshez',
        'send_invoice'      => 'Számla emlékeztető küldése',
        'invoice_days'      => 'Küldés határidő után (x nappal)',
        'send_bill'         => 'Költségszámla emlékeztető küldése',
        'bill_days'         => 'Küldés határidő előtt (x nappal)',
        'cron_command'      => 'Időzített (cron) parancs',
        'schedule_time'     => 'Óra futtatáshoz',
    ],

    'categories' => [
        'description'       => '
Korlátlan kategóriák a jövedelemre, ráfordításra és tételre',
    ],

    'currencies' => [
        'description'       => 'Készítsen és kezeljen valutákat, és állítsa be azok árfolyamát',
    ],

    'taxes' => [
        'description'       => '
Rögzített, normál, befogadó és összetett adókulcsok',
    ],

];
