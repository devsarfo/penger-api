<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            [
                'name' => 'Afghan Afghani',
                'code' => 'AFN',
                'symbol' => '؋',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Albanian Lek',
                'code' => 'ALL',
                'symbol' => 'Lek',
                'symbol_position' => 'after',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Algerian Dinar',
                'code' => 'DZD',
                'symbol' => 'د.ج',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Andorran Franc',
                'code' => 'ADF',
                'symbol' => 'Fr',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Angolan Kwanza',
                'code' => 'AOA',
                'symbol' => 'Kz',
                'symbol_position' => 'after',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Antillean Guilder',
                'code' => 'ANG',
                'symbol' => 'ƒ',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Argentine Peso',
                'code' => 'ARS',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Armenian Dram',
                'code' => 'AMD',
                'symbol' => '֏',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Aruban Florin',
                'code' => 'AWG',
                'symbol' => 'ƒ',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Australian Dollar',
                'code' => 'AUD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Azerbaijani Manat',
                'code' => 'AZN',
                'symbol' => '₼',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Bahamas Dollar',
                'code' => 'BSD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Bahraini Dinar',
                'code' => 'BHD',
                'symbol' => 'د.ب',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 3,
                'active' => 1
            ],
            [
                'name' => 'Bangladeshi Taka',
                'code' => 'BDT',
                'symbol' => '৳',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Barbadian Dollar',
                'code' => 'BBD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Belarusian Ruble',
                'code' => 'BYN',
                'symbol' => 'Br',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Belgian Franc',
                'code' => 'BEF',
                'symbol' => 'Fr',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Belize Dollar',
                'code' => 'BZD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Bermudian Dollar',
                'code' => 'BMD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Bhutanese Ngultrum',
                'code' => 'BTN',
                'symbol' => 'Nu.',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Bolivian Boliviano',
                'code' => 'BOB',
                'symbol' => 'Bs',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Bosnia and Herzegovina Convertible Mark',
                'code' => 'BAM',
                'symbol' => 'KM',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Botswana Pula',
                'code' => 'BWP',
                'symbol' => 'P',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Brazilian Real',
                'code' => 'BRL',
                'symbol' => 'R$',
                'symbol_position' => 'before',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Brunei Dollar',
                'code' => 'BND',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Bulgarian Lev',
                'code' => 'BGN',
                'symbol' => 'лв',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Burundian Franc',
                'code' => 'BIF',
                'symbol' => 'Fr',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Cabo Verdean Escudo',
                'code' => 'CVE',
                'symbol' => 'Esc',
                'symbol_position' => 'after',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Cambodian Riel',
                'code' => 'KHR',
                'symbol' => '៛',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Canadian Dollar',
                'code' => 'CAD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Central African CFA Franc',
                'code' => 'XAF',
                'symbol' => 'Fr',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Chadian Franc',
                'code' => 'XAF',
                'symbol' => 'Fr',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Chinese Yuan',
                'code' => 'CNY',
                'symbol' => '¥',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Colombian Peso',
                'code' => 'COP',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Comorian Franc',
                'code' => 'KMF',
                'symbol' => 'Fr',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Congolese Franc',
                'code' => 'CDF',
                'symbol' => 'Fr',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Costa Rican Colón',
                'code' => 'CRC',
                'symbol' => '₡',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Croatian Kuna',
                'code' => 'HRK',
                'symbol' => 'kn',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Cuban Peso',
                'code' => 'CUP',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Cuban Convertible Peso',
                'code' => 'CUC',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Cypriot Pound',
                'code' => 'CYP',
                'symbol' => '£',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Czech Koruna',
                'code' => 'CZK',
                'symbol' => 'Kč',
                'symbol_position' => 'after',
                'thousand_separator' => ' ',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Danish Krone',
                'code' => 'DKK',
                'symbol' => 'kr',
                'symbol_position' => 'after',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Djiboutian Franc',
                'code' => 'DJF',
                'symbol' => 'Fr',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Dominican Peso',
                'code' => 'DOP',
                'symbol' => 'RD$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'East Caribbean Dollar',
                'code' => 'XCD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Egyptian Pound',
                'code' => 'EGP',
                'symbol' => '£',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Equatorial Guinean Franco',
                'code' => 'XAF',
                'symbol' => 'Fr',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Eritrean Nakfa',
                'code' => 'ERN',
                'symbol' => 'Nfk',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Estonian Kroon',
                'code' => 'EEK',
                'symbol' => 'kr',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Ethiopian Birr',
                'code' => 'ETB',
                'symbol' => 'ብር',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Euro',
                'code' => 'EUR',
                'symbol' => '€',
                'symbol_position' => 'before',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Fijian Dollar',
                'code' => 'FJD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Gambian Dalasi',
                'code' => 'GMD',
                'symbol' => 'D',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Georgian Lari',
                'code' => 'GEL',
                'symbol' => 'ლ',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Ghanaian Cedi',
                'code' => 'GHS',
                'symbol' => '₵',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Gibraltar Pound',
                'code' => 'GIP',
                'symbol' => '£',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Guatemalan Quetzal',
                'code' => 'GTQ',
                'symbol' => 'Q',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Guinean Franc',
                'code' => 'GNF',
                'symbol' => 'Fr',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Guyanese Dollar',
                'code' => 'GYD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Haitian Gourde',
                'code' => 'HTG',
                'symbol' => 'G',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Honduran Lempira',
                'code' => 'HNL',
                'symbol' => 'L',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Hungarian Forint',
                'code' => 'HUF',
                'symbol' => 'Ft',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Icelandic Króna',
                'code' => 'ISK',
                'symbol' => 'kr',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Indian Rupee',
                'code' => 'INR',
                'symbol' => '₹',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Indonesian Rupiah',
                'code' => 'IDR',
                'symbol' => 'Rp',
                'symbol_position' => 'before',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Iranian Rial',
                'code' => 'IRR',
                'symbol' => 'ریال',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Iraqi Dinar',
                'code' => 'IQD',
                'symbol' => 'د.ع',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 3,
                'active' => 1
            ],
            [
                'name' => 'Irish Pound',
                'code' => 'IEP',
                'symbol' => '£',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Israeli New Shekel',
                'code' => 'ILS',
                'symbol' => '₪',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Italian Lira',
                'code' => 'ITL',
                'symbol' => '₯',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Jamaican Dollar',
                'code' => 'JMD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Japanese Yen',
                'code' => 'JPY',
                'symbol' => '¥',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Jordanian Dinar',
                'code' => 'JOD',
                'symbol' => 'د.ا',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 3,
                'active' => 1
            ],
            [
                'name' => 'Kazakhstani Tenge',
                'code' => 'KZT',
                'symbol' => '₸',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Kenyan Shilling',
                'code' => 'KES',
                'symbol' => 'KSh',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Kuwaiti Dinar',
                'code' => 'KWD',
                'symbol' => 'د.ك',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 3,
                'active' => 1
            ],
            [
                'name' => 'Kyrgyzstani Som',
                'code' => 'KGS',
                'symbol' => 'с',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Lao Kip',
                'code' => 'LAK',
                'symbol' => '₭',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Latvian Lats',
                'code' => 'LVL',
                'symbol' => 'Ls',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Lebanese Pound',
                'code' => 'LBP',
                'symbol' => 'ل.ل',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Liberian Dollar',
                'code' => 'LRD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Libyan Dinar',
                'code' => 'LYD',
                'symbol' => 'د.ل',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 3,
                'active' => 1
            ],
            [
                'name' => 'Malagasy Ariary',
                'code' => 'MGA',
                'symbol' => 'Ar',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Malawian Kwacha',
                'code' => 'MWK',
                'symbol' => 'MK',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Malaysian Ringgit',
                'code' => 'MYR',
                'symbol' => 'RM',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Maltese Lira',
                'code' => 'MTL',
                'symbol' => 'Lm',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Mauritanian Ouguiya',
                'code' => 'MRU',
                'symbol' => 'UM',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Mauritian Rupee',
                'code' => 'MUR',
                'symbol' => '₨',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Mexican Peso',
                'code' => 'MXN',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Moldovan Leu',
                'code' => 'MDL',
                'symbol' => 'lei',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Mongolian Tugrik',
                'code' => 'MNT',
                'symbol' => '₮',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Moroccan Dirham',
                'code' => 'MAD',
                'symbol' => 'د.م.',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Mozambican Metical',
                'code' => 'MZN',
                'symbol' => 'MT',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Myanmar Kyat',
                'code' => 'MMK',
                'symbol' => 'K',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Namibian Dollar',
                'code' => 'NAD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Nepalese Rupee',
                'code' => 'NPR',
                'symbol' => 'Rs',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Netherlands Antillean Guilder',
                'code' => 'ANG',
                'symbol' => 'ƒ',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'New Zealand Dollar',
                'code' => 'NZD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Nigerian Naira',
                'code' => 'NGN',
                'symbol' => '₦',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'North Korean Won',
                'code' => 'KPW',
                'symbol' => '₩',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Norwegian Krone',
                'code' => 'NOK',
                'symbol' => 'kr',
                'symbol_position' => 'after',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Omani Rial',
                'code' => 'OMR',
                'symbol' => 'ر.ع.',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 3,
                'active' => 1
            ],
            [
                'name' => 'Pakistani Rupee',
                'code' => 'PKR',
                'symbol' => '₨',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Papua New Guinean Kina',
                'code' => 'PGK',
                'symbol' => 'K',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Paraguayan Guaraní',
                'code' => 'PYG',
                'symbol' => '₲',
                'symbol_position' => 'before',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Peruvian Nuevo Sol',
                'code' => 'PEN',
                'symbol' => 'S/',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Philippine Peso',
                'code' => 'PHP',
                'symbol' => '₱',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Polish Zloty',
                'code' => 'PLN',
                'symbol' => 'zł',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Qatari Rial',
                'code' => 'QAR',
                'symbol' => 'ر.ق',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Romanian Leu',
                'code' => 'RON',
                'symbol' => 'lei',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Russian Ruble',
                'code' => 'RUB',
                'symbol' => '₽',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Rwandan Franc',
                'code' => 'RWF',
                'symbol' => 'Fr',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Saint Helena Pound',
                'code' => 'SHP',
                'symbol' => '£',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Samoan Tala',
                'code' => 'WST',
                'symbol' => 'WS$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Sao Tome and Principe Dobra',
                'code' => 'STN',
                'symbol' => 'Db',
                'symbol_position' => 'after',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Saudi Riyal',
                'code' => 'SAR',
                'symbol' => 'ر.س',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Serbian Dinar',
                'code' => 'RSD',
                'symbol' => 'дин.',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Seychellois Rupee',
                'code' => 'SCR',
                'symbol' => '₨',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Sierra Leonean Leone',
                'code' => 'SLL',
                'symbol' => 'Le',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Singapore Dollar',
                'code' => 'SGD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Slovak Koruna',
                'code' => 'SKK',
                'symbol' => 'Sk',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Slovenian Tolar',
                'code' => 'SIT',
                'symbol' => 'Sit',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Solomon Islands Dollar',
                'code' => 'SBD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Somali Shilling',
                'code' => 'SOS',
                'symbol' => 'Sh',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'South African Rand',
                'code' => 'ZAR',
                'symbol' => 'R',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'South Korean Won',
                'code' => 'KRW',
                'symbol' => '₩',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Sri Lankan Rupee',
                'code' => 'LKR',
                'symbol' => 'Rs',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Sudanese Pound',
                'code' => 'SDG',
                'symbol' => 'ج.س',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Surinamese Dollar',
                'code' => 'SRD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Swedish Krona',
                'code' => 'SEK',
                'symbol' => 'kr',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Swiss Franc',
                'code' => 'CHF',
                'symbol' => 'CHF',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Syrian Pound',
                'code' => 'SYP',
                'symbol' => 'ل.س',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Tajikistani Somoni',
                'code' => 'TJS',
                'symbol' => 'SM',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Tanzanian Shilling',
                'code' => 'TZS',
                'symbol' => 'TSh',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Thai Baht',
                'code' => 'THB',
                'symbol' => '฿',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Tongan Paʻanga',
                'code' => 'TOP',
                'symbol' => 'T$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Trinidad and Tobago Dollar',
                'code' => 'TTD',
                'symbol' => 'TT$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Tunisian Dinar',
                'code' => 'TND',
                'symbol' => 'د.ت',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 3,
                'active' => 1
            ],
            [
                'name' => 'Turkish Lira',
                'code' => 'TRY',
                'symbol' => '₺',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Turkmenistani Manat',
                'code' => 'TMT',
                'symbol' => 'm',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Ugandan Shilling',
                'code' => 'UGX',
                'symbol' => 'USh',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Ukrainian Hryvnia',
                'code' => 'UAH',
                'symbol' => '₴',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'United Arab Emirates Dirham',
                'code' => 'AED',
                'symbol' => 'د.إ',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'United States Dollar',
                'code' => 'USD',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Uruguayan Peso',
                'code' => 'UYU',
                'symbol' => '$',
                'symbol_position' => 'before',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Uzbekistani Som',
                'code' => 'UZS',
                'symbol' => 'лв',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Vanuatu Vatu',
                'code' => 'VUV',
                'symbol' => 'Vt',
                'symbol_position' => 'after',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Venezuelan Bolívar',
                'code' => 'VES',
                'symbol' => 'Bs.S',
                'symbol_position' => 'before',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Vietnamese Dong',
                'code' => 'VND',
                'symbol' => '₫',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 0,
                'active' => 1
            ],
            [
                'name' => 'Yemeni Rial',
                'code' => 'YER',
                'symbol' => 'ر.ي',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Zambian Kwacha',
                'code' => 'ZMK',
                'symbol' => 'ZK',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Zambian Kwacha',
                'code' => 'ZMW',
                'symbol' => 'ZK',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
            [
                'name' => 'Zimbabwean Dollar',
                'code' => 'ZWL',
                'symbol' => 'Z$',
                'symbol_position' => 'before',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'decimal_places' => 2,
                'active' => 1
            ],
        ];


        collect($currencies)->each(function ($currency) {
            Currency::firstOrCreate(
                [
                    'code' => $currency['code']
                ],
                $currency
            );
        });
    }
}
