<?php
return array(
    // set your paypal credential
    'client_id' => 'AfMu6i5EBvGYjVCJ1ZXm6hbIZQ0LezkEywExog7Yudqoi9D18-HdjSPvqbGaMIHohx2wwtQO6ruZB52y',
    'secret' => 'EFO-zTdYDtmOiRvJ5V5CLvls5c60xhKRfq11TJ00Pck_XAl8zazmBBo1lscwecDd7Eo-7UwhamSEi33X',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);