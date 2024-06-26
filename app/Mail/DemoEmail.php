<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;

    /** variables para recibir el tema y el mensaje */
    public $asunto;
    public $mensaje;
    
    /** variables para recibir el tema y el mensaje */

    public function __construct($asunto, $mensaje)
    {
        /** Setear mensaje y asunto en las variables de instancia */
        $this->asunto = $asunto;
        $this->mensaje = $mensaje;
        
        /** Setear mensaje y asunto en las variables de instancia */
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Demo Email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'correo_prueba',
            with: [
                'asunto'=> $this->asunto,
                'mensaje'=> $this->mensaje
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
