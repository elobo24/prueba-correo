<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class envioEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'envio:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envío de correo por horas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $data = array(
            'name' => 'prueba el correo',
        );

        Mail::send('email.envio', $data, function ($message) {
            $message->from('jlobo24081988@gmail.com', 'Ender Lobo');
            $message->to('jlobo24081988@gmail.com', 'Ender Lobo');
            $message->subject('Prueba Ender');
        });

        return "Tú email ha sido enviado";

    }
}
