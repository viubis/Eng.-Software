<?php

namespace mine_apple\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class envioEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $dados;

    /**
     * Create a new message instance.
     *
     * @param $dados
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contato.mineapple@gmail.com', $this->dados->nome)
            ->subject('Novo email de cliente')
            ->replyTo($this->dados->email, $this->dados->nome)
            ->view('escopoEmail');
    }
}
